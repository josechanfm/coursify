<template>
<WebLayout title="Dashboard">
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Application Form</h2>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" flex flex-col gap-4" >
                <div class="text-slate-400 text-end">{{ offer.code }} {{ offer.name_zh }}</div>
                <div class="p-4 bg-blue-600 rounded-md shadow-md text-white">
                    <template v-if="offer.course.description">
                        <h3 class="text-lg font-bold">Description</h3>
                        <p v-html="offer.course.description" />
                    </template>
                    <template v-if="offer.course.method">
                        <h3 class="text-lg font-bold">Method</h3>
                        <p v-html="offer.course.method" />
                    </template>
                    <template v-if="offer.course.target">
                        <h3 class="text-lg font-bold">Target</h3>
                        <p v-html="offer.course.target" />
                    </template>
                </div>
                <div class="bg-white rounded-lg shadow-lg">
                    <a-form ref="identifyForm" class="p-2" :model="identify" name="identifyForm" :label-col="{ style: 'width:150px' }" autocomplete="off" :rules="identifyRules" :validate-messages="validateMessages">
                        <div v-if="step == 1" class=" pb-10">
                            <a-form-item label="證件類別" name="id_type">
                                <a-radio-group v-model:value="identify.id_type" button-style="solid">
                                    <a-radio-button value="MO">澳門居民身份證</a-radio-button>
                                    <a-radio-button value="HK">香港居民身份證</a-radio-button>
                                    <a-radio-button value="OT">其他證件</a-radio-button>
                                </a-radio-group>
                            </a-form-item>
                            <div class="flex">
                                <a-form-item label="證件編號" 
                                    v-bind="idNumMessage"
                                    name="id_num" class="w-1/2 md:w-1/2">
                                    <a-input :class=" idNumError?'border-red-500':''" type="input" v-model:value="identify.id_num" />
                                </a-form-item>
                                <div class="px-4 leading-5">
                                    不需輸入任何符號<br>
                                    asdfsdfsd<br>
                                    safsdfsd<br>
                                </div>
                            </div>
                            <a-form-item 
                                v-bind="emailMessage"
                                label="電郵" name="email" class="w-1/2 md:w-1/2">
                                <a-input :class=" emailError?'border-red-500':''" type="input" v-model:value="identify.email" :disabled="application.is_student" />
                            </a-form-item>
                            
                            <div class="flex">
                                <div class="sm:w-36"></div>
                                <a-button class="bg-slate-100 font-bold m-1" @click="verifyIdentify()">登錄/新登記</a-button>
                            </div>
                        </div>
                    </a-form>
                    <a-form ref="applicationForm" class="p-2" :model="application" name="applicationForm" :label-col="{ style: 'width:150px' }" autocomplete="off" :rules="applicationRules" :validate-messages="validateMessages" @finish="onFinish">
                        <div v-if="step == 2">
                            <a-form-item label="證件類別" name="id_num">
                                <a-radio-group v-model:value="application.id_type" button-style="solid" :disabled="true">
                                    <a-radio-button value="MO">澳門居民身份證</a-radio-button>
                                    <a-radio-button value="HK">香港居民身份證</a-radio-button>
                                    <a-radio-button value="OT">其他證件</a-radio-button>
                                </a-radio-group>
                            </a-form-item>
                            <a-form-item label="證件編號" name="id_num">
                                <a-input type="input" v-model:value="application.id_num" :disabled="true" />
                            </a-form-item>
                            <a-form-item label="電郵" name="email">
                                <a-input type="input" v-model:value="application.email" :disabled="true" />
                            </a-form-item>

                            <a-form-item label="名字(中文)" name="name_zh">
                                <a-input type="input" v-model:value="application.name_zh" :disabled="application.is_student" />
                            </a-form-item>
                            <a-form-item label="名字(英文)" name="name_en">
                                <a-input type="input" v-model:value="application.name_en" :disabled="application.is_student" />
                            </a-form-item>
                            <a-form-item label="證書上名字" name="cert_name" v-if="offer.form_options && offer.form_options.includes('CERT_NAME')">
                                <a-input type="input" v-model:value="application.cert_name" />
                            </a-form-item>
                            <a-form-item label="性別" name="gender">
                                <a-radio-group v-model:value="application.gender" button-style="solid" :disabled="application.is_student">
                                    <a-radio-button value="M">男</a-radio-button>
                                    <a-radio-button value="F">女</a-radio-button>
                                </a-radio-group>
                            </a-form-item>
                            <a-form-item label="出生日期" name="dob">
                                <a-date-picker v-model:value="application.dob" placeholder="選擇日期" :format="dateFormat" :valueFormat="dateFormat" :disabled="application.is_student" />
                            </a-form-item>
                            <a-form-item label="電話" name="phone">
                                <a-input type="input" v-model:value="application.phone" />
                            </a-form-item>
                            <a-form-item label="其他電話" name="other_contact">
                                <a-input type="input" v-model:value="application.other_contact" />
                            </a-form-item>
                            <a-form-item label="教材語言" name="textbook_lang">
                                <a-radio-group v-model:value="application.textbook_lang" name="textbook_lang">
                                    <a-radio value="zh">中文</a-radio>
                                    <a-radio value="en">英文</a-radio>
                                </a-radio-group>
                            </a-form-item>
                            <a-form-item label="任職公司" name="work_company">
                                <a-input type="input" v-model:value="application.work_company" />
                            </a-form-item>
                            <a-form-item label="任職職位" name="work_position">
                                <a-input type="input" v-model:value="application.work_position" />
                            </a-form-item>
                            <a-form-item label="教育程度" name="education" v-if="offer.form_options && offer.form_options.includes('EDUCATION_LEVEL')">
                                <a-input type="input" v-model:value="application.education" />
                            </a-form-item>
                            <a-form-item label="推廣" name="promotion" v-if="offer.form_options && offer.form_options.includes('PROMOTION_CODE')">
                                <a-input type="input" v-model:value="application.promotion" />
                            </a-form-item>

                            <a-form-item label="教職員工或學生" name="">
                                你是否澳門城市大學教職員工或學生?<br />
                                <a-radio-group v-model:value="application.is_cityu">
                                    <a-radio value="NON">都不是</a-radio>
                                    <a-radio value="STAFF">我是教/職員工</a-radio>
                                    <a-radio value="STUDENT">我是學生</a-radio>
                                </a-radio-group>
                            </a-form-item>
                            <a-form-item name="school_number" :label="application.is_cityu=='STAFF'?'教職員工編號':'學生號碼'" v-if="application.is_cityu=='STAFF' || application.is_cityu=='STUDENT'">
                                <a-input type="input" v-model:value="application.school_number" />
                            </a-form-item>

                            <template v-for="extra in offer.form_extra">
                                <template v-if="extra.type=='input'">
                                    <a-form-item :label="extra.label">
                                        <a-input type="input" v-model:value="application.extra[extra.name]" />
                                    </a-form-item>
                                </template>
                                <template v-else-if="extra.type=='select'">
                                    <a-form-item :label="extra.label">
                                        <a-select v-model:value="application.extra[extra.name]" :options="extra.options" />
                                    </a-form-item>
                                </template>
                                <template v-else-if="extra.type=='radio'">
                                    <a-form-item :label="extra.label">
                                        <a-radio-group v-model:value="application.extra[extra.name]" :options="extra.options" />
                                    </a-form-item>
                                </template>
                            </template>

                            <a-form-item :wrapper-col="{ span: 15, offset: 3 }">
                                <a-button type="primary" html-type="submit">遞交報名表</a-button>
                                
                                <div class="italic mt-4 text-slate-500"># 報名完成後將發送確認郵件至您的郵箱，內含繳費指引與查詢報名事宜，若有任何疑問，歡迎隨時聯繫我們</div>
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
import { notification } from 'ant-design-vue';
import { getTransitionRawChildren } from "vue";

