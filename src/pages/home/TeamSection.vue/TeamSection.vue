<template>
  <section class="py-16 bg-white overflow-visible team-section">
    <div class="max-w-5xl mx-auto px-4">
      <!-- Heading -->
      <p class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md animation-fadeup">
        Our Team
      </p>
      <h2 class="text-3xl font-bold mb-8 animation-fadeup">
        Connect with our <span class="text-[#FF543E]">skilled</span> team and <br />
        tap into their <span class="text-[#FF543E]">expertise (Testing text)</span>.
      </h2>

      <div class="relative overflow-visible">
        <div
          class="flex flex-col md:flex-row gap-6 lg:gap-9 items-center md:items-end justify-center transition-all duration-500 overflow-visible animation-fadeup">
          <div
            v-for="(member, index) in visibleMembers"
            :key="index"
            :class="[
              'transition-all duration-500 ease-in-out flex flex-col overflow-visible rounded-xl shadow-md bg-white text-left',
              'w-full md:w-[350px] pt-6 team-card animation-fadeup',
              currentFocused === index ? 'flex-[1.5]' : 'flex-[0.8]'
            ]"
          >
            <div class="relative h-72 md:h-80 bg-[#2E68BA] rounded-t-xl overflow-visible">
              <img :src="member.svg" alt="" class="absolute animation-fadeup" :class="[member.name === 'Haji Amir' ? 'left-0' : 'right-0']" />
              <img
                :src="member.image"
                :alt="member.name"
                class="w-[300px] h-[400px] aspect-square absolute !z-20 -right-0 -top-10 animation-fadeup"
                :class="[currentFocused === index ? 'object-contain' : 'object-cover']"
              />
            </div>
            <div
              class="bg-[linear-gradient(-145deg,#2E68BA_80%,#68DBBE_100%)] text-white p-4 text-left !z-50 flex items-center justify-between border-t border-white animation-fadeup">
              <div>
                <h3 class="text-lg font-semibold z-10 animation-fadeup">{{ member.name }}</h3>
                <p class="text-sm z-10 animation-fadeup">{{ member.role }}</p>
              </div>
              <div class="flex gap-3 mt-2 z-10 animation-fadeup">
                <a v-for="(icon, i) in member.social" :key="i" :href="icon.link" target="_blank">
                  <i :class="`pi pi-${icon.name} animation-fadeup`"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Navigation Arrows -->
          <div class="flex justify-end mt-8 gap-4">
            <button @click="prevSlide"
              class="w-10 h-10 rounded-full bg-gradient-to-r from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] flex items-center justify-center text-white animation-fadeup">
              <i class="pi pi-arrow-left"></i>
            </button>
            <button @click="nextSlide"
              class="w-10 h-10 rounded-full bg-gradient-to-r from-[#4EA5F2] to-[#6FE3B4] flex items-center justify-center text-white animation-fadeup">
              <i class="pi pi-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from 'vue'

import hajiAmir from '../../../assets/Images/haji_amir.jpg'
import nasibdar from '../../../assets/Images/nasibdar.png'
import akhter from '../../../assets/Images/akhter.jpg'
import svg1 from '../../../assets/Icons/svg1.png'
import svg2 from '../../../assets/Icons/svg2.png'
import svg3 from '../../../assets/Icons/svg3.png'

const teamMembers = [
  {
    name: 'Haji Amir Nawshad',
    role: 'CEO & Founder',
    image: hajiAmir,
    svg: svg1,
    social: [
      { name: 'facebook', link: '#' },
      { name: 'instagram', link: '#' },
      { name: 'twitter', link: '#' },
    ],
  },
  {
    name: 'Nasib Dar',
    role: 'GM & Co-Founder',
    image: nasibdar,
    svg: svg2,
    social: [
      { name: 'facebook', link: '#' },
      { name: 'instagram', link: '#' },
      { name: 'twitter', link: '#' },
    ],
  },
  {
    name: 'Akhter',
    role: 'GM ',
    image: akhter,
    svg: svg3,
    social: [
      { name: 'facebook', link: '#' },
      { name: 'instagram', link: '#' },
      { name: 'twitter', link: '#' },
    ],
  },
]

const currentSlide = ref(0)
const currentFocused = ref(0)
const membersPerSlide = ref(3)

const handleResize = () => {
  membersPerSlide.value = window.innerWidth < 768 ? 1 : 3
}

onMounted(() => {
  handleResize()
  window.addEventListener('resize', handleResize)
})

onBeforeUnmount(() => {
  window.removeEventListener('resize', handleResize)
})

const maxSlide = computed(() =>
  Math.floor((teamMembers.length - 1) / membersPerSlide.value)
)

const visibleMembers = computed(() => {
  const start = currentSlide.value * membersPerSlide.value
  return teamMembers.slice(start, start + membersPerSlide.value)
})

const nextSlide = () => {
  if (currentFocused.value < membersPerSlide.value - 1) {
    currentFocused.value++
  } else if (currentSlide.value < maxSlide.value) {
    currentSlide.value++
    currentFocused.value = 0
  }
}

const prevSlide = () => {
  if (currentFocused.value > 0) {
    currentFocused.value--
  } else if (currentSlide.value > 0) {
    currentSlide.value--
    currentFocused.value = membersPerSlide.value - 1
  }
}
</script>

<style scoped>
@keyframes teamFadeSlide {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.team-card {
  animation-name: teamFadeSlide;
  animation-duration: 1ms;
  animation-timing-function: ease-out;
  animation-fill-mode: both;
  animation-timeline: view(block 25% 10%);
}
</style>
