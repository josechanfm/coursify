<template>
  <AdminLayout title="Offer Editor" :breadcrumb="breadcrumb">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="bg-white m-5 p-5 rounded-md shadow">
      <a-form
        ref="modalRef"
        :model="offer"
        name="OfferForm"
        :label-col="{ style: 'width:150px' }"
        autocomplete="off"
        :rules="rules"
        :validate-messages="validateMessages"
        @finish="onFinish"
      >
        <a-form-item label="Code" name="code">
          <a-input v-model:value="offer.code" />
        </a-form-item>
        <a-form-item label="Name (zh)" name="name_zh">
          <a-input v-model:value="offer.name_zh" />
        </a-form-item>
        <a-form-item label="Name (en)" name="name_en">
          <a-input v-model:value="offer.name_en" />
        </a-form-item>
        <div class="flex flex-wrap justify-between">
          <div class="w-full md:w-1/3">
            <a-form-item label="Apply Start" name="apply_start">
              <a-date-picker v-model:value="offer.apply_start" :format="dateFormat" :valueFormat="dateFormat"/>
            </a-form-item>
            <a-form-item label="Apply End" name="apply_end">
              <a-date-picker v-model:value="offer.apply_end" :format="dateFormat" :valueFormat="dateFormat"/>
            </a-form-item>
            <a-form-item label="Application update" name="application_update">
              <a-date-picker v-model:value="offer.application_update" :format="dateFormat" :valueFormat="dateFormat"/>
            </a-form-item>
            <a-form-item label="Special Member Fee" name="special_member_fee">
              <a-input-number v-model:value="offer.special_member_fee" />
            </a-form-item>
            <a-form-item label="Membership Fee" name="membership_fee">
              <a-input-number v-model:value="offer.membership_fee" />
            </a-form-item>
            <a-form-item label="Company Pay" name="company_pay">
              <a-input-number v-model:value="offer.company_pay" />
            </a-form-item>
          </div>
          <div class="w-full md:w-1/3">
            <a-form-item label="Days" name="days">
              <a-date-picker v-model:value="offer.days" :format="dateFormat" :valueFormat="dateFormat"/>
            </a-form-item>
            <a-form-item label="Seats" name="seats">
              <a-input-number v-model:value="offer.seats" />
            </a-form-item>
            <a-form-item label="Credit" name="credit">
              <a-input-number v-model:value="offer.credit" />
            </a-form-item>
            <a-form-item label="Material Fee" name="material_fee">
              <a-input-number v-model:value="offer.material_fee" />
            </a-form-item>
            <a-form-item label="Headphone Fee" name="headphone_fee">
              <a-input-number v-model:value="offer.material_fee" />
            </a-form-item>
            <a-form-item label="Discount" name="discount">
              <a-input-number v-model:value="offer.discount" />
            </a-form-item>
          </div>
          <div class="w-full md:w-1/3">
            <a-form-item label="Application" name="application">
              <a-switch v-model:value="offer.application" />
            </a-form-item>
            <a-form-item label="Front End" name="front_end">
              <a-switch v-model:value="offer.front_end" />
            </a-form-item>
            <a-form-item label="DSEJ" name="dsej">
              <a-switch v-model:value="offer.dsej" />
            </a-form-item>
            <a-form-item label="Transportation Fee" name="transportation_fee">
              <a-input-number v-model:value="offer.transportation_fee" />
            </a-form-item>
            <a-form-item label="Other Fee" name="other_fee">
              <a-input-number v-model:value="offer.other_fee" />
            </a-form-item>
            <a-form-item label="Trainer Rate" name="trainer_rate">
              <a-input-number v-model:value="offer.trainer_rate" />
            </a-form-item>
          </div>
        </div>

        <a-form-item label="Reference" name="reference">
          <a-textarea v-model:value="offer.reference" />
        </a-form-item>
        <a-form-item label="Remark" name="remark">
          <a-textarea v-model:value="offer.remark" />
        </a-form-item>
        <a-form-item label="Form Option fields" name="form">
          <a-checkbox-group v-model:value="offer.form_options" name="checkboxgroup" :options="formOptions" />
        </a-form-item>

        <a-form-item :wrapper-col="{ span: 14, offset: 4 }">
          <a-button type="primary" html-type="submit">Submit</a-button>
          <a-button :href="route('admin.offers.index')" style="margin-left: 10px">Cancel</a-button>
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
  props: ["formOptions","offer"],
  data() {
    return {
      breadcrumb:[
          {label:"Area", url:route('admin.areas.index')},
          {label:"Course", url:route('admin.courses.index')},
          {label:"Offer", url:route('admin.offers.index')},
          {label:"Edit", url:null},
      ],
      dateFormat: "YYYY-MM-DD",
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
  created() {},
  computed: {
  },
  methods: {
    onFinish() {
      if (this.offer.id) {
        this.updateRecord();
      } else {
        this.storeRecord();
      }
    },
    storeRecord() {
      this.$inertia.post(route("admin.offers.store"), this.offer, {
        onSuccess: (page) => {
          console.log(page);
        },
        onError: (err) => {
          console.log(err);
        },
      });
    },
    updateRecord() {
      this.$inertia.patch(
        route("admin.offers.update", this.offer.id),
        this.offer,
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