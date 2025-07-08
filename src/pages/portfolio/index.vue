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

const websiteProjects = [
    { image: '/src/assets/Portfolio/ektiar.png', title: 'Al-Ektiar', technology: 'Magento' },
    { image: '/src/assets/Portfolio/hyundai.png', title: 'Hyundai', technology: 'Magento' },
    { image: '/src/assets/Portfolio/geely.png', title: 'Geely', technology: 'Magento' },
    { image: '/src/assets/Portfolio/hyundai.png', title: 'Hyundai', technology: 'Magento' },
    { image: '/src/assets/Portfolio/ektiar.png', title: 'Al-Ektiar', technology: 'Magento' },
    { image: '/src/assets/Portfolio/geely.png', title: 'Geely', technology: 'Magento' },

    // ... more
]

const mobileProjects = [
    { image: '/src/assets/Portfolio/geely.png', title: 'Geely', technology: 'Magento' },
    { image: '/src/assets/Portfolio/hyundai.png', title: 'Hyundai', technology: 'Magento' },
    { image: '/src/assets/Portfolio/ektiar.png', title: 'Al-Ektiar', technology: 'Magento' },
    // ...
]

const crmProjects = [

    { image: '/src/assets/Portfolio/geely.png', title: 'Geely', technology: 'Magento' },
    { image: '/src/assets/Portfolio/hyundai.png', title: 'Hyundai', technology: 'Magento' },
    { image: '/src/assets/Portfolio/ektiar.png', title: 'Al-Ektiar', technology: 'Magento' },
    // ...
]
</script>
