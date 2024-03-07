<script setup>
import { Link } from '@inertiajs/vue3';

import ApplicationLogo from '../Components/ApplicationLogo.vue';


</script>

<template>
    <div class=" hidden lg:flex items-center h-20 justify-evenly px-36 gap-20   text-gray-600">
        <Link :href="'/'"> 
        <ApplicationLogo class="w-36" color="fill-newkool-red" />
        </Link>

        <div class=" flex  justify-between items-center w-fit gap-3 py-0">
            <Link :href="'/somos-newkool'"
                class="whitespace-nowrap px-10 py-2 rounded-3xl hover:text-white hover:bg-neutral-500 duration-200">
            Somos
            Newkool</Link>
            <Link :href="'/donde-encontrarnos'"
                class="whitespace-nowrap px-10 py-2 rounded-3xl hover:text-white hover:bg-neutral-500 duration-200">
            Dónde
            Encontrarnos</Link>

            


            <div class="flex flex-col items-center justify-end  group relative">
                <Link :href="'/productos'"
                    class="whitespace-nowrap px-10 py-2 rounded-3xl hover:text-white hover:bg-neutral-500 duration-200">
                Productos</Link>

                <div
                    class="text-center hidden hover:flex group-hover:flex flex-col border absolute top-10 bg-neutral-200 -right-2 rounded-md">
                    <Link :href="'/linea-blanca/Refrigeracion'" class="whitespace-nowrap px-8 py-2 hover:underline  duration-200 ">
                    Refrigeración</Link>
                    <Link :href="'/linea-blanca/Lavadoras'" class="whitespace-nowrap px-8 py-2 hover:underline  duration-200">
                    Lavadoras</Link>
                    <Link :href="'/linea-blanca/Congeladores'" class="whitespace-nowrap px-8 py-2 hover:underline  duration-200 ">
                    Congeladores</Link>
                    <Link :href="'/linea-blanca/Vitrina'" class="whitespace-nowrap px-8 py-2 hover:underline  duration-200">
                    Vitrina</Link>
                </div>
            </div>



            <Link :href="'/contacto'"
                class="whitespace-nowrap px-10 py-2 rounded-3xl hover:text-white hover:bg-neutral-500 duration-200">
            Contacto
            </Link>
        </div>
    </div>

</template>

<style scoped></style>

