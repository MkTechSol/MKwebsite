<template>
  <div
    class="relative flex flex-col overflow-y-visible max-w-full h-fit p-10 bg-gradient-to-b from-[var(--color-gradient-from)] to-transparent lg:to-[var(--color-gradient-to)] mb-10"
    :class="{ 'lg:mb-72': homeHeight, 'lg:h-[140vh] lg:mb-52': !homeHeight }"
    :style="homeHeight ? { '--homeHeight': homeHeight } : {}"
  >

    <!-- Heading Area -->
    <div class="flex flex-col items-center justify-center text-white space-y-4 animation-fadeup">
      <p class="px-8 py-2.5 bg-white text-[var(--color-accent-text)] font-semibold rounded-md">Our Services</p>
      <p class="font-semibold lg:text-3xl">Where can we help you?</p>
      <p class="font-light text-sm max-w-lg text-center">
        MK Techsol specializes in custom software, app design, cloud services, and data analytics to support and grow
        your business.
      </p>
    </div>

    <!-- Services Grid -->
    <div
      class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-9 mt-16 lg:max-w-6xl lg:mx-auto services-grid mx-auto">
      <ServiceCard v-for="(service, i) in services" :key="i" v-bind="service" class="animation-fadeup" />
    </div>

    <!-- Button -->
    <div class="flex items-center justify-center my-10 animation-fadeup">
      <router-link
        class="px-[15px] py-[8px] lg:px-[20px] lg:py-[10px] rounded-md lg:rounded-full bg-gradient-to-r to-[#4EA5F2] from-[#6fe3b5] text-center text-white inline-block hover:brightness-110 duration-300"
        to="/services">All Services</router-link>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  services: {
    type: Array,
    required: true
  },
  homeHeight: String, // e.g., '94vh'
})
</script>

<style scoped>
@media (min-width: 1024px) {
  div[style*="--homeHeight"] {
    height: var(--homeHeight);
  }
}
</style>
