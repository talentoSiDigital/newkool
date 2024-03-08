<script setup>
import {  Link } from '@inertiajs/vue3';
import PrimaryButton from '../Components/PrimaryButton.vue'

defineProps({
    title:String
})

const imgSrc = {
    "refrigeracion":{
        "title":"Refrigeración",
        "src":"nevera-newkool.png",
        "link":"Refrigeracion",
    },
    "lavado":{
        "title":"Lavado",
        "src":"lavadora-newkool.png",
        "link":"Lavadoras"
    }
}

</script>

<template>
    <div class=" w-[280px] group bg-gray-100 h-[360px] py-10 flex flex-col gap-8 items-center justify-evenly rounded-xl overflow-hidden">
        <h2 class=" text-3xl text-center  font-semibold">{{imgSrc[title].title}}</h2>
        <div class="h-1/2 w-full my-4 flex items-center justify-center">
            <img class="max-w-28 " :src="`/assets/route-images/home/${imgSrc[title].src}`" :alt="title">
        </div>
        <PrimaryButton :path="`/linea-blanca/${imgSrc[title].link}`" class="md:translate-y-48 group-hover:translate-y-0">
            Ver más
        </PrimaryButton>
    </div>
</template>
