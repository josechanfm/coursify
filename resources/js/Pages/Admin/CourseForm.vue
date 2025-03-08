<template>
  <AdminLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="bg-white m-5 p-5 rounded-md shadow">
      <a-form
        ref="modalRef"
        :model="course"
        name="CourseForm"
        :label-col="{ style: 'width:150px' }"
        autocomplete="off"
        :rules="rules"
        :validate-messages="validateMessages"
        @finish="onFinish"
      >
        <a-form-item label="Area" name="area_id">
          <a-select
            v-model:value="course.area_id"
            :options="areas"
            :fieldNames="{ value: 'id', label: 'name_zh' }"
          />
        </a-form-item>
        <a-form-item label="Code" name="code">
          <a-input type="input"  v-model:value="course.code" />
        </a-form-item>
        <a-form-item label="Type" name="type">
          <a-select v-model:value="course.type" :options="courseTypes"/>
        </a-form-item>
        <a-form-item label="Name (zh)" name="name_zh">
          <a-input type="input"  v-model:value="course.name_zh" />
        </a-form-item>
        <a-form-item label="Name (en)" name="name_en">
          <a-input type="input"  v-model:value="course.name_en" />
        </a-form-item>
        <a-form-item label="Description" name="description">
          <a-textarea v-model:value="course.description" />
        </a-form-item>
        <a-form-item label="Method" name="method">
          <a-textarea v-model:value="course.method" />
        </a-form-item>
        <a-form-item label="Target" name="target">
          <a-textarea v-model:value="course.target" />
        </a-form-item>
        <a-form-item label="Prerequisite" name="prerequisite">
          <a-input type="input"  v-model:value="course.prerequisite" />
        </a-form-item>

        <div class="flex flex-wrap justify-between">
          <div class="w-full md:w-1/3">
            <a-form-item label="Conduct Language" name="conduct_lang">
              <a-select v-model:value="course.conduct_lang" :options="languageTypes"/>
            </a-form-item>
            <a-form-item label="Handhout Language" name="handhout_lang">
              <a-select v-model:value="course.handhout_lang" :options="languageTypes"/>
            </a-form-item>
            <a-form-item label="Certificate" name="certificate">
              <a-select v-model:value="course.certificate" :options="certificateTypes"/>
            </a-form-item>
          </div>
          <div class="w-full md:w-1/3">
            <a-form-item label="Hours" name="hours">
              <a-input type="input" -number v-model:value="course.hours" />
            </a-form-item>
            <a-form-item label="Tution Fee" name="tution_fee">
              <a-input type="input" -number v-model:value="course.tution_fee" />
            </a-form-item>
            <a-form-item label="Other Fee" name="other_fee">
              <a-input type="input" -number v-model:value="course.other_fee" />
            </a-form-item>
          </div>
          <div class="w-full md:w-1/3">
            <a-form-item label="Payment" name="payment">
              <a-input type="input"  v-model:value="course.payment" />
            </a-form-item>
            <a-form-item label="Quota" name="quota">
              <a-input type="input" -number v-model:value="course.quota" />
            </a-form-item>
            <a-form-item label="Active" name="active">
              <a-switch v-model:value="course.active" />
            </a-form-item>
            <a-form-item label="Assessement" name="assessment">
              <a-switch v-model:value="course.assessment" />
            </a-form-item>
          </div>
        </div>



        <a-form-item label="Remark" name="remark">
          <a-textarea v-model:value="course.remark" />
        </a-form-item>
        <div class="flex justify-center gap-2">
          <a-button type="primary" html-type="submit">Submit</a-button>
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
  props: ["areas","courseTypes","languageTypes","certificateTypes", "course"],
  data() {
    return {
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
      if (this.course.id) {
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
        route("admin.courses.update", this.course.id),
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