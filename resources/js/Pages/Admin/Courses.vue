<template>
    <AdminLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Config
            </h2>
        </template>
        <div class="container mx-auto pt-5">
            <div class="flex justify-end p-5">
                <a-button :href="route('admin.courses.create')" type="primary">
                    Create
                </a-button>
            </div>
            <div class="bg-white relative shadow rounded-lg overflow-x-auto">
                <a-table :dataSource="courses" :columns="columns">
                    <template #bodyCell="{ column, text, record, index }">
                        <template v-if="column.dataIndex == 'operation'">
                            <a-button :href="route('admin.courses.edit',record.id)">Edit</a-button>
                            <a-popconfirm
                                title="Are you sure delete this record?"
                                ok-text="Yes"
                                cancel-text="No"
                                @confirm="this.$inertia.delete(route('admin.courses.destroy', record.id))"
                            >
                                <a-button>Delete</a-button>
                            </a-popconfirm>
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

export default {
    components: {
        AdminLayout,
    },
    props: ["courses"],
    data() {
        return {
            columns: [
                {
                    title: "Code",
                    dataIndex: "code",
                }, {
                    title: "Name (zh)",
                    dataIndex: "name_zh",
                }, {
                    title: "Name (en)",
                    dataIndex: "name_en",
                }, {
                    title: "Operation",
                    dataIndex: "operation",
                },
            ],
        };
    },
    created() {

    },
    methods: {
    },
};
</script>