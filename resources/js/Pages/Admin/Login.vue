<template>
    <inertia-head>
        <title>Login</title>
    </inertia-head>
    <div class="h-screen w-screen bg-slate-100 flex overflow-hidden">
        
        <div class="xl:basis-2/3 lg:basis-3/5 md:basis-2/5 
            md:block h-full w-0 md:w-2/3 bg-no-repeat bg-cover bg-blue-500 drop-shadow-xl">

            <div dir="rtl" class="">
                <div class="relative h-48 w-48 ">
                    <div
                        class="z-10 rounded-l-lg shadow-lg absolute h-20 w-52 top-2/3 start-0 bg-slate-50 flex justify-center items-center flex-col">
                        <div class="text-lg">課程管理系統 </div>
                        <div>行政登入平台 </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="xl:basis-1/3 lg:basis-2/5 md:basis-3/5 flex flex-col justify-between">
            <div class="w-full mx-auto xl:px-12 lg:px-10 md:px-6 pt-24 md:pt-32 justify-center md:justify-start relative ">
                
                <img class="max-w-md" :src=" route('download', { 'path': 'long_logo.png' }) "/>
                <div class="my-10">
                    <p class="text-xl mb-20">系統登入</p>
                </div>
                <a-form>
                    <a-form-item name="email">
                        <a-input
                            placeholder="Username"
                            v-model:value="form.email"
                            size="large"
                        >
                            <template #prefix>
                                <UserOutlined/>
                            </template>
                        </a-input>
                    </a-form-item>

                    <a-form-item name="password">
                        <a-input-password placeholder="Password" size="large" v-model:value="form.password"
                                        @keydown.enter="login">
                            >
                            <template #prefix>
                                <LockOutlined/>
                            </template>
                        </a-input-password>
                    </a-form-item>

                    <a-form-item>
                        <a-checkbox name="remember" v-model:checked="form.remember">Remember Me</a-checkbox>
                        <!--                    <inertia-link :href="route('password.request')" class="float-right">Forget Password?</inertia-link>-->
                    </a-form-item>

                    <a-form-item class="!mt-16">
                        <a-button @click="login" block type="primary" size="large">登入</a-button>
                    </a-form-item>
                </a-form>
            </div>
        </div>
    </div>
</template>

<script>
import { UserOutlined, LockOutlined } from '@ant-design/icons-vue'
export default {
    name: "Login",
    components: {
        UserOutlined,
        LockOutlined
    },
    setup() {
        const rules = {
            email: [
                {required: true, message: '请输入邮箱'},
                {type: 'email', message: '请输入正确的邮箱'}
            ],
            password: [
                {required: true, message: '请输入密码'}
            ]
        }

        return { rules }
    },
    data () {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },
    methods: {
        login () {
            // console.log(this.form)
            
            // --- FortifyServiceProvider
            this.form.post('/admin/login')
        }
    }
}
</script>
