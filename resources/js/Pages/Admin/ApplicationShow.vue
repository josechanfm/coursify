<template>
  <AdminLayout title="Application Form" :breadcrumb="breadcrumb">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="bg-white m-5 p-5 rounded-md shadow">
      <a-form
        ref="modalRef"
        :model="application"
        name="CourseForm"
        :label-col="{ style: 'width:150px' }"
        autocomplete="off"
        :rules="rules"
        :validate-messages="validateMessages"
        @finish="onFinish"
      >
        <a-form-item label="Offer" name="offer_id">
          {{ application.offer_id}}
        </a-form-item>
        <a-form-item label="Code">
          {{ application.code }}
        </a-form-item>
        <a-form-item label="Name (zh)">
          {{ application.name_zh }}
        </a-form-item>
        <a-form-item label="Name (en)">
          {{ application.name_en }}
        </a-form-item>
        <a-form-item label="Gender">
            {{ application.gender=="M"?"Male":"Female" }}
        </a-form-item>
        <a-form-item label="Date of Birth">
          {{ application.dob }}
        </a-form-item>
        <a-form-item label="Phone">
          {{ application.phone }}
        </a-form-item>
        <a-form-item label="Another Contact">
          {{ application.other_contact }}
        </a-form-item>
        <a-form-item label="Language">
          {{ application.lang }}
        </a-form-item>
          {{ application.channel }}
        <a-form-item label="Industry">
          {{ application.work_company }}
        </a-form-item>
        <a-form-item label="Work Company">
          {{ application.work_company }}
        </a-form-item>
        <a-form-item label="Work Position">
          {{ application.work_position }}
        </a-form-item>
        <a-form-item label="Name on Certificate" name="cert_name" v-if="offer.form_options && offer.form_options.includes('CERT_NAME')">
          {{ application.cert_name }}
        </a-form-item>
        <a-form-item label="Education Levels" name="education" v-if="offer.form_options && offer.form_options.includes('EDUCATION_LEVEL')">
          {{ application.education }}
        </a-form-item>
        <a-form-item label="Promotion" name="promotion" v-if="offer.form_options && offer.form_options.includes('PROMOTION_CODE')">
          {{ application.promotion }}
        </a-form-item>
        <a-form-item label="教職員工或學生" name="">
          <span>{{ application.school_number }}</span>
        </a-form-item>


        <template v-for="extra in offer.form_extra" v-if="application.extra">
          <template v-if="extra.type=='input'">
            <a-form-item :label="extra.label">
              {{ application.extra[extra.name] }}
            </a-form-item>
          </template>
          <template v-else-if="extra.type=='select'">
            <a-form-item :label="extra.label">
              {{ application.extra[extra.name] }}
            </a-form-item>
          </template>
          <template v-else-if="extra.type=='radio'">
            <a-form-item :label="extra.label">
              {{ application.extra[extra.name] }}
            </a-form-item>
          </template>
        </template>
        <a-form-item label="Remark" name="remark">
          <a-textarea v-model:value="application.remark" />
        </a-form-item>
        <div class="flex justify-center gap-2">
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
  props: ["offer","application"],
  data() {
    return {
      breadcrumb:[
          {label:"Area" ,url:route('admin.areas.index')},
          {label:"Course" ,url:route('admin.courses.index')},
          {label:"Offer" ,url:route('admin.offers.index')},
          {label:"Application" ,url:route('admin.applications.index')},
          {label:"Edit" ,url:null},
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
  created() {},
  computed: {
    areaOptions() {
      return this.areas.map((a) => {
        return { value: a.id, label: a.abbr + "-" + a.name_zh };
      });
    },
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