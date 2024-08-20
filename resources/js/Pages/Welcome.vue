<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Login from "@/Pages/Auth/Login.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import NavBar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

</script>

<template>
    <Head title="Jettison" />
    <NavBar />
    <main class="max-w-6xl mx-auto bg-gray-50 mt-3 min-h-screen">
        <section class="flex flex-col-reverse sm:flex-row p-6 items-center mb-12">
            <article class="sm:w-full">
                <h2 class="w-auto text-4xl font-bold text-center sm:text-5xl sm:text-left text-gray-900">Welcome to Jettison</h2>
                <p class="text-gray-900 text-xl mt-3">A forum for model and amateur rocket enthusiasts!</p>
                <PrimaryButton class="mt-6">Go To Forum</PrimaryButton>
            </article>
            <div class="w-1/2">
                <Login />
            </div>
        </section>
    </main>
    <Footer />
</template>
