<template>
    <div class="relative w-full h-[664px] overflow-hidden">
        <!-- Sliding Carousel Background -->
        <div class="absolute inset-0 w-full h-full overflow-hidden">
            <div class="bg-carousel-slider">
                <div class="carousel-track">
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero1})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero2})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero3})` }"></div>

                    <!-- Visually same images but controlled by loop, not logic -->
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero1})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero2})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero3})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero1})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero2})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero3})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero1})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero2})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero3})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero1})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero2})` }"></div>
                    <div class="bg-slide" :style="{ backgroundImage: `url(${hero3})` }"></div>
                </div>
            </div>

        </div>

        <!-- Foreground Content -->
        <div
            class="relative z-10 flex flex-col items-start justify-center space-y-20 w-full h-full px-7 lg:px-24 bg-[linear-gradient(90deg,rgba(108,146,208,0.5),rgba(55,74,106,0.6))] text-white">
            <div class="flex flex-col items-center justify-center lg:items-start space-y-5 lg:space-y-4 hero-text">
                <h1
                    class="text-2xl leading-10 lg:text-5xl lg:max-w-2xl lg:leading-[4rem] font-semibold text-center lg:text-left">
                    Your Tech, Our Expertise. One
                    <span class="text-[var(--color-red-text)]">Partnership</span>.
                </h1>
                <p class="text-xl lg:text-[26px] lg:max-w-2xl text-center lg:text-left">
                    Innovate, Build, Secure – Comprehensive solutions & Services for Your Digital Needs
                </p>
            </div>

            <!-- CTA Button -->
            <span class="self-center lg:self-start hero-button">
                <router-link to="/contact"
                    class="px-6 py-3 lg:px-6 lg:py-3 text-[#0093FF] font-semibold rounded-md bg-white lg:rounded-full hover:bg-black hover:text-white duration-500">
                    Book a Consultation
                </router-link>
            </span>
        </div>
    </div>
</template>



<script setup>
import hero1 from '../../../assets/Images/hero.jpg'
import hero2 from '../../../assets/Images/hero2.jpg'
import hero3 from '../../../assets/Images/hero3.png'
</script>

<style scoped>
/* Background slider container */
.bg-carousel-slider {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
}


.bg-slide {
    width: 100%;
    min-width: 100%;
    flex-shrink: 0;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}


.carousel-track {
  display: flex;
  width: 100%; /* 6 slides */
  height: 100%;
  animation: smoothScrollPause 36s ease infinite;
}


@keyframes smoothScrollPause {
  0%    { transform: translateX(0%); }
  13.88% { transform: translateX(0%); }

  16.66% { transform: translateX(-100%); }
  30.55% { transform: translateX(-100%); }

  33.33% { transform: translateX(-200%); }
  47.22% { transform: translateX(-200%); }

  50%    { transform: translateX(-300%); }
  63.88% { transform: translateX(-300%); }

  66.66% { transform: translateX(-400%); }
  80.55% { transform: translateX(-400%); }

  83.33% { transform: translateX(-500%); }
  97.22% { transform: translateX(-500%); }

  100%   { transform: translateX(0%); }
}







/* Scroll animation */
@keyframes fadeSlideUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-text{
    animation-name: fadeSlideUp;
    animation-duration: 0.8s;
    animation-timing-function: ease-out;
    animation-fill-mode: both;
    animation-play-state: running;
    animation-delay: 0.2s;
    /* optional */
}

.hero-button{
    animation-name: fadeSlideUp;
    animation-duration: 0.8s;
    animation-timing-function: ease-out;
    animation-fill-mode: both;
    animation-play-state: running;
    animation-delay: 0.6s;
    /* optional */
}
</style>
