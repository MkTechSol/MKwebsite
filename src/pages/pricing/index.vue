<template>
    <section>
        <!-- Hero Section -->
        <hero-section title="App Publishing & Hosting Services"
            text="Welcome to our hassle-free App Publishing platform! We help individuals and businesses launch their mobile applications on the Google Play Store and Apple App Store through a fully managed publishing and maintenance process."></hero-section>


        <!-- App Publishing -->
            <app-publishing :pricingLabel="true"></app-publishing>


        <!-- Why Choose us -->
        <section class="bg-gradient-to-r lg:h-[44vh] animation-fadeup from-[#6C92D0] to-[#6FE3B4] py-16 px-4 text-white text-center mb-32">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-semibold mb-12 animation-fadeup">Why Choose Us</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-0 animation-fadeup">
                    <div v-for="(item, i) in reasons" :key="i"
                        class="bg-white text-[#1a1a1a] rounded-2xl shadow-md p-6 lg:w-[24vw] lg:h-[35vh] flex flex-col items-center text-center animation-fadeup">
                        <img :src="item.icon" alt="Icon" class="w-10 h-10 mb-4 animation-fadeup" />
                        <h3 class="text-lg font-bold text-[#1a237e] mb-2 animation-fadeup">{{ item.title }}</h3>
                        <ul class="text-sm text-gray-700 list-disc max-w-60 space-y-1 mx-auto animation-fadeup">
                            <li v-for="(point, j) in item.points" :key="j">{{ point }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Process -->
        <OurProcessSection></OurProcessSection>

        <!-- Get Started Today -->
        <hero-section title="Get Started Today" class="animation-fadeup"
            text="Ready to publish your app? Reach out to us with your APK/IPA file and app details, and we’ll take care of the rest. For custom packages or bulk uploads, contact our support team for a quote."></hero-section>
    </section>
</template>


<script setup>
import OurProcessSection from './OurProcessSection/OurProcessSection.vue'

import upload from '../../assets/Icons/upload.png'
import target from '../../assets/Icons/target.png'
import payment from '../../assets/Icons/payment.png'

const reasons = [
    {
        title: 'Hassle-Free Publishing',
        icon: upload, // replace with actual icon path
        points: ['No developer account needed – we publish it for you.'],
    },
    {
        title: 'Compliance-First Approach',
        icon: target, // replace with actual icon path
        points: [
            'Compliance-first approach',
            'Dedicated technical team for update and bug resolution.',
        ],
    },
    {
        title: 'Affordable & Predictable',
        icon: payment, // replace with actual icon path
        points: [
            'Fixed weekly rates with discounted annual billing.',
            'Transparent, professional service for your peace of mind.',
        ],
    },
]
</script>
