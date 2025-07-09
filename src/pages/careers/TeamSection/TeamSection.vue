<template>
  <section class="px-4 lg:px-0 mt-10">
    <div class="max-w-7xl mx-auto px-4 lg:px-16 text-center bg-gradient-to-r from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] rounded-md lg:rounded-[40px] py-16 animation-fadeup ">
      <!-- Tag -->
      <p class="w-fit px-6 py-2.5  mb-2.5 text-sm font-semibold text-[var(--color-accent-text)] bg-white rounded-md animation-fadeup">
        Team
      </p>

      <!-- Heading -->
      <h2 class="text-left text-3xl font-semibold mb-12 text-white animation-fadeup">
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
            class="w-28 h-28 sm:w-32 sm:h-32 rounded-full object-cover shadow-md hover:scale-90 duration-300 animation-fadeup"
          />
          <h3 class="text-white font-semibold text-sm mt-4 animation-fadeup">{{ member.name }}</h3>
          <p class="text-white text-xs animation-fadeup">{{ member.role }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import sami from '../../../assets/Team/sami.png'
import haroon from '../../../assets/Team/haroon.png'
import saud from '../../../assets/Team/saud.png'
import ali from '../../../assets/Team/ali.png'
import amna from '../../../assets/Team/amna.png'
import alishba from '../../../assets/Team/alishba.png'
import asad from '../../../assets/Team/asad.png'
import waris from '../../../assets/Team/waris.png'

const team = [
  {
    name: 'Sami Ullah',
    role: 'CEO',
    image: sami,
  },
  {
    name: 'Haroon Khan',
    role: 'UI/UX Designer',
    image: haroon,
  },
  {
    name: 'Saud Khan',
    role: 'Laravel Developer',
    image: saud,
  },
  {
    name: 'Ali Haider',
    role: 'CTO',
    image: ali,
  },
  {
    name: 'Amna Khan',
    role: 'UI/UX Designer',
    image: amna,
  },
  {
    name: 'Alishba Malick',
    role: 'PHP Developer',
    image: alishba,
  },
  {
    name: 'Asad Ullah',
    role: 'PHP Developer',
    image: asad,
  },
  {
    name: 'Waris Jadoon',
    role: 'QA Engineer',
    image: waris,
  },
]
</script>

