<template>
  <section class="py-16 px-4 bg-white text-center">
    <div class="max-w-4xl mx-auto">
      <!-- Badge -->
      <p class="inline-block px-4 py-1 mb-4 text-sm font-semibold text-blue-500 bg-blue-100 rounded-md animation-fadeup">
        FAQ’S
      </p>

      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl font-bold mb-12 animation-fadeup">
        <span class="text-[#FF543E]">Frequently</span> Asked Question’s
      </h2>

      <!-- FAQ List -->
      <div class="space-y-4 text-left">
        <div
          v-for="(faq, index) in faqs"
          :key="index"
          class="border border-blue-300 rounded-lg overflow-hidden transition-all duration-300 cursor-pointer animation-fadeup"
        >
          <!-- Question Button -->
          <button
            @click="toggle(index)"
            class="w-full flex justify-between items-center px-2 gap-2 lg:px-5 py-4 text-base font-medium text-black focus:outline-none"
          >
            <span class="text-left animation-fadeup">{{ faq.question }}</span>
            <span class="text-2xl font-bold transition-all duration-200 select-none animation-fadeup">
              {{ openIndex === index ? '–' : '+' }}
            </span>
          </button>

          <!-- Answer -->
          <Transition name="faq">
            <div
              v-show="openIndex === index"
              class="px-5 pb-4 text-gray-600 text-sm overflow-hidden"
            >
              {{ faq.answer }}
            </div>
          </Transition>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const openIndex = ref(null)

const toggle = (index) => {
  openIndex.value = openIndex.value === index ? null : index
}

const faqs = [
  {
    question: 'What sort of services do we offer?',
    answer:
      'We offer website development, app development, UI/UX design, SEO, cloud deployment, and more tailored solutions.',
  },
  {
    question: 'Which industries do we offer work for ?',
    answer:
      'We cater to industries like healthcare, education, real estate, e-commerce, fintech, and enterprise IT.',
  },
  {
    question: 'What technologies do we work on?',
    answer:
      'We work on technologies including Laravel, Vue, React, Node.js, WordPress, Shopify, and cloud tools.',
  },
  {
    question: 'What details do I need to provide?',
    answer:
      'Just share your requirements, goals, existing references if any, and timeline. Our team will take care of the rest.',
  },
]
</script>

<style scoped>
.faq-enter-active,
.faq-leave-active {
  transition: all 0.3s ease;
}
.faq-enter-from,
.faq-leave-to {
  max-height: 0;
  opacity: 0;
}
.faq-enter-to,
.faq-leave-from {
  max-height: 500px;
  opacity: 1;
}
</style>
