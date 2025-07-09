<template>
  <section class="py-16 px-4 bg-[#F1FCF9] animation-fadeup text-center">
    <div class="max-w-7xl mx-auto">
      <!-- Subheading Badge -->
      <p class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md animation-fadeup">
        Technologies we work on
      </p>

      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl font-bold mb-12 animation-fadeup">
        Our <span class="text-[#FF543E]">Development</span> Stack
      </h2>

      <!-- Grid of Icons -->
      <div class="grid  grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 place-items-center">
        <div
          v-for="(tech, index) in techStack"
          :key="index" :title="tech.name"
          class="bg-white w-24 h-24 lg:w-44 lg:h-24 rounded-xl shadow flex items-center justify-center transition hover:scale-105 cursor-pointer animation-fadeup"
        >
          <img :src="tech.src" :alt="tech.name" class="max-w-[60%] max-h-[60%] object-contain animation-fadeup" />
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import wordpress from '../../../assets/TechStack/wordpress.png'
import woocommerce from '../../../assets/TechStack/woocommerce.png'
import laravel from '../../../assets/TechStack/laravel.png'
import shopify from '../../../assets/TechStack/shopify.png'
import php from '../../../assets/TechStack/php.png'
import mysql from '../../../assets/TechStack/mysql.png'
import jquery from '../../../assets/TechStack/jquery.png'
import javascript from '../../../assets/TechStack/javascript.png'
import nodejs from '../../../assets/TechStack/nodejs.png'
import angular from '../../../assets/TechStack/angular.png'
import vue from '../../../assets/TechStack/vue.png'
import react from '../../../assets/TechStack/react.png'
import github from '../../../assets/TechStack/github.png'
import atlassian from '../../../assets/TechStack/atlassian.png'
import slack from '../../../assets/TechStack/slack.png'
import trello from '../../../assets/TechStack/trello.png'
import basecamp from '../../../assets/TechStack/basecamp.png'
import asana from '../../../assets/TechStack/asana.png'
import drupal from '../../../assets/TechStack/drupal.png'
import joomla from '../../../assets/TechStack/joomla.png'

const techStack = [
  { name: 'WordPress', src: wordpress },
  { name: 'WooCommerce', src: woocommerce },
  { name: 'Laravel', src: laravel },
  { name: 'Shopify', src: shopify },
  { name: 'PHP', src: php },
  { name: 'MySQL', src: mysql },
  { name: 'jQuery', src: jquery },
  { name: 'JavaScript', src: javascript },
  { name: 'Node.js', src: nodejs },
  { name: 'Angular', src: angular },
  { name: 'Vue.js', src: vue },
  { name: 'React', src: react },
  { name: 'GitHub', src: github },
  { name: 'Atlassian', src: atlassian },
  { name: 'Slack', src: slack },
  { name: 'Trello', src: trello },
  { name: 'Basecamp', src: basecamp },
  { name: 'Asana', src: asana },
  { name: 'Drupal', src: drupal },
  { name: 'Joomla', src: joomla },
]


</script>
