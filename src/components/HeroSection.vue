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
    <div id="hero_section">
        <div class="flex flex-col gap-6 items-center">
            <div class="flex flex-col items-center gap-6">
                <div class="font-bold text-center space-y-2">
                    <div class="text-xl">Hello, I am</div>
                    <div class="text-3xl text-blue-500">Huy Tran</div>
                    <div class="text-3xl h-9">
                        <Typed :options="options">
                            <span class="typing"></span>
                        </Typed>
                    </div>
                    <div class="text-3xl">Developer</div>
                </div>
                <divs>
                    <PrimaryButton><a href="#project" class="">My projects</a></PrimaryButton>
                </divs>
            </div>
            <div class="size-60 rounded-full border-2 border-blue-600 p-1">
                <img src="/src/assets/imgs/avatar.jpg" alt="Huy Tran avatar" class="size-full rounded-full">
            </div>
        </div>
    </div>
</template>
