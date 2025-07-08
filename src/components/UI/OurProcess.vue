<template>
    <section class="py-16 bg-white text-center">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Badge -->
            <p
                class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md">
                Our Process
            </p>

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-bold mb-12">
                Simple Process to Your <span class="text-[#FF543E]">Perfect</span> Solution
            </h2>

            <!-- Steps -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <div v-for="(step, index) in steps" :key="index"
                    class="bg-white border-b border-l border-r border-[#4EAFEF] rounded-b-2xl px-6 pb-6  flex flex-col items-center text-center relative w-[85%] mx-auto mt-16">
                    <!-- Circle Number -->
                    <div
                        class="w-20 h-20 rounded-full bg-gradient-to-b from-[var(--color-gradient-from)] to-[var(--color-gradient-to)] flex items-center justify-center text-white text-2xl font-bold absolute -top-16 lg:-top-10">
                        {{ index + 1 }}
                    </div>

                    <!-- Title -->
                    <h3 class="text-lg font-semibold text-[#4EAFEF] mb-2 mt-10 lg:mt-16">{{ step.title }}</h3>

                    <!-- Description -->
                    <p class="text-sm text-gray-600">{{ step.description }}</p>

                    <!-- Arrow -->
                    <div v-if="index < steps.length - 1"
                        class="hidden md:block absolute -right-[57px] top-1/2 -translate-y-1/2">
                        <i class="pi pi-arrow-right text-[#4EA5F2] text-6xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const steps = [
    {
        title: 'Consultation & Planning',
        description:
            'We begin by understanding your goals and crafting a custom plan to deliver the right solution.',
    },
    {
        title: 'Design & Development',
        description:
            'Our experts turn your vision into reality with innovative design and smooth functionality, using the latest tech to build scalable, goal-driven solutions.',
    },
    {
        title: 'Launch & Ongoing Support',
        description:
            'After launch, we ensure a seamless rollout and ongoing support—keeping your solution running smoothly at every stage.',
    },
]
</script>
