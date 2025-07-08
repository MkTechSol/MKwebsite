<template>
    <section class="bg-gradient-to-b from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] py-16 text-white text-center">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-4">Customer’s Reviews</h2>
            <p class="text-base md:text-lg mb-10">
                MK Techsol is a trusted web design and development company in Pakistan, delivering impactful
                digital solutions. From websites to eCommerce and marketing, our global clients reflect our
                commitment to quality and results.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div v-for="(review, index) in reviews.slice(0, 2)" :key="index" :class="[
                    'rounded-xl bg-white p-6 text-left shadow-lg relative overflow-hidden flex flex-col justify-between',
                    index === 0 ? 'border-l-8 border-[#FF543E]' : 'border-l-8 border-[#2E68BA]'
                ]">
                    <p class="text-sm text-gray-800 mb-6">
                        {{ review.message }}
                    </p>
                    <div>
                        <div class="w-full h-0.5 bg-[#D4CFCF] mb-3"></div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <img :src="review.avatar" alt="avatar" class="w-10 h-10 rounded-full" />
                                <span :class="index === 0 ? 'text-[#FF543E]' : 'text-[#2E68BA]'" class="font-semibold">
                                    {{ review.name }}
                                </span>
                            </div>
                            <img :src="index === 0 ? '/src/assets/Images/red.png' : '/src/assets/Images/blue.png'"
                                class="w-12" alt="">

                        </div>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <button @click="dialogVisible = true"
                class="mt-10 px-8 py-3 border border-white rounded-full text-white font-medium transition hover:bg-white/10 hover:border-white/30 cursor-pointer">
                All Reviews
            </button>
        </div>

        <!-- Dialog with scroll -->
        <Dialog v-model:visible="dialogVisible" header="All Customer Reviews" :modal="true"
            :style="{ width: '90%', maxWidth: '600px' }">
            <div class="max-h-[400px] overflow-y-auto space-y-4 pr-2">
                <div v-for="(review, index) in reviews" :key="index"
                    class="bg-white text-black p-4 rounded-lg shadow-sm text-left">
                    <p class="text-sm mb-2">{{ review.message }}</p>
                    <div class="flex items-center gap-3">
                        <img :src="review.avatar" alt="avatar" class="w-8 h-8 rounded-full" />
                        <span class="font-semibold text-[#2E68BA]">{{ review.name }}</span>
                    </div>
                </div>
            </div>
        </Dialog>
    </section>
</template>

<script setup>
import { ref } from 'vue'

const dialogVisible = ref(false)

const reviews = [
    {
        name: 'Erick Pedersen',
        message:
            'MK Techsol has been a game-changer for our company. From building a robust e-commerce platform to ensuring seamless scalability, their team demonstrated exceptional professionalism and expertise. The communication was transparent, and the project was delivered on time and within budget. Highly recommend them for custom web solutions!',
        avatar: '/src/assets/Images/client1.png'
    },
    {
        name: 'Erick Pedersen',
        message:
            'MK Techsol has been a game-changer for our company. From building a robust e-commerce platform to ensuring seamless scalability, their team demonstrated exceptional professionalism and expertise.',
        avatar: '/src/assets/Images/client1.png'
    },
    {
        name: 'Jane Doe',
        message:
            'They built our custom CMS in record time and were always quick to respond to changes.',
        avatar: '/src/assets/Images/client1.png'
    },
    {
        name: 'Michael Lee',
        message:
            'We hired MK Techsol for SEO and saw a massive jump in traffic within 3 months.',
        avatar: '/src/assets/Images/client1.png'
    }
]
</script>


<style>


/* Optional: Custom scrollbar for dialog */
::-webkit-scrollbar {
  width: 6px;
}
::-webkit-scrollbar-thumb {
  background-color: #ccc;
  border-radius: 4px;
}
</style>
