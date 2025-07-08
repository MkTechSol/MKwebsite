<template>
  <section class="py-12 bg-[#F8F9FB] text-center">
    <!-- Badge -->
    <p class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md">
      Our Portfolio
    </p>

    <!-- Heading -->
    <h2 class="text-3xl font-bold mb-10">
      Our Amazing <span class="text-[var(--color-red-text)]">Projects</span>
    </h2>

    <!-- Project Cards -->
    <div class="grid grid-cols-1 gap-8 px-6 sm:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto">
      <div
        v-for="(project, index) in projects"
        :key="index"
        class="bg-white rounded-lg shadow-sm overflow-hidden border hover:scale-105 duration-300 border-gray-200 group cursor-pointer"
      >
        <div class="h-[255px] bg-gray-200">
          <img
            :src="project.image"
            :alt="project.title"
            class="w-full h-full object-cover group-hover:scale-110 duration-300"
          />
        </div>
        <div class="py-4">
          <h3 class="text-[#255EC7] font-semibold text-lg">{{ project.title }}</h3>
          <p class="text-gray-600 text-sm">{{ project.subtitle }}</p>
        </div>
      </div>
    </div>

    <!-- View More Button -->
    <div class="mt-10">
      <base-link-button to="/portfolio">
        View More Portfolio
      </base-link-button>
    </div>




  </section>
</template>

<script setup>
const projects = [
  {
    title: 'Al-Ektiar',
    subtitle: 'Developed in Magento',
    image: '/src/assets/Images/ektiar.png', // replace with your path
  },
  {
    title: 'Hyundai',
    subtitle: 'Developed in Magento',
    image: '/src/assets/Images/hyundai.png', // replace with your path
  },
  {
    title: 'Geely',
    subtitle: 'Developed in Magento',
    image: '/src/assets/Images/geely.png', // replace with your path
  },
]
</script>
