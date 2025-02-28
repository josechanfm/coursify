<template>
  <WebLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Application Form</h2>
    </template>
    <div>
      <div v-if="responseMessage">
        <a-alert :message="responseMessage.message" :type="responseMessage.type?'success':'error'" show-icon />
      </div>
      {{ offer }}
      <div class="p-5">
        <div class="bg-white rounded-lg shadow-lg" style="border-top-style: solid; border-color: blue;">
          <div class="p-4">
            <h3 class="text-xl font-bold text-gray-800">{{ offer.code }} {{ offer.name_zh }}</h3>
            <template v-if="offer.course.description">
              <h3 class="text-lg font-bold">Description</h3>
              <p class="text-gray-700" v-html="offer.course.description"/>
            </template>
            <template v-if="offer.course.method">
              <h3 class="text-lg font-bold">Method</h3>
              <p class="text-gray-700" v-html="offer.course.method"/>
            </template>
            <template v-if="offer.course.target">
              <h3 class="text-lg font-bold">Target</h3>
              <p class="text-gray-700" v-html="offer.course.target"/>
            </template>
          </div>

          <div >
            <a-form ref="formRef" :model="application" name="ApplicationForm" :label-col="{ style: 'width:150px' }"
              autocomplete="off" :rules="rules" :validate-messages="validateMessages" @finish="onFinish">
              <div v-if="step == 1" class="w-[500px] pb-10">
                <a-form-item label="Id Number" name="id_num">
                  <a-radio-group v-model:value="application.id_type" button-style="solid">
                    <a-radio-button value="MO">Macao</a-radio-button>
                    <a-radio-button value="HK">Hong Kong</a-radio-button>
                    <a-radio-button value="OT">Other</a-radio-button>
                  </a-radio-group>
                </a-form-item>
                <a-form-item label="Id Number" name="id_num">
                  <a-input v-model:value="application.id_num" />
                </a-form-item>
                <a-form-item label="Email" name="email">
                  <a-input v-model:value="application.email" :disabled="application.is_student"/>
                </a-form-item>
                <div class="text-center">
                  <a-button @click="varifyApplicant()">Varify</a-button>
                </div>
              </div>
              <div v-if="step == 2">
                <a-form-item label="Name (zh)" name="name_zh">
                  <a-input v-model:value="application.name_zh" :disabled="application.is_student"/>
                </a-form-item>
                <a-form-item label="Name (en)" name="name_en">
                  <a-input v-model:value="application.name_en" :disabled="application.is_student"/>
                </a-form-item>
                <a-form-item label="Gender" name="gender">
                  <a-radio-group v-model:value="application.gender" button-style="solid" :disabled="application.is_student">
                    <a-radio-button value="M">Male</a-radio-button>
                    <a-radio-button value="F">Female</a-radio-button>
                  </a-radio-group>
                </a-form-item>
                <a-form-item label="Date of Birth" name="dob">
                  <a-date-picker v-model:value="application.dob" :format="dateFormat" :valueFormat="dateFormat" :disabled="application.is_student"/>
                </a-form-item>
                <a-form-item label="Phone" name="phone">
                  <a-input v-model:value="application.phone"/>
                </a-form-item>
                <a-form-item label="Another Contact" name="other_contact">
                  <a-input v-model:value="application.other_contact"/>
                </a-form-item>
                <a-form-item label="Language" name="lang">
                  <a-radio-group v-model:value="application.lang">
                    <a-radio value="ZH">Chinese</a-radio>
                    <a-radio value="EN">English</a-radio>
                  </a-radio-group>
                </a-form-item>
                <a-form-item label="Channel" name="channel">
                  <a-radio-group v-model:value="application.channel">
                    <a-radio value="FB">Facebook</a-radio>
                    <a-radio value="IG">Instagram</a-radio>
                    <a-radio value="OT">Other</a-radio>
                  </a-radio-group>
                </a-form-item>

                <a-form-item label="Work Company" name="work_company">
                  <a-input v-model:value="application.work_company"/>
                </a-form-item>
                <a-form-item label="Work Position" name="work_position">
                  <a-input v-model:value="application.work_position"/>
                </a-form-item>
                <a-form-item label="Name on Certificate" name="cert_name" v-if="offer.form_options.includes('CERT_NAME')">
                  <a-input v-model:value="application.cert_name"/>
                </a-form-item>
                <a-form-item label="Education Levels" name="education" v-if="offer.form_options.includes('EDUCATION_LEVEL')">
                  <a-input v-model:value="application.education"/>
                </a-form-item>
                <a-form-item label="Promotion" name="promotion" v-if="offer.form_options.includes('PROMOTION_CODE')">
                  <a-input v-model:value="application.promotion"/>
                </a-form-item>

                <a-form-item label="教職員工或學生" name="">
                  你是否澳門城市大學教職員工或學生?<br/>
                  <a-radio-group v-model:value="offer.is_cityu">
                    <a-radio value="NON">都不是</a-radio>
                    <a-radio value="STAFF">我是教/職員工</a-radio>
                    <a-radio value="STUDENT">我是學生</a-radio>
                  </a-radio-group>
                </a-form-item>

                <a-form-item 
                  name="school_number" 
                  :label="offer.is_cityu=='STAFF'?'教職員工編號':'學生號碼'" 
                  v-if="offer.is_cityu=='STAFF' || offer.is_cityu=='STUDENT'">
                  <a-input v-model:value="application.school_number"/>
                </a-form-item>



                {{ offer.form_extra }}

                
                <a-form-item :wrapper-col="{ span: 14, offset: 4 }">
                  <a-button type="primary" html-type="submit">Submit</a-button>
                  <a-button :href="route('admin.courses.index')" style="margin-left: 10px">Cancel</a-button>
                </a-form-item>
              </div>
            </a-form>
          </div>
        </div>
      </div>

    </div>
  </WebLayout>
</template>

<script>
import WebLayout from "@/Layouts/WebLayout.vue";

export default {
  components: {
    WebLayout,
  },
  props: ["offer", "application"],
  data() {
    return {
      responseMessage: null,
      step: 1,
      dateFormat: "YYYY-MM-DD",
      rules: {
        code: { required: true },
        id_type: { required: true },
        id_num: { required: true },
        email: { required: true, type:'email' },
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
  created() { },
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
    async varifyApplicant() {
      console.log(this.application)
      try {
        const response = await axios.post('/application/checker', this.application);
        console.log(response.data)
        if(response.data.is_valid==1){
          this.responseMessage = {type: true, message: `Success: Your identify is valid`};
          this.step=2
        }else if(response.data.is_valid==2){
          this.application.is_student=true;
          this.application.email=response.data.student.email;
          this.application.name_zh=response.data.student.name_zh;
          this.application.name_en=response.data.student.name_en;
          this.application.dob=response.data.student.dob;
          this.application.gender=response.data.student.gender;
          this.application.phone=response.data.student.phone;
          this.responseMessage = {type: false, message: `Already: your email or id has been registered.`};
          this.step=2
        }else{
          this.responseMessage = {type: false, message: `Fail: The ID number does not match the type you selected.`};
        }
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