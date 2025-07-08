<template>
  <section class="py-16 px-4 bg-white text-center">
    <div class="max-w-6xl mx-auto">
      <!-- Badge -->
      <p class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-[var(--color-accent-text)] bg-[#EDF3FC] rounded-md">
        Why Choose Us
      </p>

      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl font-bold mb-10">
        Innovation, <span class="text-[#FF543E]">expertise</span>, and a <br />
        client-first approach
      </h2>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-left">
        <div v-for="(card, i) in cards" :key="i"
          class="flex flex-col sm:flex-row bg-white rounded-3xl border border-[#4EAFEF] overflow-hidden shadow-md">
          <img :src="card.image" alt="image" class="w-full h-full sm:w-1/2 object-cover" />
          <div class="p-5 sm:w-1/2 flex flex-col justify-center">
            <h3 class="font-semibold text-base sm:text-lg mb-2">{{ card.title }}</h3>
            <p class="text-sm text-gray-600">{{ card.text }}</p>
          </div>
        </div>
      </div>

      <!-- Button -->
      <div class="mt-12">
        <button
          class="px-10 py-3 rounded-full bg-gradient-to-r from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] text-white font-semibold hover:brightness-105">
          Read more
        </button>
      </div>
    </div>
  </section>
</template>

<script setup>
import why1 from '../../../assets/Images/why-1.png'
import why2 from '../../../assets/Images/why-2.png'
import why3 from '../../../assets/Images/why-3.png'
import why4 from '../../../assets/Images/why-4.png'

const cards = [
  {
    title: 'Proven Expertise',
    text: 'Our team is made up of top-tier professionals with extensive experience in web development, software solutions, and cutting-edge technologies. With a proven track record of diverse and successful projects, we have the skills and insight to bring your vision to life.',
    image: why1,
  },
  {
    title: 'Client-Centric Approach',
    text: 'We put your goals first, crafting custom solutions that align seamlessly with your business needs. Our process is built on transparency, collaboration, and consistent communication—ensuring you’re always informed and involved every step of the way.',
    image: why2,
  },
  {
    title: 'Commitment to Quality',
    text: 'We build solutions that are robust, scalable, and designed for the future. Through rigorous testing and adherence to industry best practices, we ensure your project surpasses performance and reliability standards.',
    image: why3,
  },
  {
    title: 'Comprehensive 24/7 Support',
    text: 'Our commitment goes beyond project delivery. Whether it’s maintenance, updates, or troubleshooting, our dedicated support team is always available to keep your business running seamlessly.',
    image: why4,
  },
]
</script>
