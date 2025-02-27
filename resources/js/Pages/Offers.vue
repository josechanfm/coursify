<template>
    <WebLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Offers
            </h2>
        </template>
        <div class="container mx-auto pt-5">
            <div class="bg-white relative shadow rounded-lg overflow-x-auto">
                <a-table :dataSource="offers" :columns="columns">
                    <template #bodyCell="{ column, text, record, index }">
                        <template v-if="column.dataIndex == 'operation'">
                            <a-button :href="route('application.form',record.id)" >Apply</a-button>
                        </template>
                        <template v-else>
                            {{ record[column.dataIndex] }}
                        </template>
                    </template>
                </a-table>
            </div>
        </div>
    </WebLayout>
</template>

<script>
import WebLayout from "@/Layouts/WebLayout.vue";
import { defineComponent, reactive } from "vue";

export default {
    components: {
        WebLayout,
    },
    props: ["offers"],
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