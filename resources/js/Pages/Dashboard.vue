<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import HomeDashboard from '@/Components/HomeDashboard.vue';

const props = defineProps({
    products: Array
})
</script>

<template>
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <span>Hello {{$page.props.auth.user.name}} Welcome Back!</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <HomeDashboard :products="props.products" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>


