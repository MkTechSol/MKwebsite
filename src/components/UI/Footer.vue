<template>
  <footer class="mt-16 lg:mt-32">
    <div>

      <!-- Newsletter Section -->
      <section
        aria-labelledby="newsletter-heading"
        class="footer-animate opacity-0 translate-y-10 transition-all duration-500 flex items-center justify-center p-6 lg:pt-24 pb-5 lg:pb-0 lg:px-16 bg-linear-to-r to-[#4ea5f23b] from-[#6c92d038]">
        <!-- Right Side -->
        <div class="w-full flex flex-col space-y-3 lg:space-y-0">
          <div>
            <h2 id="newsletter-heading" class="text-lg font-semibold">
              Subscribe to our Latest <span class="text-[#6C92D0]">Updates</span>
            </h2>
            <p>Stay up to date with our news and updates, and get in touch with us.</p>
          </div>
          <form class="mt-4 flex gap-2 flex-col">
            <input type="email" placeholder="Email Address"
              class="p-2 rounded w-full bg-white outline outline-[#3171d7] focus:outline-[#6294e4] placeholder:text-black"
              aria-label="Email Address" />
            <button type="submit"
              class="w-full bg-linear-to-l to-[#4EA5F2] from-[#6FE3B4] text-white px-4 py-2 rounded-sm cursor-pointer duration-300 hover:brightness-110">
              Subscribe now
            </button>
          </form>
        </div>

        <!-- left side -->
        <div class="w-full hidden lg:flex items-center justify-end h-fit">
          <img src="../../assets/Images/news-letter-section-img.png" class="w-fit" alt="">
        </div>
      </section>

      <!-- Other Footer Content -->
      <div class="text-sm text-center bg-linear-to-t to-[#4EA5F2] from-[#6FE3B4] p-5 lg:p-12">
        <div
          class="flex items-start justify-evenly flex-wrap lg:flex-nowrap space-y-10 lg:space-y-0">

          <!-- Left side -->
          <div class="footer-animate opacity-0 translate-y-10 transition-all duration-500 flex flex-col items-start justify-start space-y-8">
            <!-- logo and description -->
            <div class="flex flex-col space-y-3 !items-start justify-start">
              <img src="../../assets/Logos/footer-logo.png" alt="MK-TechSol" class="h-[60px]">
              <p class="text-white text-justify lg:pl-[10px] font-light text-[15px]">MK TechSol is a registered company
                with the Securities & Exchange Commission of Pakistan (SECP) on MK
                Technology Pvt Ltd under the Companies Act, 2017 (XIX of 2017). MK TechSol is also a registered
                software company with Pakistan Software Export Board (PSEB) under MK Technology.</p>
            </div>

            <!-- Desktop Social Icons -->
            <div class="lg:flex hidden items-center justify-start pl-[10px] space-x-2 w-full self-start">
              <div class="social-icon bg-twitter transition transform duration-300 hover:scale-110 hover:brightness-110">
                <i class="pi pi-twitter"></i>
              </div>
              <div class="social-icon bg-facebook transition transform duration-300 hover:scale-110 hover:brightness-110">
                <i class="pi pi-facebook"></i>
              </div>
              <div class="social-icon bg-instagram transition transform duration-300 hover:scale-110 hover:brightness-110">
                <i class="pi pi-instagram"></i>
              </div>
              <div class="social-icon bg-linkedin transition transform duration-300 hover:scale-110 hover:brightness-110">
                <i class="pi pi-linkedin"></i>
              </div>
            </div>
          </div>

          <!-- Middle -->
          <div class="footer-animate opacity-0 translate-y-10 transition-all duration-500 flex flex-col items-start justify-center w-full space-y-3 pt-2 lg:ml-32">
            <strong class="text-white cursor-pointer">Useful Links</strong>
            <ul class="flex flex-col items-start space-y-4">
              <li>
                <RouterLink to="/" class="footer-nav-link transition duration-300 hover:translate-x-1 hover:text-[#4EA5F2]">Home</RouterLink>
              </li>
              <li>
                <RouterLink to="/services" class="footer-nav-link transition duration-300 hover:translate-x-1 hover:text-[#4EA5F2]">Services</RouterLink>
              </li>
              <li>
                <RouterLink to="/about" class="footer-nav-link transition duration-300 hover:translate-x-1 hover:text-[#4EA5F2]">About Us</RouterLink>
              </li>
              <li>
                <RouterLink to="/careers" class="footer-nav-link transition duration-300 hover:translate-x-1 hover:text-[#4EA5F2]">Careers</RouterLink>
              </li>
              <li>
                <RouterLink to="/portfolio" class="footer-nav-link transition duration-300 hover:translate-x-1 hover:text-[#4EA5F2]">Portfolio</RouterLink>
              </li>
              <li>
                <RouterLink to="/blogs" class="footer-nav-link transition duration-300 hover:translate-x-1 hover:text-[#4EA5F2]">Blogs</RouterLink>
              </li>
            </ul>
          </div>

          <!-- Right Side -->
          <div class="footer-animate opacity-0 translate-y-10 transition-all duration-500 flex flex-col items-start justify-center w-full space-y-3 pt-2">
            <strong class="text-white cursor-pointer">Contact Us</strong>
            <div class="flex flex-col items-start justify-start text-white space-y-3">
              <p class="max-w-[260px] text-justify">Al-Nawaz Arcade, Adjacent to Rawalpindi Urology Hospital, Murree Road Rawalpindi.</p>
              <p>info@mktechsol.com</p>
              <p>+92 341 89 00 999</p>
            </div>
          </div>

          <!-- Mobile Social Icons -->
          <div class="footer-animate opacity-0 translate-y-10 transition-all duration-500 lg:hidden flex items-center justify-center space-x-2 w-full">
            <div class="social-icon bg-twitter transition transform duration-300 hover:scale-110 hover:brightness-110">
              <i class="pi pi-twitter"></i>
            </div>
            <div class="social-icon bg-facebook transition transform duration-300 hover:scale-110 hover:brightness-110">
              <i class="pi pi-facebook"></i>
            </div>
            <div class="social-icon bg-instagram transition transform duration-300 hover:scale-110 hover:brightness-110">
              <i class="pi pi-instagram"></i>
            </div>
            <div class="social-icon bg-linkedin transition transform duration-300 hover:scale-110 hover:brightness-110">
              <i class="pi pi-linkedin"></i>
            </div>
          </div>

        </div>
      </div>

      <!-- Copyright -->
      <div class="bg-white flex items-center justify-center w-full text-center p-5 font-semi">
        © 2025 MK Techsol Global LLC. All Rights Reserved.
      </div>
    </div>
  </footer>
</template>

<script setup>
import { onMounted } from 'vue'

onMounted(() => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-fade-up')
          entry.target.classList.remove('opacity-0', 'translate-y-10')
        }
      })
    },
    { threshold: 0.2 }
  )

  document.querySelectorAll('.footer-animate').forEach((el) => {
    observer.observe(el)
  })
})
</script>

<style scoped>
@keyframes fade-up {
  0% {
    opacity: 0;
    transform: translateY(40px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-up {
  animation: fade-up 0.6s ease-out forwards;
}
</style>
