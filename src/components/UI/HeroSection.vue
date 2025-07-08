<template>
  <div class="w-full h-72 bg-gradient-to-r from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] flex flex-col items-center justify-center text-white text-center">
    <h1 class="text-3xl md:text-4xl font-semibold pb-1 px-4">
     <span v-if="title === 'Projects'">Our</span> {{ title }}
    </h1>
    <p v-if="text" class="mt-2 text-sm md:text-base max-w-4xl px-5">{{ text }}</p>
    <p v-else class="mt-2 text-sm md:text-base font-semibold">
      Home <span class="mx-1">›</span> <span v-if="title === 'Take the lead in change'">Career</span> <span v-else>{{ title }}</span>
    </p>
  </div>
</template>

<script setup>
defineProps({
  title: {
    type: String,
    required: true,
  },
  text:{
    type: String,
    required: false,
  }
})
</script>
