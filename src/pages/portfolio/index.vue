<template>
    <hero-section title="Projects"></hero-section>
    <PortfolioSection heading="Website" textColor="text-[#FF3F6C]" bgColor="bg-[#F4FFFB]" :projects="websiteProjects">
    </PortfolioSection>

    <PortfolioSection heading="Mobile Apps" textColor="text-[#FF3F6C]" bgColor="bg-[#EAF7FF]"
        :projects="mobileProjects"></PortfolioSection>

    <PortfolioSection heading="CRM" textColor="text-[#FF3F6C]" bgColor="bg-[#FFEFED]" :projects="crmProjects">
    </PortfolioSection>
</template>

<script setup>
import PortfolioSection from '../../components/UI/PortfolioSection.vue'

import ektiar from '../../assets/Portfolio/ektiar.png'
import hyundai from '../../assets/Portfolio/hyundai.png'
import geely from '../../assets/Portfolio/geely.png'



const websiteProjects = [
    { image: ektiar, title: 'Al-Ektiar', technology: 'Magento' },
    { image: hyundai, title: 'Hyundai', technology: 'Magento' },
    { image: geely, title: 'Geely', technology: 'Magento' },
    { image: hyundai, title: 'Hyundai', technology: 'Magento' },
    { image: ektiar, title: 'Al-Ektiar', technology: 'Magento' },
    { image: geely, title: 'Geely', technology: 'Magento' },

    // ... more
]

const mobileProjects = [
    { image: geely, title: 'Geely', technology: 'Magento' },
    { image: hyundai, title: 'Hyundai', technology: 'Magento' },
    { image: ektiar, title: 'Al-Ektiar', technology: 'Magento' },
    // ...
]

const crmProjects = [

    { image: geely, title: 'Geely', technology: 'Magento' },
    { image: hyundai, title: 'Hyundai', technology: 'Magento' },
    { image: ektiar, title: 'Al-Ektiar', technology: 'Magento' },
    // ...
]
</script>
