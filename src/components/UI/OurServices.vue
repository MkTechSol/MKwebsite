<template>

    <div class="relative flex flex-col overflow-y-visible max-w-full mb-10 lg:mb-72 p-10 bg-gradient-to-b from-[var(--color-gradient-from)] to-[var(--color-gradient-to)]"
        :style="{ height: height }">


        <div class="flex flex-col items-center justify-center text-white space-y-4">
            <p class="px-8 py-2.5  bg-white text-[var(--color-accent-text)] font-semibold rounded-md">Our Services</p>
            <p class="font-semibold lg:text-3xl">Where can we help you?</p>
            <p class="font-light text-sm max-w-lg text-center">MK Techsol specializes in custom software, app
                design, cloud services, and data analytics to support and grow your business.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-9 mt-16 lg:max-w-6xl lg:mx-auto">
            <ServiceCard v-for="(service, i) in services" :key="i" v-bind="service" />
        </div>

        <div class="flex items-center justify-center my-10">
            <base-link-button to="/services">
                All Services
            </base-link-button>
        </div>

    </div>
</template>

<script setup>

defineProps({
    services: {
        type: Array,
        required: true,
    },
    height: {
        type: String,
        required: true
    }

})

</script>


<style scoped>
@media (max-width: 1024px) {
  .responsive-height {
    height: 100% !important;
  }
}
</style>