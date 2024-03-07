<script setup>
import { Head, Link } from '@inertiajs/vue3';

import MainTemplate from '../Layouts/MainTemplate.vue';


defineProps({
    ubications: String,
    cities: String
});

function instagramButton(name) {
    return `https://www.instagram.com/${name}`
}
function whatsappButton(name) {
    return `https://wa.me/${name}`
}





</script>

<template>
    <!-- <transition name="fade" mode="out-in" appear>
        <div :key="$page.url"> -->
    <MainTemplate class="bg-white ">

        <Head>
            <title>Donde encontrarnos</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>

        <section class="ml-4 md:ml-16 mt-6 min-h-screen">
            <div class="w-full md:w-4/6">
                <div class="flex flex-col md:flex-row md:justify-between w-11/12">
                    <h2 class="text-2xl md:text-4xl">Listado de ciudades</h2>
                    <Link :href="'/donde-encontrarnos'"
                        class="flex justify-center gap-2 items-center bg-newkool-red text-white px-4 rounded-md border border-newkool-red duration-200 hover:bg-white hover:text-newkool-red">
                    <font-awesome-icon :icon="['fas', 'arrow-left']" />
                    <p>Volver </p>
                    </Link>

                </div>

                <div class="my-10 text-gray-700 w-11/12 md:w-[70vw]">
                    <div v-for="city in cities" :key="city">

                        <h2 class="text-4xl tracking-wide ">{{ city.ciudad }}</h2>

                        <div class="flex justify-center mt-4">
                            <hr class="border-gray-500 w-full">
                        </div>

                        <div v-for="place in ubications" :key="place">
                            <div v-if="place.ciudad == city.ciudad"
                                class="flex flex-col md:flex-row w-full justify-between md:h-24 my-2     items-center md:ml-4 bg-gray-100 rounded-md py-4 md:py-0 px-2 md:px-0 md:bg-transparent">
                                <div class="flex items-center gap-2  w-full ">
                                    <font-awesome-icon :icon="['fas', 'circle-check']" />
                                    <p>{{ place.razon_social }}</p>
                                </div>
                                <div class="w-full ">
                                    <a v-if="place.instagram != 'No Disponible'" :href="instagramButton(place.instagram)"
                                        class="text-gray-600 hover:underline hover:text-newkool-red" target="_blank">@{{
                                            place.instagram }}</a>
                                    <p v-else>No Disponible</p>
                                </div>

                                <div class="w-full ">
                                    <a v-if="place.telefono != 'No Disponible'" :href="whatsappButton(place.telefono)"
                                        class="text-gray-600 hover:underline hover:text-newkool-red" target="_blank">{{
                                            place.telefono }}</a>
                                    <p v-else>No Disponible</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </section>


    </MainTemplate>
    <!-- </div>
    </transition> -->
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {

    transition: 0.2s ease;
    transform: translateX(0%);
}

.fade-enter-from,
.fade-leave-to {
    transform: translateX(100%);
}
</style>


