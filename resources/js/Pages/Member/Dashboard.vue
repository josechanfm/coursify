<template>
<AppLayout title="Dashboard">
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           歡迎來到 <b class="text-green-800">CityU</b> 報名系統
        </h2>
    </template>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8   ">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg flex gap-3  " >
                <div class="p-1 bg-gray-200 rounded-lg  shadow-sm w-1/2">
                    <div class="bg-blue-100 rounded-lg  w-full text-base">
                        <div class="flex text-center align-middle items-center justify-center flex-wrap">
                            <div class="font-semibold text-gray-600 w-32">學生編號</div>
                            <div class="text-lg text-nowrap p-1 flex-1 bg-gray-50 ">{{ studentDetail.code }}</div>
                        </div>
                        <div class="flex text-center align-middle items-center justify-center flex-wrap">
                            <div class="font-semibold text-gray-600 w-32 ">姓名</div>
                            <div class="p-1 flex-1 bg-gray-50 ">
                                <div class="text-lg text-nowrap">{{studentDetail.name_zh }}</div>
                                <div class="text-nowrap text-sm text-gray-500"> {{studentDetail.name_en }}</div>
                            </div>
                        </div>
                        <div class="flex text-center align-middle items-center justify-center flex-wrap">
                            <div class="font-semibold text-gray-600 w-32 ">電郵 </div>
                            <div class="text-lg text-nowrap p-1 flex-1 bg-gray-50">{{ studentDetail.email }}</div>
                        </div>
                        <div class="flex text-center align-middle items-center justify-center flex-wrap">
                            <div class="font-semibold text-gray-600 w-32 ">電話</div>
                            <div class="text-lg text-nowrap p-1 flex-1 bg-gray-50">{{ studentDetail.phone }}</div>
                        </div>
                    </div>
                </div>
                <div id="table" class="bg-gray-50 rounded-lg overflow-hidden w-full ">
                    <a-table :dataSource='applications' :pagination="false" >
                        <a-table-column title="課程名稱">
                            <template #default="{record}">
                                {{record.offer.name_zh }}
                            </template>
                        </a-table-column>
                        <a-table-column title="開課日期	">
                            <template #default="{record}">
                                {{record.offer.apply_start }}
                            </template>
                        </a-table-column>
                        <a-table-column title="狀態">
                            <template #default="{record}">
                                {{record.status }}
                            </template>
                        </a-table-column>
                        <a-table-column title="繳費單">
                            <template #default="{record}">
                                <!-- {{record }} -->
                            </template>
                        </a-table-column>
                        <a-table-column title="其他文件	">
                            <template #default="{record}">
                                <!-- {{record }} -->
                            </template>
                        </a-table-column>
                        <a-table-column title="繳費">
                            <template #default="{record}">
                                <div v-if="record.payment ">
                                    已繳
                                </div>
                                <div v-else>
                                    未繳
                                </div>
                            </template>
                        </a-table-column>
                    </a-table>
                </div>
            </div>
          

        </div>
    </div>
</AppLayout>
</template>

<script>
import {
    ref,
    reactive
} from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
// import Welcome from '@/Components/Welcome.vue';
export default {
    props: ['studentDetail','applications'],
    components: {
        AppLayout
    },
    setup(props) {
        const studentDetail = ref(props.studentDetail)
        const applications=ref(props.applications)
        return {
            applications,studentDetail
        }
    },
    created() {
        window.app = this
    }
}
</script>
<style scoped>
 :deep(.ant-table-thead .ant-table-cell) {
  background-color: rgb(225, 236, 225) ;
}
</style>