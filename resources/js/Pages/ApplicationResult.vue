<template>
    <WebLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Application Form</h2>
        </template>
        
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-slate-400 text-end">{{ application.offer.code }} {{ application.offer.name_zh }}</div>
            <div class="bg-white rounded-md shadow-md">
                <div class="p-4 bg-blue-600 rounded-t-md text-white">
                    報名成功信息
                </div>
                <div class="px-4 py-2">
                    <div class="text-lg">
                        閣下的報讀申請己成功提交，請於報名後三個工作天內線上繳費或上傳轉帳繳費憑證，否則將不保留學位。
                    </div>
                    <div>
                        123123131<br>
                        12312312
                    </div>
                </div>
                {{ application['offer'] }}
            </div>
            <div class=" flex flex-col gap-4" v-if="false">
                <div class="text-slate-400 text-end">{{ application.offer.code }} {{ application.offer.name_zh }}</div>
                <div class="p-4 bg-blue-600 rounded-md shadow-md text-white">
                    dsfgdfgsdfhd
                </div>

                <div class="flex flex-row">
                    <div>證件：</div>
                    <div>{{ application.id_type }} {{ application.id_num }}</div>
                </div>
                <div class="flex flex-row">
                    <div>電郵：</div>
                    <div>{{ application.id_type }} {{ application.id_num }}</div>
                </div>
                <div class="flex flex-row">
                    <div>名字(中文)：</div>
                    <div>{{ application.id_type }} {{ application.id_num }}</div>
                </div>
                <div class="flex flex-row">
                    <div>名字(英文)：</div>
                    <div>{{ application.id_type }} {{ application.id_num }}</div>
                </div>
                <div class="flex flex-row">
                    <div>證書上名字：</div>
                    <div>{{ application.cert_name }} {{ application.cert_name }}</div>
                </div>
                <div class="flex flex-row">
                    <div>出生日期：</div>
                    <div>{{ application.dob }} {{ application.dob }}</div>
                </div>
                <div class="flex flex-row">
                    <div>性別：</div>
                    <div>{{ application.gender }} {{ application.gender }}</div>
                </div>
                <div class="flex flex-row">
                    <div>聯絡電話：</div>
                    <div>{{ application.phone }} {{ application.phone }}</div>
                </div>
                <div class="flex flex-row">
                    <div>其他電話：</div>
                    <div>{{ application.other_contact }} {{ application.other_contact }}</div>
                </div>
                <div class="flex flex-row">
                    <div>教材語言：</div>
                    <div>{{ application.textbook_lang }} {{ application.textbook_lang }}</div>
                </div>
                <div class="flex flex-row">
                    <div>如何得知WSET課程：</div>
                    <div>{{ application.extra }} {{ application.extra }}</div>
                </div>
                <div class="flex flex-row">
                    <div>任職公司：</div>
                    <div>{{ application.work_company }} {{ application.work_company }}</div>
                </div>
                <div class="flex flex-row">
                    <div>任職職位：</div>
                    <div>{{ application.work_position }} {{ application.work_position }}</div>
                </div>
            </div>
        </div>
    </div>
    </WebLayout>
</template>


<script>
import WebLayout from "@/Layouts/WebLayout.vue";
import { notification } from 'ant-design-vue';
import { getTransitionRawChildren } from "vue";

export default {
    components: {
        WebLayout,
        notification,
    },
    props: ["application"],
    data() {
        return {
        }
    }
}
</script>