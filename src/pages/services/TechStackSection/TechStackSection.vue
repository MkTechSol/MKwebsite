<template>
  <section class="py-16 px-4 bg-[#F1FCF9] text-center">
    <div class="max-w-7xl mx-auto">
      <!-- Subheading Badge -->
      <p class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md">
        Technologies we work on
      </p>

      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl font-bold mb-12">
        Our <span class="text-[#FF543E]">Development</span> Stack
      </h2>

      <!-- Grid of Icons -->
      <div class="grid  grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 place-items-center">
        <div
          v-for="(tech, index) in techStack"
          :key="index" :title="tech.name"
          class="bg-white w-24 h-24 lg:w-44 lg:h-24 rounded-xl shadow flex items-center justify-center transition hover:scale-105 cursor-pointer"
        >
          <img :src="tech.src" :alt="tech.name" class="max-w-[60%] max-h-[60%] object-contain" />
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const techStack = [
  { name: 'WordPress', src: '/src/assets/TechStack/wordpress.png' },
  { name: 'WooCommerce', src: '/src/assets/TechStack/woocommerce.png' },
  { name: 'Laravel', src: '/src/assets/TechStack/laravel.png' },
  { name: 'Shopify', src: '/src/assets/TechStack/shopify.png' },
  { name: 'PHP', src: '/src/assets/TechStack/php.png' },
  { name: 'MySQL', src: '/src/assets/TechStack/mysql.png' },
  { name: 'jQuery', src: '/src/assets/TechStack/jquery.png' },
  { name: 'JavaScript', src: '/src/assets/TechStack/javascript.png' },
  { name: 'Node.js', src: '/src/assets/TechStack/nodejs.png' },
  { name: 'Angular', src: '/src/assets/TechStack/angular.png' },
  { name: 'Vue.js', src: '/src/assets/TechStack/vue.png' },
  { name: 'React', src: '/src/assets/TechStack/react.png' },
  { name: 'GitHub', src: '/src/assets/TechStack/github.png' },
  { name: 'Atlassian', src: '/src/assets/TechStack/atlassian.png' },
  { name: 'Slack', src: '/src/assets/TechStack/slack.png' },
  { name: 'Trello', src: '/src/assets/TechStack/trello.png' },
  { name: 'Basecamp', src: '/src/assets/TechStack/basecamp.png' },
  { name: 'Asana', src: '/src/assets/TechStack/asana.png' },
  { name: 'Drupal', src: '/src/assets/TechStack/drupal.png' },
  { name: 'Joomla', src: '/src/assets/TechStack/joomla.png' },
]
</script>
