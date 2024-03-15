<script setup>
import { computed, ref, watch } from 'vue';
import PrimaryButton from '../Components/PrimaryButton.vue'

import ApplicationLogo from '../Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';


const validator = ref(0)
const sliderV = ref([true, false, false, false, false])


function sliderChanged(pos) {

    for (let index = 0; index < sliderV.value.length; index++) {
        index == pos ? sliderV.value[index] = true : sliderV.value[index] = false
    }

}

function autoPlay() {

    if (validator.value < sliderV.value.length - 1) {
        validator.value = validator.value + 1
    } else {
        validator.value = 0
    }


    sliderChanged(validator.value)
}

setInterval(autoPlay, 9000)

function update(type) {
    if (type == 1) {
        if (validator.value < sliderV.value.length - 1) {
            validator.value = validator.value + 1
        } else {
            validator.value = 0

        }

    } else {
        if (validator.value > 0) {
            validator.value = validator.value - 1
        } else {
            validator.value = sliderV.value.length - 1

        }

    }
    sliderChanged(validator.value)
}

// effect #3: alternate translation

const checkSlider3 = (item) => {
    if (item % 2 == 0) {
        return sliderV.value[item] == true ? 'translate-y-0' : 'translate-y-full '
    } else {
        return sliderV.value[item] == true ? 'translate-x-0 ' : 'translate-x-full'

    }
}




</script>

<template>
    <section>


        <!-- Effect #3 -->
        <div class=" w-full h-full flex justify-center mt-10">
            <div
                class="flex relative items-start justify-start w-11/12  h-full overflow-hidden bg-newkool-red">

                <div class="flex items-center">
                    <div class="absolute z-20 left-4 cursor-pointer" @click="update(-1)">
                        <font-awesome-icon :icon="['fas', 'caret-left']"
                            class="text-3xl text-newkool-red hover:text-white duration-200 hover:bg-newkool-red p-3 rounded-lg" />
                    </div>

                    <img class="2xl:w-[200vw] opacity-0 relative z-0"
                        src="/assets/banner-images/banner-lavadora-black-mobile.png" alt="lavadora">

                    <div class="flex  items-center">
                        <div class="absolute z-20 right-3 cursor-pointer" @click="update(1)">
                            <font-awesome-icon :icon="['fas', 'caret-right']"
                                class="text-3xl text-newkool-red hover:text-white duration-200 hover:bg-newkool-red p-3 rounded-lg" />
                        </div>

                    </div>
                </div>





                <div class="absolute duration-500 z-10" :class="checkSlider3(0)">
                    <div class="absolute z-10 flex flex-col w-full h-full items-center justify-start pt-6  text-center">
                        <h2 class="text-gray-600 font-light text-lg">Hacemos de tu</h2>
                        <span class="text-newkool-red text-3xl my-0 font-extrabold leading-[25px]">Hogar</span>
                        <h2 class="text-gray-600 font-light text-lg">
                            Tu lugar favorito
                        </h2>

                        <Link :href="'/'"
                            class="text-sm md:text-lg px-5   border-newkool-red border bg-newkool-red text-white hover:text-newkool-red hover:bg-white duration-300 rounded-3xl ">
                        VER MÁS

                        </Link>
                    </div>
                    <img class="2xl:w-[200vw]" src="/assets/banner-images/banner-lavadora-black-mobile.png"
                        alt="lavadora">
                </div>

                <div class="absolute duration-500 z-10" :class="checkSlider3(1)">
                    <div class="absolute z-10 flex flex-col w-full h-full items-center justify-start pt-6  text-center">
                        <h2 class="text-newkool-red text-4xl font-extrabold ">Electrodomésticos</h2>

                        <Link :href="'/'"
                            class="text-sm md:text-lg px-5   border-newkool-red border bg-newkool-red text-white hover:text-newkool-red hover:bg-white duration-300 rounded-3xl ">
                        VER MÁS

                        </Link>
                    </div>
                    <img class="2xl:w-[200vw]" src="/assets/banner-images/banner-marca-newkool-mobile.png"
                        alt="lavadora">
                </div>
                <div class="absolute duration-500 z-10" :class="checkSlider3(2)">
                    <div class="absolute z-10 flex flex-col w-full h-full items-center justify-start pt-6  text-center">
                        <h2 class="text-gray-600 font-light text-lg">Nuestras
                            <br>
                            <span class="text-white text-3xl font-semibold leading-[15px] ">Neveras</span>

                        </h2>
                        <Link :href="'/'"
                            class="text-sm md:text-lg px-5   border-gray-500 border bg-gray-500 text-white hover:text-gray-500 hover:bg-white duration-300 rounded-3xl ">
                        VER MÁS
                        </Link>

                    </div>
                    <img class="2xl:w-[200vw]" src="/assets/banner-images/banner-nevera-black-mobile.png"
                        alt="lavadora">
                </div>

                <div class="absolute duration-500 z-10" :class="checkSlider3(3)">
                    <div class="absolute z-10 flex flex-col w-full h-full items-center justify-start pt-6  text-center">
                        <h2 class="text-gray-600 font-light text-lg">Nuestras
                            <br>
                            <span class="text-gray-800 text-3xl font-extrabold leading-[20px]">Lavadoras</span>
                        </h2>
                        <Link :href="'/'"
                            class="text-sm md:text-lg px-5   border-gray-500 border bg-gray-500 text-white hover:text-gray-500 hover:bg-white duration-300 rounded-3xl ">
                        VER MÁS
                        </Link>
                    </div>
                    <img class="2xl:w-[200vw]" src="/assets/banner-images/banner-lavadora-white-mobile.png"
                        alt="lavadora">
                </div>

                <div class="absolute duration-500 z-10" :class="checkSlider3(4)">
                    <div class="absolute z-10 flex flex-col w-full h-full items-center justify-start pt-6  text-center">
                        <h2 class="text-gray-600 font-light text-lg">Productos de última
                            <br>
                            <span class="text-newkool-red text-3xl font-extrabold ">Generacíon</span>

                        </h2>

                        <PrimaryButton path="/">
                            VER MÁS
                        </PrimaryButton>
                    </div>
                    <img class="2xl:w-[200vw]" src="/assets/banner-images/banner-nevera-white-mobile.png"
                        alt="lavadora">
                </div>






            </div>
        </div>




    </section>
</template>
