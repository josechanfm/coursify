

<template>
    <WebLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class=" mx-auto sm:px-6 lg:px-8" style="max-width: 1400px;">
                <FrontendOfferList :offers="offers" />
            </div>
        </div>
    </WebLayout>
</template>


<script>
import WebLayout from "@/Layouts/WebLayout.vue";
import FrontendOfferList from '@/Components/FrontendOfferList.vue';

export default {
    components: {
        WebLayout,
        FrontendOfferList
    },
    props: ["offers"],
    data() {
        return {
        };
    },
    created() {

    },
    methods: {
    },
};
</script>