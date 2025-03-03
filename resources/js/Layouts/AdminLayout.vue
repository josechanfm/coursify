<template>
  <a-layout>
    <a-layout-sider v-model:collapsed="collapsed" :trigger="null" collapsible>
      <div class="logo"/>
      <a-menu v-model:selectedKeys="selectedKeys" theme="dark" mode="inline">
        <template v-for="(item, i) in menuItems" :key="i">
          <a-menu-item >
            <user-outlined />
            <span><inertia-link :href="route(item.route)">{{ item.title }}</inertia-link></span>
          </a-menu-item>
        </template>
        <a-menu-item key="logout">
          <upload-outlined />
          <span @click="logout">Log Out</span>
        </a-menu-item>
      </a-menu>
    </a-layout-sider>

    <a-layout>
      <a-layout-header style="background: #fff; padding: 0">
        <div class="text-lg p-2">
        <menu-unfold-outlined
          v-if="collapsed"
          class="trigger"
          @click="() => (collapsed = !collapsed)"
        />
        <menu-fold-outlined 
          v-else 
          class="trigger" 
          @click="() => (collapsed = !collapsed)" 
        />
        </div>
      </a-layout-header>

      <nav class="text-sm flex justify-between" v-if="breadcrumb">
        <div class="pl-5 pt-2 text-2xl">{{ title }}</div>
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
<script setup>
import { Head, Link, router } from '@inertiajs/vue3';

import { MenuFoldOutlined, MenuUnfoldOutlined, UserOutlined, VideoCameraOutlined, UploadOutlined, QuestionCircleOutlined } from '@ant-design/icons-vue';

import { ref } from 'vue';
import DropdownLink from '@/Components/DropdownLink.vue';

defineProps({
    title: String,
    breadcrumb: Object,
});

const menuItems = [
  {title:'Area','route':'admin.areas.index'},
  {title:'課程規劃','route':'admin.courses.index'},
  {title:'現行課程','route':'admin.offers.current'},
  {title:'所有課程','route':'admin.offers.index'},
  {title:'未確認報名表','route':'admin.applications.current'},
  {title:'所有報名表','route':'admin.applications.index'}
];
const selectedKeys = ref(['1']);
const collapsed = ref(false);
const logout = () => {
    router.post(route('admin.logout'));
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

</style>