<script setup>
import { Head, Link } from '@inertiajs/vue3';

import MainTemplate from '../Layouts/MainTemplate.vue';
defineProps({
    cities: Object
});


function deleteSpecialChars(string) {
    // used to remove accents and special characters
    return string.normalize('NFD')
        .replace(/([aeio])\u0301|(u)[\u0301\u0308]/gi, "$1$2")
        .normalize()
}

function getImage(string) {
    return `${string.toUpperCase().replace(/\s/g, '-')}.png`
}


</script>

<template>
    <MainTemplate class="bg-white">

        <Head>
            <title>Dónde encontrarnos</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>
        <div class="h-24 flex items-center justify-center">

            <div>
                <h2 class="font-bold text-4xl text-newkool-red text-center">Ubícanos</h2>
              
            </div>

        </div>
        <section class="flex justify-center">
            <div
                class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 place-items-center place-content-center items-center w-1/2 md:w-full  mb-10">
                <Link :href="`/donde-encontrarnos/${deleteSpecialChars(city.estado)}`"
                    class="w-full p-10 hover:bg-gray-200 h-full duration-200 group" v-for="city in cities" :key="city">
                <div class="w-fit flex h-full flex-col items-center justify-center">
                    <img :src="`/assets/route-images/estados/${getImage(deleteSpecialChars(city.estado))}`"
                        :alt="city.estado" class="w-1/2 group-hover:scale-110 duration-200 ease-in ">
                    <p class="w-fit h-1/6">{{ city.estado }}</p>
                </div>
                </Link>

            </div>


        </section>


    </MainTemplate>
</template>


