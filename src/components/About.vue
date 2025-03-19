<script setup>
    import TechStacks from '@/components/tech_stacks/TechStacks.vue';
</script>

<template>
    <div id="about"></div>
    <div class="text-center space-y-6">
        <div class="text-2xl font-bold">About Me</div>
        <div class="px-4 md:px-20 lg:px-40"><p>I’m a web developer with a strong focus on <span class="font-bold text-red-500">problem-solving</span>, adaptability, and continuous learning. I enjoy tackling challenges, breaking down complex issues, and finding efficient solutions through clean, scalable code. Always eager to explore new technologies, I thrive in dynamic environments where I can learn and improve.<br><br><span class="font-bold text-red-500">I’ve built MeepX, a real-time chat app</span> using Vue.js, Laravel, and WebSockets, ensuring smooth and responsive messaging. I also developed <span class="font-bold text-red-500">GymLogx, a workout tracking platform</span> that helps users log and visualize their progress with interactive charts. Both projects reflect my passion for creating functional, user-friendly applications that solve real-world problems.</p></div>
        
        <TechStacks />
    </div>
</template>