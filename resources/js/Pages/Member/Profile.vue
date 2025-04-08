<template>
    <MemberLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                個人資料
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8   ">

                <a-form ref="studentForm" :model="form" :rules="rules" :validate-messages="validateMessages">
                    <a-descriptions bordered class="bg-white shadow-md rounded-lg border-t-2 transition-transform transform" :class="viewing? 'border-blue-500' : 'border-blue-500'" :column="2">
                        <a-descriptions-item :span="2">
                            <div class="py-1 px-2 justify-end flex gap-2">
                                <a @click="editSubmit" v-if="!viewing"
                                    class="px-4 py-3 rounded-lg text-white bg-green-500 shadow hover:bg-green-600 hover:text-white transition-transform transform hover:scale-105">
                                    <check-outlined />
                                    提交修改</a>
                                <a @click="viewing = true" v-if="!viewing"
                                    class="px-4 py-3 border rounded-lg text-black bg-white shadow hover:bg-slate-100 transition-transform transform hover:scale-105">
                                    取消修改</a>
                                <a @click="editInfo" v-if="viewing"
                                    class="px-4 py-3 rounded-lg text-white bg-blue-500 shadow hover:bg-blue-600 hover:text-white transition-transform transform hover:scale-105">
                                    <edit-outlined />
                                    修改資料</a>
                            </div>
                        </a-descriptions-item>
                        <a-descriptions-item label="姓名(中文)" :span="2">
                            <a-form-item name="name_zh" class="">
                                <component class="text-base px-4" v-model:value="form.name_zh" :is="CheckViewing()" :class="viewing ? 'viewing' : 'editing'">
                                    {{ form.name_zh }}
                                </component>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="姓名(英文)" :span="2" class="">
                            <a-form-item name="name_en" class="">
                                <component class="text-base px-4" v-model:value="form.name_en" :is="CheckViewing()" :class="viewing ? 'viewing' : 'editing'">
                                    {{ form.name_en }}
                                </component>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="證書上名字" :span="2">
                            <a-form-item name="cert_name" class="">
                                <component class="text-base px-4" v-model:value="form.cert_name" :is="CheckViewing()" :class="viewing ? 'viewing' : 'editing'">
                                    {{ form.cert_name }}
                                </component>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="出生日期">
                            <a-form-item name="dob" class="text-base px-4">
                                <a-date-picker v-if="!viewing" v-model:value="form.dob" format='YYYY-MM-DD' />
                                <div v-else>
                                    {{ displayDate(form.dob) }}
                                </div>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="性別">
                            <a-form-item name="gender" class="text-base px-4">
                                <a-radio-group v-if="!viewing" class="" v-model:value="form.gender" :is="CheckViewing()" >
                                    <a-radio value="M">男</a-radio>
                                    <a-radio value="F">女</a-radio>
                                </a-radio-group>
                                <div v-else>
                                    {{ form.gender == 'M' ? '男' : '女' }}
                                </div>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="手機">
                            <a-form-item name="phone" class="">
                                <component class="text-base px-4" v-model:value="form.phone" :is="CheckViewing()" :class="viewing ? 'viewing' : 'editing'">
                                    {{ form.phone }}
                                </component>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="後備電話">
                            <a-form-item name="backup_phone" class="">
                                <component class="text-base px-4" v-model:value="form.backup_phone" :is="CheckViewing()" :class="viewing ? 'viewing' : 'editing'">
                                    {{ form.backup_phone }}
                                </component>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="行業">
                            <a-form-item name="industry" class="">
                                <component class="text-base px-4" v-model:value="form.industry" :is="CheckViewing()" :class="viewing ? 'viewing' : 'editing'">
                                    {{ form.industry }}
                                </component>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="公司">
                            <a-form-item name="company" class="">
                                <component class="text-base px-4" v-model:value="form.company" :is="CheckViewing()" :class="viewing ? 'viewing' : 'editing'">
                                    {{ form.company }}
                                </component>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="職位">
                            <a-form-item name="position" class="">
                                <component class="text-base px-4" v-model:value="form.position" :is="CheckViewing()" :class="viewing ? 'viewing' : 'editing'">
                                    {{ form.position }}
                                </component>
                            </a-form-item>
                        </a-descriptions-item>

                        <a-descriptions-item label="身份證">
                            <a-form-item name="id_type" class="">
                                <div class="text-base px-4 viewing">
                                    {{ form.id_type }} : {{ form.id_num }}
                                </div>
                            </a-form-item>
                        </a-descriptions-item>

                    </a-descriptions>
                </a-form>
            </div>
        </div>

    </MemberLayout>
</template>


<script>
import {
    ref,
    reactive
} from 'vue';
import { useForm } from '@inertiajs/vue3';
import MemberLayout from '@/Layouts/MemberLayout.vue';
import * as AntdIcons from '@ant-design/icons-vue';
import dayjs, { Dayjs } from 'dayjs';

export default {

    props: ['student'],
    components: {
        ...AntdIcons,
        MemberLayout
    },
    data() {
        return {
            form: useForm({
                name_zh: this.student.name_zh,
                name_en: this.student.name_en,
                cert_name: this.student.cert_name,
                dob: (this.student.dob == "" || this.student.dob == null ? "" : dayjs(this.student.dob)),
                gender: this.student.gender,
                phone: this.student.phone,
                backup_phone: this.student.backup_phone,
                industry: this.student.industry,
                company: this.student.company,
                position: this.student.position,
            }),

            viewing: true,

            rules: {
                name_zh: { required: true },
                phone: { required: true },
                gender: { required: true },
                // state: { required: true },
            },
            validateMessages: {
                required: '必填欄位',
            },
        }
    },
    
    methods: {
        editSubmit() {
            this.$refs.studentForm.validateFields().then(() => {

                this.$inertia.patch(route('member.profile.update', this.student.id), this.form, {
                    onSuccess: (page) => {
                        notification.success({
                            message: '系統訊息',
                            description: '修改資料成功。',
                        });

                        this.viewing = true
                    },
                    onError: (error) => {
                        console.log(error);
                    }
                });

            }).catch(err => {
                console.log("error", err);
            });
        },
        editInfo() {
            this.viewing = false
        },
        CheckViewing(){
            if( this.viewing ){
                // Only View
                return 'div'
            }else{
                // Edit
                return 'a-input'
            }
        },
        displayDate(date) {
            return dayjs(date).format('YYYY-MM-DD')
        },
    }
}

</script>

<style>
.viewing {
    border: none;
    cursor: auto;
}

.editing {
    border: none;
    border-bottom: 1px solid lightgrey;
}

.editing:focus {
    border: none;
    box-shadow: none !important;
    border-bottom: 1px solid lightgrey !important;
    outline-width: 0px;
}

.viewing:focus {
    border: none !important;
    box-shadow: none !important;
}

.ant-form-item{
    margin-bottom:0px;
}
.ant-descriptions-item-label {
    padding: 25px !important;

}

.ant-descriptions-item-content {
    padding: 3px !important;
    min-width: 50px;
}
</style>