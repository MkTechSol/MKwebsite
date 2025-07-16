<template>
    <header
        class="sticky top-0 left-0 right-0 z-50 flex items-center justify-between bg-white shadow py-1 px-6"
    >
        <!-- Left Side -->
        <div
            class="flex items-center justify-between w-full lg:justify-start gap-8 lg:flex-2/3"
        >
            <!-- Logo -->
            <a href="/">
                <img
                    src="../../assets/Logos/logo.png"
                    alt="MK-TechSol"
                    class="h-9 w-9 lg:min-w-[70px] lg:min-h-[70px]"
                />
            </a>

            <!-- Hamburger Menu -->
            <div class="lg:hidden pt-3 relative">
                <button
                    @click="toggleHamburgerMenu"
                    id="menu-btn"
                    type="button"
                    class="z-40 hamburger focus:outline-none"
                    :class="{
                        open: isOpen,
                    }"
                >
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
            </div>

            <!-- Navigation -->
            <ul class="lg:flex space-x-6 hidden">
                <li>
                    <RouterLink
                        to="/"
                        class="nav-link"
                        :class="{ 'active-link': $route.path === '/' }"
                        >Home</RouterLink
                    >
                </li>
                <li>
                    <RouterLink
                        to="/services"
                        class="nav-link"
                        :class="{ 'active-link': $route.path === '/services' }"
                        >Services
                    </RouterLink>
                </li>
                <li class="min-w-fit">
                    <RouterLink
                        to="/about"
                        class="nav-link"
                        :class="{ 'active-link': $route.path === '/about' }"
                        >About Us
                    </RouterLink>
                </li>
                <li>
                    <RouterLink
                        to="/careers"
                        class="nav-link"
                        :class="{ 'active-link': $route.path === '/careers' }"
                        >Careers
                    </RouterLink>
                </li>
                <li>
                    <RouterLink
                        to="/portfolio"
                        class="nav-link"
                        :class="{ 'active-link': $route.path === '/portfolio' }"
                    >
                        Portfolio</RouterLink
                    >
                </li>
                <li>
                    <RouterLink
                        to="/blogs"
                        class="nav-link"
                        :class="{ 'active-link': $route.path === '/blogs' }"
                        >Blogs
                    </RouterLink>
                </li>
            </ul>

            <!-- mobile Navigation teleported to body -->
            <teleport to="body">
                <div
                    id="menu"
                    class="fixed inset-0 z-30 flex-col w-full min-h-screen py-1 pt-40 pl-12 space-y-3 text-lg text-white uppercase bg-gradient-to-l from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] opacity-90"
                    :class="{
                        flex: isOpen === true,
                        hidden: isOpen === false,
                    }"
                >
                    <ul class="flex flex-col items-start space-y-6">
                        <li @click="toggleHamburgerMenu">
                            <RouterLink
                                to="/"
                                class="nav-link flex items-center gap-2"
                                :class="{ 'active-link': $route.path === '/' }"
                            >
                                <i class="pi pi-home"></i>
                                Home
                            </RouterLink>
                        </li>
                        <li @click="toggleHamburgerMenu">
                            <RouterLink
                                to="/services"
                                class="nav-link flex items-center gap-2"
                                :class="{
                                    'active-link': $route.path === '/services',
                                }"
                            >
                                <i class="pi pi-cog"></i>
                                Services
                            </RouterLink>
                        </li>
                        <li @click="toggleHamburgerMenu" class="min-w-fit">
                            <RouterLink
                                to="/about"
                                class="nav-link flex items-center gap-2"
                                :class="{
                                    'active-link': $route.path === '/about',
                                }"
                            >
                                <i class="pi pi-info-circle"></i>
                                About Us
                            </RouterLink>
                        </li>
                        <li @click="toggleHamburgerMenu">
                            <RouterLink
                                to="/careers"
                                class="nav-link flex items-center gap-2"
                                :class="{
                                    'active-link': $route.path === '/careers',
                                }"
                            >
                                <i class="pi pi-briefcase"></i>
                                Careers
                            </RouterLink>
                        </li>
                        <li @click="toggleHamburgerMenu">
                            <RouterLink
                                to="/portfolio"
                                class="nav-link flex items-center gap-2"
                                :class="{
                                    'active-link': $route.path === '/portfolio',
                                }"
                            >
                                <i class="pi pi-images"></i>
                                Portfolio
                            </RouterLink>
                        </li>
                        <li @click="toggleHamburgerMenu">
                            <RouterLink
                                to="/blogs"
                                class="nav-link flex items-center gap-2"
                                :class="{
                                    'active-link': $route.path === '/blogs',
                                }"
                            >
                                <i class="pi pi-book"></i>
                                Blogs
                            </RouterLink>
                        </li>
                    </ul>

                    <div class="flex flex-col items-start space-y-3 mt-8">
                        <!-- Contact No -->
                        <div
                            class="flex !items-center justify-center gap-1 cursor-pointer"
                        >
                            <span class="text-sm">Phone: </span>
                            <span class="text-sm">+92 341 89 00 999</span>
                        </div>

                        <!-- Email -->
                        <div
                            class="flex !items-center justify-center gap-1 cursor-pointer"
                        >
                            <span class="text-sm">Email: </span>
                            <span class="text-sm">info@mktechsol.com</span>
                        </div>
                    </div>

                    <!-- Social Icons -->
                    <div
                        class="flex items-center justify-start space-x-2 mt-8 w-full"
                    >
                        <div class="social-icon bg-twitter">
                            <i class="pi pi-twitter"></i>
                        </div>
                        <div class="social-icon bg-facebook">
                            <i class="pi pi-facebook"></i>
                        </div>
                        <div class="social-icon bg-instagram">
                            <i class="pi pi-instagram"></i>
                        </div>
                        <div class="social-icon bg-linkedin">
                            <i class="pi pi-linkedin"></i>
                        </div>
                    </div>
                </div>
            </teleport>
        </div>

        <!-- Right Side -->
        <div class="hidden lg:flex items-center justify-end gap-3 w-full">
            <!-- Contact No -->
            <div class="flex items-center justify-center gap-4 cursor-pointer">
                <i class="pi pi-phone text-[#6C92D0] pt-0.5 w-1"></i>
                <span class="text-sm">+92 0345 885 539</span>
            </div>

            <!-- Contact Us -->
            <div>
                <base-link-button to="/contact">Contact Us</base-link-button>
            </div>
        </div>
    </header>
</template>

<script setup>
import { ref } from "vue";

const isOpen = ref(false);
const hamburgerColor = ref(false);
const isMenuHidden = ref(true);

const toggleHamburgerMenu = () => {
    isOpen.value = !isOpen.value;
    hamburgerColor.value = !hamburgerColor.value;
    isMenuHidden.value = !isMenuHidden.value;

    // Lock/unlock scroll
    if (isOpen.value) {
        document.body.classList.add("overflow-hidden");
    } else {
        document.body.classList.remove("overflow-hidden");
    }
};
</script>
