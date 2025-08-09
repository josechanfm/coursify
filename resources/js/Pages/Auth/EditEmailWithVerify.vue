<template>
    
<div>
    
    <a-spin tip="Loading..." :spinning="spinning">
        <FormSection @submitted="submitEmail">
            <template #title>
                個人資料
            </template>

            <template #description>
                <!-- 更新你的資料和電郵 -->
            </template>

            <template #form>
                <!-- Name -->
                <div class="col-span-6 sm:col-span-4">
                    <InputLabel for="name" value="名字" />
                    <span class="text-base">{{form.name}}</span>
                </div>

                <!-- Email -->
                <div class="col-span-6 sm:col-span-4">
                    <InputLabel for="email" value="電郵 / 用戶名" />
                    
                    <TextInput
                        v-if=" editEmail "
                        id="email"
                        v-model="form.email"
                        type="email"
                        class="mt-1 block w-full"
                        required
                        autocomplete="username"
                    />
                    <div v-else class="text-base"> {{ form.email }} </div>
                    <div  class="py-2 italic text-slate-700">
                        <span v-if="form.response">
                            {{ form.response }}
                        </span>
                        <InputError :message="form.errors.email" class="mt-2" />
                    </div>

                </div>
            </template>

            <template #actions>
                <button @click="editEmail = false" v-if="editEmail" class="me-2 inline-flex items-center px-4 py-2 bg-slate-200 text-black border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-slate-300 focus:bg-slate-700 active:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    取消
                </button>
                <button @click="editEmail = true" v-if="!editEmail" class="me-2 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    修改電郵
                </button>
                <button type="submit" v-if="editEmail" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    修改
                </button>
            </template>
        </FormSection>
    </a-spin>
</div>
</template>

<script>
import * as AntdIcons from '@ant-design/icons-vue';
import { useForm } from '@inertiajs/vue3';
import FormSection from '@/Components/FormSection.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import { notification } from 'ant-design-vue';

export default {

    components: {
        ...AntdIcons,
        FormSection,
        InputLabel,
        InputError,
        TextInput,
    },
    data() {
        return {
            editEmail:false,
            form: useForm({
                name: '',
                email: '',
            }),

            rules: {
                email: {
                    required: true
                },
            },
            validateMessages: {
                required: '必填欄位',
            },
            spinning:false,
        }
    },
    created(){
        this.form.name = this.$page.props.auth.user.name
        this.form.email = this.$page.props.auth.user.email
    },  
    methods:{
        submitEmail(){
            this.form.errors.email = ''
            this.spinning = true
            axios.post(route('member.email.update'), this.form)
            .then(res => {
                this.form.response = res.data?.message
                this.spinning = false
            })
            .catch(error => {
                this.form.errors.email = '該電郵已被使用'
                this.spinning = false
            })

        }
    }
}
</script>
