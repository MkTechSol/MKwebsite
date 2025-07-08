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
import icon1 from '../../../assets/Icons/1.png'
import icon2 from '../../../assets/Icons/2.png'
import icon3 from '../../../assets/Icons/3.png'
import icon4 from '../../../assets/Icons/4.png'
import icon5 from '../../../assets/Icons/5.png'
import icon6 from '../../../assets/Icons/6.png'

const benefits = [
  { title: 'Free Lunches', imgUrl: icon1 },
  { title: 'In house Trainings & Certifications', imgUrl: icon2 },
  { title: 'Yearly Trips', imgUrl: icon3 },
  { title: 'Parties and Birthday Celebrations', imgUrl: icon4 },
  { title: 'MK TechSol Assemblies', imgUrl: icon5 },
  { title: 'Eidi & other Festive Bonuses', imgUrl: icon6 },
]
</script>
