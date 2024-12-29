<script setup>
    import { defineProps } from 'vue'

    const props = defineProps(['name'])
    const imagePath = '/src/assets/imgs/' + props.name + '.png'
</script>

<template>
    <div :title="name">
        <img :src="imagePath" class="bg-gray-800 rounded-2xl size-20 basis-1/3" :alt="name">
    </div>
</template>