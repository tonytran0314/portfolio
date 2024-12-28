<script setup>
  import Menu from './components/Menu.vue'
  import HeroSection from './components/HeroSection.vue'
  import About from './components/About.vue'
  import Projects from './components/Projects.vue'
  import Contact from './components/Contact.vue'
</script>

<template>
  <div class="w-full h-auto flex justify-center bg-gray-900 text-blue-50">
    <div class="w-full h-auto max-w-[1536px] flex flex-col gap-16 px-4 sm:px-8 lg:px-10 pb-12">
      <Menu />
      <HeroSection />
      <About />
      <Projects />
      <Contact />
    </div>
  </div>
</template>
