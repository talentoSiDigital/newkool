<script setup>
import { Head, Link } from '@inertiajs/vue3';

import MainTemplate from '../Layouts/MainTemplate.vue';

import MainSlider from '../Custom/MainSlider.vue';
import MainCard from '../Custom/MainCard.vue';
import PrimaryButton from '../Components/PrimaryButton.vue'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <MainTemplate >

        <Head>
            <title>Newkool America</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>


        <MainSlider class="hidden md:block"/>
        <h2 class="text-center text-gray-600 mt-10 font-bold text-4xl ">Productos</h2>
        <div class="h-fit flex flex-col gap-10 md:gap-0 md:flex-row justify-evenly items-center my-16">
            <MainCard title="refrigeracion" />
            <MainCard title="lavado" />
        </div>


        <div class="flex justify-center">
            <hr class="border-black w-11/12">
        </div>
        
        
        <div class="flex flex-col md:flex-row items-center justify-center h-fit py-36 gap-8">
            <img class="w-2/3 md:w-1/3" src="/assets/route-images/home/mapa-completo.png" alt="mapa-de-venezuela">
            <header class="h-fit flex flex-col items-center" >
                <h2 class="my-4 text-3xl text-center">
                    Conoce los estados <br> donde puedes adquirir <br>
                    <strong >nuestros productos.</strong>
                </h2> 
                <PrimaryButton path="/" class="ml-4 w-fit">
                    Ver más
                </PrimaryButton>
            </header>
        </div>
        
        <div class="flex justify-center">
            <hr class="border-black w-11/12">
        </div>
        <div class="h-24 flex items-center justify-center text-gray-400 font-bold text-xl">
            <h2 class="w-11/12">Newkool - Todos los derechos reservados 2024</h2>

        </div>    


    </MainTemplate>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
