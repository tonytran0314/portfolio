<script setup>
    import CloseButton from '@/components/buttons/CloseButton.vue'

    import { ref } from 'vue'

    const isSideNavigationOpen = ref(false)

    const openSideNavigation = () => {

        // prevent scrolling when opening navigation
        const body = document.body
        if (body) body.style.overflow = "hidden"

        isSideNavigationOpen.value = true
    }
    const closeSideNavigation = () => {

        // allow scrolling
        const body = document.body
        if (body) body.style.overflow = "auto"

        isSideNavigationOpen.value = false
    }
</script>

<template>
    <div class="bg-gray-900 flex h-20 justify-between items-center fixed left-0 right-0 m-auto w-full px-4 sm:px-8 lg:px-10 max-w-[1536px]">
        <div class="flex items-center gap-2">
            <img src="/images/logo.jpg" class="max-h-20 w-10" alt="htran logo">
            <p class="text-2xl font-bold">HTran</p>
        </div>
        
        <!-- Mobile navigation -->
        <div class="lg:hidden">
            <font-awesome-icon @click="openSideNavigation" :icon="['fas', 'bars']" class="size-5 cursor-pointer hover:bg-blue-500 text-blue-50 p-3 rounded-full" /><!-- SIDE MENU FOR SMALL SCREENS -->
            <div class="lg:hidden">
                <Transition name="fade-bg">
                    <div 
                        v-if="isSideNavigationOpen" 
                        class="fixed inset-0 z-[98] bg-black bg-opacity-50 lg:hidden cursor-pointer"
                        @click="closeSideNavigation">
                    </div>
                </Transition>
                
                <Transition name="side-menu">
                    <div 
                        v-if="isSideNavigationOpen" 
                        class="fixed z-[99] top-0 right-0 h-full w-48 bg-gray-800 shadow-2xl p-8 flex flex-col justify-between lg:hidden"
                        @click.stop>
                        <div class="space-y-8">
                            <div class="flex flex-col gap-4 items-end">
                                <div class="flex justify-center items-center">
                                    <CloseButton class="size-12 rounded-full" @click="closeSideNavigation" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 items-start font-bold">
                                <a href="#" class="hover:text-blue-400 hover:underline" @click="closeSideNavigation">Home</a>
                                <a href="#about" class="hover:text-blue-400 hover:underline" @click="closeSideNavigation">About Me</a>
                                <a href="#projects" class="hover:text-blue-400 hover:underline" @click="closeSideNavigation">Projects</a>
                                <a href="#contact" class="hover:text-blue-400 hover:underline" @click="closeSideNavigation">Contact</a>
                            </div>
                        </div>
                    </div>
                </Transition>
            </div>
        </div>
        
        <!-- Desktop navigation -->
        <nav class="hidden lg:block font-bold">
            <ul class="flex gap-12">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#about">About Me</a>
                </li>
                <li>
                    <a href="#projects">Projects</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<style scoped>
    .side-menu-enter-active, 
    .side-menu-leave-active {
        transition: .5s ease all;
    }

    .side-menu-enter-from,
    .side-menu-leave-to {
        transform: translate(192px);
    }

    .side-menu-enter-to {
        transform: translate(0);
    }

    .fade-bg-enter-active,
    .fade-bg-leave-active {
    transition: opacity 0.3s ease;
    }

    .fade-bg-enter-from,
    .fade-bg-leave-to {
    opacity: 0;
    }
</style>