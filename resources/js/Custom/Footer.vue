<script setup>

</script>

<template>
    <footer
        class="h-fit lg:h-24 py-10 gap-6 flex flex-col md:flex-row items-center justify-around bg-newkool-red text-white relative z-50">
        <div class="flex flex-col lg:flex-row items-center gap-5 w-full md:w-1/2 ">
            <div class="flex gap-2">
                <font-awesome-icon :icon="['fas', 'envelope']" class="text-2xl fill-white" />

                <a href="mailto:atencionalcliente@newkoolamerica.com"
                    class="hover:text-gray-300 hover:underline">atencionalcliente@newkoolamerica.com</a>
            </div>
            <div class="flex gap-2">
                <font-awesome-icon :icon="['fas', 'phone']" class="text-2xl fill-white" />

                <p>
                    <a href="https://wa.me/584148811719" target="_blank"
                        class="hover:text-gray-300 hover:underline">+584148811719</a>/
                    <a href="https://wa.me/584148811721" target="_blank"
                        class="hover:text-gray-300 hover:underline">+584148811721</a>
                </p>
            </div>
        </div>



        <div class="flex flex-col lg:flex-row justify-around  w-1/2 md:w-1/5 items-center">

            <h2 class="font-semibold text-xl">Síguenos en:</h2>
            <div class="flex justify-around  w-full md:w-1/2 items-center">
                <a href="https://www.facebook.com/profile.php?id=100093263747394" target="_blank">
                    <font-awesome-icon :icon="['fab', 'facebook-f']" class="text-2xl text-white hover:text-gray-300" />


                </a>
                <a href="https://www.instagram.com/newkoolamerica/" target="_blank">
                    <font-awesome-icon :icon="['fab', 'instagram']" class="text-2xl text-white hover:text-gray-300" />


                </a>
                <a href="https://twitter.com/NewkoolAmerica" target="_blank">
                    <font-awesome-icon :icon="['fab', 'x-twitter']" class="text-2xl text-white hover:text-gray-300" />

                </a>
            </div>
        </div>
    </footer>
</template>

<style scoped></style>

