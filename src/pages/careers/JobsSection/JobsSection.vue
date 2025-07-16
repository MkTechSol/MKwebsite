<template>
  <section class="py-16 bg-[#F2FCF8]">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <p class="inline-block px-4 py-2 mb-2 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md animation-fadeup">
        Our Jobs
      </p>
      <h2 class="text-3xl font-bold mb-12 animation-fadeup">
        Current <span class="text-[var(--color-red-text)]">Available</span> Positions at MK Techsol
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <JobCard v-for="(job, index) in jobs" :key="index" :job="job" :class="'animation-fadeup'" />
      </div>
    </div>
  </section>
</template>

<script setup>
import JobCard from './components/JobCard.vue'

// Array of jobs to render
const jobs = [
  {
    type: 'Onsite',
    mode: 'Full Time',
    title: 'Laravel Developer',
    location: 'Rawalpindi',
    salary: '35k–90k',
    time: '9:00 am – 5:00 pm',
    tag: 'Developer'
  },
  {
    type: 'Remote',
    mode: 'Full Time',
    title: 'UIUX Designer & Product Designer',
    location: 'Rawalpindi',
    salary: '35k–90k',
    time: '9:00 am – 5:00 pm',
    tag: 'Designer'
  },
  {
    type: 'Remote',
    mode: 'Full Time',
    title: 'UIUX Designer & Product Designer',
    location: 'Rawalpindi',
    salary: '35k–90k',
    time: '9:00 am – 5:00 pm',
    tag: 'Designer'
  },
  {
    type: 'Remote',
    mode: 'Full Time',
    title: 'UIUX Designer & Product Designer',
    location: 'Rawalpindi',
    salary: '35k–90k',
    time: '9:00 am – 5:00 pm',
    tag: 'Designer'
  },
  {
    type: 'Remote',
    mode: 'Full Time',
    title: 'UIUX Designer & Product Designer',
    location: 'Rawalpindi',
    salary: '35k–90k',
    time: '9:00 am – 5:00 pm',
    tag: 'Designer'
  },
  {
    type: 'Remote',
    mode: 'Full Time',
    title: 'UIUX Designer & Product Designer',
    location: 'Rawalpindi',
    salary: '35k–90k',
    time: '9:00 am – 5:00 pm',
    tag: 'Designer'
  }
  ,
  {
    type: 'Remote',
    mode: 'part Time',
    title: 'UIUX Designer & Product Designer',
    location: 'Rawalpindi',
    salary: '35k–90k',
    time: '9:00 am – 5:00 pm',
    tag: 'Designer'
  }
]
</script>
