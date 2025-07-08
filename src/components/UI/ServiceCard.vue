<template>
  <div class="flex items-center justify-center bg-white shadow-lg rounded-md w-full max-w-[300px] h-[240px] relative overflow-hidden group transition duration-300 hover:scale-[1.02] cursor-pointer">
    <!-- vertical color split background -->
    <div class="absolute left-0 top-0 w-[40%] h-full" :style="{ backgroundColor: bgSplitColor }"></div>

    <div class="relative z-10 flex flex-col justify-between h-full p-5 text-start">
      <!-- Icon -->
      <img :src="iconSrc" alt="service icon" class="h-10 w-10 mb-2" />

      <!-- Title -->
      <h3 class="text-lg font-semibold mb-2" :style="{ color: titleColor }">
        {{ title }}
      </h3>

      <!-- Description -->
      <p class="text-sm text-gray-600 mb-3 line-clamp-4">
        {{ description }}
      </p>

      <!-- Read More -->
      <router-link to="/services" class="text-sm text-[#333] font-medium flex items-center gap-1 hover:underline transition">
        Read More <span class="pi pi-arrow-right" />
      </router-link>
    </div>
  </div>
</template>

<script setup>
defineProps({
  title: String,
  description: String,
  iconSrc: String,
  titleColor: {
    type: String,
    default: '#4EA5F2',
  },
  bgSplitColor: {
    type: String,
    default: '#EDF4FA',
  },
})
</script>
