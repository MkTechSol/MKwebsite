<!-- components/ui/BaseLinkButton.vue -->
<template>
  <RouterLink :to="to"
    :class="`px-[10px] py-[5px] lg:px-[20px] lg:py-[10px] rounded-md lg:rounded-full bg-gradient-to-r to-[#4EA5F2] from-[#6FE3B4] text-center text-white inline-block hover:brightness-110 duration-300 ${extraClass || ''}`">
    <slot />
  </RouterLink>
</template>

<script setup>
defineProps({
  to: {
    type: String,
    required: true,
  },
  extraClass: {
    type: String,
    required: false
  }
})
</script>
