<template>
    <!-- Exp -->
    <div
        class="flex items-start justify-center lg:space-x-20 my-36 p-7 lg:p-0 bg-[linear-gradient(90deg,rgba(0,0,0,0.4)),url(/src/assets/Images/exp.png)] rounded-none bg-fixed lg:bg-none">
        <div class="hidden lg:flex">
            <img src="../../assets/Images/exp.png" class="animation-fadeup" alt="">
        </div>

        <div class="flex flex-col items-start justify-start space-y-5 text-white lg:text-black">
            <p class="px-5 py-2.5 bg-[#6C92D026] text-[#6C92D0] animation-fadeup">About MK TechSol</p>
            <h3 class="font-bold text-lg lg:text-2xl max-w-sm animation-fadeup">Over <span class="text-[var(--color-red-text)]">4+ years</span>
                of experience in tech solutions</h3>
            <p class="font-semibold lg:text-lg text-justify max-w-md relative animation-fadeup">
                At <span class="text-[var(--color-red-text)]">MK Techsol</span>, we specialize in delivering cutting-edge software
                solutions designed to empower businesses. Backed by over 15 years of experience in Islamabad, we
                transform your ideas into outstanding outcomes.

                <span
                    class="hidden lg:inline absolute w-52 h-52 top-0 right-0 rounded-full -z-10 bg-green-400 blur-[125px] opacity-40"></span>

            </p>

            <base-link-button to="/about" class="animation-fadeup"
                >Read more</base-link-button>
        </div>

    </div>
</template>