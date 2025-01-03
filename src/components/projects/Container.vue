<script setup>
    import ProjectCard from '@/components/projects/ProjectCard.vue'

    const projects = [
        {
            image: 'gymlogx/guest',
            name: 'GymLogx',
            tags: [
                'Laravel',
                'VueJS',
                'Tailwind',
                'Docker'
            ],
            description: 'GymLogx is an app designed to help users track and log their gym workouts. Users can record the exercise name, muscle group, weight lifted, number of sets, reps and the workout date. GymLogx can visualize the progress through charts, providing users with insights into their performance over time. GymLogx makes it easy to monitor your fitness journey.',
            url: 'https://gymlogx.com'
        }
    ]
</script>

<template>
    <div id="projects"></div>
    <div class="space-y-6">
        <div class="font-bold text-2xl text-center">Personal Projects</div>
        <div class="flex flex-col gap-6 items-center justify-center md:flex-row flex-wrap">
            <ProjectCard v-for="project in projects" :project-image="project.image" :project-url="project.url" :tags="project.tags">
                <template #name>{{ project.name }}</template>
                <template #description>{{ project.description }}</template>
            </ProjectCard>
        </div>
    </div>
</template>
