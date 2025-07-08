<template>
    <!-- Contact Foam -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <!-- Left: Contact Info -->
            <div>
                <p
                    class="inline-block bg-blue-100 text-[var(--color-accent-text)] font-semibold text-sm px-4 py-2 rounded mb-3">
                    Contact Us
                </p>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Get In Touch With <br />
                    <span class="text-[var(--color-red-text)]">MK Techsol</span>
                </h2>
                <p class="text-gray-600 mb-8 max-w-md">
                    At MK Techsol, we accelerate your business growth and success with
                    cutting-edge, data-driven solutions and trusted expert support.
                </p>

                <!-- Address -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="bg-red-500 text-white rounded-lg p-4 flex items-center justify-center">
                        <i class="pi pi-map-marker text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-black mb-1">MK Techsol Main Office</h3>
                        <p class="text-sm text-gray-700">
                            Office#6 3rd floor, Muhammad Arcade, 4th Road, Commercial Market Rd, Rawalpindi, 46000,
                            Pakistan
                        </p>
                    </div>
                </div>

                <!-- Phone & Email -->
                <div class="flex items-center gap-6 mb-8 flex-wrap">
                    <!-- Phone -->
                    <div class="flex items-center gap-3">
                        <div class="bg-blue-500 text-white rounded-lg p-4 flex items-center justify-center">
                            <i class="pi pi-phone text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-black">Phone</h4>
                            <p class="text-sm text-gray-700">+920317 3033419</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-center gap-3">
                        <div class="bg-green-400 text-white rounded-lg p-4 flex items-center justify-center">
                            <i class="pi pi-envelope text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-black">Email Address</h4>
                            <p class="text-sm text-gray-700">mktechsol@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="border-t pt-4">
                    <p class="text-sm text-gray-700 mb-2">Follow Our Social Media</p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-100 text-blue-400 hover:bg-blue-200 transition">
                            <i class="pi pi-twitter text-xl"></i>
                        </a>
                        <a href="#"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 hover:bg-blue-200 transition">
                            <i class="pi pi-facebook text-xl"></i>
                        </a>
                        <a href="#"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 hover:bg-blue-200 transition">
                            <i class="pi pi-linkedin text-xl"></i>
                        </a>
                        <a href="#"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-pink-100 text-pink-500 hover:bg-pink-200 transition">
                            <i class="pi pi-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right: Contact Form -->
            <form @submit.prevent="sendEmail"
                class="bg-[#DDF2FF] p-6 sm:p-8 rounded-2xl shadow-sm lg:w-[75%] mx-auto lg:h-[75vh] lg:flex lg:justify-between lg:flex-col">

                <div class="mb-4">
                    <input type="text" v-model="formData.name" placeholder="Your name"
                        class="w-full px-4 py-3 bg-white text-black outline-none focus:ring-2 ring-blue-300" required />
                </div>

                <div class="mb-4">
                    <input type="email" v-model="formData.email" placeholder="Your email"
                        class="w-full px-4 py-3 bg-white text-black outline-none focus:ring-2 ring-blue-300" required />
                </div>

                <div class="mb-4">
                    <input type="text" v-model="formData.subject" placeholder="Your subject"
                        class="w-full px-4 py-3 bg-white text-black outline-none focus:ring-2 ring-blue-300" required />
                </div>

                <div class="mb-6">
                    <textarea v-model="formData.message" placeholder="Your message" rows="5"
                        class="w-full px-4 py-3 bg-white text-black outline-none focus:ring-2 ring-blue-300"
                        required></textarea>
                </div>

                <button type="submit" :disabled="isSending"
                    class="w-full py-3 text-white font-semibold bg-gradient-to-r from-[#4EA5F2] to-[#6FE3B4] hover:brightness-105 transition">
                    {{ isSending ? 'Sending...' : 'Send Message' }}
                </button>

                <p v-if="success" class="text-green-600 mt-3">Message sent successfully!</p>
                <p v-if="error" class="text-red-600 mt-3">Failed to send. Please try again later.</p>
            </form>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="w-full h-[400px] mt-10 rounded-xl overflow-hidden shadow-lg relative">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50"></div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.496419746792!2d73.08280525889913!3d33.64429694487164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9520bc29fa73%3A0xd2a3805e82d6fd74!2sMK%20TechSol!5e0!3m2!1sen!2s!4v1751868967839!5m2!1sen!2s"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</template>


<script setup>
import { ref, onMounted } from 'vue'
import * as emailjs from '@emailjs/browser'

// Initialize the SDK (optional but good practice)
onMounted(() => {
  emailjs.init('jYc50CfKE7uVVrwYI') // ✅ your public key
})

const formData = ref({
  name: '',
  email: '',
  subject: '',
  message: ''
})

const isSending = ref(false)
const success = ref(false)
const error = ref(false)

const sendEmail = () => {
  isSending.value = true
  success.value = false
  error.value = false

  emailjs.send('service_gjvwi9j', 'template_9mbxaao', {
    from_name: formData.value.name,
    from_email: formData.value.email,
    subject: formData.value.subject,
    message: formData.value.message
  })
  .then(() => {
    isSending.value = false
    success.value = true
    formData.value = { name: '', email: '', subject: '', message: '' }
  })
  .catch(() => {
    isSending.value = false
    error.value = true
  })
}
</script>
