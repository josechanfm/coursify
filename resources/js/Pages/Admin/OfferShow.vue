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
          {{ offer.code }}
        </a-form-item>
        <a-form-item label="Name (zh)" name="name_zh">
          {{ offer.name_zh }}
        </a-form-item>
        <a-form-item label="Name (en)" name="name_en">
          {{ offer.name_en }}
        </a-form-item>
        <div class="flex flex-wrap justify-between">
          <div class="w-full md:w-1/3">
            <a-form-item label="Apply Start" name="apply_start">
              {{ offer.apply_start }}
            </a-form-item>
            <a-form-item label="Apply End" name="apply_end">
              {{ offer.apply_end }}
            </a-form-item>
            <a-form-item label="Application update" name="application_update">
              {{ offer.application_update }}
            </a-form-item>
            <a-form-item label="Special Member Fee" name="special_member_fee">
              {{ offer.special_member_fee }}
            </a-form-item>
            <a-form-item label="Membership Fee" name="membership_fee">
              {{ offer.membership_fee }}
            </a-form-item>
            <a-form-item label="Company Pay" name="company_pay">
              {{ offer.company_pay }}
            </a-form-item>
          </div>
          <div class="w-full md:w-1/3">
            <a-form-item label="Days" name="days">
              {{ offer.days }}
            </a-form-item>
            <a-form-item label="Seats" name="seats">
              {{ offer.seats }}
            </a-form-item>
            <a-form-item label="Credit" name="credit">
              {{ offer.credit }}
            </a-form-item>
            <a-form-item label="Material Fee" name="material_fee">
              {{ offer.material_fee }}
            </a-form-item>
            <a-form-item label="Headphone Fee" name="headphone_fee">
              {{ offer.material_fee }}
            </a-form-item>
            <a-form-item label="Discount" name="discount">
              {{ offer.discount }}
            </a-form-item>
          </div>
          <div class="w-full md:w-1/3">
            <a-form-item label="Application" name="application">
              {{ offer.application }}
            </a-form-item>
            <a-form-item label="Front End" name="front_end">
              {{ offer.front_end }}
            </a-form-item>
            <a-form-item label="DSEJ" name="dsej">
              {{ offer.dsej }}
            </a-form-item>
            <a-form-item label="Transportation Fee" name="transportation_fee">
               {{ offer.transportation_fee }}
            </a-form-item>
            <a-form-item label="Other Fee" name="other_fee">
              {{ offer.other_fee }}
            </a-form-item>
            <a-form-item label="Trainer Rate" name="trainer_rate">
               {{ offer.trainer_rate }}
            </a-form-item>
          </div>
        </div>

        <a-form-item label="Reference" name="reference">
          {{ offer.reference }}
        </a-form-item>
        <a-form-item label="Remark" name="remark">
          {{ offer.remark }}
        </a-form-item>
        <a-form-item label="Form Option fields" name="form">
          {{ offer.form_options }}
        </a-form-item>
        <div class="flex justify-center gap-2">
          <a-button :href="route('admin.offers.edit',offer.id)" type="primary">Edit</a-button>
          <a href="javascript:history.back();" class="inline">
            <a-button>Back</a-button>
          </a>
        </div>
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