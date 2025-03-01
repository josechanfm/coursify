<template>
    <AdminLayout title="Dashboard" :breadcrumb="breadcrumb">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Config
            </h2>
        </template>
        <div class="container">
            <div class="flex justify-between px-5">
                <div class="text-xl">
                    <span v-if="offer">{{ offer.code }} - {{ offer.name_zh }}</span>
                    <span v-else>All Applications</span>
                </div>
                <a-button :href="route('admin.applications.create')" type="primary">
                    Create
                </a-button>
            </div>
            
            <div class="bg-white m-5 p-2 relative shadow rounded-lg overflow-x-auto">
                <!-- Header Info Boxes -->
                <div class="flex justify-between gap-5">
                    <div v-if="offer" class="flex-1 pb-5">
                        <!-- Small box with softer green color -->
                        <div
                            class="small-box bg-green-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                            <div class="inner">
                                <h3 class="text-3xl font-bold text-gray-800">{{ offer.abbr }} {{ offer.name_zh }}</h3>
                                <p class="text-gray-700">{{ offer.offer_count}} Offers</p>
                            </div>
                            <div class="icon flex items-center justify-center">
                                <i class="fas fa-chart-line text-4xl text-gray-800"></i>
                            </div>
                            <a href="#" class="small-box-footer text-gray-800 hover:underline">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div v-if="offer" class="flex-1">
                        <!-- Small box with softer blue color -->
                        <div
                            class="small-box bg-blue-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                            <div class="inner">
                                <h3 class="text-3xl font-bold text-gray-800">{{ offer.course_count }}<sup
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
                    <div v-if="offer" class="flex-1">
                        <!-- Small box with softer red color -->
                        <div
                            class="small-box bg-red-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
                            <div class="inner">
                                <h3 class="text-3xl font-bold text-gray-800">{{ offer.course_count }}<sup
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
                <div class="flex gap-2">
                    <a-button type="success">出席情況</a-button>
                    <a-button type="accept">課堂點名</a-button>
                    <a-button type="primary">課程詳細</a-button>
                    <a-button type="danger">在線評估表</a-button>
                    <a-button type="warning">刷新繳費</a-button>
                    <a-button type="info">刷新</a-button>
                </div>
                <a-table 
                    :dataSource="applications.data" 
                    :columns="columns" 
                    :pagination="pagination"
                    @change="onPaginationChange"
                >
                    <template #bodyCell="{ column, text, record, index }">
                        <template v-if="column.dataIndex == 'operation'">
                            <a-button :href="route('admin.applications.show',record.id)">Edit</a-button>
                        </template>
                        <template v-if="column.dataIndex == 'name'">
                            <a :href="route('admin.applications.show',record.id)">
                            {{ record.name_zh }}<br>
                            {{ record.name_en }}
                        </a>
                        </template>
                        <template v-else-if="column.dataIndex == 'id_num'">
                            {{ record.id_type }}<br>
                            {{ record.id_num }}
                        </template>
                        <template v-else-if="column.dataIndex == 'status'">
                            <div class="flex gap-1">
                                <a-button @click="changeStatus(record, null)" type="default">報名中</a-button>
                                <a-button @click="changeStatus(record, 'Accept')" :type="record.status=='Accept'?'accept':'default'">已錄取</a-button>
                                <a-button @click="changeStatus(record, 'Expire')" :type="record.status=='Expire'?'reject':'default'">繳費過期</a-button>
                                <a-button @click="changeStatus(record, 'Cancel')" :type="record.status=='Cancel'?'warning':'default'">取消報名</a-button>
                            </div>
                        </template>
                        <template v-else-if="column.dataIndex == 'payment'">
                            <a-button @click="" type="info">已編費</a-button>
                            {{ record.payment}}
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
    props: ["offer","applications"],
    data() {
        return {
            breadcrumb:[
                {label:"Area" ,url:route('admin.areas.index')},
                {label:"Course" ,url:route('admin.courses.index')},
                {label:"Offer" ,url:route('admin.offers.index')},
                {label:"Application" ,url:null},
            ],
            pagination: {
                total: this.applications.total,
                current: this.applications.current_page,
                pageSize: this.applications.per_page,
            },
            columns: [
                {
                    title: "名稱",
                    dataIndex: "name",
                }, {
                    title: "出生日期",
                    dataIndex: "dob",
                }, {
                    title: "證件編號",
                    dataIndex: "id_num",
                }, {
                    title: "報名日期",
                    dataIndex: "created_at",
                }, {
                    title: "電話",
                    dataIndex: "phone",
                }, {
                    title: "狀態",
                    dataIndex: "status",
                }, {
                    title: "繳費狀況",
                    dataIndex: "payment",
                },
            ],
        };
    },
    created() {

    },
    methods: {
        onPaginationChange(page, filters, sorter) {
            this.$inertia.get(
                this.offer?route("admin.offer.applications",this.offer.id):route("admin.applications.index"),
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
        changeStatus(record, status){
            console.log(record, status)
            this.$inertia.post(route('admin.application.changeStatus',record.id),{status:status},{
                onSuccess: (page) => {
                    console.log(page);
                },
                onError: (err) => {
                    console.log(err);
                },
            })
        }
    },
};
</script>