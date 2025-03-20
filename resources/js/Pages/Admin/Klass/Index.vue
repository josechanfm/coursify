<template>
    <AdminLayout title="課堂狀況" :breadcrumb="breadcrumb">
        <div class="container mx-auto">
            
            <div class=" m-5 p-1 relative overflow-hidden">
                <a-table 
                    class="shadow-md rounded-lg"
                    :dataSource="offers" 
                    :columns="columns" 
                    :pagination="{defaultPageSize:20}"
                >
                    <template #bodyCell="{ column, text, record, index }">
                        <template v-if="column.dataIndex == 'operation'">
                            <a-button :href="route('admin.klass.dashboard',record.id)"><insert-row-below-outlined />課堂狀況</a-button>
                            <a-button :href="route('admin.klass.lesson',record.id)"><import-outlined />課堂點名</a-button>
                        </template>
                        <template v-else>
                            {{ record[column.dataIndex] }}
                        </template>
                    </template>
                </a-table>
            </div>
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