<template>
  <section class="relative">

    <div class="absolute inset-0 bg-slate-100 pointer-events-none mb-64 md:mb-80" aria-hidden="true"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
      <div class="py-12 md:py-20">

        <!-- Section header -->
        <div class="max-w-3xl mx-auto text-center pb-12">
          <h2 class="h2 font-playfair-display text-slate-800 mb-4">Built exclusively for you</h2>
          <p class="text-xl text-slate-500">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum — semper quis lectus nulla at volutpat diam ut venenatis.</p>
        </div>

        <!-- Section content -->
        <div class="max-w-3xl mx-auto">

          <!-- Tabs buttons -->
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 pb-12">
            <button class="text-center transition-opacity" :class="tab === 1 || 'opacity-50 hover:opacity-75'" @click="tab = 1">
              <div class="inline-flex bg-white rounded-full shadow-md mb-3">
                <svg width="56" height="56" xmlns="http://www.w3.org/2000/svg">
                  <path fill="#2174EA" d="M20 20h6v16h-6z" />
                  <path fill-opacity=".64" fill="#5091EE" d="M29 20h3v16h-3zM35 20h1v16h-1z" />
                </svg>
              </div>
              <div class="md:text-lg leading-tight font-semibold text-slate-800">Internal Feedback</div>
            </button>
            <button class="text-center transition-opacity" :class="tab === 2 || 'opacity-50 hover:opacity-75'" @click="tab = 2">
              <div class="inline-flex bg-white rounded-full shadow-md mb-3">
                <svg width="56" height="56" xmlns="http://www.w3.org/2000/svg">
                  <path fill-opacity=".64" fill="#5091EE" d="M33 23v8h3V20H25v3z" />
                  <path fill="#2174EA" d="M20 25h11v11H20z" />
                </svg>
              </div>
              <div class="md:text-lg leading-tight font-semibold text-slate-800">Internal Feedback</div>
            </button>
            <button class="text-center transition-opacity" :class="tab === 3 || 'opacity-50 hover:opacity-75'" @click="tab = 3">
              <div class="inline-flex bg-white rounded-full shadow-md mb-3">
                <svg width="56" height="56" xmlns="http://www.w3.org/2000/svg">
                  <path fill-opacity=".64" fill="#5091EE" d="M20 27l7-7h-7z" />
                  <path fill="#2174EA" d="M29 20l7 7v-7z" />
                  <path fill-opacity=".64" fill="#5091EE" d="M36 29l-7 7h7z" />
                  <path fill="#2174EA" d="M27 36l-7-7v7z" />
                </svg>
              </div>
              <div class="md:text-lg leading-tight font-semibold text-slate-800">Internal Feedback</div>
            </button>
            <button class="text-center transition-opacity" :class="tab === 4 || 'opacity-50 hover:opacity-75'" @click="tab = 4">
              <div class="inline-flex bg-white rounded-full shadow-md mb-3">
                <svg width="56" height="56" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 28h-4v4.9c0 1 .7 1.9 1.7 2.1 1.2.2 2.3-.8 2.3-2v-5z" fill-opacity=".64" fill="#5091EE" />
                  <path d="M35 21h-8c-.6 0-1 .4-1 1v11c0 .7-.2 1.4-.6 2H33c1.7 0 3-1.3 3-3V22c0-.6-.4-1-1-1z" fill="#2174EA" />
                </svg>
              </div>
              <div class="md:text-lg leading-tight font-semibold text-slate-800">Internal Feedback</div>
            </button>
          </div>

          <!-- Tab items -->
          <div class="relative flex flex-col" data-aos="fade-up">
            <transition
              enter-active-class="transition ease-in-out duration-700 order-first"
              enter-from-class="opacity-0 -translate-y-16"
              enter-to-class="opacity-100 translate-y-0"
              leave-active-class="transition ease-in-out duration-300 absolute"
              leave-from-class="opacity-100 -translate-y-0"
              leave-to-class="opacity-0 translate-y-16"
            >
              <div class="w-full" v-show="tab === 1">
                <img class="mx-auto shadow-2xl" src="/images/features-home-01.jpg" width="768" height="474" alt="Features home 01" />
              </div>
            </transition>
            <transition
              enter-active-class="transition ease-in-out duration-700 order-first"
              enter-from-class="opacity-0 -translate-y-16"
              enter-to-class="opacity-100 translate-y-0"
              leave-active-class="transition ease-in-out duration-300 absolute"
              leave-from-class="opacity-100 -translate-y-0"
              leave-to-class="opacity-0 translate-y-16"
            >
              <div class="w-full" v-show="tab === 2">
                <img class="mx-auto shadow-2xl" src="/images/features-home-01.jpg" width="768" height="474" alt="Features home 02" />
              </div>
            </transition>
            <transition
              enter-active-class="transition ease-in-out duration-700 order-first"
              enter-from-class="opacity-0 -translate-y-16"
              enter-to-class="opacity-100 translate-y-0"
              leave-active-class="transition ease-in-out duration-300 absolute"
              leave-from-class="opacity-100 -translate-y-0"
              leave-to-class="opacity-0 translate-y-16"
            >
              <div class="w-full" v-show="tab === 3">
                <img class="mx-auto shadow-2xl" src="/images/features-home-01.jpg" width="768" height="474" alt="Features home 03" />
              </div>
            </transition>
            <transition
              enter-active-class="transition ease-in-out duration-700 order-first"
              enter-from-class="opacity-0 -translate-y-16"
              enter-to-class="opacity-100 translate-y-0"
              leave-active-class="transition ease-in-out duration-300 absolute"
              leave-from-class="opacity-100 -translate-y-0"
              leave-to-class="opacity-0 translate-y-16"
            >
              <div class="w-full" v-show="tab === 4">
                <img class="mx-auto shadow-2xl" src="/images/features-home-01.jpg" width="768" height="474" alt="Features home 04" />
              </div>
            </transition>                        
          </div>

        </div>

      </div>
    </div>
  </section>
</template>

<script>
import { ref } from 'vue'

export default {
  name: 'FeaturesHome',
  setup() {

    const tab = ref(1)
    
    return {
      tab,
    }
  }
}
</script>