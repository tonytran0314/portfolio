<script setup>
    import PrimaryButton from '@/components/buttons/PrimaryButton.vue'
    import SecondaryButton from '@/components/buttons/SecondaryButton.vue'
</script>

<template>
    <div class="space-y-6">
        <div class="font-bold text-2xl text-center">Personal Projects</div>
        <div class="flex flex-col gap-6">

            <!-- Loop -->
            <a class="bg-gray-800 rounded-xl"  href="#" target="blank">
                <div class="project_image">
                    <img src="/src/assets/imgs/project_image.png" alt="Project Image" class="rounded-t-xl">
                </div>
                <div class="p-4 space-y-6">
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <div class="text-xl font-bold">Project Name</div>
                            <div>Laravel, VueJS</div>
                        </div>
                        <div>Project description Project description Project description Project description Project description Project description Project description Project description Project description Project description Project description Project description Project description
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <SecondaryButton>Details</SecondaryButton>
                        <PrimaryButton>Live Demo</PrimaryButton>
                    </div>
                </div>
            </a>
            <!-- /Loop -->

        </div>
    </div>
</template>
