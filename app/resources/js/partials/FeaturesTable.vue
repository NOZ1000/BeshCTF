<template>
  <section>
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      <div class="py-12 md:py-20">

        <!-- Section header -->
        <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
          <h2 class="h2 font-playfair-display text-slate-800">Compare plans by features</h2>
        </div>

        <!-- Tables -->
        <div class="space-y-4 mb-12">
          <!-- Table (Tidy Essential) -->
          <div class="overflow-x-auto" data-aos="fade-up">
            <table class="table-auto w-full border-b border-slate-200">
              <!-- Table header -->
              <thead>
                <tr class="text-base sm:text-lg text-slate-800">
                  <th class="text-xl md:text-2xl whitespace-nowrap font-bold font-playfair-display text-left pr-2 py-4 min-w-[10rem] md:min-w-[24rem]">Tidy Essential</th>
                  <th class="text-bold text-center px-2 py-4">Essential</th>
                  <th class="text-bold text-center px-2 py-4">Premium</th>
                  <th class="text-bold text-center px-2 py-4">Advanced</th>
                </tr>
              </thead>
              <!-- Table body -->
              <tbody>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Monthly fees</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center italic text-slate-800">$49/mo</td>
                  <td class="text-sm px-2 py-4 text-center italic text-slate-800">$79/mo</td>
                  <td class="text-sm px-2 py-4 text-center italic text-slate-800">$129/mo</td>
                </tr>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Free trial</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Startup Plan</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Contributors</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center italic text-slate-800">Up to 2</td>
                  <td class="text-sm px-2 py-4 text-center italic text-slate-800">Up to 10</td>
                  <td class="text-sm px-2 py-4 text-center italic text-slate-800">Unlimited</td>
                </tr>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Virtual Desk</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium"></td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Incoming Transfers</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center italic text-slate-800">20</td>
                  <td class="text-sm px-2 py-4 text-center italic text-slate-800">50</td>
                  <td class="text-sm px-2 py-4 text-center italic text-slate-800">Unlimited</td>
                </tr>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Automate Tasks</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium"></td>
                  <td class="text-sm px-2 py-4 text-center font-medium"></td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div class="flex items-center space-x-2">
                        <div>Analytics</div>
                        <div class="inline-flex text-xs font-semibold py-px px-2 text-emerald-700 bg-emerald-200 rounded-full">Soon</div>
                      </div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium"></td>
                  <td class="text-sm px-2 py-4 text-center font-medium"></td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Table (Tidy Advanced) -->
          <div class="overflow-x-auto" data-aos="fade-up">
            <table class="table-auto w-full border-b border-slate-200">
              <!-- Table header -->
              <thead>
                <tr class="text-base sm:text-lg text-slate-800">
                  <th class="text-xl md:text-2xl whitespace-nowrap font-bold font-playfair-display text-left pr-2 py-4 min-w-[10rem] md:min-w-[24rem]">Tidy Advanced</th>
                  <th class="text-bold text-center px-2 py-4 sm:invisible">Essential</th>
                  <th class="text-bold text-center px-2 py-4 sm:invisible">Premium</th>
                  <th class="text-bold text-center px-2 py-4 sm:invisible">Advanced</th>
                </tr>
              </thead>
              <!-- Table body -->
              <tbody>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Custom Labels</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Visitor Access</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium"></td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                </tr>
                <!-- Row -->
                <tr class="border-t first:border-t-2 border-slate-200">
                  <td class="text-sm sm:text-base font-medium text-slate-800 pr-2 py-4">
                    <div class="flex items-center justify-between max-w-xs">
                      <div>Traffic Tracking</div>
                      <!-- Tooltip -->
                      <Tooltip>
                        <div className="text-xs text-slate-100">Keep team shipping simple and take control of your company.</div>
                      </Tooltip>
                    </div>
                  </td>
                  <td class="text-sm px-2 py-4 text-center font-medium"></td>
                  <td class="text-sm px-2 py-4 text-center font-medium"></td>
                  <td class="text-sm px-2 py-4 text-center font-medium">
                    <svg class="w-3 h-3 fill-current text-emerald-500 inline-flex" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                    </svg>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- CTA -->
        <div class="text-center">
          <router-link class="btn text-white bg-blue-600 hover:bg-blue-700 group" to="/request-demo">
            Request Demo <span class="tracking-normal text-blue-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
          </router-link>
        </div>

      </div>
    </div>
  </section>

</template>

<script>
import Tooltip from '../utils/Tooltip.vue'

export default {
  name: 'FeaturesTable',
  components: {
    Tooltip,
  },  
}
</script>