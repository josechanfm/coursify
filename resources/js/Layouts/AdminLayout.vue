<template>
<a-layout style="min-height: 100vh" >
    <Head :title="title" />

    <a-layout-sider v-model:collapsed="collapsed" collapsible theme="dark" width="250px"
    :style="{ overflow: 'auto', height: '100vh', position: 'fixed', left: 0, top: 0, bottom: 0 }"
    :trigger="null" class="shadow-md dark:text-white text-black">
    
        <div class="my-4 text-center text-lg">
            <a :href="route('admin.dashboard')" class="text-lg font-bold dark:text-slate-200">
                CityU
            </a>
        </div>
        <div class="border-slate-600 border-b-2 mx-4 my-4" ></div>

        <!-- Menu -->
        <AdminMenu />

    </a-layout-sider>

    <a-layout :style="{ marginLeft: collapsed?'80px': '250px' }">
        <a-layout-header :class="userBorderColor()" class="shadow-sm border-b-2 flex" style="background: #fff; padding: 0">
            <div>
                <menu-unfold-outlined v-if="collapsed" class="trigger" @click="() => (collapsed = !collapsed)" />
                <menu-fold-outlined v-else class="trigger" @click="() => (collapsed = !collapsed)" />
            </div>
        </a-layout-header>

        <div class="mt-4 mb-6 flex justify-between items-center">
            
            <div class="text-2xl" :style="{ marginLeft: collapsed?'120px': '40px' }">
                <a-page-header class="p-1" :title="title" :sub-title="subTitle" />
            </div>

            <nav class="text-sm " v-if="breadcrumb">
                <!-- Title -->
                <ol class="list-none pr-10">
                    <li class="breadcrumb-item hidden md:inline" v-for="(item, idx) in breadcrumb">
                        <inertia-link v-if="item.url" :href="item.url">{{ item.label }}</inertia-link>
                        <span v-else>{{ item.label }}</span>
                        <span class="pl-2 pr-2" v-if="idx < breadcrumb.length - 1">&gt;</span>
                    </li>
                    <li class="breadcrumb-item block md:hidden">
                        <span v-if="breadcrumb.length > 1">
                            <inertia-link :href="breadcrumb[breadcrumb.length - 2].url">
                                {{ breadcrumb[breadcrumb.length - 2].label }}
                            </inertia-link>
                        </span>
                        <span v-else>
                            <inertia-link :href="route('admin.dashboard')">
                                Home
                            </inertia-link>
                        </span>
                    </li>
                    <li class="breadcrumb-item block md:inline">
                        <span class="pl-2 pr-2">|</span>
                        <a href="javascript:history.back();" class="inline">Back</a>
                    </li>
                    <li class="breadcrumb-item block md:inline">
                        <a :href="route('manual',{route:route().current()})" target="_blank" class="pl-2">
                            <QuestionCircleOutlined />
                        </a>
                    </li>

                </ol>
            </nav>
        </div>

        <a-layout-content :style="{minHeight: '280px' }">
            <div class="mx-0">
                <main>
                    <slot />
                </main>
            </div>

        </a-layout-content>
    </a-layout>
</a-layout>
</template>

<script>
import { Head, Link, router } from '@inertiajs/vue3';
import DropdownLink from '@/Components/DropdownLink.vue';
import * as AntdIcons from '@ant-design/icons-vue';
import { ref } from 'vue';
import AdminMenu from '@/Components/AdminMenu.vue';

export default {
    components: {
        Head,
        Link,
        AdminMenu,
        DropdownLink,
        ...AntdIcons
    },
    props: {
        title: String,
        subTitle: String,
        breadcrumb: Object,
    },
    data() {
        return {
            collapsed: false,
        };
    },
    methods: {
        userBorderColor() {
            if( this.$page.props.roles.includes("counter") ) return 'border-blue-500'
            if( this.$page.props.roles.includes("admin") ) return 'border-rose-500'
            if( this.$page.props.roles.includes("webmaster") ) return 'border-orange-500'
        },
    },
};
</script>

<style>
.trigger {
    font-size: 18px;
    line-height: 64px;
    padding: 0 24px;
    cursor: pointer;
    transition: color 0.3s;
}

.trigger:hover {
    color: #1890ff;
}

.logo {
    height: 32px;
    background: rgba(255, 255, 255, 0.3);
    margin: 16px;
}

.site-layout .site-layout-background {
    background: #fff;
}

/* scroll bar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-thumb:active {
    background: #777;
}
.show ::-webkit-scrollbar-thumb,
:hover ::-webkit-scrollbar-thumb{
    background: #777;

}

::-webkit-scrollbar-thumb {
    background: transparent;
    border-radius: 10px;
}

::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px transparent;
    border-radius: 10px;
}
</style>
