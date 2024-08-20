<template>
    <header class="bg-[#2F4B61] max-w-6xl mx-auto text-white top-0 z-10">
        <section class="p-4 flex justify-between items-center">
            <h1 class="text-3xl font-medium">
                <a href="/">🚀 Jettison</a>
            </h1>
            <div>
                <button id="mobile-open-button" class="text-3xl sm:hidden focus:outline-none">
                    &#9776;
                </button>
                <nav class="hidden sm:block space-x-8 text-xl" aria-label="main">
                    <a href="#" class="hover:underline hover:border-gray-300">About</a>
                    <a href="#" class="hover:underline hover:border-gray-300">FAQ</a>
                    <a :href="route('register')" class="hover:underline hover:border-gray-300">Register</a>
                </nav>
            </div>
        </section>
    </header>
</template>
