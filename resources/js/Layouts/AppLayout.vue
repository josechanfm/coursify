<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import CityuLogo from '@/Components/CityuLogo.vue';

defineProps({
    title: String,
});

</script>

<template>
    <div>
        <Head :title="title" />

        <Banner />

        <div class="min-h-screen bg-gray-200">

            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow border-b border-green-500">
                
                    <div class="max-w-7xl mx-auto ">
                        <div class="flex justify-between items-center ">
                            <!-- <slot name="header" /> -->
                            <div class="w-80 p-1">
                                <CityuLogo />
                            </div>

                            <div class="text-end z-10">
                                <Link v-if="$page.props.auth.user" :href="route('member.dashboard')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>

                                <template v-else>
                                    <Link :href="route('login')" >
                                        <div class="font-bold text-gray-600 hover:text-gray-700 transition-transform transform hover:scale-105">
                                            登入 / 上傳檔案
                                        </div>
                                    </Link>
                                    <!-- <Link :href="route('register')" class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link> -->
                                </template>
                            </div>
                        </div>
                    </div>
                
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
