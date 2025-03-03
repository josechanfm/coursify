<template>
    <AdminLayout title="Offer" :breadcrumb="breadcrumb">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Config
            </h2>
        </template>
        <div class="container mx-auto">
            <div class="flex justify-between px-5">
                <div class="text-xl">
                    <span v-if="course">{{ course.code }} - {{ course.name_zh }}</span>
                    <span v-else-if="onlyCurrent">Current Offers</span>
                    <span v-else>All Offers</span>
                </div>
                <div class="flex gap-2">
                    <a-button :href="route('admin.offers.create')" type="primary">
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
                            <a-button :href="route('admin.offer.applications', record.id)">Applications</a-button>
                            <a-button :href="route('admin.klass.dashboard',record.id)">Class Management</a-button>
                            <a-button :href="route('admin.offers.edit',record.id)">Edit</a-button>
                            <a-popconfirm title="Are you sure delete this record?" ok-text="Yes" cancel-text="No"
                                @confirm="this.$inertia.delete(route('admin.offers.destroy', record.id))">
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
    },
};
</script>