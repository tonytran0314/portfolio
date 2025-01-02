<script setup lang="ts">
    import PrimaryButton from '@/components/buttons/PrimaryButton.vue'

    import { Typed } from "@duskmoon/vue3-typed-js";
    import type { TypedOptions } from "@duskmoon/vue3-typed-js";

    const options: TypedOptions = {
        strings: [
            "<span>A Web</span>", 
            "<span>A Backend</span>", 
            "<span>A Frontend</span>"
        ],
        loop: true,
        typeSpeed: 65,
        showCursor: false
    };
</script>

<template>
    <div class="flex flex-col gap-6 items-center md:flex-row justify-center mt-40 md:mt-48 lg:mt-56 xl:mt-64 2xl:mt-72">
        <div class="flex flex-col items-center gap-6">
            <div class="font-bold text-center space-y-2 sm:space-y-4 md:space-y-5 md:w-96">
                <div class="text-xl sm:text-2xl">Hello, I am</div>
                <div class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-blue-500">Huy Tran</div>
                <div class="flex flex-col space-y-2 sm:space-y-4 md:space-y-6 lg:space-y-10">
                    <div class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl h-9">
                        <Typed :options="options">
                            <span class="typing"></span>
                        </Typed>
                    </div>
                    <div class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl">Developer</div>
                </div>
            </div>
            <divs>
                <PrimaryButton><a href="#project" class="sm:text-lg">My projects</a></PrimaryButton>
            </divs>
        </div>
        <div class="size-60 lg:size-72 xl:size-80 rounded-full border-2 border-blue-600 p-1">
            <img src="/images/avatar.jpg" alt="Huy Tran avatar" class="size-full rounded-full">
        </div>
    </div>
</template>
