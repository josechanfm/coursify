<template>
  <WebLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Application Form</h2>
    </template>
    <div>
      <div>
        <div>{{ offer.code }}</div>
        <div>{{ offer.name_zh }}</div>
      </div>  
      <div v-if="responseMessage">
        <a-alert :message="responseMessage" type="success" show-icon />
      </div> 
      <a-form
        ref="formRef"
        :model="application"
        name="ApplicationForm"
        :label-col="{ style: 'width:200px' }"
        autocomplete="off"
        :rules="rules"
        :validate-messages="validateMessages"
        @finish="onFinish"
      >
      <div v-if="step==1">
        <a-form-item label="Id Number" name="id_num">
          <a-input v-model:value="application.id_num" />
        </a-form-item>
        <a-form-item label="Date of Birth" name="dob">
          <a-date-picker v-model:value="application.dob" :format="dateFormat" :valueFormat="dateFormat"/>
        </a-form-item>
        <a-button @click="varifyApplicant()">Varify</a-button>
      </div>
      <div v-if="step==2">
        <a-form-item label="Code" name="code">
          <a-input v-model:value="application.code" />
        </a-form-item>
        <a-form-item label="Name (zh)" name="name_zh">
          <a-input v-model:value="application.name_zh" />
        </a-form-item>
        <a-form-item label="Name (en)" name="name_en">
          <a-input v-model:value="application.name_en" />
        </a-form-item>
        <a-form-item label="Remark" name="remark">
          <a-textarea v-model:value="application.remark" />
        </a-form-item>
        <a-form-item :wrapper-col="{ span: 14, offset: 4 }">
          <a-button type="primary" html-type="submit">Submit</a-button>
          <a-button :href="route('admin.courses.index')" style="margin-left: 10px">Cancel</a-button>
        </a-form-item>
      </div>
      </a-form>
    </div>
  </WebLayout>
</template>

<script>
import WebLayout from "@/Layouts/WebLayout.vue";

export default {
  components: {
    WebLayout,
  },
  props: ["offer","application"],
  data() {
    return {
      responseMessage: null,
      step: 1,
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
      this.$inertia.post(route("application.submit"), this.application, {
        onSuccess: (page) => {
          console.log(page);
        },
        onError: (err) => {
          console.log("duplicate code", this.course);
          console.log(err);
        },
      });
    },
    async varifyApplicant(){
      console.log(this.application)
      try {
        const response = await axios.post('/application/checker', this.application);
        this.responseMessage = `Success: ${response.data.message}`;
        console.log(response.data)
        this.step = 2;

      } catch (error) {
        if (error.response) {
          this.responseMessage = `Error: ${error.response.data.message}`;
        } else {
          this.responseMessage = 'Error: Unable to submit data';
        }
      }
    }
  },
};
</script>