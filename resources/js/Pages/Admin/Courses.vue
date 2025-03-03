<template>
    <AdminLayout title="Course" :breadcrumb="breadcrumb">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Config
            </h2>
        </template>
        <div class="container mx-auto">

            <div class="flex justify-between px-5">
                <div class="text-xl">
                    <span v-if="area">{{ area.abbr }} - {{ area.name_zh }}</span>
                    <span v-else>All Courses</span>
                </div>
                <div class="flex gap-2">
                    <a-button :href="route('admin.courses.create')" type="primary">
                        Create
                    </a-button>
                    <a href="javascript:history.back();" class="inline">
                        <a-button>Back</a-button>
                    </a>
                </div>
            </div>
            
            <div class="bg-white m-5 p-2 relative shadow rounded-lg overflow-x-auto">
                <!-- Header Info Boxes -->
                <div class="flex justify-between gap-5">
                    <div v-if="area" class="flex-1 pb-5">
                        <!-- Small box with softer green color -->
                        <div
                            class="small-box bg-green-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
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

                <a-table :dataSource="courses.data" :columns="columns" :pagination="pagination"
                    @change="onPaginationChange">
                    <template #bodyCell="{ column, text, record, index }">
                        <template v-if="column.dataIndex == 'operation'">
                            <a-button :href="route('admin.course.offers',record.id)">Offers</a-button>
                            <a-button :href="route('admin.courses.edit',record.id)">Edit</a-button>
                            <a-popconfirm title="Are you sure delete this record?" ok-text="Yes" cancel-text="No"
                                @confirm="this.$inertia.delete(route('admin.courses.destroy', record.id))">
                                <a-button>Delete</a-button>
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

export default {
    components: {
        AdminLayout,
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
                    title: "Code",
                    dataIndex: "code",
                }, {
                    title: "Name (zh)",
                    dataIndex: "name_zh",
                }, {
                    title: "Name (en)",
                    dataIndex: "name_en",
                }, {
                    title: "Operation",
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