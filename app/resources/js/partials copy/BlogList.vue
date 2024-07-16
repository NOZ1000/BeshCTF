<template>
  <!-- Sticky article -->
  <section>

    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      <div class="py-8 md:py-16">

        <article class="max-w-sm mx-auto space-y-5 md:max-w-none md:flex md:items-center md:space-y-0 md:space-x-8 lg:space-x-16">
          <!-- Image -->
          <router-link class="relative block group overflow-hidden md:w-1/2" to="/blog-post" data-aos="fade-down">
            <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-01.jpg" width="540" height="340" alt="News 01" />
            <div class="absolute top-6 right-6">
              <svg class="w-8 h-8" viewBox="0 0 32 32">
                <circle class="fill-slate-900" fill-opacity=".48" cx="16" cy="16" r="16" />
                <path class="fill-yellow-500" d="M21.954 14.29A.5.5 0 0 0 21.5 14h-5.36l.845-3.38a.5.5 0 0 0-.864-.446l-6 7A.5.5 0 0 0 10.5 18h5.359l-.844 3.38a.5.5 0 0 0 .864.445l6-7a.5.5 0 0 0 .075-.534Z" />
              </svg>
            </div>
          </router-link>
          <!-- Content -->
          <div class="md:w-1/2" data-aos="fade-up">
            <header>
              <h2 class="h4 md:text-4xl lg:text-5xl font-playfair-display mb-3">
                <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">How startups can sell more using smart channels</router-link>
              </h2>
            </header>
            <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
            <footer class="flex items-center mt-4">
              <router-link to="#0">
                <img class="rounded-full shrink-0 mr-3" src="/images/news-author-01.jpg" width="32" height="32" alt="Author 01" />
              </router-link>
              <div>
                <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Patricia Williams</router-link>
                <span class="text-slate-300"> · </span>
                <span class="text-slate-500">Sep 24, 2021</span>
              </div>
            </footer>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- All articles -->
  <section class="bg-slate-50">

    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      <div class="py-8 md:py-16 space-y-16">

        <!-- Latest -->
        <div>
          <h2 class="h3 font-playfair-display text-center md:text-left mb-8">Latest</h2>

          <!-- Articles container -->
          <div class="max-w-sm mx-auto md:max-w-none grid gap-12 md:grid-cols-3 md:gap-x-6 md:gap-y-8 items-start">

            <!-- 1st Article -->
            <article class="h-full flex flex-col space-y-5" data-aos="fade-up">
              <!-- Image -->
              <router-link class="block group overflow-hidden" to="/blog-post">
                <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-02.jpg" width="540" height="340" alt="News 02" />
              </router-link>
              <!-- Content -->
              <div class="grow flex flex-col">
                <header>
                  <h3 class="h4 font-playfair-display mb-3">
                    <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">A sneak peek of the new Tidy Web Portal</router-link>
                  </h3>
                </header>
                <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
                <footer class="flex items-center mt-4">
                  <router-link to="#0">
                    <img class="rounded-full shrink-0 mr-3" src="/images/news-author-02.jpg" width="32" height="32" alt="Author 02" />
                  </router-link>
                  <div>
                    <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Knut Mayer</router-link>
                    <span class="text-slate-300"> · </span>
                    <span class="text-slate-500">Sep 24, 2021</span>
                  </div>
                </footer>
              </div>
            </article>

            <!-- 2nd Article -->
            <article class="h-full flex flex-col space-y-5" data-aos="fade-up" data-aos-delay="100">
              <!-- Image -->
              <router-link class="block group overflow-hidden" to="/blog-post">
                <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-03.jpg" width="540" height="340" alt="News 03" />
              </router-link>
              <!-- Content -->
              <div class="grow flex flex-col">
                <header>
                  <h3 class="h4 font-playfair-display mb-3">
                    <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">40+ creative content ideas to post on your blog</router-link>
                  </h3>
                </header>
                <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
                <footer class="flex items-center mt-4">
                  <router-link to="#0">
                    <img class="rounded-full shrink-0 mr-3" src="/images/news-author-03.jpg" width="32" height="32" alt="Author 03" />
                  </router-link>
                  <div>
                    <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Samuel Regan</router-link>
                    <span class="text-slate-300"> · </span>
                    <span class="text-slate-500">Sep 24, 2021</span>
                  </div>
                </footer>
              </div>
            </article>

            <!-- 3rd Article -->
            <article class="h-full flex flex-col space-y-5" data-aos="fade-up" data-aos-delay="200">
              <!-- Image -->
              <router-link class="block group overflow-hidden" to="/blog-post">
                <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-04.jpg" width="540" height="340" alt="News 04" />
              </router-link>
              <!-- Content -->
              <div class="grow flex flex-col">
                <header>
                  <h3 class="h4 font-playfair-display mb-3">
                    <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">The best marketing channels to promote your products</router-link>
                  </h3>
                </header>
                <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
                <footer class="flex items-center mt-4">
                  <router-link to="#0">
                    <img class="rounded-full shrink-0 mr-3" src="/images/news-author-03.jpg" width="32" height="32" alt="Author 03" />
                  </router-link>
                  <div>
                    <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Fabian Centero</router-link>
                    <span class="text-slate-300"> · </span>
                    <span class="text-slate-500">Sep 22, 2021</span>
                  </div>
                </footer>
              </div>
            </article>

          </div>
        </div>

        <!-- Popular -->
        <div>
          <h2 class="h3 font-playfair-display text-center md:text-left mb-8">Popular</h2>

          <!-- Articles container -->
          <div class="max-w-sm mx-auto md:max-w-none grid gap-12 md:grid-cols-3 md:gap-x-6 md:gap-y-8 items-start">

            <!-- 1st Article -->
            <article class="h-full flex flex-col space-y-5" data-aos="fade-up">
              <!-- Image -->
              <router-link class="block group overflow-hidden" to="/blog-post">
                <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-05.jpg" width="540" height="340" alt="News 05" />
              </router-link>
              <!-- Content -->
              <div class="grow flex flex-col">
                <header>
                  <h3 class="h4 font-playfair-display mb-3">
                    <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">Where to Post Remote Jobs for Developers for Free</router-link>
                  </h3>
                </header>
                <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
                <footer class="flex items-center mt-4">
                  <router-link to="#0">
                    <img class="rounded-full shrink-0 mr-3" src="/images/news-author-02.jpg" width="32" height="32" alt="Author 02" />
                  </router-link>
                  <div>
                    <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Knut Mayer</router-link>
                    <span class="text-slate-300"> · </span>
                    <span class="text-slate-500">Sep 1, 2021</span>
                  </div>
                </footer>
              </div>
            </article>

            <!-- 2nd Article -->
            <article class="h-full flex flex-col space-y-5" data-aos="fade-up" data-aos-delay="100">
              <!-- Image -->
              <router-link class="block group overflow-hidden" to="/blog-post">
                <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-06.jpg" width="540" height="340" alt="News 06" />
              </router-link>
              <!-- Content -->
              <div class="grow flex flex-col">
                <header>
                  <h3 class="h4 font-playfair-display mb-3">
                    <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">4 Must-Know Skill to Be an Effective Leader</router-link>
                  </h3>
                </header>
                <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
                <footer class="flex items-center mt-4">
                  <router-link to="#0">
                    <img class="rounded-full shrink-0 mr-3" src="/images/news-author-05.jpg" width="32" height="32" alt="Author 05" />
                  </router-link>
                  <div>
                    <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Christina Brill</router-link>
                    <span class="text-slate-300"> · </span>
                    <span class="text-slate-500">Jul 29, 2021</span>
                  </div>
                </footer>
              </div>
            </article>

            <!-- 3rd Article -->
            <article class="h-full flex flex-col space-y-5" data-aos="fade-up" data-aos-delay="200">
              <!-- Image -->
              <router-link class="block group overflow-hidden" to="/blog-post">
                <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-07.jpg" width="540" height="340" alt="News 07" />
              </router-link>
              <!-- Content -->
              <div class="grow flex flex-col">
                <header>
                  <h3 class="h4 font-playfair-display mb-3">
                    <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">Remote founder stand-up with Mark Muller</router-link>
                  </h3>
                </header>
                <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
                <footer class="flex items-center mt-4">
                  <router-link to="#0">
                    <img class="rounded-full shrink-0 mr-3" src="/images/news-author-06.jpg" width="32" height="32" alt="Author 06" />
                  </router-link>
                  <div>
                    <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Alicia Muller</router-link>
                    <span class="text-slate-300"> · </span>
                    <span class="text-slate-500">Jul 4, 2021</span>
                  </div>
                </footer>
              </div>
            </article>

          </div>
        </div>

        <!-- CTA box -->
        <div data-aos="fade-up">
          <div class="relative bg-slate-900 rounded-sm py-10 px-8 md:p-10 md:mt-24">

            <!-- Background illustration -->
            <div class="absolute right-0 bottom-0 pointer-events-none hidden lg:block" aria-hidden="true">
              <img src="/images/cta-image.png" width="456" height="337" alt="Free trial" />
            </div>

            <div class="relative flex flex-col lg:flex-row justify-between items-center">

              <!-- CTA content -->
              <div class="text-center lg:text-left lg:max-w-xl">
                <h3 class="h3 font-playfair-display text-slate-100 mb-8">Say goodbye to long queues, big updates, and <span class="text-emerald-500">confusion</span>.</h3>
                <div class="mb-3">
                  <router-link class="btn text-white bg-blue-600 hover:bg-blue-700 group" to="#0">
                    Start free trial <span class="tracking-normal text-blue-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                  </router-link>
                </div>
                <div class="text-sm italic text-slate-500">No credit card required. Cancel anytime!</div>
              </div>

            </div>

          </div>
        </div>

        <!-- Product & News -->
        <div>
          <h2 class="h3 font-playfair-display text-center md:text-left mb-8">Product & News</h2>

          <!-- Articles container -->
          <div class="max-w-sm mx-auto md:max-w-none grid gap-12 md:grid-cols-3 md:gap-x-6 md:gap-y-8 items-start">

            <!-- 1st Article -->
            <article class="h-full flex flex-col space-y-5" data-aos="fade-up">
              <!-- Image -->
              <router-link class="block group overflow-hidden" to="/blog-post">
                <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-08.jpg" width="540" height="340" alt="News 08" />
              </router-link>
              <!-- Content -->
              <div class="grow flex flex-col">
                <header>
                  <h3 class="h4 font-playfair-display mb-3">
                    <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">How to level up your marketing strategy with Tidy Pro</router-link>
                  </h3>
                </header>
                <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
                <footer class="flex items-center mt-4">
                  <router-link to="#0">
                    <img class="rounded-full shrink-0 mr-3" src="/images/news-author-07.jpg" width="32" height="32" alt="Author 07" />
                  </router-link>
                  <div>
                    <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Alice Rossi</router-link>
                    <span class="text-slate-300"> · </span>
                    <span class="text-slate-500">May 17, 2021</span>
                  </div>
                </footer>
              </div>
            </article>

            <!-- 2nd Article -->
            <article class="h-full flex flex-col space-y-5" data-aos="fade-up" data-aos-delay="100">
              <!-- Image -->
              <router-link class="block group overflow-hidden" to="/blog-post">
                <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-09.jpg" width="540" height="340" alt="News 09" />
              </router-link>
              <!-- Content -->
              <div class="grow flex flex-col">
                <header>
                  <h3 class="h4 font-playfair-display mb-3">
                    <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">Introducing the Tidy mentor Network</router-link>
                  </h3>
                </header>
                <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
                <footer class="flex items-center mt-4">
                  <router-link to="#0">
                    <img class="rounded-full shrink-0 mr-3" src="/images/news-author-02.jpg" width="32" height="32" alt="Author 02" />
                  </router-link>
                  <div>
                    <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Knut Mayer</router-link>
                    <span class="text-slate-300"> · </span>
                    <span class="text-slate-500">Apr 14, 2021</span>
                  </div>
                </footer>
              </div>
            </article>

            <!-- 3rd Article -->
            <article class="h-full flex flex-col space-y-5" data-aos="fade-up" data-aos-delay="200">
              <!-- Image -->
              <router-link class="block group overflow-hidden" to="/blog-post">
                <img class="w-full aspect-[16/9] md:aspect-[27/17] object-cover group-hover:scale-105 transition duration-700 ease-out" src="/images/blog-post-10.jpg" width="540" height="340" alt="News 10" />
              </router-link>
              <!-- Content -->
              <div class="grow flex flex-col">
                <header>
                  <h3 class="h4 font-playfair-display mb-3">
                    <router-link class="text-slate-800 hover:underline hover:decoration-blue-100" to="/blog-post">Elevating collaboration with Tidy and Google Workspace</router-link>
                  </h3>
                </header>
                <p class="text-lg text-slate-500 grow">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt.</p>
                <footer class="flex items-center mt-4">
                  <router-link to="#0">
                    <img class="rounded-full shrink-0 mr-3" src="/images/news-author-05.jpg" width="32" height="32" alt="Author 05" />
                  </router-link>
                  <div>
                    <router-link class="font-medium text-slate-800 hover:text-blue-600 transition duration-150 ease-in-out" to="#0">Christina Brill</router-link>
                    <span class="text-slate-300"> · </span>
                    <span class="text-slate-500">Mar 4, 2021</span>
                  </div>
                </footer>
              </div>
            </article>

          </div>
        </div>

        <!-- See All Articles -->
        <div class="text-center">
          <button class="btn text-white bg-blue-600 hover:bg-blue-700 group">
            See All Articles <span class="tracking-normal text-blue-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
          </button>
        </div>

      </div>

    </div>
  </section>
</template>

<script>
export default {
  name: 'BlogList',
}
</script>