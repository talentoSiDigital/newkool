<script setup>
import { Link } from '@inertiajs/vue3';

import ResponsiveNavLink from '../Components/ResponsiveNavLink.vue'
import ApplicationLogo from '../Components/ApplicationLogo.vue';
import NavDesktop from '../Components/NavDesktop.vue'
import NavMobile from '../Components/NavMobile.vue'

</script>

<template>
    <nav class="relative  z-40 bg-white">
        <NavDesktop />
        <NavMobile />
        <div class="flex justify-center">
            <hr class="border-black w-11/12">
        </div>
    </nav>
</template>

