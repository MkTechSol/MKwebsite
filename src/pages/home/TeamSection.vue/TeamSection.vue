<template>
  <section class="py-16 bg-white overflow-visible">
    <div class="max-w-4xl mx-auto px-4">
      <!-- Heading -->
      <p class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md">
        Our Team
      </p>
      <h2 class="text-3xl font-bold mb-8">
        Connect with our <span class="text-[#FF543E]">skilled</span> team and <br />
        tap into their <span class="text-[#FF543E]">expertise</span>.
      </h2>

      <div class="relative overflow-visible">
        <div
          class="flex flex-col md:flex-row gap-6 justify-center transition-all duration-500 overflow-visible"
        >
          <div
            v-for="(member, index) in visibleMembers"
            :key="index"
            :class="[
              'transition-all duration-500 ease-in-out flex flex-col overflow-visible rounded-xl shadow-md bg-white text-left',
              'w-full md:w-auto',
              currentFocused === index ? 'flex-[1.5]' : 'flex-[0.8]'
            ]"
          >
            <div class="relative h-72 md:h-80 bg-[#2E68BA] rounded-t-xl overflow-visible">
              <img
                :src="member.image"
                :alt="member.name"
                class="w-full h-full"
                :class="[currentFocused === index ? 'object-center' : 'object-right']"
              />
            </div>
            <div
              class="bg-[linear-gradient(-145deg,#2E68BA_80%,#68DBBE_100%)] text-white p-4 text-left"
            >
              <h3 class="text-lg font-semibold z-10">{{ member.name }}</h3>
              <p class="text-sm z-10">{{ member.role }}</p>
              <div class="flex gap-3 mt-2 z-10">
                <a
                  v-for="(icon, i) in member.social"
                  :key="i"
                  :href="icon.link"
                  target="_blank"
                >
                  <i :class="`pi pi-${icon.name}`"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Navigation Arrows moved below to right side -->
        <div class="flex justify-end mt-8 gap-4">
          <button
            @click="prevSlide"
            class="w-10 h-10 rounded-full bg-gradient-to-r from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] flex items-center justify-center text-white"
          >
            <i class="pi pi-arrow-left"></i>
          </button>
          <button
            @click="nextSlide"
            class="w-10 h-10 rounded-full bg-gradient-to-r from-[#4EA5F2] to-[#6FE3B4] flex items-center justify-center text-white"
          >
            <i class="pi pi-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from 'vue'



import emily from '../../../assets/Images/emily.png'
import jon from '../../../assets/Images/jon.png'
import kani from '../../../assets/Images/kani.png'


const teamMembers = [
  {
    name: 'Emily',
    role: 'Front End Developer',
    image: emily,
    social: [
      { name: 'facebook', link: '#' },
      { name: 'instagram', link: '#' },
      { name: 'twitter', link: '#' },
    ],
  },
  {
    name: 'Jon arshaf',
    role: 'Marketer',
    image: jon,
    social: [
      { name: 'facebook', link: '#' },
      { name: 'instagram', link: '#' },
      { name: 'twitter', link: '#' },
    ],
  },
  {
    name: 'Kani Jon',
    role: 'Designer',
    image: kani,
    social: [
      { name: 'facebook', link: '#' },
      { name: 'instagram', link: '#' },
      { name: 'twitter', link: '#' },
    ],
  },
  {
    name: 'Kani Jon',
    role: 'Designer',
    image: emily,
    social: [
      { name: 'facebook', link: '#' },
      { name: 'instagram', link: '#' },
      { name: 'twitter', link: '#' },
    ]
  }
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
