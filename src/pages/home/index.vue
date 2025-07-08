<template>
    <!-- Hero Section -->
    <section>
        <!-- Heading and tagline -->
        <div
            class="flex flex-col items-start justify-center space-y-20 w-full h-[664px] bg-[linear-gradient(90deg,rgba(108,146,208,0.5),rgba(55,74,106,0.6)),url('/src/assets/Images/hero.jpg')] bg-cover bg-center bg-fixed px-7 lg:px-24">

            <!-- Heading and tagline -->
            <div class="flex flex-col items-center justify-center lg:items-start space-y-5 lg:space-y-4 text-white">
                <h1
                    class="text-2xl leading-10 lg:text-5xl lg:max-w-2xl lg:leading-16 font-semibold text-center lg:text-left">
                    Your Tech, Our
                    Expertise. One <span class="text-[var(--color-red-text)]">Partnership</span>.</h1>
                <p class="text-xl lg:text-[26px] lg:max-w-2xl text-center lg:text-left">Innovate, Build, Secure -
                    Comprehensive
                    solutions & Services for
                    Your Digital Needs</p>
            </div>


            <span class="self-center lg:self-start">
                <router-link to="/contact"
                    class="px-6 py-3 lg:px-6 lg:py-3 text-[#0093FF] font-semibold  rounded-md bg-white lg:rounded-full hover:bg-black hover:text-white duration-500">Book
                    a Consultation</router-link>
            </span>

        </div>

        <!-- Trusted Brandes -->
        <div class="flex items-center flex-col space-y-7 lg:space-y-10 md:w-xl lg:w-7xl my-20 mx-auto">
            <h2 class="font-semibold text-xl lg:text-3xl tracking-wide text-black text-center"><span
                    class="text-[var(--color-red-text)]">Trusted</span> Brands we worked with</h2>

            <div
                class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 lg:gap-16 place-items-center justify-items-center">
                <div
                    class="flex items-center justify-center bg-white shadow-lg rounded-md shadow-black w-28 p-3 h-24 lg:w-40 lg:h-28 cursor-pointer hover:-translate-y-2.5 duration-300">
                    <img src="../../assets/Images/nitb.png" alt="">
                </div>
                <div
                    class="flex items-center justify-center bg-white shadow-lg rounded-2xl shadow-black w-28 p-3 h-24 lg:w-40 lg:h-28 cursor-pointer hover:-translate-y-2.5 duration-300">
                    <img src="../../assets/Images/ignite.png" alt="">
                </div>
                <div
                    class="flex items-center justify-center bg-white shadow-lg rounded-md shadow-black w-28 p-3 h-24 lg:w-40 lg:h-28 cursor-pointer hover:-translate-y-2.5 duration-300">
                    <img src="../../assets/Images/dst.png" alt="">
                </div>
                <div
                    class="flex items-center justify-center bg-white shadow-lg rounded-md shadow-black w-28 p-3 h-24 lg:w-40 lg:h-28 cursor-pointer hover:-translate-y-2.5 duration-300">
                    <img src="../../assets/Images/aws.png" alt="">
                </div>
                <div
                    class="flex items-center justify-center bg-white shadow-lg rounded-md shadow-black w-28 p-3 h-24 lg:w-40 lg:h-28 cursor-pointer hover:-translate-y-2.5 duration-300">
                    <img src="../../assets/Images/ewanc.png" alt="">
                </div>


            </div>
        </div>

        <!-- About Us -->
        <AboutUs></AboutUs>

        <!-- Our Services -->
        <Our-Services :services="services" height="94vh"></Our-Services>

        <!-- Schedule a call -->
        <div
            class="w-full bg-gradient-to-r from-[#4EA5F2] to-[#6FE3B4] py-16 px-6 lg:px-20 flex flex-col lg:flex-row items-center justify-between gap-10">
            <!-- Left Text Side -->
            <div class="text-white max-w-2xl text-center lg:text-left space-y-4">
                <h2 class="text-3xl lg:text-5xl font-bold leading-tight">
                    Let’s Discuss Your Project
                </h2>
                <p class="text-base lg:text-lg font-light">
                    We’d love to hear about your project goals and turn them into a powerful
                    digital product. Book a free consultation to get started!
                </p>

                <router-link to="/contact"
                    class="inline-block bg-white text-[#4EA5F2] font-semibold px-6 py-3 rounded-full mt-4 shadow hover:brightness-105 transition duration-300">
                    Schedule a discovery Call
                </router-link>
            </div>

            <!-- Right Image Side -->
            <div class="w-full max-w-md">
                <img src="/src/assets/Images/call.png" alt="Discuss Project Illustration"
                    class="w-full h-auto object-contain" />
            </div>
        </div>

        <!-- Our Portfolio -->
        <PortfolioSectionCard></PortfolioSectionCard>

        <!-- Milestones Section -->
        <MilestonesSection></MilestonesSection>

        <!-- Team Section -->
        <TeamSection></TeamSection>

        <!-- Reviews Section -->
        <ReviewsSection></ReviewsSection>

        <!-- Blogs Section -->
        <BlogSection></BlogSection>
    </section>

