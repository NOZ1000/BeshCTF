<template>
  <section class="relative">

    <!-- Dark background -->
    <div class="absolute inset-0 bg-slate-900 pointer-events-none -z-10" aria-hidden="true">
      <div class="w-full h-full" data-aos="fade">
        <img class="opacity-10 w-full h-full object-cover" src="/images/wof-single-hero.jpg" width="1440" height="497" alt="Hero" />
      </div>
    </div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
      <div class="pt-32 pb-28 md:pt-40 md:pb-36">

        <!-- Section header -->
        <div class="max-w-3xl mx-auto text-center">
          <div class="text-center">
            <router-link class="inline-flex font-semibold text-blue-600 hover:text-blue-500 transition duration-150 ease-in-out group mb-2" to="/wall-of-love" data-aos="fade-down"><span class="tracking-normal text-blue-600 group-hover:-translate-x-0.5 transition-transform duration-150 ease-in-out mr-1">&lt;-</span> Back to Wall of Love</router-link>
            <h1 class="h2 font-playfair-display text-slate-100 mb-4">How Black Inc. Increased team collboration with Tidy</h1>
          </div>
          <div class="text-slate-400" data-aos="fade-up">4 min read <span class="text-slate-600">·</span> Sep 24, 2021</div>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'WofSingleHero',
}
</script>