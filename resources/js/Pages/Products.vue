<script setup>
import { Head, usePage,Link } from '@inertiajs/vue3';

import { ref } from 'vue';
import MainTemplate from '../Layouts/MainTemplate.vue';




const currentPage = ref(1)
const totalPages = ref(1)
const countPerPage = ref(12)
totalPages.value = Math.ceil(usePage().props.products.length / countPerPage.value)

const productsInPage = ref(usePage().props.products)

const name = usePage().props.name


console.log(name)

function setShow(item) {
    if (
        item > ((currentPage.value - 1) * countPerPage.value) &&
        item <= (currentPage.value * countPerPage.value)
    ) {
        return true
    }

    return false
}



function pageHandler(page) {
    if (page == -1) {
        if (currentPage.value > 1) {
            currentPage.value = currentPage.value - 1
            console.log(currentPage.value)
        }

    } else {

        if (currentPage.value < totalPages.value) {
            currentPage.value = currentPage.value + 1
            console.log(currentPage.value)
        }

    }
}

</script>

<template>
    <MainTemplate class="bg-gray-100 ">

        <Head>
            <title>Productos</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>

        <section class="min-h-screen">
            <div>
                <h2 class="font-bold text-4xl pt-8 text-newkool-red text-center">{{ name }}</h2>
              
            </div>

            <div class="flex items-center justify-center flex-col pb-8 ">
                <!-- {{ productsInPage }} -->

                <div
                    class="grid rounded-lg bg-white my-8 grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 place-items-center place-content-center gap-2 w-fit">
                    <div v-for="(item,index) in productsInPage" :key="index">
                        <div v-if="setShow(index+1)"
                            class="h-fit py-10 w-72 flex flex-col items-center border border-white rounded-md hover:border-newkool-red px-10 group duration-200 ">
                            <img :src="`/assets/products-images/${item.code}.jpg`" :alt="item.type"
                                class="w-44 min-w-44 group-hover:scale-110 duration-200">
                            <h2 class="relative z-10 text-center text-sm font-light">{{ item.name }}</h2>
                            <Link :href="`/productos/${item.name}`"
                                class=" text-lg px-5 mt-4  border-newkool-red border bg-newkool-red text-white hover:text-newkool-red hover:bg-white duration-300 rounded-3xl ">
                                Ver más
                            </Link>
                        </div>



                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <font-awesome-icon :icon="['fas', 'arrow-left']"
                        class="text-black hover:text-newkool-red duration-200 cursor-pointer " @click="pageHandler(-1)" />
                    <p>Page {{ currentPage }}/{{ totalPages }}</p>
                    <font-awesome-icon :icon="['fas', 'arrow-right']"
                        class="text-black hover:text-newkool-red duration-200 cursor-pointer " @click="pageHandler(1)" />

                </div>
            </div>
        </section>


    </MainTemplate>
</template>



