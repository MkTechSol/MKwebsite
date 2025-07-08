<template>
  <section :class="['py-16 px-4 mt-10 lg:mt-28', bgColor]">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-10">
        <span :class="textColor">{{ heading }}</span> Showcase
      </h2>

      <!-- Project Cards -->
      <div class="grid grid-cols-1 gap-8 px-6 md:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto">
        <div v-for="(project, index) in projects" :key="index"
          class="bg-white rounded-lg shadow-sm overflow-hidden border hover:scale-105 duration-300 border-gray-200 group cursor-pointer">
          <div class="h-[255px] bg-gray-200">
            <img :src="project.image" :alt="project.title"
              class="w-full h-full object-cover group-hover:scale-110 duration-300" />
          </div>
          <div class="py-4">
            <h3 class="text-[#255EC7] font-semibold text-lg">{{ project.title }}</h3>
            <p class="text-gray-600 text-sm">Developed in {{ project.technology }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
defineProps({
  heading: String,
  projects: Array,
  bgColor: { type: String, default: 'bg-white' },
  textColor: { type: String, default: 'text-black' },
})
</script>
