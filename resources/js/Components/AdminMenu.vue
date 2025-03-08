<template>
    <a-menu v-model:openKeys="openedMenu" v-model:selectedKeys="selectedKeys" theme="dark" mode="inline">
        <!-- 循环渲染一级菜单 -->
         <template v-for="menu in menus"> 

            <a-sub-menu v-if="menu.children" :key="menu.key">
                <template #icon>
                    <component :is="menu.icon" />
                </template>
                <template #title>{{ menu.label }}</template>
                <!-- 循环渲染二级菜单 -->
                <a-menu-item v-for="item in menu.children" :key="item.key">
                    <a :href="route(item.route)">{{ item.label }}</a>
                </a-menu-item>
            </a-sub-menu>
            <a-menu-item v-else :key="menu.key">
                <a :href="route(menu.route)">{{ menu.label }}</a>
            </a-menu-item>
         </template>
    </a-menu>
</template>

<script>
import {
    defineComponent,
    ref,
    watch
} from 'vue';
import * as AntdIcons from '@ant-design/icons-vue';

export default defineComponent({
    components: {
        ...AntdIcons
    },
    props: [],
    created(){ 
        console.log( this.route().current() )
        console.log( this.findRouteKey() )
    },
    data() {
        return {
            openedMenu: [],
            selectedKeys: [],
            
            menus:[
                {
                    key: 'course',
                    icon: 'BankOutlined',
                    label: '課程管理',
                    children: [
                        { key: 'area', label: '課程類別', route: 'admin.areas.index' },
                        { key: 'course', label: '課程規劃', route: 'admin.courses.index' },
                        { key: 'offer', label: '現行課程', route: 'admin.offers.current' },
                        { key: 'offerCurrent', label: '所有課程', route: 'admin.offers.index' },
                    ],
                }, {
                    key: 'applications',
                    icon: 'AuditOutlined',
                    label: '報名表',
                    children: [
                        { key: 'applications', label: '所有報名表', route: 'admin.applications.index' },
                        { key: 'applicationCurrent', label: '未確認報名表', route: 'admin.applications.current' },
                    ],
                },
                { key: 'applications', icon: 'SettingOutlined', label: '所有報名表', route: 'admin.applications.index' },
            ]
        }
    },
    methods: {
        logout() {
            router.post(route('admin.logout'));
        },
        findRouteKey(){
            var currentRoute = this.route().current()
            // 遍历一级菜单
            for (const menu of this.menus) {
                // 如果有子菜单，递归查找
                if (menu.children) {
                    for (const child of menu.children) {
                        if (child.route === currentRoute) {
                            this.selectedKeys.push( child.key )
                            this.openedMenu.push( menu.key )
                        }
                    }
                }
                // 如果没有子菜单，直接匹配
                else if (menu.route === currentRoute) {
                    this.selectedKeys.push( menu.key  )
                }
            }
        }
    }
})
</script>
