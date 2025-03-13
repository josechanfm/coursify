<template>
    <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-3 mx-1 md:mx-3 lg:mx-4">
        <!-- Course -->
        <div class="bg-white rounded-lg shadow-lg h-full relative overflow-hidden">
            <div class="flex ">
                <div class="h-28 w-28 bg-blue-500 text-white p-5">
                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke="#f1f5f9" d="M1 2h16v11H1z" />
                        <path fill="#e2e8f0" stroke="#e2e8f0" d="M4 5.5v5s3-1 5 0v-5s-2-2-5 0zM9 5.5v5s3-1 5 0v-5s-2-2-5 0z" />
                        <path fill="none" stroke="#f1f5f9" d="M8.5 14l-3 3h7l-3-3z" />
                    </svg>
                </div>
                <div class="flex-1 px-2 flex flex-col gap-1 justify-center">
                    <div class="font-bold">課程</div>
                    <div class="">按 課程編號 / 名稱 搜索</div>
                    <div class="pb-4">
                        <a-input-search type="input" v-model:value="offerSearch" placeholder="" enter-button @search="onOfferSearch" />
                    </div>
                </div>
            </div>
            <!-- bg circle -->
            <div class="absolute -end-16 -top-16">
                <div class="bg-indigo-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
            </div>
            <div class="absolute -end-4 -top-24">
                <div class="bg-indigo-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
            </div>
        </div>
        <!--  -->
        <!-- Student -->
        <div class="bg-white rounded-lg shadow-lg h-full relative overflow-hidden">
            <div class="flex">
                <div class="h-28 w-28  bg-green-500 text-white p-6">
                    <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve"><path d="M50,43v2.2c0,2.6-2.2,4.8-4.8,4.8H6.8C4.2,50,2,47.8,2,45.2V43c0-5.8,6.8-9.4,13.2-12.2c0.2-0.1,0.4-0.2,0.6-0.3c0.5-0.2,1-0.2,1.5,0.1c2.6,1.7,5.5,2.6,8.6,2.6s6.1-1,8.6-2.6c0.5-0.3,1-0.3,1.5-0.1c0.2,0.1,0.4,0.2,0.6,0.3C43.2,33.6,50,37.1,50,43z M26,2c6.6,0,11.9,5.9,11.9,13.2S32.6,28.4,26,28.4s-11.9-5.9-11.9-13.2S19.4,2,26,2z"/></svg>       
                </div>
                <div class="flex-1 px-2 flex flex-col gap-1 justify-center">
                    <div class="font-bold">學生資料</div>
                    <div class=" ">按 學生編號 / 電郵 / 名字 / 身份證號 搜索</div>
                    <div class="pb-4">
                        <a-input-search type="input" v-model:value="studentSearch" placeholder="" enter-button @search="onStudentSearch" />
                    </div>
                </div>
            </div>
            <!-- bg circle -->
            <div class="absolute -end-16 -top-16">
                <div class="bg-emerald-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
            </div>
            <div class="absolute -end-4 -top-24">
                <div class="bg-emerald-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
            </div>
        </div>
        <!--  -->
        <!-- Application -->
        <div class="bg-white rounded-lg shadow-lg h-full relative overflow-hidden">
            <div class="flex">
                <div class="h-28 w-28 bg-orange-500 text-white p-5">
                    <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve"><g><path d="M31.4,15.3h8.2c0.6,0,1.1-0.5,1.1-1.1l0,0c0-0.3-0.1-0.5-0.3-0.8L30.2,3.3C29.9,3.1,29.7,3,29.4,3l0,0 c-0.6,0-1.1,0.5-1.1,1.1v8.1C28.3,13.9,29.7,15.3,31.4,15.3z"/><path d="M49.5,25.7l-0.9-0.9c-0.6-0.6-1.5-0.6-2.2,0L34.5,36.7c-0.1,0.1,0,0.2,0,0.3v2.5c0,0.2,0,0.4,0.2,0.4h2.6c0.1,0,0.2-0.1,0.3-0.1L49.5,28C50.2,27.2,50.2,26.3,49.5,25.7z"/><path d="M39.9,44.4h-1.8h-3.6h-1.7c-1.6,0-2.9-1.3-2.9-2.9v-5.4c0-0.8,0.2-1.6,0.9-2.1l9.5-9.5c0.3-0.3,0.5-0.7,0.5-1.1v-2c0-0.8-0.7-1.5-1.5-1.5H28.3c-2.6,0-4.6-2.1-4.6-4.6V4.5C23.7,3.7,23,3,22.1,3H6.6C4.1,3,2,5.1,2,7.6v36.8C2,46.9,4.1,49,6.6,49h29.4c2.2,0,4.2-1.6,4.6-3.7C40.7,44.9,40.3,44.4,39.9,44.4z M8.2,16.8c0-0.8,0.7-1.5,1.5-1.5h6.2c0.9,0,1.5,0.7,1.5,1.5v1.5c0,0.8-0.7,1.5-1.5,1.5H9.7c-0.9,0-1.5-0.7-1.5-1.5V16.8z M23.7,36.7c0,0.8-0.7,1.5-1.5,1.5H9.7c-0.9,0-1.5-0.7-1.5-1.5v-1.5c0-0.8,0.7-1.5,1.5-1.5h12.4c0.9,0,1.5,0.7,1.5,1.5V36.7z M26.8,27.5c0,0.8-0.7,1.5-1.5,1.5H9.7c-0.9,0-1.5-0.7-1.5-1.5V26c0-0.8,0.7-1.5,1.5-1.5h15.5c0.9,0,1.5,0.7,1.5,1.5V27.5z"/></g></svg>
                </div>
                <div class="flex-1 px-2 flex flex-col gap-1 justify-center">
                    <div class="font-bold">查詢報名</div>
                    <div class="">按 課程編號 / 名稱 搜索</div>
                    <div class="pb-4">
                        <a-input-search type="input" v-model:value="applicationSearch" placeholder="" enter-button @search="onApplicationSearch" />
                    </div>
                </div>
            </div>
            <!-- bg circle -->
            <div class="absolute -end-16 -top-16">
                <div class="bg-amber-600 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
            </div>
            <div class="absolute -end-4 -top-24">
                <div class="bg-amber-600 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
            </div>
        </div>
        <!--  -->
        <!-- Class Room -->
        <div class="bg-white rounded-lg shadow-lg h-full relative overflow-hidden">
            <div class="flex">
                <div class="h-28 w-28 p-4 bg-purple-500">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><path id="secondary" d="M21,15l-7,1,1,5H4a1,1,0,0,1-1-1V9H21Z" style="fill: white; "></path><path  id="primary" d="M21,15l-6,6-1-5ZM20,4H4A1,1,0,0,0,3,5V20a1,1,0,0,0,1,1H15l6-6V5A1,1,0,0,0,20,4Zm0,0H4A1,1,0,0,0,3,5V9H21V5A1,1,0,0,0,20,4ZM17,3V5M12,3V5M7,3V5" style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; "></path></svg>
                </div>
                <div class="flex-1 px-2 flex flex-col gap-1 justify-center">
                    <div class="font-bold">查詢時間表</div>
                    <div class=" ">按 課室號 / 課程  搜索</div>
                    <div class="pb-4">
                        <a-input-search type="input" v-model:value="scheduleSearch" placeholder="" enter-button @search="onScheduleSearch" />
                    </div>
                </div>
            </div>
            <!-- bg circle -->
            <div class="absolute -end-16 -top-16">
                <div class="bg-violet-600 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
            </div>
            <div class="absolute -end-4 -top-24">
                <div class="bg-violet-600 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
            </div>
        </div>
        <!--  -->
    </div>
</template>

<style>
</style>

<script>
import * as AntdIcons from '@ant-design/icons-vue';

export default {

    components: {
        ...AntdIcons,
    },
    data(){
        return {
            offerSearch: "",
            studentSearch: "",
            applicationSearch: "",
            scheduleSearch: "",
        }
    },
    methods:{
        onOfferSearch(){
            
        },
        onStudentSearch(){

        },
        onApplicationSearch(){

        },
        onScheduleSearch(){

        },
    },
};
</script>
