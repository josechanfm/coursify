<template>
    <div class="cityu-background min-h-screen overflow-hidden flex flex-col justify-center items-center pt-6 sm:pt-0 ">
    
        <div class="max-w-7xl w-full sm:w-[500px] md:w-[550px] lg:w-[600px] rounded-3xl relative p-2">
            <div class="z-50 bg-slate-50 relative shadow-md rounded-3xl border border-slate-200 ">
                <div class="flex justify-center overflow-hidden my-4 mx-12">
                    <slot name="logo" />
                </div>
    
                <div class="p-8">
                    <slot />
                </div>
            </div>
            <div class="z-0 absolute inset-0 bg-gradient-to-r from-green-400/80 to-green-500/30 shadow-lg transform -skew-y-4 sm:skew-y-0 -rotate-6 sm:-rotate-6 rounded-3xl"></div>
        </div>
    </div>
</template>
