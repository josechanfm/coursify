<template>
  <AdminLayout title="Application Form" :breadcrumb="breadcrumb">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="bg-white m-5 p-5 rounded-md shadow">
      <a-form
        ref="modalRef"
        :model="payment"
        name="CourseForm"
        :label-col="{ style: 'width:150px' }"
        autocomplete="off"
        :rules="rules"
        :validate-messages="validateMessages"
        @finish="onFinish"
      >
        <a-form-item label="課程學費" name="amount">
          {{ payment.amount}}
        </a-form-item>
        <a-form-item label="貨幣" name="currency">
          <a-radio-group v-model:value="payment.currency" button-style="solid">
            <a-radio-button value="MOP">MOP</a-radio-button>
            <a-radio-button value="HKD">HKD</a-radio-button>
            <a-radio-button value="RMB">RMB</a-radio-button>
          </a-radio-group>
        </a-form-item>
        <a-form-item label="Payment Type" name="">
          <a-select v-model:value="payment.method" :options="paymentMethods"/>
        </a-form-item>
        <template v-if="payment.method=='COMB'">
          <a-button @click="payment.breakdowns.push({method:'CASH',amount:0})">Add</a-button>
          <a-row v-for="breakdown in payment.breakdowns">
            <a-col>
              <a-form-item label="Type">
                <a-select v-model:value="breakdown.method" :options="paymentMethods" style="width: 200px;"/>
              </a-form-item>
            </a-col>
            <a-col>
              <a-form-item label="Amount">
                <a-input type="input"  v-model="breakdown.amount"></a-input>
              </a-form-item>
            </a-col>
          </a-row>
        </template>
        <template v-else>
          <a-form-item label="Amount">
            <a-input type="input"  v-model="payment.amount"></a-input>
          </a-form-item>
        </template>

<!-- 
        <a-form-item label="DSEJ" name="dsej">
          <a-input type="input"  v-model="payment.dsej"></a-input>
        </a-form-item>
        <a-form-item label="現金" name="payment_cash">
          <a-input type="input"  v-model="payment.payment_cash"/>
        </a-form-item>
        <a-form-item label="銀行轉帳" name="bank_transfer">
          <a-input type="input"  v-model="payment.bank_transfer"/>
        </a-form-item>
        <a-form-item label="現金轉帳" name="cash">
          <a-input type="input"  v-model="payment.cash"/>
        </a-form-item>
        <a-form-item label="信用卡" name="credit_card">
          <a-date-picker v-model="payment.credit_card"/>
        </a-form-item>
        <a-form-item label="支票" name="cheque">
          <a-date-picker v-model="payment.cheque"/>
        </a-form-item> -->
        <a-form-item label="材料費" name="material_fee">
          <a-date-picker v-model="payment.material_fee"/>
        </a-form-item>
        <a-form-item label="貨幣" name="refunded_currency">
          <a-input type="input"  v-model="payment.refunded_currency"></a-input>
        </a-form-item>
        <a-form-item label="現金" name="payment_cash">
          <a-input type="input"  v-model="payment.payment_cash"/>
        </a-form-item>
        <a-form-item label="銀行轉帳" name="bank_transfer">
          <a-input type="input"  v-model="payment.bank_transfer"/>
        </a-form-item>
        <a-form-item label="現金轉帳" name="cash">
          <a-input type="input"  v-model="payment.cash"/>
        </a-form-item>
        <a-form-item label="信用卡" name="credit_card">
          <a-date-picker v-model="payment.credit_card"/>
        </a-form-item>
        <a-form-item label="支票" name="cheque">
          <a-date-picker v-model="payment.cheque"/>
        </a-form-item>
        <a-form-item label="備註" name="remarl">
          <a-textarea v-model="payment.remark"/>
        </a-form-item>
        <a-form-item label="Payment Reference" name="payment_reference">
          {{ payment.payment_reference }}
        </a-form-item>
      </a-form>

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
  props: ["payment"],
  data() {
    return {
      breadcrumb:[
          {label:"Area" ,url:route('admin.areas.index')},
          {label:"Course" ,url:route('admin.courses.index')},
          {label:"Offer" ,url:route('admin.offers.index')},
          {label:"Application" ,url:route('admin.applications.index')},
          {label:"Edit" ,url:null},
      ],
      currency:[
        {value:"MOP",label:"MOP"},
        {value:"HKD",label:"HKD"},
        {value:"RMB",label:"RMB"},
      ],
      paymentMethods:[
        {value:"DSEJ",label:"現金"},
        {value:"TRAN",label:"銀行轉帳"},
        {value:"CASH",label:"現金轉帳"},
        {value:"CRDIT",label:"信用卡"},
        {value:"CHEQUE",label:"支票"},
        {value:"COMB",label:"組合式"}
      ],
      rules: {
        code: { required: true },
        name_zh: { required: true },
      },
      validateMessages: {
        required: "${label} is required!",
        types: {
          email: "${label} is not a valid email!",
          number: "${label} is not a valid number!",
        },
        number: {
          range: "${label} must be between ${min} and ${max}",
        },
      },
      labelCol: {
        style: {
          width: "150px",
        },
      },
    };
  },
  created() {
    this.payment.breakdowns=[{method:'CASH',amount:0}];
  },
  computed: {
  },
  methods: {
    onFinish() {
      if (this.application.id) {
        this.updateRecord();
      } else {
        this.storeRecord();
      }
    },
    storeRecord() {
      this.$inertia.post(route("admin.courses.store"), this.course, {
        onSuccess: (page) => {
          console.log(page);
        },
        onError: (err) => {
          console.log("duplicate code", this.course);
          console.log(err);
        },
      });
    },
    updateRecord() {
      this.$inertia.patch(
        route("admin.courses.update", this.application.id),
        this.course,
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