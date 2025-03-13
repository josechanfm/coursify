<template>
<AdminLayout title="首頁">
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="">
        <DashboardSearchTool />
    </div>
    <div class="container mx-auto pt-8 ">
        <a-card :bordered="false" :headStyle='{ background: "#0284c7", color:"white", borderBottom: "1px solid #94a3b8" }' class="">
            <template #title>
                <div class="flex justify-between">
                    <div>課程列表</div>
                    <div class="flex gap-1 items-center">
                        <a class="px-4 py-1 text-black text-sm leading-1 bg-white rounded border hover:text-slate-600" @click="refresh()">刷新</a>
                        <a class="px-4 py-1 text-black preparing text-sm leading-1 rounded border hover:text-slate-600" @click="filterOffers('preparing')">準備中課程</a>
                        <a class="px-4 py-1 text-black applying text-sm leading-1 rounded border hover:text-slate-600" @click="filterOffers('applying')">報名中課程</a>
                        <a class="px-4 py-1 text-black applied text-sm leading-1 rounded border hover:text-slate-600" @click="filterOffers('applied')">已截止課程</a>
                        <a class="px-4 py-1 text-black offering text-sm leading-1 rounded border hover:text-slate-600" @click="filterOffers('offering')">開課中課程</a>
                        <a class="px-4 py-1 text-black finished text-sm leading-1 rounded border hover:text-slate-600" @click="filterOffers('finished')">已完成課程</a>
                    </div>
                </div>    
            </template>
            <div v-for="offer in offers" 
                :key="offer.id" v-show=" filterOffersKey ? offerStatusClass(offer) == filterOffersKey : true "  
                ref="offerItems"
                :class="offerStatusClass(offer)" 
                class=" pb-4 m-1 shadow-sm border-b-2 rounded-lg">
                <div class="grid grid-cols-6 gap-2 p-3" >
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
                        <a-button class="w-40 ">報名者報告<download-outlined /></a-button>
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
import { gsap } from 'gsap';

export default {

    components: {
        AdminLayout,
        DashboardSearchTool,
        ...AntdIcons,
    },
    props:['offers'],
    data(){
        return {
            filterOffersKey: "",
        }
    },
    methods:{
        offerStatusClass(offer){
            var today = dayjs().format("YYYY-MM-DD")
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
        },
        filterOffers(key){
            this.filterOffersKey = key
        },
        refresh(){
            location.reload()
        },

        animateOffers() {
            const offerItems = this.$refs.offerItems;

            offerItems.forEach((item) => {
                if (item.style.display !== 'none') {
                    gsap.fromTo(item, 
                        { y: 30, opacity: 0 }, 
                        { y: 0, opacity: 1, duration: 0.5, stagger: 0.1 }
                    );
                }
            });
        },
    },
    watch: {
        filterOffersKey: {
            immediate: true,
            handler() {
                this.$nextTick(() => {
                    this.animateOffers();
                });
            },
        },
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