<script setup>
    import ProjectCard from '@/components/projects/ProjectCard.vue'

    const projects = [
        {
            image: 'project_image',
            name: 'Gymlogx',
            tags: [
                'Laravel',
                'VueJS'
            ],
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem velit et sit voluptatibus magnam possimus esse iusto sint ducimus, eveniet debitis aut temporibus? Quod mollitia voluptas esse dicta corporis veniam?',
            url: 'https://htran.tech'
        },
        {
            image: 'project_image',
            name: 'Gymlogx',
            tags: [
                'Laravel',
                'VueJS'
            ],
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem velit et sit voluptatibus magnam possimus esse iusto sint ducimus, eveniet debitis aut temporibus? Quod mollitia voluptas esse dicta corporis veniam?',
            url: 'https://htran.tech'
        }
    ]
</script>

<template>
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
