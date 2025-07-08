<template>
  <section class="py-16 px-4 bg-white text-center mt-16">
    <div class="max-w-6xl mx-auto">
      <!-- Section Header -->
      <p class="inline-block mb-2 px-4 py-2 bg-[#E3EAFD] text-[var(--color-accent-text)] font-semibold rounded-md text-sm">
        Process
      </p>
      <h2 class="text-3xl md:text-4xl font-bold mb-12">
        Our <span class="text-[var(--color-red-text)]">Process</span>
      </h2>

      <!-- Process Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div v-for="(step, index) in steps" :key="index" class="bg-white rounded-xl overflow-hidden shadow-sm">
          <img :src="step.image" :alt="step.title" class="w-full h-60 object-cover" />
          <div class="p-6 text-left">
            <h3 class="text-[#4EA5F2] font-bold text-base mb-3">{{ step.title }}</h3>
            <ul class="text-sm text-gray-700 space-y-2 list-disc list-inside">
              <li v-for="(point, i) in step.points" :key="i">{{ point }}</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
import processAudit from '../../../assets/Images/process-audit.png'
import processASO from '../../../assets/Images/process-aso.png'
import processLaunch from '../../../assets/Images/process-launch.png'
import processSupport from '../../../assets/Images/process-support.png'

const steps = [
  {
    title: 'Initial App Audit',
    image: processAudit,
    points: [
      'Review app content, features, and data collection practices.',
      'Ensure app is compliant with Google Play & App Store guidelines.',
      'Provide feedback for necessary changes, if any.'
    ]
  },
  {
    title: 'App Store Optimization (ASO)',
    image: processASO,
    points: [
      'Suggest app name, keywords, and description improvements.',
      'Create compliant store listings (icons, screenshots, videos).'
    ]
  },
  {
    title: 'Publishing & Launch',
    image: processLaunch,
    points: [
      'Submit app to Play Store & App Store using our verified developer accounts.'
    ]
  },
  {
    title: 'Post-Launch Support & Maintenance',
    image: processSupport,
    points: [
      'Provide weekly monitoring and compliance checks.',
      'Perform updates as required by user or platform policy changes.',
      'Ensure app remains live and functional across OS updates.'
    ]
  }
]
</script>

