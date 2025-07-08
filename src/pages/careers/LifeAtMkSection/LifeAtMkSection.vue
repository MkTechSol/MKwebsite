<template>
    <section class="py-16 bg-white text-center">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Tag -->
            <p class="inline-block px-4 py-2 mb-2 text-sm font-semibold text-[var(--color-accent-text)] bg-blue-100 rounded-md">
                MK Techsol
            </p>

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-bold mb-10">
                Life At <span class="text-[var(--color-red-text)]">MK TechSol</span>
            </h2>

            <!-- Image Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-1 place-items-stretch">
                <!-- Left Large Image -->
                <img src="/src/assets/Images/life-1.png" alt="team" class="rounded-xl object-cover w-full" />

                <!-- Center Collage -->
                <div class="grid grid-cols-2 gap-1 place-items-center ">
                    <div class="overflow-hidden h-full">
                        <img src="/src/assets/Images/life-2.png" class="rounded-xl h-full w-full object-cover" />
                    </div>
                    <div class="overflow-hidden">
                        <img src="/src/assets/Images/life-3.png" class="rounded-xl h-full w-full object-cover" />
                    </div>
                    <div class="overflow-hidden col-span-2">
                        <img src="/src/assets/Images/life-4.png" class="rounded-xl h-fit w-full object-cover" />
                    </div>
                    <div class="overflow-hidden">
                        <img src="/src/assets/Images/life-6.png" class="rounded-xl h-full w-full object-cover" />
                    </div>
                    <div class="overflow-hidden">
                        <img src="/src/assets/Images/life-5.png" class="rounded-xl h-full w-full object-cover" />
                    </div>
                </div>

                <!-- Right Large Image -->
                <img src="/src/assets/Images/life-7.png" alt="team outdoor"
                    class="rounded-xl object-cover w-full " />
            </div>

            <!-- Button -->
            <div class="mt-10">
                <base-link-button to="/about" extraClass="!px-10">
                    Read more
                </base-link-button>
            </div>
        </div>
    </section>
</template>
