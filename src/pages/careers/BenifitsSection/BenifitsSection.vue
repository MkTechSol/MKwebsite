<template>
  <section class="py-16">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <!-- Tag -->
      <p class="inline-block px-4 py-2 mb-2 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md">
        Benefits
      </p>

      <!-- Heading -->
      <h2 class="text-3xl font-bold mb-12">
        MK TechSol <span class="text-[var(--color-red-text)]">Benefits</span>
      </h2>

      <!-- Benefits Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div
          v-for="(benefit, index) in benefits"
          :key="index"
          class="border border-blue-300 rounded-md p-6 text-center hover:shadow transition"
        >
          <div class=" mb-2 flex items-center justify-center">
            <img :src="benefit.imgUrl" alt="">
          </div>
          <h3 class="text-base font-semibold text-black">
            {{ benefit.title }}
          </h3>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const benefits = [
  { title: 'Free Lunches', imgUrl: '/src/assets/Icons/1.png' },
  { title: 'In house Trainings & Certifications', imgUrl: '/src/assets/Icons/2.png' },
  { title: 'Yearly Trips', imgUrl: '/src/assets/Icons/3.png' },
  { title: 'Parties and Birthday Celebrations', imgUrl: '/src/assets/Icons/4.png' },
  { title: 'MK TechSol Assemblies', imgUrl: '/src/assets/Icons/5.png' },
  { title: 'Eidi & other Festive Bonuses', imgUrl: '/src/assets/Icons/6.png'}
]
</script>
