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
                <template #icon>
                    <component :is="menu.icon" />
                </template>
                <a :href="route(menu.route)">{{ menu.label }}</a>
            </a-menu-item>
        </template>
         
        <hr class="border-1 border-slate-400 mx-5 my-4 opacity-30" />
        <a-menu-item>
            <template #icon>
                <LogoutOutlined />
            </template>
            <a @click.prevent='logout'>
                登出
            </a>
        </a-menu-item>
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
    props: ['breadcrumb'],
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
                        { key: 'Area', label: '課程類別', route: 'admin.areas.index' },
                        { key: 'Course', label: '課程規劃', route: 'admin.courses.index' },
                        // { key: 'offer', label: '現行課程', route: 'admin.offers.current' },
                        { key: 'Offer', label: '所有課程', route: 'admin.offers.index' },
                    ],
                }, {
                    key: 'applications',
                    icon: 'AuditOutlined',
                    label: '報名表',
                    children: [
                        { key: 'Applications', label: '所有報名表', route: 'admin.applications.index' },
                        { key: 'ApplicationCurrent', label: '未確認報名表', route: 'admin.applications.current' },
                    ],
                }, 
                { key: 'Klass', icon: 'InsertRowBelowOutlined', label: '課堂狀況', route: 'admin.klass.index' },
                { key: 'Applications', icon: 'SettingOutlined', label: '所有報名表', route: 'admin.applications.index' },
            ],

            findKey:[],
        }
    },
    created(){ 
        this.findRoute(this.menus)
    },
    methods: {
        logout() {
            this.$inertia.post(route('admin.logout'));
        },
        recurFindRoute(menu, menuParent){
            // console.log(menu)
            // 遞歸找全部children的route, 無限層children
            if ( this.breadcrumb.find( x => x.label == menu.key ) ){
                console.log( menuParent )
                this.breadcrumb.slice().reverse().forEach( (bread)=>{
                    if( menuParent ){
                        if( menuParent?.children.find(x=>x.key == bread.label)?.key && this.selectedKeys.length <= 0){
                            this.selectedKeys.push( bread.label )
                        }
                    }else{
                        this.selectedKeys.push( bread.label )
                    }
                   
                })
                this.openedMenu.push( menuParent?.key )
            }else if (menu.children) {
                this.findRoute(menu.children, menu)
            }
        },  
        findRoute(menus, menuParent){
            if( !this.breadcrumb ){
                return 
            }
            for (const menu of menus) {
                this.recurFindRoute(menu, menuParent)
            }
        },
    }
})
</script>
