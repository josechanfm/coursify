<template>
<MemberLayout title="Dashboard">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8   ">
            <div class=" overflow-hidden  flex flex-col gap-3  " >
                
                <div id="table" class="bg-gray-50 shadow-xl rounded-lg overflow-hidden w-full ">
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
                                <div class="flex gap-1 items-center">
                                    <a :href=" getReceiptFile(record).original_url ">{{ getReceiptFile(record).file_name }}</a>
                                    <div v-if="getReceiptFile(record)" >
                                        
                                    </div>
                                    <div v-else>
                                        <a-button class="!border-blue-500 " @click="uploadPaymentReceipt(record)">上傳</a-button>
                                    </div>
                                </div>
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

                <a-modal v-model:open="modal.isOpen" title="檔案上傳" >
                    <div>
                        <a-upload key="file" v-model:file-list="fileList" :before-upload="beforeUpload" :on-change="handleChangeFile" :multiple="false" :show-upload-list="true" :custom-request="dummyRequest">
                            <a-button >
                                <upload-outlined></upload-outlined>
                                選擇檔案
                            </a-button>
                        </a-upload>
                    </div>
                    <template #footer>
                        <a-button @click="uploadMediaThumbnail">確認</a-button>
                    </template>
                </a-modal>

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
            </div>
        </div>
    </div>
</MemberLayout>
</template>

<script>
import {
    ref,
    reactive
} from 'vue';
import MemberLayout from '@/Layouts/MemberLayout.vue';
import * as AntdIcons from '@ant-design/icons-vue';

export default {
    props: ['studentDetail','applications'],
    components: {
        ...AntdIcons,
        MemberLayout
    },
    data() {
        return {
            modal:{
                isOpen: false,
                data:{},
            },
            fileList: [],

        }
    },
    created() {
        window.app = this
    },
    methods:{
        uploadPaymentReceipt(record){
            this.modal.data = record
            this.modal.isOpen = true
        },
        getReceiptFile(record){
            return record.media.find( x => x.collection_name == 'receipt' )
        },
        beforeUpload(file) {
            
        },
        handleChangeFile(newFileList) {
            console.log( newFileList );
            this.modal.data.receipt = newFileList.fileList;
        },
        dummyRequest({
            file,
            onSuccess
        }) {
            setTimeout(() => {
                onSuccess(file);
            }, 0);
        },
        uploadMediaThumbnail(){

            console.log( this.modal.data.receipt )

            this.$inertia.post(route("member.offers.uploadPaymentReceipt", {'application':this.modal.data }), this.modal.data, {
                onSuccess: (page) => {
                    console.log(page.data)
                    this.modal.data = {};
                    this.modal.isOpen = false;
                },
                onError: (err) => {
                    console.log(err);
                },
            });
            
        },
    }
}
</script>
<style scoped>
 :deep(.ant-table-thead .ant-table-cell) {
  background-color: rgb(225, 236, 225) ;
}
</style>