<template>
  <div class="rounded-xl shadow-md border border-gray-200 px-6 pt-12 pb-6 bg-gradient-to-r from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] relative">
    <span class="absolute top-4 right-4 bg-white text-[var(--color-accent-text)] text-sm px-4 py-2 rounded-md ">
      {{ job.tag }}
    </span>
    <div class="text-white text-left">
      <p class="text-lg font-semibold mb-1">
        <i class="pi pi-briefcase mr-2"></i>{{ job.type }} - {{ job.mode }}
      </p>
      <h3 class="text-xl font-bold mb-3">{{ job.title }}</h3>
      <div class="flex flex-wrap gap-x-4 gap-y-2 text-sm items-center mt-3">
        <p><i class="pi pi-map-marker mr-1"></i>{{ job.location }}</p>
        <p><i class="pi pi-money-bill mr-1"></i>{{ job.salary }}</p>
        <p><i class="pi pi-clock mr-1"></i>{{ job.time }}</p>
      </div>
      <button class="mt-8 lg:mt-16 bg-white text-[#4EAFEF] font-semibold px-6 py-2 rounded-full hover:bg-blue-50 transition cursor-pointer">
        Apply Now
      </button>
    </div>
  </div>
</template>

<script setup>
defineProps(['job'])
</script>
