<template>
  <section class="relative">

    <!-- Dark background -->
    <div class="absolute inset-0 bg-slate-900 pointer-events-none -z-10 h-1/3 lg:h-2/3" aria-hidden="true"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
      <div class="py-12 md:py-20">

        <!-- Section header -->
        <div class="max-w-3xl mx-auto text-center pb-12">
          <h2 class="h2 font-playfair-display text-slate-100">Find the right plan for your business</h2>
        </div>

        <!-- Pricing tables -->
        <div>

          <!-- Pricing toggle -->
          <div class="flex justify-center items-center space-x-4 sm:space-x-7 mb-16">
            <div class="text-sm text-slate-500 font-medium text-right min-w-[8rem]">Pay Monthly</div>
            <div class="form-switch shrink-0">
              <input type="checkbox" id="toggle" class="sr-only" v-model="annual" />
              <label class="bg-slate-700" for="toggle">
                <span class="bg-slate-300 border-8 border-slate-500" aria-hidden="true"></span>
                <span class="sr-only">Pay annually</span>
              </label>
            </div>
            <div class="text-sm text-slate-500 font-medium min-w-[8rem]">Pay Yearly <span class="text-emerald-500">(-20%)</span></div>
          </div>

          <div class="max-w-sm mx-auto grid gap-8 lg:grid-cols-3 lg:gap-6 items-start lg:max-w-none pt-4">

            <!-- Pricing table 1 -->
            <div class="relative flex flex-col h-full px-6 py-5 bg-white shadow-lg" data-aos="fade-up">
              <div class="mb-4 pb-4 border-b border-slate-200">
                <div class="text-lg font-semibold text-slate-800 mb-1">Essential</div>
                <div class="inline-flex items-baseline mb-3">
                  <span class="h3 font-medium text-slate-500">$</span>
                  <span class="h2 leading-7 font-playfair-display text-slate-800">{{ annual ? '49' : '55'}}</span>
                  <span class="font-medium text-slate-400">/mo</span>
                </div>
                <div class="text-slate-500">Better insights for growing businesses that want more customers.</div>
              </div>
              <div class="font-medium mb-3">Features include:</div>
              <ul class="text-slate-500 space-y-3 grow mb-6">
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>50 Placeholder text commonly</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Consectetur adipiscing elit</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Excepteur sint occaecat cupidatat</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Officia deserunt mollit anim</span>
                </li>
              </ul>
              <div class="p-3 rounded bg-slate-50">
                <a class="btn-sm text-white bg-blue-600 hover:bg-blue-700 w-full group" href="#0">
                  Start free trial <span class="tracking-normal text-blue-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                </a>
              </div>
            </div>

            <!-- Pricing table 2 -->
            <div class="relative flex flex-col h-full px-6 py-5 bg-white shadow-lg" data-aos="fade-up" data-aos-delay="100">
              <div class="absolute top-0 right-0 mr-6 -mt-4">
                <div class="inline-flex text-sm font-semibold py-1 px-3 text-emerald-700 bg-emerald-200 rounded-full">Most Popular</div>
              </div>
              <div class="mb-4 pb-4 border-b border-slate-200">
                <div class="text-lg font-semibold text-slate-800 mb-1">Premium</div>
                <div class="inline-flex items-baseline mb-3">
                  <span class="h3 font-medium text-slate-500">$</span>
                  <span class="h2 leading-7 font-playfair-display text-slate-800">{{ annual ? '79' : '85'}}</span>
                  <span class="font-medium text-slate-400">/mo</span>
                </div>
                <div class="text-slate-500">Better insights for growing businesses that want more customers.</div>
              </div>
              <div class="font-medium mb-3">All features of Essential plus:</div>
              <ul class="text-slate-500 space-y-3 grow mb-6">
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>100 placeholder text commonly</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Consectetur adipiscing elit</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Excepteur sint occaecat cupidatat</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Officia deserunt mollit anim</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Placeholder text commonly used</span>
                </li>
              </ul>
              <div class="p-3 rounded bg-slate-50">
                <a class="btn-sm text-white bg-blue-600 hover:bg-blue-700 w-full group" href="#0">
                  Start free trial <span class="tracking-normal text-blue-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                </a>
              </div>
            </div>

            <!-- Pricing table 3 -->
            <div class="relative flex flex-col h-full px-6 py-5 bg-white shadow-lg" data-aos="fade-up" data-aos-delay="200">
              <div class="mb-4 pb-4 border-b border-slate-200">
                <div class="text-lg font-semibold text-slate-800 mb-1">Advanced</div>
                <div class="inline-flex items-baseline mb-3">
                  <span class="h3 font-medium text-slate-500">$</span>
                  <span class="h2 leading-7 font-playfair-display text-slate-800">{{ annual ? '129' : '135'}}</span>
                  <span class="font-medium text-slate-400">/mo</span>
                </div>
                <div class="text-slate-500">Better insights for growing businesses that want more customers.</div>
              </div>
              <div class="font-medium mb-3">All features of Essential plus:</div>
              <ul class="text-slate-500 space-y-3 grow mb-6">
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>200 placeholder text commonly</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Consectetur adipiscing elit</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Excepteur sint occaecat cupidatat</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Officia deserunt mollit anim</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Voluptate velit esse cillum</span>
                </li>
                <li class="flex items-center">
                  <svg class="w-3 h-3 fill-current text-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                  </svg>
                  <span>Placeholder text commonly used</span>
                </li>
              </ul>
              <div class="p-3 rounded bg-slate-50">
                <a class="btn-sm text-white bg-blue-600 hover:bg-blue-700 w-full group" href="#0">
                  Start free trial <span class="tracking-normal text-blue-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                </a>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>
</template>

<script>
import { ref } from 'vue'

export default {
  name: 'PricingSection',
  setup() {

    const annual = ref(true)

    return {
      annual,
    }
  },
}
</script>