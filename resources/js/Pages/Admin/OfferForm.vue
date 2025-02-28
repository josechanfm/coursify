<template>
  <AdminLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div>
      <a-form
        ref="modalRef"
        :model="offer"
        name="OfferForm"
        :label-col="{ style: 'width:200px' }"
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
        <a-form-item label="Remark" name="remark">
          <a-textarea v-model:value="offer.remark" />
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
  props: ["offer"],
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