<script setup>
    import PrimaryButton from '@/components/buttons/PrimaryButton.vue'
    import SecondaryButton from '@/components/buttons/SecondaryButton.vue'
    import TechTag from '@/components/projects/TechTag.vue'

    import { defineProps } from 'vue'

    const props = defineProps(['projectImage', 'projectUrl', 'tags'])
    const projectImagePath = `/images/${props.projectImage}.png`
</script>

<template>
    <a class="flex flex-col lg:flex-row lg:p-6 lg:gap-6 bg-gray-800 rounded-xl w-4/5 sm:w-[480px] lg:w-10/12 border border-blue-500" :href="projectUrl" target="blank">
        <div class="project_images flex items-center shadow-lg">
            <img :src="projectImagePath" alt="Project Image" class="rounded-t-xl lg:rounded-xl lg:w-[3500px] shadow-lg">
        </div>
        <div class="p-4 lg:p-0 space-y-6">
            <div class="space-y-8">
                <div class="space-y-6">
                    <div class="text-3xl font-bold"><slot name="name"></slot></div>
                    <div class="flex gap-2 flex-wrap">
                        <TechTag v-for="tag in tags">{{ tag }}</TechTag>
                    </div>
                </div>
                <div><slot name="description"></slot></div>
            </div>
            <div class="flex flex-col gap-3">
                <!-- <SecondaryButton>Details</SecondaryButton> -->
                <PrimaryButton>Try It Out</PrimaryButton>
            </div>
        </div>
    </a>
</template>