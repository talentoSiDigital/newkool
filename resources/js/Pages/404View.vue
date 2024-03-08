<script setup>
import { router, Head, usePage, Link } from '@inertiajs/vue3';

import { ref } from 'vue';

import PrimaryButton from '../Components/PrimaryButton.vue';
import MainTemplate from '../Layouts/MainTemplate.vue';
import ApplicationLogo from '../Components/ApplicationLogo.vue'
import Navbar from '../Custom/Navbar.vue';
import Footer from '../Custom/Footer.vue';

</script>

<template>
    <main class="bg-gray-100 flex flex-col justify-between h-screen">
        <Navbar />


        <Head>
            <title>Pagína No encontrada</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>
        <section class=" flex justify-center h-4/5">
            <div class="flex flex-col items-center lg:justify-center bg-white w-11/12 h-5/6 mt-10 gap-2">

                <h1 class="font-newkool text-newkool-red text-9xl">404</h1>
                <h2 class="text-3xl font-bold text-newkool-red">La pagína no existe</h2>
                <p class="text-xl">La pagína a la que intentas acceder, no existe.</p>
                <p class="text-xl">Revisa si escribiste bien la dirección de la misma.</p>
                <div class="mt-2 group relative">
                    <Link :href="'/'"
                        class="bg-newkool-red text-white flex items-center gap-2 py-2 px-6 rounded border border-newkool-red duration-200 hover:bg-white hover:text-newkool-red relative z-10 group-hover:-translate-x-1 group-hover:-translate-y-1 " >
                        <font-awesome-icon :icon="['fas', 'arrow-left']" class="text-2xl " />

                        Volver
                    </Link>
                    <div class="bg-newkool-red w-full h-full absolute rounded top-0">

                    </div>
                </div>
            </div>
        </section>
        <Footer />

        <!-- <div class="h-10 mt-2"></div> -->
    </main>
</template>


<style scoped></style>
