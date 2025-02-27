<template>
  <AdminLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div>
      <a-form
        ref="modalRef"
        :model="course"
        name="Teacher"
        :label-col="{ style: 'width:200px' }"
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
          <a-input v-model:value="course.code" />
        </a-form-item>
        <a-form-item label="Type" name="type">
          <a-select v-model:value="course.type" :options="courseTypes"/>
        </a-form-item>
        <a-form-item label="Name (zh)" name="name_zh">
          <a-input v-model:value="course.name_zh" />
        </a-form-item>
        <a-form-item label="Name (en)" name="name_en">
          <a-input v-model:value="course.name_en" />
        </a-form-item>
        <a-form-item label="Remark" name="remark">
          <a-textarea v-model:value="course.remark" />
        </a-form-item>
        <a-form-item :wrapper-col="{ span: 14, offset: 4 }">
          <a-button type="primary" html-type="submit">Submit</a-button>
          <a-button :href="route('admin.courses.index')" style="margin-left: 10px">Cancel</a-button>
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
  props: ["areas","courseTypes", "course"],
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