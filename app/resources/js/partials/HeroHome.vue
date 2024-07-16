<template>
  <section class="relative">
  
    <!-- Dark background -->
    <div class="absolute inset-0 bg-slate-900 pointer-events-none -z-10 [clip-path:polygon(0_0,_5760px_0,_5760px_calc(100%_-_352px),_0_100%)]" aria-hidden="true"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
      <div class="pt-32 pb-20 md:pt-40 md:pb-44">

        <!-- Hero content -->
        <div class="max-w-xl mx-auto md:max-w-none md:flex md:items-center md:space-x-8 lg:space-x-16 xl:space-x-20 space-y-16 md:space-y-0">

          <!-- Content -->
          <div class="text-center md:text-left md:min-w-[30rem]" data-aos="fade-right">
            <h1 class="text-5xl font-serif text-slate-100 mb-4">Welcome to Besh CTF</h1>
            <p class="text-xl text-slate-400 mb-8">Score over 8,000 points and take a tiny beshbarmak!</p>
            <p class="text-xl text-slate-400 mb-8">Score over 12,000 points and take a huge beshbarmak!</p>
            <p class="text-xl text-slate-400 mb-8">Score over 16,000 points and take an enormous beshbarmak!</p>
            <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
              <div>
                <Link :href="route('login')" class="p-2 text-white bg-blue-600 hover:bg-blue-700 w-full group rounded-lg select-none">
                  Login <span class="tracking-normal text-blue-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                </Link>
              </div>
              <div>
                <Link :href="route('register')" class="p-2 text-white bg-slate-700 hover:bg-slate-800 w-full rounded-lg select-none">Register</Link>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <img class="w-1/2 h-auto mx-auto" src="../images/besh-1.jpg"  alt="Hero image">
          </div>

        </div>
      </div>
    </div>
  </section>
  <div>
    
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'  


</script>