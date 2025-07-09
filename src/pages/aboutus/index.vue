<template>
    <section>

        <!-- Hero Dection -->
        <hero-section title="About Us"></hero-section>

        <!-- About Us -->
        <about-us></about-us>

        <!-- Our Vision -->
        <OurVisionSection></OurVisionSection>

        <!-- Why Choose Us -->
        <why-choose-us-section></why-choose-us-section>

        <!-- Schedule a call -->
        <div
            class="w-full bg-gradient-to-r from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] py-16 px-6 lg:px-20 flex flex-col lg:flex-row items-center justify-between gap-10 animation-fadeup">
            <!-- Left Text Side -->
            <div class="text-white max-w-2xl text-center lg:text-left space-y-4">
                <h2 class="text-3xl lg:text-5xl font-semibold leading-tight animation-fadeup">
                    Let’s Discuss Your Project
                </h2>
                <p class="text-base lg:text-lg font-light animation-fadeup">
                    We’d love to hear about your project goals and turn them into a powerful
                    digital product. Book a free consultation to get started!
                </p>

                <router-link to="/contact"
                    class="inline-block bg-white text-[#4EA5F2] font-semibold px-6 py-3 rounded-full mt-4 shadow hover:brightness-105 transition duration-300 animation-fadeup">
                    Schedule a discovery Call
                </router-link>
            </div>

            <!-- Right Image Side -->
            <div class="w-full max-w-md">
                <img src="/src/assets/Images/call.png" alt="Discuss Project Illustration"
                    class="w-full h-auto object-contain animation-fadeup" />
            </div>
        </div>

        <!-- Our Process -->
        <our-process></our-process>
    </section>
</template>

<script setup>
import OurVisionSection from './OurVisionSection/OurVisionSection.vue';
import WhyChooseUsSection from './WhyChooseUsSection/WhyChooseUsSection.vue';
</script>