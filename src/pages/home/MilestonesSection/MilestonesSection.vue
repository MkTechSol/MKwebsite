<template>
  <section class="py-16 bg-white mt-10 mb-0">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

      <!-- Text Content (first on md and below) -->
      <div class="text-left order-1 lg:order-2">
        <p class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md">
          Our Achievements
        </p>
        <h2 class="text-3xl font-bold mb-4 leading-snug">
          Milestones That Define Us
        </h2>
        <p class="text-gray-600 mb-6 leading-relaxed max-w-lg">
          MK Techsol takes pride in the milestones we've reached, delivering cutting-edge technology solutions that help
          businesses thrive worldwide.
        </p>
        <base-link-button to="/aboutus">
          Read more
        </base-link-button>
      </div>

      <!-- Milestone Cards (second on md and below) -->
      <div class="grid grid-cols-2 gap-6 lg:gap-y-12 relative place-items-center order-2 lg:order-1">

        <div class="absolute top-1/2 left-1/2 lg:w-80 lg:h-80 w-60 h-60 z-[1] border-2 border-[#6C92D0] border-dashed rounded-full -translate-y-1/2 -translate-x-1/2"></div>

        <div
          v-for="(item, index) in milestones"
          :key="index"
          :class="[
            'flex flex-col justify-center items-center',
            'rounded-xl px-1 py-16 lg:p-6 shadow-sm text-center space-y-2 transition z-10',
            item.color,
            'text-[#2B4A6F] font-medium',
            'lg:h-44 lg:w-44 w-36 h-28'
          ]"
        >
          <i :class="`pi ${item.icon} text-3xl`"></i>
          <h3 class="text-2xl font-bold">{{ item.number }}</h3>
          <p class="text-sm">{{ item.label }}</p>
        </div>
      </div>

    </div>
  </section>
</template>


<script setup>
const milestones = [
  {
    number: '100+',
    label: 'Satisfied Clients',
    icon: 'pi-users',
    color: 'bg-[#E6F5F7]',
  },
  {
    number: '150+',
    label: 'Projects Delivered',
    icon: 'pi-flag-fill',
    color: 'bg-[#E6F5F7]',
  },
  {
    number: '98+',
    label: 'Clients Retention',
    icon: 'pi-handshake',
    color: 'bg-[#E6F5F7]',
  },
  {
    number: '35+',
    label: 'Team Members',
    icon: 'pi-users',
    color: 'bg-[#FDE9E9]',
  },
]
</script>
