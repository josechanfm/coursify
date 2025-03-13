<template>
<!-- Modal Start-->
<a-modal v-model:open="payment.isOpen" style="top: 150px" :title="title" width="50%">
    <a-form class="pt-4" ref="modalRef" :model="data" name="PaymentForm" :label-col="{ span: 5 }" autocomplete="off">
        <a-form-item label="課程學費" name="">
            <b>1200</b>
        </a-form-item>
        <a-form-item label="繳費方式" name="">
            <a-select v-model:value="method" mode="multiple" :options="paymentMethods" :placement="'topLeft'"/>
        </a-form-item>
        <template v-for="t in tution_payment">
            <a-form-item :label="t.label" v-if="method.includes(t.name)">
                <a-input type="input" v-model:value="t.value" />
            </a-form-item>
        </template>
    </a-form>
    <template #footer>
        <a-button type="primary" @click="submitForm()">確認</a-button>
    </template>
</a-modal>
<!-- Modal End-->
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
    props: ["payment"],
    data() {
        return {
            method:[],
            tution_payment:[
                {value:0, name:"DSEJ", label:"DSEJ 持續進修計劃"},
                {value:0, name:"CASH", label:"現金"},
                {value:0, name:"BANK_TRAN", label:"銀行轉帳"},
                {value:0, name:"CASH_TRAN", label:"現金轉帳"},
                {value:0, name:"CRDIT", label:"信用卡"},
                {value:0, name:"CHEQUE", label:"支票"},
            ],
            title:"繳費",
            paymentMethods:[
                {value:"DSEJ",label:"DSEJ 持續進修計劃"},
                {value:"CASH",label:"現金"},
                {value:"BANK_TRAN",label:"銀行轉帳"},
                {value:"CASH_TRAN",label:"現金轉帳"},
                {value:"CRDIT",label:"信用卡"},
                {value:"CHEQUE",label:"支票"},
            ],
        }
    },
    methods:{
        
        submitForm() {
            this.$inertia.post(route("admin.payments.store"), 
                {"application": this.payment.application, tution_payment: this.tution_payment }, 
                {
                    onSuccess: (page) => {
                        this.payment.isOpen = false
                        location.reload();
                    },
                    onError: (err) => {
                    },
                }
            );
        }
    }
}


</script>