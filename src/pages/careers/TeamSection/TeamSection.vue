<template>
  <section class="px-4 lg:px-0 mt-10">
    <div class="max-w-7xl mx-auto px-4 lg:px-16 text-center bg-gradient-to-r from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] rounded-md lg:rounded-[40px] py-16 ">
      <!-- Tag -->
      <p class="w-fit px-6 py-2.5  mb-2.5 text-sm font-semibold text-[var(--color-accent-text)] bg-white rounded-md">
        Team
      </p>

      <!-- Heading -->
      <h2 class="text-left text-3xl font-semibold mb-12 text-white">
        Our leadership and <span class="text-[var(--color-red-text)]">mentors</span>
      </h2>

      <!-- Grid -->
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 justify-center">
        <div
          v-for="(member, index) in team"
          :key="index"
          class="flex flex-col items-center text-center hover:scale-110 duration-300"
        >
          <img
            :src="member.image"
            :alt="member.name"
            class="w-28 h-28 sm:w-32 sm:h-32 rounded-full object-cover shadow-md hover:scale-90 duration-300"
          />
          <h3 class="text-white font-semibold text-sm mt-4">{{ member.name }}</h3>
          <p class="text-white text-xs">{{ member.role }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const team = [
  {
    name: 'Sami Ullah',
    role: 'CEO',
    image: '/src/assets/Team/sami.png',
  },
  {
    name: 'Haroon khan',
    role: 'UIUX Designer',
    image: '/src/assets/Team/haroon.png',
  },
  {
    name: 'Saud khan',
    role: 'Laravel Developer',
    image: '/src/assets/Team/saud.png',
  },
  {
    name: 'Ali haider',
    role: 'CTO',
    image: '/src/assets/Team/ali.png'
  },
  {
    name: 'Amna khan',
    role: 'uiux designer',
    image: '/src/assets/Team/amna.png',
  },
  {
    name: 'Alishba Malick',
    role: 'Php Developer',
    image: '/src/assets/Team/alishba.png',
  },
  {
    name: 'Asad Ullah',
    role: 'Php Developer',
    image: '/src/assets/Team/asad.png',
  },
  {
    name: 'Waris Jadoon',
    role: 'QA engineer',
    image: '/src/assets/Team/waris.png',
  },
]
</script>
