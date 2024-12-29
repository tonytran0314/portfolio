<script setup>
    import { ref } from 'vue'
</script>

<template>
    <div class="bg-gray-900 flex h-20 justify-between items-center fixed left-0 right-0 m-auto w-full px-4 sm:px-8 lg:px-10 max-w-[1536px]">
        <div class="flex items-center gap-2">
            <img src="/src/assets/imgs/logo.jpg" class="max-h-20 w-10" alt="htran logo">
            <p class="text-2xl font-bold">HTran</p>
        </div>
        

        <!-- Mobile navigation -->
        <div class="lg:hidden">
            <font-awesome-icon :icon="['fas', 'bars']" class="size-5 cursor-pointer hover:bg-gray-700 text-blue-50 p-3 rounded-full" />
        </div>
        
        <!-- Desktop navigation -->
        <nav class="hidden lg:block font-bold">
            <ul class="flex gap-12">
                <li>
                    <a href="#">
                        <h6>Home</h6>
                    </a>
                </li>
                <li>
                    <a href="#about">
                        <h6>About Me</h6>
                    </a>
                </li>
                <li>
                    <a href="#projects">
                        <h6>Projects</h6>
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <h6>Contact</h6>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Vue animation -->
        <Transition name="mobile-nav">
            <ul v-show="showMobileNav" id="dropdown">
                <li @click="closeMobileNav">
                    <a href="#">
                        <h6>Home</h6>
                    </a>
                </li>
                <li @click="closeMobileNav">
                    <a href="#about">
                        <h6>About Me</h6>
                    </a>
                </li>
                <li @click="closeMobileNav">
                    <a href="#project">
                        <h6>Projects</h6>
                    </a>
                </li>
                <li @click="closeMobileNav">
                    <a href="#contact">
                        <h6>Contact</h6>
                    </a>
                </li>
            </ul>
        </Transition>
    </div>
</template>

<style scoped>

</style>