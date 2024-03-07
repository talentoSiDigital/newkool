<script setup>
import { Link } from '@inertiajs/vue3';

import ApplicationLogo from '../Components/ApplicationLogo.vue';
import { ref } from 'vue';

const navActive = ref(false)

function toggleNav() {
    navActive.value = !navActive.value
}

</script>

<template>
    <div class="flex flex-col items-center justify-start h-24 gap-5 translate-y-10 text-gray-600 lg:hidden">
        <div class="flex flex-row items-center justify-around w-full">
            <Link :href="'/'">
            <ApplicationLogo class="w-36" color="fill-newkool-red" />
            </Link>
            <div class="border p-2 rounded-md cursor-pointer hover:shadow-md" @click="toggleNav">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </div>
        </div>
        <Transition 
            enter-from-class="transform opacity-0"
            enter-to-class="opacity-100" 
            enter-active-class="duration-200 ease-out" 

            leave-from-class="opacity-100"
            leave-to-class="transform opacity-0"
            leave-active-class="duration-200 ease-in"
        > 
            
                    <div v-if="navActive"
                        class="h-fit absolute top-16 flex flex-col overflow-hidden  justify-between items-center w-11/12 gap-3 py-0 bg-gray-100 duration-200">
                        <Link :href="'/somos-newkool'" class="whitespace-nowrap px-10 py-2 h-14 rounded-3xl w-full text-center duration-200">
                        Somos
                        Newkool</Link>
                        <Link :href="'/donde-encontrarnos'" class="whitespace-nowrap px-10 py-2 h-14 rounded-3xl w-full text-center duration-200">
                        Dónde
                        Encontrarnos</Link>
            
            
            
            
                        <div class="flex flex-col items-center justify-end w-full relative">
                            <Link :href="'/productos'" class="whitespace-nowrap px-10 py-2 h-fit rounded-3xl w-full text-center duration-200">
                            Productos</Link>
             
                            <div
                                class="text-center  hover:flex flex flex-col border top-10 bg-neutral-200 -right-2 rounded-md duration-200 w-full">
                                <Link :href="'/'" class="whitespace-nowrap px-8 py-2 h-14 hover:underline  duration-200 ">
                                Refrigeración</Link>
                                <Link :href="'/'" class="whitespace-nowrap px-8 py-2 h-14 hover:underline  duration-200">
                                Lavadoras</Link>
                                <Link :href="'/'" class="whitespace-nowrap px-8 py-2 h-14 hover:underline  duration-200">
                                Congeladores</Link>
                                <Link :href="'/'" class="whitespace-nowrap px-8 py-2 h-14 hover:underline  duration-200">
                                Vitrina</Link>
                            </div>
                        </div>
            
            
            
                        <Link :href="'/contacto'" class="whitespace-nowrap px-10 py-2 h-14 rounded-3xl w-full text-center duration-200">
                        Contacto
                        </Link>
                    </div>

        </Transition>

    </div>
</template>

<style scoped></style>

