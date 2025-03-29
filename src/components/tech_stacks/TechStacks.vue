<script setup>
    import TechStackItem from '@/components/tech_stacks/TechStackItem.vue'

    const stackNames = [
        'Laravel',
        'VueJS',
        'Docker',
        // 'Kubernetes',
        'MySQL',
        'Postman',
        'Git',
        'Figma',
        'Tailwind',
        'HTML',
        'CSS',
        'Javascript',
    ]
</script>

<template>
    <div class="space-y-6">
        <div class="font-bold text-xl">My Skills:</div>
        
        <!-- Chỗ này chưa hài lòng lắm, thấp nhất là 2 hàng, tìm cách không cho nó thành 1 hàng khi màn hình quá dài -->
        <div class="flex gap-4 flex-wrap justify-center">
            <TechStackItem v-for="stack in stackNames" :name="stack" />
        </div>
    </div>
</template>