export default {
    components: {
        WebLayout,
        notification,
    },
    props: ["offer"],
    data() {
        return {
            application:{},
            responseMessage: null,

            idNumError: false,
            // message:  { 'validateStatus' : 'error' , 'help': [['test']] }
            idNumMessage: {},
            emailError: false,
            emailMessage: {},

            step: 1,
            dateFormat: "YYYY-MM-DD",
            
            identify: {},

            identifyRules: {
                id_type: { required: true },
                id_num: { required: true },
                email: { required: true, type:'email' },
                
            },
            applicationRules: {
                id_type: { required: true },
                id_num: { required: true },
                email: { required: true, type:'email' },
                name_zh: { required: true },
                
            },
            validateMessages: {
                required: "${label} 是必填欄位!",
                types: {
                    email: "${label} 不是有效的電郵!",
                    number: "${label} 不是有效數字!",
                },
                number: {
                    range: "${label} must be between ${min} and ${max}",
                },
            },
        };
    },
    created() {
        this.identify.id_type = 'MO'
        this.identify.email = 'fong@gmail.com'
        this.application.offer_id = this.offer.id
        this.application.extra = {}
        window.app=this
    },
    computed: {},
    methods: {
        onFinish() {
            console.log(this.application)
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
        
        verifyIdentify(){
            this.$refs.identifyForm.validateFields().then(() => {
                this.application.id_type = this.identify.id_type
                this.application.id_num = this.identify.id_num
                this.application.email = this.identify.email
                this.handleVerifyIdentify()
            }).catch(err => {
                console.log("error", err);
            });
        },
        async handleVerifyIdentify() {
            try {
                const response = await axios.post('/application/checker', this.application);
                console.log( response.data )
                const { is_valid, student } = response.data;
                this.idNumMessage = {}
                this.emailMessage = {}
                switch (is_valid) {
                    case -1: this.handleEmailUsed(); break;
                    case 0: this.handleExistApply(); break;
                    case 1: this.handleValidId(); break;
                    case 2: this.handleExistingStudent(student); break;
                    case 3: this.handleExistingStudentDiffEmail(student); break;
                    default: this.handleInvalidId();
                }
            } catch (error) {
                notification.error({
                    message: '系統訊息', description: '無法進行報名。',
                });
            }
        },
        handleEmailUsed() {
            // -1
            this.emailMessage = { 'validateStatus': 'error' , 'help': [['該電郵已被其他人使用。']] }
        },
        handleExistApply() {
            // 0
            this.idNumMessage = { 'validateStatus': 'error' , 'help': [['您已報讀該課程，可在登入後查看報名記錄。']] }
        },
        handleValidId() {
            // 1
            notification.success({
                message: '系統訊息', description: '身份證驗證成功。',
            });
            this.step = 2;
        },
        handleExistingStudent(student) {
            // 2
            console.log(this.application)
            this.application = {
                ...this.application, 
                is_student: true,
                email: student.email,
                name_zh: student.name_zh,
                name_en: student.name_en,
                dob: student.dob,
                gender: student.gender,
                phone: student.phone
            };
            notification.success({
                message: '系統訊息', description: '檢測到曾有報名記錄，自動輸入報名資料。',
            });
            this.step = 2;
        },
        handleExistingStudentDiffEmail(){
            // 3
            notification.info({
                duration: 10,
                message: '系統訊息', description: '檢測到曾有報名記錄，但電郵不一樣。',
            });
            this.step = 2;
        },
        handleInvalidId() {
            this.idNumMessage = { 'validateStatus': 'error' , 'help': [['身份證驗證失敗，請輸入正確身份證。']] }
        },
    },
};
</script>
