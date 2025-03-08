<template>
<AdminLayout title="首頁">
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="">
        <DashboardSearchTool />
    </div>
    <div class="container mx-auto pt-8">
        <a-card title="課程列表" :bordered="false" class="">
            <div v-for="offer in offers" :class="offerStatusClass(offer)" class=" pb-4 m-1 shadow-sm rounded-lg">
                <div class="grid grid-cols-6 gap-2 p-3">
                    <div class="flex col-span-3 flex-col gap-2">
                        <div class="text-lg font-semibold">{{ offer.code }} </div>
                        <div class="text-lg">
                            <a class="font-bold text-xl" :href="route('admin.offer.applications', offer.id)">{{ offer.name_zh }} <span v-if="offer.name_en">| {{ offer.name_en }} </span></a>
                        </div>
                        <div class="text-base">
                            <span :class=" offerStatusClass(offer) == 'applying'? 'font-bold':'' ">
                                {{ offer.apply_start }} - {{ offer.apply_end }} 
                            </span> | 
                            <span :class=" offerStatusClass(offer) == 'offering'? 'font-bold':'' ">
                                {{ offer.offer_start }} - {{ offer.offer_end }}
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-col items-end pr-4">
                        ${{ offer.course.tution_fee }} | {{ offer.application_count }}/{{ offer.course.quota }} | {{ offer.course.hours }}h
                    </div>
                    <div class="flex flex-col leading-6 text-base">
                        網上報名<br />
                        <a :href="route('admin.offers.edit' , offer.id)">課程編輯</a>
                        課程管理<br />
                        繳費<br />
                    </div>
                    <div class="flex flex-col gap-2">
                        <!-- <a-button class="w-24">剔除</a-button> -->
                        <a-button class="w-40">報名者報告<download-outlined /></a-button>
                        <a-button class="w-40">錄取者報告<download-outlined /></a-button>
                    </div>
                </div>
            </div>
        </a-card>
    </div>
</AdminLayout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import * as AntdIcons from '@ant-design/icons-vue';
import DashboardSearchTool from '@/Components/DashboardSearchTool.vue';
import dayjs, { Dayjs } from 'dayjs';

export default {

    components: {
        AdminLayout,
        DashboardSearchTool,
        ...AntdIcons,
    },
    props:['offers'],
    data(){
        return {
        }
    },
    methods:{
        offerStatusClass(offer){
            var today = dayjs().format("YYYY-MM-DD")
            console.log( today )
            if( offer['status'] == "offerCancel" ){

            }
            if( today >= offer['apply_start'] && today <= offer['apply_end'] )
                return "applying" // 報名中

            if( today > offer['apply_end'] && today < offer['offer_start'] )
                return "applied" // 截止中

            if( today >= offer['offer_start'] && today <= offer['offer_end'] )
                return "offering" // 開課中

            if( today > offer['offer_end'] )
                return "finished" // 已完成

            return "preparing"
        }
    },
};
</script>

<style>
.applying {
    @apply bg-blue-200; /* 蓝色 */
}
.applied {
    @apply bg-green-300; /* 绿色 */
}
.offering {
    @apply bg-red-300; /* 黄色 */
}
.finished {
    @apply bg-slate-300; /* 红色 */
}
.preparing {
    @apply bg-white; /* 紫色 */
}
</style>