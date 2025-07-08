<template>
  <section class="py-16 bg-white text-center">
    <div class="max-w-6xl mx-auto px-4">
      <!-- Heading -->
      <p class="inline-block px-4 py-2 mb-2 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md">
        Our Blogs
      </p>
      <h2 class="text-3xl font-bold mb-12">
        Latest <span class="text-[var(--color-red-text)]">Blog</span> & Articles
      </h2>

      <!-- Blog Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div
          v-for="(blog, index) in paginatedBlogs"
          :key="index"
          class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200 flex flex-col hover:scale-105 group duration-300 cursor-pointer"
        >
          <!-- Image -->
          <div class="relative">
            <img :src="blog.image" alt="blog image" class="w-full h-52 object-cover group-hover:scale-110 duration-300" />
            <!-- Date Badge -->
            <div
              class="absolute -bottom-4 right-8 bg-gradient-to-t from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] text-white rounded-md px-3 py-1 text-xs font-semibold shadow"
            >
              <div>{{ blog.date }}</div>
              <div>{{ blog.month }}</div>
              <div>{{ blog.year }}</div>
            </div>
          </div>

          <!-- Text -->
          <div class="p-5 flex flex-col justify-between h-full text-left">
            <div>
              <h3 class="font-semibold text-base mb-2">{{ blog.title }}</h3>
              <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">
                {{ blog.description }}
              </p>
            </div>
            <div class="mt-4">
              <a href="#" class="text-sm text-blue-600 hover:underline flex items-center gap-1">
                Read More
                <i class="pi pi-arrow-right text-xs"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- PrimeVue Paginator -->
      <div class="mt-8 flex justify-center">
        <Paginator
          :rows="blogsPerPage"
          :totalRecords="blogs.length"
          :first="first"
          @update:first="onPageChange"
          :rowsPerPageOptions="[6, 9, 12, 14]"
          class="text-sm"
        />
      </div>


    </div>
  </section>
</template>

<script setup>
import { ref, computed } from 'vue'
import Paginator from 'primevue/paginator'

// Blog List
const blogs = Array.from({ length: 40 }, (_, i) => ({
  title: `Blog Post #${i + 1}: 5 Proven Strategies for growing Your Brand on Instagram`,
  description:
    'Instagram has become a powerful platform for brands looking to connect with their audience, build brand awareness, and drive...',
  image: '/src/assets/Images/blog.png',
  date: '18',
  month: 'Dec',
  year: '2025',
}))

// Pagination Logic
const first = ref(0)
const blogsPerPage = 9

const paginatedBlogs = computed(() => blogs.slice(first.value, first.value + blogsPerPage))

function onPageChange(val) {
  first.value = val
}
</script>
