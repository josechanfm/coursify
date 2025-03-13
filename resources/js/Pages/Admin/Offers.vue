<template>
    <AdminLayout title="課程開設" :sub-title="offerTitle()" :breadcrumb="breadcrumb">
        <div class="container mx-auto">
            <div class="flex px-5 gap-2">
                <div class="flex ">
                    <a-button :href="route('admin.offers.create')"  type="primary">新增 +</a-button>
                </div>
                <a-button v-if="course" type="default" :href="route('admin.offers.index')"><rollback-outlined />返回</a-button>
            </div>
            <div class="bg-white m-5 p-2 relative shadow rounded-lg overflow-hidden">
                <!-- Header Info Boxes -->
                <div class="flex justify-between gap-5">
                    <div v-if="course" class="flex-1 pb-5">
                        <!-- Small box with softer green color -->
                        <div
                            class="small-box bg-green-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                            <div class="inner">
                                <h3 class="text-3xl font-bold text-gray-800">{{ course.abbr }} {{ course.name_zh }}</h3>
                                <p class="text-gray-700">{{ course.offer_count}} Offers</p>
                            </div>
                            <div class="icon flex items-center justify-center">
                                <i class="fas fa-chart-line text-4xl text-gray-800"></i>
                            </div>
                            <a href="#" class="small-box-footer text-gray-800 hover:underline">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div v-if="course" class="flex-1">
                        <!-- Small box with softer blue color -->
                        <div
                            class="small-box bg-blue-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                            <div class="inner">
                                <h3 class="text-3xl font-bold text-gray-800">{{ course.course_count }}<sup
                                        class="text-base">%</sup></h3>
                                <p class="text-gray-700">Active Users</p>
                            </div>
                            <div class="icon flex items-center justify-center">
                                <i class="fas fa-users text-4xl text-gray-800"></i>
                            </div>
                            <a href="#" class="small-box-footer text-gray-800 hover:underline">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div v-if="course" class="flex-1">
                        <!-- Small box with softer red color -->
                        <div
                            class="small-box bg-red-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                            <div class="inner">
                                <h3 class="text-3xl font-bold text-gray-800">{{ course.course_count }}<sup
                                        class="text-base">%</sup></h3>
                                <p class="text-gray-700">Completion Rate</p>
                            </div>
                            <div class="icon flex items-center justify-center">
                                <i class="fas fa-check-circle text-4xl text-gray-800"></i>
                            </div>
                            <a href="#" class="small-box-footer text-gray-800 hover:underline">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Header Info Boxes -->
                <a-table 
                    :dataSource="offers.data" 
                    :columns="columns" 
                    :pagination="pagination"
                    @change="onPaginationChange"
                >
                    <template #bodyCell="{ column, text, record, index }">
                        <template v-if="column.dataIndex == 'operation'">
                            <a-button :href="route('admin.offer.applications', record.id)">報名管理</a-button>
                            <a-button :href="route('admin.klass.dashboard',record.id)">出席狀況</a-button>
                            <a-button :href="route('admin.offers.edit',record.id)"><EditOutlined/>編輯</a-button>
                            <a-popconfirm title="Are you sure delete this record?" ok-text="Yes" cancel-text="No"
                                @confirm="this.$inertia.delete(route('admin.offers.destroy', record.id))">
                                <a-button><DeleteOutlined/>刪除</a-button>
                            </a-popconfirm>
                        </template>
                        <template v-else>
                            {{ record[column.dataIndex] }}
                        </template>
                    </template>
                </a-table>
            </div>
        </div>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { defineComponent, reactive } from "vue";
import * as AntdIcons from '@ant-design/icons-vue';

export default {
    components: {
        AdminLayout,
        ...AntdIcons,
    },
    props: ["onlyCurrent","course","offers"],
    data() {
        return {
            breadcrumb:[
                {label:"Area" ,url:route('admin.areas.index')},
                {label:"Course" ,url:route('admin.courses.index')},
                {label:"Offer" ,url:null},
            ],
            pagination: {
                total: this.offers.total,
                current: this.offers.current_page,
                pageSize: this.offers.per_page,
            },
            columns: [
                {
                    title: "編號",
                    dataIndex: "code",
                }, {
                    title: "名稱 (中文)",
                    dataIndex: "name_zh",
                }, {
                    title: "名稱 (英文)",
                    dataIndex: "name_en",
                }, {
                    title: "操作",
                    dataIndex: "operation",
                },
            ],
        };
    },
    created() {

    },
    methods: {
        onPaginationChange(page, filters, sorter) {
            this.$inertia.get(
                this.course?route("admin.course.offers",this.course.id):route("admin.offers.index"),
                {
                    page: page.current,
                    per_page: page.pageSize,
                },
                {
                onSuccess: (page) => {
                    console.log(page);
                },
                onError: (error) => {
                    console.log(error);
                },
                }
            );
        },
        offerTitle(){
            if( this.course ){
                return this.course.code + " - " + this.course.name_zh
            }
            if( this.onlyCurrent ){

            }

            return '全部開設'
        }
    },
};
</script>