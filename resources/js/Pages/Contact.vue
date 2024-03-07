<script setup>
import { Head, usePage, Link, router } from '@inertiajs/vue3';

import { ref } from 'vue';
import MainTemplate from '../Layouts/MainTemplate.vue';


import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
defineProps({
    product: Array,
    slider: Array,
    message:String
});


const mail = ref({
    'name': null,
    'email': null,
    'phone': null,
    'subject': null,
    'message':null
})

const name = ref(null)

function submit(){
    router.post('/contacto/send', mail)
}

</script>

<template>
    <MainTemplate class="bg-gray-100 ">

        <Head>
            <title>Contacto</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>
        <div>
            {{ message }}
        </div>

        <section class="relative">
            <img src="/assets/route-images/contacto-desktop.png" alt="contacto-banner" class="hidden md:block">
            <img src="/assets/route-images/contacto-mobile.png" alt="contacto-banner" class="block md:hidden">
            <a href="https://wa.link/xoi3do" target="_blank" class="group">
                <font-awesome-icon :icon="['fab', 'whatsapp']" class="text-9xl absolute top-[70%] left-[47%] group-hover:text-newkool-red text-gray-700 duration-200 " />

            </a>
        </section>

        <section>
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-newkool-red ">Contáctanos
                </h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500  sm:text-xl">Envíanos tu mensaje mediante el
                    siguiente formulario. Tu opinion es importante para nosotros.
                </p>
                <form class="space-y-8" @submit.prevent="submit">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre completo:</label>
                        <input type="text" id="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-newkool-red focus:border-newkool-red block w-full p-2.5"
                            placeholder="Nombre" required v-model="mail.name">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Dirección de correo</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-newkool-red focus:border-newkool-red block w-full p-2.5"
                            placeholder="ejemplo@ejemplo.com" required v-model="mail.email">
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Número de Teléfono</label>
                        <input type="tel" id="phone"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-newkool-red focus:border-newkool-red block w-full p-2.5"
                            placeholder="212-000-0000" required v-model="mail.phone">
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Asunto</label>
                        <input type="text" id="subject"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-newkool-red focus:border-newkool-red "
                            placeholder="Dejános saber el motivo de tu mensaje" required v-model="mail.subject">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tu
                            mensaje</label>
                        <textarea id="message" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-newkool-red focus:border-newkool-red "
                            placeholder="Deja tu comentario..." v-model="mail.message"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-newkool-red py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 ">Enviar</button>
                </form>
            </div>
        </section>


    </MainTemplate>
</template>


<style scoped></style>


