<template>
    <WebLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Offers
            </h2>
        </template>
        <div class="py-6">
            <div class="container mx-auto pt-5">
                <FrontendOfferList :offers="offers"/>
            </div>
        </div>
    </WebLayout>
</template>

<script>
import WebLayout from "@/Layouts/WebLayout.vue";
import { defineComponent, reactive } from "vue";
import FrontendOfferList from '@/Components/FrontendOfferList.vue';

export default {
    components: {
        WebLayout,
        FrontendOfferList
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