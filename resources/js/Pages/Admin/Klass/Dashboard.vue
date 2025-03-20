<template>
<AdminLayout title="Offer Editor" :breadcrumb="breadcrumb">
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    
    <div class="container mx-auto">
        <div class="flex-1 pb-5">
            <!-- Small box with softer green color -->
            <div
                class="bg-white border-t-2 border-green-500 rounded-lg shadow-lg p-4">
                <div class="flex flex-col gap-2">
                    <div class="text-xl font-bold text-gray-800">{{ offer.code}} {{ offer.name_zh }}</div>
                    <div>課程時間: <u v-if="offer.offer_start">{{ offer.offer_start }} ~ {{ offer.offer_end }}</u></div>
                    <div>導師: <u>{{ offer.teachers.map(item => item.name_zh).join(', ') }}</u></div>
                </div>
            </div>
        </div>
        <div class="bg-white border-t-2 border-green-600 rounded-lg shadow-lg">
            <a-table :dataSource="offer.students" :columns="columns" >
                <template #bodyCell="{ column, text, record, index }">
                    <template v-if="column.dataIndex == 'current_attendance'">
                        {{ displayRate(record.current_attendance_rate) }}
                    </template>
                    <template v-else-if="column.dataIndex == 'total_attendance'">
                        {{ displayRate(record.total_attendance_rate) }}
                    </template>
                    <template v-else>
                        {{ record[column.dataIndex] }}
                    </template>
                </template>
            </a-table>
        </div>
        
        <div class="bg-white my-5 p-5 rounded-md shadow border-amber-400 border-t-2">
            <table class="w-full my-4 ">
                <th> 日期 </th>
                <th v-for="week in weekTable" class="py-2">
                    {{ week.label }}
                </th>
                <tr v-for="lesson in offer.lessons" class="text-center border-t-2 border-b-2">
                    <td>{{ lesson.date }}</td>

                    <td v-for="week in weekTable" class="py-1 ">
                        <template v-if=" displayDay(lesson.date ) == week.value ">
                            <div class="hover:scale-105 transition-transform">
                                <a :href="route('admin.klass.attendances',{offer:offer.id, lesson:lesson.id})">{{ displayTime(lesson.start) }} - {{ displayTime(lesson.end) }} <br>
                                ( {{ lesson.room.name }} ) 
                                <span class="text-base text-blue-600" ><export-outlined /></span></a>
                            </div>
                        </template>
                    </td>
                </tr>
            </table>
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
import dayjs, { Dayjs } from 'dayjs';
import * as AntdIcons from '@ant-design/icons-vue';

export default {
    components: {
        AdminLayout,
        ...AntdIcons,
    },
    props: ["offer"],
    data() {
        return {
            breadcrumb: [
                { label: "Area", url: route('admin.areas.index') },
                { label: "Course", url: route('admin.courses.index') },
                { label: "Offer", url: route('admin.offers.index') },
                { label: "Edit", url: null },
            ],
            
            columns: [{
                title: "名稱(中文)",
                dataIndex: "name_zh",
            }, {
                title: "名稱(英文)",
                dataIndex: "name_en",
            }, {
                title: "出席率(當前)",
                dataIndex: "current_attendance",
            }, {
                title: "總出席率",
                dataIndex: "total_attendance",
            }, {
                title: "畢業證書",
                dataIndex: "certificate",
            }],

            weekTable: [
                { 'value': '1', 'label': '星期一',  },
                { 'value': '2', 'label': '星期二', },
                { 'value': '3', 'label': '星期三', },
                { 'value': '4', 'label': '星期四', },
                { 'value': '5', 'label': '星期五', },
                { 'value': '6', 'label': '星期六', },
                { 'value': '0', 'label': '星期日', }
            ],
        };
    },
    created() {},
    computed: {},
    methods: {
        onFinish() {
            if (this.offer.id) {
                this.updateRecord();
            } else {
                this.storeRecord();
            }
        },
        storeRecord() {
            this.$inertia.post(route("admin.offers.store"), this.offer, {
                onSuccess: (page) => {
                    console.log(page);
                },
                onError: (err) => {
                    console.log(err);
                },
            });
        },
        updateRecord() {
            this.$inertia.patch(
                route("admin.offers.update", this.offer.id),
                this.offer, {
                    onSuccess: (page) => {
                        console.log(page);
                    },
                    onError: (error) => {
                        console.log(error);
                    },
                }
            );
        },
        displayRate(rate){
            return Math.round( rate * 100 ) + "%"
        },
        displayDay(date) {
            return dayjs(date).day();
        },
        displayTime(time) {
            return dayjs(time, 'HH:mm:ss').format('HH:mm');
        },
    },
};
</script>
