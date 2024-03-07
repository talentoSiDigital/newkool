<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainTemplate from '../Layouts/MainTemplate.vue';

import VideoBanner from '../Custom/VideoBanner.vue';




</script>

<template>
        <MainTemplate class="bg-white">

            <Head>
                <title>Somos Newkool</title>
                <meta name="description" content="Newkoolamerica.com">
            </Head>

            <VideoBanner />

            <div class="relative z-40 bg-white">
                <header class="text-center h-64 flex flex-col items-center justify-center">
                    <h2 class="font-bold text-4xl text-newkool-red">¿Quiénes somos?</h2>
                    <p class="w-3/4 text-gray-700 text-lg">Somos una empresa que está comprometida con la mejora de la vida de
                        los
                        venezolanos. Ofrecemos productos de alta calidad que son duraderos, eficientes y fáciles de usar.</p>
                </header>

                <section class="w-full h-fit flex items-center justify-center">
                    <Link :href="'/'" class="w-3/4">
                    <img src="/assets/route-images/somos-newkool/mapa-quienes-somos.jpg" alt="mapa de localidades">
                    </Link>


                </section>
                <section class="w-full h-[60vh] mt-10 py-10 flex items-center justify-center">
                    <div class="w-3/4 flex items-center justify-center gap-8">
                        <header>
                            <h2 class="text-center text-2xl font-semibold text-newkool-red">Misión</h2>
                            <p class="text-justify text-gray-700">Mejorar la vida de nuestros clientes a través de
                                electrodomésticos innovadores y de alta calidad, y brindar un servicio excepcional que garantice
                                su satisfacción y fidelidad hacia nuestra marca.</p>
                        </header>
                        <header>
                            <h2 class="text-center text-2xl font-semibold text-newkool-red">Visión</h2>
                            <p class="text-justify text-gray-700">Ser la marca líder en electrodomésticos, reconocida por la
                                calidad, innovación y diseño de nuestros productos, así como por nuestra excelencia en el
                                servicio al cliente.</p>
                        </header>
                    </div>


                </section>

            </div>
        </MainTemplate>
</template>

<style scoped></style>

