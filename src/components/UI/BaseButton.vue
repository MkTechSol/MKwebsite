<template>
  <button
    class="bg-gradient-to-r from-[#4EA5F2] to-[#6FE3B4] text-white px-6 py-3 rounded-full font-semibold transition duration-300 hover:brightness-110 cursor-pointer"
    :type="type"
  >
    <slot />
  </button>
</template>

<script setup>
defineProps({
  type: {
    type: String,
    default: 'button',
  },
})
</script>
