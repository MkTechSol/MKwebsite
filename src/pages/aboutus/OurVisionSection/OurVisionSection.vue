<template>
  <section class="py-16 px-4 bg-[#F0FAF8] animation-fadeup">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-white text-left">
        <div
          v-for="(card, i) in cards"
          :key="i"
          :class="['rounded-2xl px-6 pb-6 pt-20 flex flex-col justify-between min-h-[280px] relative animation-fadeup', card.bg]"
        >
          <!-- Icon Top -->
          <div class="text-4xl mb-4 absolute left-6 top-8 animation-fadeup">
            <img :src="card.imgUrl" alt="icon" class="w-7">
          </div>

          <!-- Title & Description -->
          <div>
            <h3 class="text-xl font-bold mb-3 animation-fadeup">{{ card.title }}</h3>
            <p class="text-sm leading-relaxed animation-fadeup">{{ card.description }}</p>
          </div>

          <!-- Icon Bottom Right -->
          <div class="flex justify-end mt-4 text-2xl absolute right-6 bottom-4 animation-fadeup">
            <img :src="card.imgUrl" alt="icon" class="opacity-30 w-7">
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>

import vision from '../../../assets/Icons/vision.png'
import mission from '../../../assets/Icons/mission.png'
import support from '../../../assets/Icons/support.png'
import award from '../../../assets/Icons/award.png'

const cards = [
  {
    title: 'Our Vision',
    description:
      'Our vision is to become a worldwide leader in providing cutting-edge technology solutions that enable businesses to unlock their full potential and achieve lasting, sustainable growth.',
    bg: 'bg-[#4EA5F2]',
    imgUrl: vision,
  },
  {
    title: 'Our Mission',
    description:
      'Our mission is to deliver impactful digital solutions by leveraging advanced technologies, prioritizing client needs, and maintaining the highest standards of excellence — empowering every business we work with to thrive and grow.',
    bg: 'bg-[#FF543E]',
    imgUrl: mission,
  },
  {
    title: 'Our Supports',
    description:
      'Our commitment doesn’t end with project delivery. We provide ongoing support, regular updates, and proactive maintenance to keep your systems running flawlessly and your business moving forward.',
    bg: 'bg-[#6FE3B4]',
    imgUrl: support,
  },
  {
    title: 'Our Awards',
    description:
      'MK Techsol is proud to be recognized for its excellence in innovation, client satisfaction, and exceptional project delivery—earning praise and awards from industry leaders and respected organizations.',
    bg: 'bg-[#6C92D0]',
    imgUrl: award,
  },
]


</script>
