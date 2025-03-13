<template>
    <AdminLayout title="規劃" :breadcrumb="breadcrumb">
        <div class="container mx-auto">

            <a-table 
                :dataSource="offers.data" 
                :columns="columns" 
                :pagination="pagination"
                @change="onPaginationChange"
            >
                <template #bodyCell="{ column, text, record, index }">
                    <template v-if="column.dataIndex == 'operation'">
                        <a-button :href="route('admin.offer.applications', record.id)">報名管理</a-button>
                        <a-button :href="route('admin.klass.dashboard',record.id)">出席狀況</a-button>
                        <a-button :href="route('admin.offers.edit',record.id)"><EditOutlined/>編輯</a-button>
                        <a-popconfirm title="Are you sure delete this record?" ok-text="Yes" cancel-text="No"
                            @confirm="this.$inertia.delete(route('admin.offers.destroy', record.id))">
                            <a-button><DeleteOutlined/>刪除</a-button>
                        </a-popconfirm>
                    </template>
                    <template v-else>
                        {{ record[column.dataIndex] }}
                    </template>
                </template>
            </a-table>
    </div>
    </AdminLayout>
</template>



<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { defineComponent, reactive } from "vue";
import * as AntdIcons from '@ant-design/icons-vue';

export default {
    components: {
        AdminLayout,
        ...AntdIcons,
    },
    props: ["offers"],
    data() {
        return {

            breadcrumb:[
                {label:"Klass" ,url: null},
            ],
            columns: [
                {
                    title: "編號",
                    dataIndex: "code",
                }, {
                    title: "名稱 (中文)",
                    dataIndex: "name_zh",
                }, {
                    title: "名稱 (英文)",
                    dataIndex: "name_en",
                }, {
                    title: "操作",
                    dataIndex: "operation",
                },
            ],
        }
    }
}

</script>