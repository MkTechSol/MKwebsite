<template>
  <section>
    <!-- hero Section -->
    <hero-section title="Our Services"></hero-section>

    <!-- Our Services -->
    <Our-Process></Our-Process>

    <!-- Our Services -->
    <our-services :services="services" height="130vh"></our-services>

    <!-- App Publishing -->
    <AppPublishing></AppPublishing>

    <!-- Tech Stack Section -->
    <TechStackSection></TechStackSection>

    <!-- Heading -->
    <div
      class="w-full h-56 bg-gradient-to-b from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] flex flex-col items-center justify-center text-white text-center">
      <h3 class="text-3xl md:text-4xl font-bold pb-1">
        Need Business Friendly Hiring Models?
      </h3>
    </div>

    <!-- FAQs Section -->
    <FaqsSection></FaqsSection>
  </section>
</template>


<script setup>
import TechStackSection from './TechStackSection/TechStackSection.vue';
import FaqsSection from './FaqsSection/FaqsSection.vue';

const services = [
  {
    title: 'Website Development',
    description:
      'We specialize in crafting cross-platform mobile apps for iOS and Android using Flutter. Our focus is on user-friendly, feature-rich apps with responsive design and intuitive interfaces.',
    iconSrc: '/src/assets/Images/web.png',
    titleColor: '#6C92D0',
    bgSplitColor: '#E1EDFF',
  },
  {
    title: 'App Development',
    description:
      'We excel in building scalable web applications, covering front-end and back-end development, and leveraging cloud-based solutions for accessibility and reliability.',
    iconSrc: '/src/assets/Images/app.png',
    titleColor: '#6C92D0',
    bgSplitColor: '#E1EDFF',
  },
  {
    title: 'UI/UX Design',
    description:
      'We design intuitive, engaging, and visually stunning digital experiences. Our UI/UX design service focuses on user-centered design principles to create websites, apps, and platforms.',
    iconSrc: '/src/assets/Images/ui.png',
    titleColor: '#6C92D0',
    bgSplitColor: '#E1EDFF',
  },
  {
    title: 'Application Re-Engineering',
    description:
      'Revitalize and future-proof your legacy systems. Our re-engineering service transforms outdated software into modern, scalable, and high-performance solutions.',
    iconSrc: '/src/assets/Images/app-eng.png',
    titleColor: '#6C92D0',
    bgSplitColor: '#E1EDFF',
  },
  {
    title: 'Market Research',
    description:
      'Make smarter business decisions with data-driven insights. Our research service helps you understand your audience, trends, and competitor landscape.',
    iconSrc: '/src/assets/Images/market-research.png',
    titleColor: '#6C92D0',
    bgSplitColor: '#E1EDFF',
  },
  {
    title: 'Product Branding',
    description:
      'We craft distinctive product identities that captivate and convert. Services include naming, logo creation, packaging design, and brand messaging.',
    iconSrc: '/src/assets/Images/product-management-blue.png',
    titleColor: '#6C92D0',
    bgSplitColor: '#E1EDFF',
  },
  {
    title: 'Custom S/W Development',
    description:
      'We design and develop custom software tailored to your specific business needs. From automation tools to complex enterprise solutions, our software is built to be scalable, secure, and future-ready—helping you stay ahead in a competitive market.',
    iconSrc: '/src/assets/Images/custom.png',
    titleColor: '#6C92D0',
    bgSplitColor: '#E1EDFF',
  },
  {
    title: 'Cloud Engineering & DevOps',
    description:
      'We help businesses move faster and scale smarter with our cloud and DevOps services. From cloud infrastructure setup to CI/CD automation, we ensure high availability, seamless deployment, and optimized performance across your digital systems.',
    iconSrc: '/src/assets/Images/cloud.png',
    titleColor: '#6C92D0',
    bgSplitColor: '#E1EDFF',
  },
  {
    title: 'Application Security Audit',
    description:
      'We help businesses move faster and scale smarter with our cloud and DevOps services. From cloud infrastructure setup to CI/CD automation, we ensure high availability, seamless deployment, and optimized performance across your digital systems.',
    iconSrc: '/src/assets/Images/security.png',
    titleColor: '#FF543E',
    bgSplitColor: '#EB8F8352',
  },
]

</script>