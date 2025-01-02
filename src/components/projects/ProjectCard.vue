<script setup>
    import PrimaryButton from '@/components/buttons/PrimaryButton.vue'
    import SecondaryButton from '@/components/buttons/SecondaryButton.vue'
    import TechTag from '@/components/projects/TechTag.vue'

    import { defineProps } from 'vue'

    const props = defineProps(['projectImage', 'projectUrl', 'tags'])
    const projectImagePath = `/images/${props.projectImage}.png`
</script>

<template>
    <a class="bg-gray-800 rounded-xl w-4/5 sm:w-80" :href="projectUrl" target="blank">
        <div class="project_image">
            <img :src="projectImagePath" alt="Project Image" class="rounded-t-xl">
        </div>
        <div class="p-4 space-y-6">
            <div class="space-y-4">
                <div class="space-y-2">
                    <div class="text-xl font-bold"><slot name="name"></slot></div>
                    <div class="flex gap-2 flex-wrap">
                        <TechTag v-for="tag in tags">{{ tag }}</TechTag>
                    </div>
                </div>
                <div><slot name="description"></slot></div>
            </div>
            <div class="flex flex-col gap-3">
                <!-- <SecondaryButton>Details</SecondaryButton> -->
                <PrimaryButton>Live Demo</PrimaryButton>
            </div>
        </div>
    </a>
</template>