<template>
  <AdminLayout title="Dashboard" :breadcrumb="breadcrumb">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="container mx-auto">
      <div class="flex justify-end pr-5">
        <a-button @click="createRecord()" type="primary"> Create </a-button>
      </div>

      <div class="bg-white m-5 relative shadow rounded-lg overflow-x-auto">
        <a-table :dataSource="areas" :columns="columns">
          <template #bodyCell="{ column, text, record, index }">
            <template v-if="column.dataIndex == 'operation'">
              <a-button :href="route('admin.area.courses',record.id)">Courses</a-button>
              <a-button @click="editRecord(record)">Edit</a-button>
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
      <a-form
        ref="modalRef"
        :model="modal.data"
        name="AreaForm"
        :label-col="{ span: 8 }"
        :wrapper-col="{ span: 16 }"
        autocomplete="off"
        :rules="rules"
        :validate-messages="validateMessages"
      >
        <a-form-item label="Abbr" name="abbr">
          <a-input v-model:value="modal.data.abbr" />
        </a-form-item>
        <a-form-item label="Name (zh)" name="name_zh">
          <a-input v-model:value="modal.data.name_zh" />
        </a-form-item>
        <a-form-item label="Name (en)" name="name_en">
          <a-input v-model:value="modal.data.name_en" />
        </a-form-item>
        <a-form-item label="Remark" name="remark">
          <a-textarea v-model:value="modal.data.remark" />
        </a-form-item>
      </a-form>
      <template #footer>
        <a-button type="primary" @click="submitForm()">{{
          modal.mode == "EDIT" ? "Edit" : "Add"
        }}</a-button>
      </template>
    </a-modal>
    <!-- Modal End-->
  </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { defineComponent, reactive } from "vue";

export default {
  components: {
    AdminLayout,
  },
  props: ["areas"],
  data() {
    return {
      breadcrumb:[
          {label:"Area" ,url:null},
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
          title: "Abbr",
          dataIndex: "abbr",
        },
        {
          title: "Name (zh)",
          dataIndex: "name_zh",
        },
        {
          title: "Name (en)",
          dataIndex: "name_en",
        },
        {
          title: "Operation",
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
  created() {},
  methods: {
    createRecord() {
      this.modal.data = {};
      this.modal.mode = "CREATE";
      this.modal.title = "Create";
      this.modal.isOpen = true;
    },
    editRecord(record) {
      this.modal.data = { ...record };
      this.modal.mode = "EDIT";
      this.modal.title = "Edit";
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