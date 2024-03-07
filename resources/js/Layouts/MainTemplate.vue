<script setup>
import Navbar from '../Custom/Navbar.vue';
import Footer from '../Custom/Footer.vue';


</script>

<template>
    <main class="font-roboto ">
        <Navbar/>
        <slot></slot>
        <Footer/> 
        
    </main>
</template>

<style scoped>

</style>

