<template>
  <section class="py-16 bg-white text-center">
    <div class="max-w-6xl mx-auto px-4">
      <!-- Heading -->
      <p class="inline-block px-4 py-2 mb-2 text-sm font-semibold text-blue-500 bg-blue-100 rounded-md">
        Our Blogs
      </p>
      <h2 class="text-3xl font-bold mb-12">
        Latest <span class="text-[#FF543E]">Blog</span> & Articles
      </h2>

      <!-- Blog Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div
          v-for="(blog, index) in blogs"
          :key="index"
          class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200 flex flex-col group duration-300 hover:scale-105 cursor-pointer"
        >
          <!-- Image -->
          <div class="relative">
            <img :src="blog.image" alt="blog image" class="w-full h-52 object-cover group-hover:scale-110 duration-300" />
            <!-- Date Badge -->
            <div
              class="absolute -bottom-4 right-8 bg-gradient-to-t from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] text-white rounded-md px-3 py-1 text-xs font-semibold shadow"
            >
              <div>{{ blog.day }}</div>
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

      <!-- Button -->
      <base-link-button extraClass="mt-10 !px-10" to="/blogs">
        All Blogs
      </base-link-button>
    </div>
  </section>
</template>

<script setup>

import blog1 from '../../../assets/Images/blog1.png'
import blog2 from '../../../assets/Images/blog2.png'
import blog3 from '../../../assets/Images/blog3.png'

const blogs = [
  {
    title: '5 Proven Strategies for growing Your Brand on Instagram',
    description:
      'Instagram has become a powerful platform for brands looking to connect with their audience, build brand awareness, and drive...',
    image: blog1,
    day: '18',
    month: 'Dec',
    year: '2025',
  },
  {
    title: 'Top 10 Python Libraries For faster and Smarter development',
    description:
      'Python has emerged as one of the most popular programming languages, largely due to its simplicity, readability, and extensive...',
    image: blog2,
    day: '18',
    month: 'Dec',
    year: '2025',
  },
  {
    title: 'Top Tools Every software developer Should know in 2024',
    description:
      'In the fast-paced world of software development, staying updated with the latest tools is crucial for maintaining productivity...',
    image: blog3,
    day: '18',
    month: 'Dec',
    year: '2025',
  },
  // Add more blog objects here as needed
]
</script>

<style scoped>
/* Optional: limit lines in description */
.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
