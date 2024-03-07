<script setup>
import {  Link } from '@inertiajs/vue3';

defineProps({
    path:String
});
</script>

<template>
    <Link :href="path"
        class=" text-lg px-5 mt-4  border-newkool-red border bg-newkool-red text-white hover:text-newkool-red hover:bg-white duration-300 rounded-3xl ">
        <slot></slot>
    </Link>
</template>
