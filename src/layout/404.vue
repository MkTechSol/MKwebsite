<template>
  <div class="w-full min-h-screen bg-gradient-to-b from-white to-[#e0f1ff] flex items-center justify-center px-4 py-16">
    <div class="text-center space-y-6 animate-fade-in">
      
      <!-- Floating 404 -->
      <h1 class="text-[100px] sm:text-[160px] font-bold text-[#4EA5F2] animate-float">404</h1>
      
      <!-- Subtitle -->
      <p class="text-xl sm:text-2xl text-gray-700 font-medium typing-animation">
        Oops! The page you're looking for doesn't exist.
      </p>

      <!-- Go back -->
      <RouterLink
        to="/"
        class="inline-block bg-[#4EA5F2] text-white px-6 py-3 rounded-md mt-4 font-medium hover:scale-105 hover:shadow-xl transition duration-300"
      >
        Go Back Home
      </RouterLink>
    </div>
  </div>
</template>

<script setup>
</script>

<style scoped>
@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-12px);
  }
}

@keyframes fade-in {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}

.animate-float {
  animation: float 2.5s ease-in-out infinite;
}

.animate-fade-in {
  animation: fade-in 1s ease-out forwards;
}

.typing-animation {
  overflow: hidden;
  white-space: nowrap;
  border-right: 2px solid #4EA5F2;
  width: 0;
  animation: typing 3s steps(40, end) forwards;
}
</style>
