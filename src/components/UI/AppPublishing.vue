<template>
    <section class="py-16 px-4 bg-white text-center">
        <div class="max-w-6xl mx-auto">

            <!-- pricing -->
            <p v-if="pricingLabel"
                class="px-8 py-2 mb-3 bg-[#E7EEF7] text-[var(--color-accent-text)] w-fit mx-auto font-semibold rounded-md">Pricing</p>

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-bold mb-3">
                <span class="text-[var(--color-red-text)]">App Publishing</span> & Hosting Services
            </h2>
            <p class="text-gray-700 text-sm md:text-base max-w-3xl mx-auto mb-6">
                Welcome to our hassle-free App Publishing platform! We help individuals and businesses launch their
                mobile applications on the Google Play Store and Apple App Store through a fully managed publishing
                and maintenance process.
            </p>

            <!-- Filters -->
            <div class="flex items-start justify-between !mt-7 flex-col lg:flex-row">

                <p>For more details on all our pricing visit <router-link to="/AppPublishing"
                        class="text-blue-600 hover:underline">here</router-link></p>

                <div
                    class="flex flex-col lg:flex-row items-start lg:items-center justify-center gap-3 lg:gap-4 mb-0 lg:mb-10 p-4 lg:p-0">
                    <span class="text-sm">Plan</span>
                    <Dropdown v-model="selectedPlan" :options="plans" optionLabel="label"
                        class="w-fit h-7 flex items-center justify-center text-sm" style="
                       --p-select-border-radius: 9999px;
                       --p-select-background: #CBD5E0;
                       --p-select-color: white;
                       --p-select-dropdown-icon-color: black;
                    " />




                    <span class="text-sm">Select currency</span>
                    <Dropdown v-model="selectedCurrency" :options="currencies" optionLabel="label"
                        class="w-fit h-7 flex items-center justify-center text-sm " style="
                       --p-select-border-radius: 9999px;
                       --p-select-background: #CBD5E0;
                       --p-select-color: white;
                       --p-select-dropdown-icon-color: black;
                    " />
                </div>
            </div>

            <!-- Pricing Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4 lg:mt-12">
                <div v-for="(card, i) in pricingCards" :key="i" :class="[
                    'bg-white border border-[#4EAFEF] flex flex-col justify-between overflow-hidden h-[68vh] w-[43vh] mx-auto',
                    i === 1 ? 'lg:-translate-y-6' : ''
                ]">
                    <div class="p-6 text-left">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-2xl text-center font-semibold mb-2">{{ card.title }}</h3>
                            <img :src="card.imgUrl" alt="icon">
                        </div>
                        <p class="text-2xl font-bold text-[var(--color-red-text)] mb-10 text-center">{{ card.price }}</p>
                        <p class="text-sm text-gray-600 mb-6">{{ card.description }}</p>
                        <ul class="space-y-4 text-sm w-full">
                            <li v-for="(feature, idx) in card.features" :key="idx"
                                class="flex items-center gap-2 mx-auto w-[80%]">
                                <span class="text-xl text-[#4EA5F2]">•</span>
                                <span v-html="feature" class="font-semibold min-w-fit"></span>
                            </li>
                        </ul>
                    </div>
                    <div :class="[
                        'py-3 text-white font-medium from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] text-center cursor-pointer hover:brightness-105',
                        i === 0 ? 'bg-gradient-to-r' : i === 1 ? 'bg-gradient-to-t' : 'bg-gradient-to-l'
                    ]">
                        Get started today
                    </div>

                </div>
            </div>

            <!-- View All Button -->
            <div class="mt-12 lg:mt-20">
                <base-link-button to="/pricing">
                    View all
                </base-link-button>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue'
import Dropdown from 'primevue/dropdown'
import { computed } from 'vue'

import home from '../../assets/Images/home.png'
import heart from '../../assets/Images/heart.png'
import page from '../../assets/Images/page.png'


const pricingCards = computed(() =>
    pricingBase.map(card => ({
        ...card,
        price: `${selectedCurrency.value.value === 'eur' ? '€' : '$'}${card.prices[selectedCurrency.value.value][selectedPlan.value.value].toFixed(2)}`
    }))
)


defineProps({
    pricingLabel: {
        type: Boolean,
        requried: false
    }
})

const plans = [
    { label: 'Monthly', value: 'monthly' },
    { label: 'Yearly', value: 'yearly' },
]

const currencies = [
    { label: '$ USD', value: 'usd' },
    { label: '€ EUR', value: 'eur' },
]

const selectedPlan = ref(plans[0])
const selectedCurrency = ref(currencies[0])




const pricingBase = [
    {
        title: 'Basic',
        imgUrl: home,
        description: 'Perfect for startups, entrepreneurs, and small businesses looking to establish a strong and professional digital presence without breaking the bank.',
        features: ['Up to 7 Pages', '$2,400 ($200 Discount)', 'Email & chat support'],
        prices: {
            usd: { monthly: 50, yearly: 540 },
            eur: { monthly: 47, yearly: 507.6 },
        },
    },
    {
        title: 'Standard',
        imgUrl: heart,
        description: 'Ideal for growing businesses that require enhanced features, better performance, and the flexibility to scale as their needs evolve.',
        features: ['Up to 14 Pages', '$4,800 ($400 Discount)', 'SEO & analytics integration'],
        prices: {
            usd: { monthly: 100, yearly: 1080 },
            eur: { monthly: 95, yearly: 1026 },
        },
    },
    {
        title: 'Premium',
        imgUrl: page,
        description: 'An all-in-one solution tailored for businesses seeking advanced functionality, complete customization, and enterprise-level performance.',
        features: ['15 Pages or More', '$8,160 ($640 Discount)', 'API integrations'],
        prices: {
            usd: { monthly: 170, yearly: 1836 },
            eur: { monthly: 160, yearly: 1728 },
        },
    },
]

</script>
