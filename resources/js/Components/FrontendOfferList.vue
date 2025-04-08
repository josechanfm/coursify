<template>
<div> 
    <div class="bg-white relative shadow rounded-lg overflow-x-auto">
        
        <div class="relative overflow-x-auto">
            <table class=" rounded-lg shadow-lg text-center w-full rtl:text-right text-gray-600 ">
                <thead class=" text-white font-bold bg-green-600 border-b-2 shadow">
                    <tr>
                        <th scope="col" class="py-3" v-for="col in columns">{{ col.title }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="font-bold text-base bg-white border-b border-gray-200"
                        v-for="offer in offers">
                        <td scope="row" class="px-1 py-4 text-gray-900 whitespace-nowrap" >
                            <div class="flex text-center justify-center items-center gap-2 text-wrap">
                                <div class="flex flex-col ">
                                    <div>{{ offer.name_zh }} </div>
                                    <div>{{ offer.name_en }} </div>
                                </div>
                                <div class=" bg-green-600 px-2 py-1 text-white shadow" style="word-break:keep-all; border-radius: 50%;">招生中</div>
                            </div>
                        </td>
                        <td class="underline min-w-24">{{ offer.apply_end }}</td>
                        <td class="min-w-24">{{ offer.offer_start }}</td>
                        <td>{{ offer.seats }}</td>
                        <td>{{ offer.hours }}</td>
                        <td>{{ offer.tuition_fee??'--' }}</td>
                        <td>{{ offer.material_fee??'--' }}</td>
                        <td> 123 </td>
                        <td class="min-w-36">
                            <div v-if="noQuota(offer)" class="">
                                <span class=" bg-orange-500 px-2 py-2 text-white" style="word-break:keep-all; border-radius: 50%;">名額暫滿</span>
                                <div class="my-3"></div>
                                <span class="text-sm bg-slate-200 text-slate-600" style="padding:8px; border-radius: 50%;">如仍想報名，可電郵至本中心</span>
                            </div>
                            <div v-else>
                                <a-button class="transition-transform transform hover:scale-105" type="primary" :href="route('application.form',offer.id)">立即報名
                                    <form-outlined />
                                </a-button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</template>

<script>
import * as AntdIcons from '@ant-design/icons-vue';

export default {

    components: {
        ...AntdIcons,
    },
    props: ["offers"],
    data() {
        return {
            columns: [{
                title: "課程名稱",
                dataIndex: "course_name",
            }, {
                title: "截止日期",
                dataIndex: "apply_end",
            }, {
                title: "開課日期",
                dataIndex: "offer_start",
            }, {
                title: "名額",
                dataIndex: "seats",
            }, {
                title: "課時",
                dataIndex: "hours",
            }, {
                title: "學費",
                dataIndex: "tuition_fee",
            }, {
                title: "材料費",
                dataIndex: "material_fee",
            }, {
                title: "課程詳情",
                dataIndex: "offer_detail",
            }, {
                title: "報名",
                dataIndex: "apply",
            }, ],
        }
    },
    methods:{
        noQuota(offer){
            return offer.accept_count >= offer.seats 
        }
    }
}
</script>