</template>

<script setup>
import PortfolioSectionCard from './PortfolioSection/PortfolioSectionCard.vue';
import MilestonesSection from './MilestonesSection/MilestonesSection.vue'
import TeamSection from './TeamSection.vue/TeamSection.vue';
import ReviewsSection from './ReviewsSection/ReviewsSection.vue';
import BlogSection from './BlogSection/BlogSection.vue';
import AboutUs from '../../components/UI/AboutUs.vue';


// Importing Images
import web from '../../assets/Images/web.png'
import app from '../../assets/Images/app.png'
import ui from '../../assets/Images/ui.png'
import appeng from '../../assets/Images/app-eng.png'
import market from '../../assets/Images/market-research.png'
import product from '/src/assets/Images/product-management.png'

const services = [
    {
        title: 'Website Development',
        description:
            'We specialize in crafting cross-platform mobile apps for iOS and Android using Flutter. Our focus is on user-friendly, feature-rich apps with responsive design and intuitive interfaces.',
        iconSrc : web,
        titleColor: '#4EA5F2',
        bgSplitColor: '#EDF4FA',
    },
    {
        title: 'App Development',
        description:
            'We excel in building scalable web applications, covering front-end and back-end development, and leveraging cloud-based solutions for accessibility and reliability.',
        iconSrc: app,
        titleColor: '#4EA5F2',
        bgSplitColor: '#EDF4FA',
    },
    {
        title: 'UI/UX Design',
        description:
            'We design intuitive, engaging, and visually stunning digital experiences. Our UI/UX design service focuses on user-centered design principles to create websites, apps, and platforms.',
        iconSrc: ui,
        titleColor: '#6C92D0',
        bgSplitColor: '#EDF4FA',
    },
    {
        title: 'Application Re-Engineering',
        description:
            'Revitalize and future-proof your legacy systems. Our re-engineering service transforms outdated software into modern, scalable, and high-performance solutions.',
        iconSrc: appeng,
        titleColor: '#4EA5F2',
        bgSplitColor: '#EDF4FA',
    },
    {
        title: 'Market Research',
        description:
            'Make smarter business decisions with data-driven insights. Our research service helps you understand your audience, trends, and competitor landscape.',
        iconSrc: market,
        titleColor: '#4EA5F2',
        bgSplitColor: '#EDF4FA',
    },
    {
        title: 'Product Branding',
        description:
            'We craft distinctive product identities that captivate and convert. Services include naming, logo creation, packaging design, and brand messaging.',
        iconSrc: product,
        titleColor: '#FF543E',
        bgSplitColor: '#EB8F8352',
    },
]

</script>