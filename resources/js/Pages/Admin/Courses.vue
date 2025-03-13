<template>
    <AdminLayout title="規劃" :breadcrumb="breadcrumb">
        <div class="container mx-auto">

            <div class="flex justify-between px-5">
                <div class="flex gap-2">
                    
                    <a-button :href="route('admin.courses.create', {'area_id': area?.id} )" type="primary">
                        新增 +
                    </a-button>
                    <a v-if="area" href="javascript:history.back();" class="inline">
                        <a-button><rollback-outlined />返回</a-button>
                    </a>
                </div>
            </div>
            
            <div class=" m-5 p-2 relative overflow-hidden">
                <!-- Header Info Boxes -->
                <div class="flex justify-between gap-5 ">
                    <div v-if="area" class="flex-1 shadow-md bg-white rounded-lg relative overflow-hidden">
                        <!-- Small box with softer green color -->
                        <div
                            class="small-box rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                            <div class="inner">
                                <h3 class="text-3xl font-bold text-gray-800">{{ area.abbr }} {{ area.name_zh }}</h3>
                                <p class="text-gray-700">{{ area.course_count}} Courses</p>
                            </div>
                            <div class="icon flex items-center justify-center">
                                <i class="fas fa-chart-line text-4xl text-gray-800"></i>
                            </div>
                            <a href="#" class="small-box-footer text-gray-800 hover:underline">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        
                        <div class="absolute end-16 -top-12">
                            <div class="w-20 h-20 bg-green-500 opacity-10 transform -rotate-12"></div>
                        </div>
                        <div class="absolute end-0 top-4">
                            <div class="w-20 h-20 bg-green-500 opacity-10 clip-path-triangle transform -rotate-90"></div>
                        </div>
                        <div class="absolute end-12 top-16">
                            <div class="bg-green-400 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
                        </div>
                        <div class="absolute end-36 top-8">
                            <div class="bg-green-400 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
                        </div>
                    </div>
                    <div v-if="area" class="flex-1">
                        <!-- Small box with softer blue color -->
                        <div
                            class="small-box bg-blue-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                            <div class="inner">
                                <h3 class="text-3xl font-bold text-gray-800">{{ area.course_count }}<sup
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
                    <div v-if="area" class="flex-1">
                        <!-- Small box with softer red color -->
                        <div
                            class="small-box bg-red-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                            <div class="inner">
                                <h3 class="text-3xl font-bold text-gray-800">{{ area.course_count }}<sup
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
                <!-- End Header info Boxes-->

                <a-table class="shadow-md rounded-lg mt-6" :dataSource="courses.data" :columns="columns" :pagination="pagination"
                    @change="onPaginationChange">
                    <template #bodyCell="{ column, text, record, index }">
                        <template v-if="column.dataIndex == 'operation'">
                            <a-button :href="route('admin.course.offers', {course:record.id})">所屬開設</a-button>
                            <a-button :href="route('admin.courses.edit',record.id)"><EditOutlined class=""/>編輯</a-button>
                            <a-popconfirm title="Are you sure delete this record?" ok-text="Yes" cancel-text="No"
                                @confirm="this.$inertia.delete(route('admin.courses.destroy', record.id))">
                                <a-button><DeleteOutlined class=""/>刪除</a-button>
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

<style>
.clip-path-triangle {
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}
</style>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { defineComponent, reactive } from "vue";
import * as AntdIcons from '@ant-design/icons-vue';

export default {
    components: {
        AdminLayout,
        ...AntdIcons,
    },
    props: ["area","courses"],
    data() {
        return {
            breadcrumb:[
                {label:"Area" ,url:route('admin.areas.index')},
                {label:"Course" ,url:null},
            ],
            pagination: {
                total: this.courses.total,
                current: this.courses.current_page,
                pageSize: this.courses.per_page,
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
                this.area?route("admin.area.courses",this.area.id):route("admin.courses.index"),
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
    },
};
</script>