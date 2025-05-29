<script setup>

</script>

<template>
    <section class="fixed w-full z-10 top-0  flex items-center justify-center ">
        <div class="w-full h-full absolute z-20">

        </div>
        <div class="w-full">
             <div class="absolute z-40 bg-gray-500/30 h-full w-full"></div>
            <div class="relative">
                <video src="/assets/route-images/somos-newkool/video-newkool-desktop.mp4" autoplay loop muted="muted" class="aspect-video  hidden md:block w-full "></video>
                <video src="/assets/route-images/somos-newkool/video-newkool-mobile.mp4" autoplay loop muted="muted" class="aspect-auto block md:hidden w-full "></video>
               
                <header class="absolute z-50 bottom-44 flex flex-col gap-6 items-center  w-full text-white">
                    <h2 class="text-4xl font-bold drop-shadow-lg text-center">Calidad de hogar</h2>
                    <font-awesome-icon :icon="['fas', 'angles-down']" class="text-5xl  animate-bounce" />

                </header>
            </div>




         
        </div>
    </section>
    <div id="correction" class="h-screen">

    </div>
</template>



