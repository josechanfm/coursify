<template>
    <AdminLayout title="課程管理" :breadcrumb="breadcrumb">
        
        <div class="container mx-auto">
            <div class="flex justify-between px-5 py-2 rounded-lg shadow border-t-2 border-cyan-500 mx-auto bg-white">
                <div class="text-2xl ">
                    <span v-if="offer">{{ offer.code }} - {{ offer.name_zh }}</span>
                    <span v-else-if="onlyCurrent">Only unconfirm Applications</span>
                    <span v-else>All Applications</span>
                </div>
                <!-- <div class="flex gap-2">
                    <a-button :href="route('admin.applications.create')" type="primary">
                        Create
                    </a-button>
                    <a href="javascript:history.back();" class="inline">
                        <a-button>Back</a-button>
                    </a>
                </div> -->
            </div>
            
            <div class="bg-white m-5 p-2 relative shadow rounded-lg overflow-x-auto">
                <!-- Header Info Boxes -->
                <template v-if="offer" >
                    <div class="flex justify-between gap-5 pb-5">
                        <div class="flex-1 ">
                            <!-- Small box with softer green color -->
                            <div
                                class="small-box bg-green-300 rounded-lg shadow-md p-4 transition-transform transform hover:scale-105">
                                <div class="inner flex justify-between px-4 text-base">
                                    <!-- <h3 class="text-3xl font-bold text-gray-800">{{ offer.abbr }} {{ offer.name_zh }}</h3> -->
                                    <p class="text-gray-700 text-center">{{ offer.course.quota }} <br> 名額</p>
                                    <p class="text-gray-700 text-center">{{ offer.application_count}} <br> 報名人數</p>
                                    <p class="text-gray-700 text-center">{{ offer.accept_count }} <br> 錄取人數</p>
                                </div>
                                <!-- <div class="icon flex items-center justify-center">
                                    <i class="fas fa-chart-line text-4xl text-gray-800"></i>
                                </div>
                                <a href="#" class="small-box-footer text-gray-800 hover:underline">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a> -->
                            </div>
                        </div>
                        <div class="flex-1">
                            <!-- Small box with softer blue color -->
                            <div
                                class="small-box bg-blue-300 rounded-lg shadow-md p-4 transition-transform transform hover:scale-105">
                                <div class="inner text-base">
                                    <p class="text-gray-700 mb-2">報名時間: {{ offer.apply_start }} ~ {{ offer.apply_end }}</p>
                                    <p class="text-gray-700">課程時間: {{ offer.apply_start }} ~ {{ offer.offer_end }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <!-- Small box with softer red color -->
                            <div
                                class="small-box bg-rose-300 rounded-lg shadow-lg p-4  ">
                                <div class="inner text-base">
                                    <p class="text-gray-700">備忘錄</p>
                                    <a-textarea v-model:value="notice" :placeholder="offer.code + '備忘錄'"  @focus="isTextareaFocused = true" @blur="isTextareaFocused = false" :style="textareaStyle" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-2 mt-2 mb-4">
                        <a-button type="success">出席情況</a-button>
                        <a-button type="accept">課堂點名</a-button>
                        <a-button type="primary">課程詳細</a-button>
                        <a-button type="danger">在線評估表</a-button>
                        <a-button type="warning">刷新繳費</a-button>
                        <a-button type="info"><sync-outlined/>刷新</a-button>
                    </div>
                </template>
                <!-- End Header Info Boxes -->
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
                        <template v-if="column.dataIndex == 'offer' && record.offer_info">
                            <a :href="route('admin.offers.show',record.id)">
                                {{ record.offer_info.code }}<br>
                                {{ record.offer_info.name_zh }}
                            </a>
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
                        <template v-else-if="column.dataIndex == 'created_at'">
                            {{ displayDate(record.created_at) }}
                        </template>
                        <template v-else-if="column.dataIndex == 'status'">
                            <div class="flex ">
                                <a-button class="!rounded-none !rounded-l-lg" @click="changeStatus(record, null)" type="default">報名中</a-button>
                                <a-button class="!rounded-none" @click="changeStatus(record, 'Accept')" :type="record.status=='Accept'?'accept':'default'">已錄取</a-button>
                                <a-button class="!rounded-none" @click="changeStatus(record, 'Expire')" :type="record.status=='Expire'?'reject':'default'">繳費過期</a-button>
                                <a-button class="!rounded-none !rounded-r-lg" @click="changeStatus(record, 'Cancel')" :type="record.status=='Cancel'?'warning':'default'">取消報名</a-button>
                            </div>
                        </template>
                        <template v-else-if="column.dataIndex == 'payment'">
                            <a-button v-if="record.payment" :href="route('admin.payments.show', record.payment.id)" type="info">已編費</a-button>
                            <a v-else @click="startPayment(record)"><StepForwardOutlined />繳費</a>
                        </template>
                        <template v-else>
                            {{ record[column.dataIndex] }}
                        </template>
                    </template>
                </a-table>
                
                <PaymentCreateModal :payment="paymentModal"/>
            </div>
        </div>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { defineComponent, reactive } from "vue";
import * as AntdIcons from '@ant-design/icons-vue';
import PaymentCreateModal from "./Payment/PaymentCreateModal.vue";
import dayjs, { Dayjs } from 'dayjs';

export default {
    components: {
        AdminLayout,
        PaymentCreateModal,
        ...AntdIcons,
    },
    props: ["onlyCurrent","offer","applications"],
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
            
            notice: "",
            isTextareaFocused: false,

            paymentModal:{
                isOpen:false,
                application:""
            },

        };
    },
    computed: {
        textareaStyle() {
            return {
                transition: 'all 0.3s', // 平滑過渡
                height: this.isTextareaFocused ? 'auto' : 'auto', // 自動高度調整
                minHeight: this.isTextareaFocused ? '150px' : '50px', // 根據狀態設置最小高度
            };
        },
    },
    created() {
        if(!this.offer){
            this.columns.unshift({title: "課程", dataIndex: "offer"})
        };
    },
    methods: {
    
        createRecord() {
            this.modal.data = {};
            this.modal.mode = "CREATE";
            this.modal.title = "新增";
            this.modal.isOpen = true;
        },
        startPayment(application){
            this.paymentModal.isOpen = true
            this.paymentModal.application = application
        },
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
        },
        
        displayDate(date) {
            return dayjs(date).format('YYYY-MM-DD')
        },
        displayDateTime(date) {
            return dayjs(date).format('YYYY-MM-DD HH:mm:ss')
        },
    },
};
</script>