<template>
  <section class="relative">

    <!-- Dark background -->
    <div class="absolute inset-0 bg-slate-900 pointer-events-none -z-10 mb-48 lg:mb-0 lg:h-[30rem]" aria-hidden="true">
      <div class="w-full h-full" data-aos="fade">
        <img class="opacity-10 w-full h-full object-cover" src="/images/about-hero.jpg" width="1440" height="497" alt="Hero" />
      </div>
    </div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
      <div class="pt-32 md:pt-40">

        <!-- Section header -->
        <div class="max-w-3xl mx-auto text-center pb-16">
          <h1 class="h1 font-playfair-display text-slate-100">We're designing a new way to do business</h1>
        </div>

        <!-- Hero image -->
        <div class="flex justify-center items-center" data-aos="fade-up" data-aos-delay="100">
          <img class="mx-auto" src="/images/about-intro.jpg" width="1024" height="576" alt="About intro" />
        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'AboutHero',
}
</script>