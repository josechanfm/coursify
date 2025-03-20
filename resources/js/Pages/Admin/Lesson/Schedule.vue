<template>
<AdminLayout title="課程編排" :breadcrumb="breadcrumb">
    <div class="container mx-auto">
        <div class="m-5 mb-20">

            <!-- Lesson list -->
            <div class="w-full px-8 py-5 bg-white shadow-lg rounded-lg min-h-full border-t-2 border-amber-400">

                <div class="text-lg	text-slate-500 p-3" v-if="offer">
                    日期: {{ offer.offer_start }} ～ {{ offer.offer_end }} <br>
                    座位: {{ offer.seats }}
                </div>
                <table class="w-full my-4">
                    <th> 已編排 </th>
                    <th v-for="week in weekTable" class="py-2">
                        {{ week.label }}
                    </th>

                    <tr v-for="lesson in offer.lessons" class="text-center border-t-2 border-b-2">
                        <td>{{ lesson.date }} ( {{ lesson.room.name }} )</td>

                        <td v-for="week in weekTable" class=" py-2 ">
                            <template v-if=" displayDay(lesson.date ) == week.value ">

                                {{ displayTime(lesson.start) }} - {{ displayTime(lesson.end) }}
                            </template>
                        </td>
                    </tr>
                </table>
            </div>
            <!--  -->
            <!-- Choose time and day 選擇時間-->
            <div ref="SelectTime" 
                class="my-4 p-4 bg-white shadow-md rounded min-h-full border-t-2 border-amber-600 relative">
                <div class="font-semibold p-1 mb-3 text-lg border-b-2 border-slate-200">選擇時間</div>
                <table class="w-full px-4">
                    <tr>
                        <td v-for="week in weekTable" class="px-2">
                            <div class="flex flex-col gap-3">
                                <!-- <a-checkbox v-model:checked="week.selected" @change="onChangeWeek">{{ week.label
                                }}</a-checkbox> -->
                                <a-radio v-model:checked="week.selected" @change="changeWeekDay(week.value)">{{ week.label }}</a-radio>

                                <a-select v-model:value="week.room_type" :options="roomTypes" />

                                <a-time-picker v-model:value="week.start" popupClassName="my-time-picker-popup"
                                    format="HH:mm" value="HH:mm" :minuteStep="15"
                                    :disabledHours="() => [0, 1, 2, 3, 4, 5, 23]" :hideDisabledOptions="true" />
                                <a-time-picker v-model:value="week.end" popupClassName="my-time-picker-popup"
                                    format="HH:mm" value="HH:mm" :minuteStep="15"
                                    :disabledHours="() => [0, 1, 2, 3, 4, 5, 23]" :hideDisabledOptions="true" />
                            </div>
                        </td>
                    </tr>
                </table>
                <br>
                <button @click="getDays"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-2 ">列出所有日期</button>

                <!-- disabled mask -->
                <div v-if="disableScheduler" class="absolute inset-0 bg-gray-200 opacity-70"></div>
            </div>
            <!--  -->
            <!-- Choose room 選擇課室--> 
            <div ref="SelectRoom"
                class="mb-8 px-4 py-2 bg-white shadow-md rounded min-h-full border-t-2 border-amber-600 overflow-x-auto whitespace-nowrap relative">

                <div class="font-semibold p-1 mb-3 text-lg border-b-2 border-slate-200">選擇課室</div>
                <div v-if="Object.entries(availableRooms).length > 0">

                    <div class='items-start flex flex-nowrap gap-2 p-2'>
                        <div class="w-32 flex-none lg:w-48">日期時間</div>
                        <div class="w-24 text-center" v-for="room in availableRooms.rooms">
                            <button class="px-4 py-2 bg-slate-600 text-white rounded-lg shadow-lg"
                                @click="onSelectRoomColumn(room)" title='全選'>{{ room.code }}</button>
                        </div>
                    </div>
                    <div class='flex flex-nowrap gap-2 p-2' v-for="(d, key) in availableRooms.selectedDates">
                        <div class="w-32 flex-none lg:w-48"><u class="">{{ d.date }}</u> {{ d.start }} - {{ d.end }}</div>
                        
                        <div class="w-24 flex justify-center" v-for="room in availableRooms.rooms">
                            
                            <!-- d.rooms 是後台check的, 該d的時段可用的課室room list -->
                            <a-radio v-if="d.rooms.find( x => x.id == room.id)" class="flex pl-1" 
                                @change="onChangeLessons(key, d, room)" :value="room.id"
                                :checked="(lessons[key] !== undefined && lessons[key].room_id == room.id)"></a-radio>
                            <div class="flex" v-else>--</div>
                        </div>
                    </div>
                </div>
                <br>
                <button @click="saveLessons"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-2 ">確定增加課堂</button>

                <!-- disabled mask -->
                <div v-if="disableScheduler" class="absolute inset-0 bg-gray-200 opacity-70"></div>
            </div>
            <!--  -->
        </div>
    </div>
</AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {
    defineComponent,
    reactive
} from "vue";
import * as AntdIcons from '@ant-design/icons-vue';
import dayjs, { Dayjs } from 'dayjs';
import { gsap } from 'gsap';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';

gsap.registerPlugin(ScrollToPlugin);

export default {
    components: {
        AdminLayout,
        ...AntdIcons,
    },
    props: ["offer", "roomTypes"],
    data() {
        return {
            breadcrumb:[
                {label:"Area" ,url:route('admin.areas.index')},
                {label:"Course" ,url:route('admin.courses.index')},
                {label:"Offer" ,url:route('admin.offers.index')},
                {label:"Schedule" ,url:null},
            ],

            weekTable: [
                { 'value': '1', 'label': '星期一', 'selected': true, 'room_type': 'CLS', 'start': dayjs(), 'end': dayjs(), 'list': [] },
                { 'value': '2', 'label': '星期二', 'selected': false, 'room_type': 'CLS', 'start': '', 'end': '', 'list': [] },
                { 'value': '3', 'label': '星期三', 'selected': false, 'room_type': 'CLS', 'start': '', 'end': '', 'list': [] },
                { 'value': '4', 'label': '星期四', 'selected': false, 'room_type': 'CLS', 'start': '', 'end': '', 'list': [] },
                { 'value': '5', 'label': '星期五', 'selected': false, 'room_type': 'CLS', 'start': '', 'end': '', 'list': [] },
                { 'value': '6', 'label': '星期六', 'selected': false, 'room_type': 'CLS', 'start': '', 'end': '', 'list': [] },
                { 'value': '0', 'label': '星期日', 'selected': false, 'room_type': 'CLS', 'start': '', 'end': '', 'list': [] }
            ],
            selectedWeekList: [],
            
            disableScheduler: false,

            plannedDates: [],
            selectedDates: {},
            availableRooms: {},
            lessons: [],

        }
    },
    mounted(){

        if (this.offer == null) {
            this.disableScheduler = true
        } else if (this.offer.offer_end == null || this.offer.offer_start == null) {
            this.disableScheduler = true
        }
    },
    methods:{
        
        changeWeekDay(value) {
            // 假設 this.weekTable 是一個包含多個週的物件陣列
            this.weekTable.forEach(week => {
                // 檢查是否是我們找到的 week
                if (week.value === value) {
                    // 找到的 week，清空它的 list
                    week.list = [];
                } else {
                    // 其他的 week，將 selected 設為 false
                    week.selected = false;
                }
            });
        },
        
        getDays() {
            //find only selected dateOfWeeks, and get only the dow column 
            var selectedWeekDay = this.weekTable.find(day => day.selected == true);
            // 只做一個星期幾, 例如不能同時處理星期一或星期二

            var startDate = new Date(this.offer.offer_start + ' 00:00');
            var endDate = new Date(this.offer.offer_end + ' 23:59');
            this.selectedWeekList = [];

            //loop every date betwee start to end
            // loop 開始日期到結束日期
            // 將全部適用的日期放到對應的weekTable內 
            for (var d = startDate; d <= endDate; d.setDate(d.getDate() + 1)) {
                //filter if dow same as selected
                if ( selectedWeekDay.value == d.getDay() ) {
                    //push to plantDates list, the dow is prepare for mapping into display week table
                    this.selectedWeekList.push({
                        'date': this.displayDate(d),
                        'start': this.displayTime(selectedWeekDay.start),
                        'end': this.displayTime(selectedWeekDay.end),
                        'room_type': selectedWeekDay.room_type,
                    });
                }
            }

            this.checkAvailableRooms()
        },
        
        checkAvailableRooms() {
            axios.post(route('admin.lessons.availableRooms'), {
                'offer': this.offer,
                'dates': this.selectedWeekList
            }).then(res => {
                this.availableRooms = res.data

                gsap.to(window, {
                    duration: 1,
                    scrollTo: this.$refs.SelectRoom,
                    ease: 'power2.inOut',
                });
            })
        },
        
        onChangeLessons(key, d, room) {
            this.lessons[key] = { "date": d.date, "start": d.start, "end": d.end, "room_id": room.id, "dow": this.displayDay(d.date) }
        },
        
        onSelectRoomColumn(room) {
            this.availableRooms.selectedDates.forEach((d, key) => {
                
                if( d.rooms.find( x => x.id == room.id) ){
                    // 該room 是在 selectedDates中的可用room list 內
                    this.lessons[key] = { "date": d.date, "start": d.start, "end": d.end, "room_id": room.id, "dow": this.displayDay(d.date) }
                }
            })
        },

        saveLessons(){
            this.$inertia.post(route('admin.lessons.store'), 
                { offer_id: this.offer.id, lessons:this.lessons }, 
                {
                onSuccess: (page) => {
                    location.reload()
                },
                onError: (err) => {
                }
            });
        },

        displayDay(date) {
            return dayjs(date).day();
        },
        displayDate(date) {
            return dayjs(date).format('YYYY-MM-DD')
        },
        displayTime(time) {
            return dayjs(time, 'HH:mm:ss').format('HH:mm');
        },
    }
}
</script>
