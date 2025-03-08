<template>
  <AdminLayout title="課程類別" :breadcrumb="breadcrumb">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="container mx-auto">
      <div class="flex justify-between px-5">
        <div class="flex gap-2">
          <a-button @click="createRecord()" type="primary">新增 +</a-button>
        </div>
      </div>
      <div class="bg-white m-5 relative shadow rounded-lg overflow-x-auto">
        <a-table :dataSource="areas" :columns="columns">
          <template #bodyCell="{ column, text, record, index }">
            <template v-if="column.dataIndex == 'operation'">
              <div class="flex ">
                <a-button :href="route('admin.area.courses', record.id)">所屬規劃</a-button>
                <a-button class="" @click="editRecord(record)"><EditOutlined class=""/>編輯</a-button>
              </div>
              </template>
            <template v-else>
              {{ record[column.dataIndex] }}
            </template>
          </template>
        </a-table>
      </div>
    </div>
    <!-- Modal Start-->
    <a-modal v-model:open="modal.isOpen" :title="modal.title" width="60%">
      <a-form ref="modalRef" :model="modal.data" name="AreaForm" :label-col="{ span: 6 }"
        autocomplete="off" :rules="rules" :validate-messages="validateMessages">
        <a-form-item label="字首" name="abbr">
          <a-input type="input"  v-model:value="modal.data.abbr" />
        </a-form-item>
        <a-form-item label="中文姓名" name="name_zh">
          <a-input type="input"  v-model:value="modal.data.name_zh" />
        </a-form-item>
        <a-form-item label="英文姓名" name="name_en">
          <a-input type="input"  v-model:value="modal.data.name_en" />
        </a-form-item>
        <a-form-item label="備註" name="remark">
          <a-textarea v-model:value="modal.data.remark" />
        </a-form-item>
      </a-form>
      <template #footer>
        <a-button type="primary" @click="submitForm()">{{
          modal.mode == "EDIT" ? "編輯" : "新增"
          }}</a-button>
      </template>
    </a-modal>
    <!-- Modal End-->
  </AdminLayout>
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
  props: ["areas"],
  data() {
    return {
      breadcrumb: [
        { label: "Area", url: null },
      ],
      modal: {
        isOpen: false,
        data: {},
        title: "Modal",
        mode: "",
      },
      teacherStateLabels: {},
      columns: [
        {
          title: "字首",
          dataIndex: "abbr",
        },
        {
          title: "中文姓名",
          dataIndex: "name_zh",
        },
        {
          title: "英文姓名",
          dataIndex: "name_en",
        },
        {
          title: "操作",
          dataIndex: "operation",
        },
      ],
      rules: {
        abbr: { required: true },
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
   },
  methods: {
    createRecord() {
      this.modal.data = {};
      this.modal.mode = "CREATE";
      this.modal.title = "新增";
      this.modal.isOpen = true;
    },
    editRecord(record) {
      this.modal.data = { ...record };
      this.modal.mode = "EDIT";
      this.modal.title = "編輯";
      this.modal.isOpen = true;
    },
    submitForm() {
      this.$refs.modalRef
        .validateFields() // Validate the form fields
        .then(() => {
          // If validation passes, call onFinish
          if (this.modal.data.id) {
            this.updateRecord();
          } else {
            this.storeRecord();
          }
        })
        .catch((error) => {
          // Handle validation errors if needed
          console.log("Validation failed:", error);
        });
    },
    storeRecord() {
      this.$inertia.post(route("admin.areas.store"), this.modal.data, {
        onSuccess: (page) => {
          this.modal.data = {};
          this.modal.isOpen = false;
        },
        onError: (err) => {
          console.log(err);
        },
      });
    },
    updateRecord() {
      this.$inertia.patch(
        route("admin.areas.update", this.modal.data.id),
        this.modal.data,
        {
          onSuccess: (page) => {
            this.modal.data = {};
            this.modal.isOpen = false;
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