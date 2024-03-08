<script setup>
import { Head, usePage, Link } from '@inertiajs/vue3';

import { ref } from 'vue';
import PrimaryButton from '../Components/PrimaryButton.vue';
import MainTemplate from '../Layouts/MainTemplate.vue';
import ShareSocialsButton from '../Components/ShareSocialsButton.vue'


import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
defineProps({
    product: Array,
    slider: Array
});


const breakpoints = {
    350:{  
        itemsToShow: 1,
        snapAlign: 'center',
        autoplay:2000
    },
    // 700px and up
    700: {
        itemsToShow: 2,
        snapAlign: 'center',
    },
    // 1024 and up
    1024: {
        itemsToShow: 3,
        snapAlign: 'start',
    },
}

function getTableContent(item, char) {
    return item.split(char)
}

</script>

<template>
    <MainTemplate class="bg-gray-100 ">

        <Head>
            <title>{{ product[0].name }}</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>
        <section class="min-h-screen">
            <div class="h-fit flex justify-center my-8">
                <div class=" rounded-md border-2 bg-white p-4  w-11/12 h-fit lg:h-2/5 flex flex-col lg:flex-row items-center   ">

                    <div class="overflow-hidden md:overflow-visible  w-full lg:w-4/5 flex flex-col items-center justify-center group">
                        <img :src="`/assets/products-images/${product[0].code}.jpg`" :alt="product.type"
                            class="w-1/3 rounded-lg duration-200 scale-125 relative z-0 mb-10">

                             <h2 class="font-bold text-center relative z-10 mt-4">Compartir en:</h2>
                            <div class="flex flex-row justify-center items-center gap-4 mt-2 relative z-20">
                                <ShareSocialsButton social="facebook" />
                                <ShareSocialsButton social="x" />
                                <ShareSocialsButton social="instagram" />
                            </div>
                    </div>

                    <aside
                        class="h-[75vh] rounded-md w-full  lg:w-1/3 flex flex-col items-center justify-center  mx-4">
                        <header class=" sm:w-1/2 md:w-full  lg:w-10/12">
                            <h2
                                class="font-newkool rounded-md border border-black p-2 w-full text-2xl md:text-3xl text-newkool-red text-center">
                                {{ product[0].type }}</h2>
                            <p class="font-light text-gray-500 text-sm py-4">Modelo: {{ product[0].code }}</p>
                            <ul class=" border border-black rounded-md overflow-hidden">

                                <h2 class="text-newkool-red font-bold px-4 py-2">Caracteristicas</h2>
                                <li v-for="(item,index) in getTableContent(product[0].description, ';')" :key="item"
                                    class=" w-full text-sm   ">
                                   <p :class="[index % 2 == 0?'bg-slate-200':'bg-slate-100']" class="w-full px-6 py-1 "> {{ item }}</p>
                                </li>


                            </ul>
                            <a href="https://wa.me/584148811719" target="_blank" class="text-white bg-newkool-red w-full h-fit border border-newkool-red flex items-center gap-2 justify-center rounded-md py-2 duration-200 hover:bg-white hover:text-newkool-red my-4">
                                <font-awesome-icon :icon="['fab', 'whatsapp']" class="text-2xl" />
                                Contáctanos
                            </a>
                           
                        </header>

                    </aside>
                </div>
            </div>
            <div class="h-fit flex justify-center">
                <div
                    class=" bg-white  w-11/12 h-2/5 flex flex-col items-center justify-center  rounded-xl pb-8">
                    <h2 class=" font-bold text-4xl pt-10 mb-10 text-newkool-red font-newkool ">Productos relacionados</h2>
                    <Carousel :breakpoints="breakpoints" class="w-full">
                        <Slide v-for="slide in slider " :key="slide" class="bg-white py-4 px-4 w-1/2">
                            <div class="flex flex-col w-full lg:w-10/12 rounded-xl py- items-center gap-4 border border-gray-400  lg:hover:scale-110 duration-200 shadow-lg py-4">
                                <img :src="`/assets/products-images/${slide.code}.jpg`" :alt="slide.type" class="w-1/2 ">
                                <header>
                                    <h2>{{ slide.name }}</h2>
                                    <Link :href="`/productos/${slide.name}`"
                                        class=" text-lg px-5 mt-4  border-newkool-red border bg-newkool-red text-white hover:text-newkool-red hover:bg-white duration-300 rounded-3xl ">
                                    Ver más
                                    </Link>
                                </header>
                            </div>

                        </Slide>

                        <template #addons>

                            <div class="hidden md:block">
                                <Navigation />
                            </div>
                        </template>
                    </Carousel>
                </div>
            </div>


        </section>

        <div class="h-10 mt-2"></div>
    </MainTemplate>
</template>


<style scoped></style>
