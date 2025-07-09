<template>
  <div>
    <Header />

    <router-view v-slot="{ Component }">
      <transition name="page" mode="out-in">
        <component :is="Component" :key="$route.fullPath" />
      </transition>
    </router-view>

    <Footer />
  </div>
</template>

<script setup>
import Header from '../components/UI/Header.vue'
import Footer from '../components/UI/Footer.vue'
</script>

<style scoped>
.page-enter-active,
.page-leave-active {
  transition: opacity 0.5s ease, transform 0.5s ease;
}
.page-enter-from,
.page-leave-to {
  opacity: 0;
  transform: translateY(20px);
}
</style>
