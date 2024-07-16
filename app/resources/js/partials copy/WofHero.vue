<template>
  <section class="relative">

    <!-- Dark background -->
    <div class="absolute inset-0 bg-slate-900 pointer-events-none -z-10 mb-36 lg:mb-0 lg:h-[48rem] [clip-path:polygon(0_0,_5760px_0,_5760px_calc(100%_-_352px),_0_100%)]" aria-hidden="true"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
      <div class="pt-32 md:pt-40">

        <!-- Section header -->
        <div class="max-w-3xl mx-auto text-center pb-16">
          <h1 class="h1 font-playfair-display text-slate-100 mb-4">Join 70K+ companies and investors</h1>
          <p class="text-xl text-slate-400">We're proud to have played a part in these amazing journeys.</p>
        </div>

        <!-- Hero image -->
        <div class="max-w-3xl mx-auto" data-aos="fade-up">
          <div class="relative flex justify-center items-center">
            <img class="mx-auto" src="/images/wof-hero.jpg" width="768" height="432" alt="Wof hero" />
            <button class="absolute group" @click.stop="videoModalOpen = true" aria-controls="modal">
              <svg class="w-16 h-16 fill-current sm:w-20 sm:h-20 group" viewBox="0 0 88 88" xmlns="http://www.w3.org/2000/svg">
                <circle class="text-white opacity-80 group-hover:opacity-100 transition duration-150 ease-in-out" cx="44" cy="44" r="44" />
                <path class="text-blue-600" d="M52 44a.999.999 0 00-.427-.82l-10-7A1 1 0 0040 37V51a.999.999 0 001.573.82l10-7A.995.995 0 0052 44V44c0 .001 0 .001 0 0z" />
              </svg>
            </button>
          </div>

          <Modal id="modal" ariaLabel="modal-headline" :modalOpen="videoModalOpen" @close-modal="videoModalOpen = false">
            <video ref="video" className="w-full aspect-video" width="1920" height="1080" loop controls>
              <source src="../videos/video.mp4" type="video/mp4" />
              Your browser does not support the video tag.
            </video>  
          </Modal>

        </div>

      </div>
    </div>
  </section>
</template>

<script>
import { ref, watch } from 'vue'

import Modal from './../utils/Modal.vue'

export default {
  name: 'WofHero',
  components: {
    Modal,
  },
  setup() {
    const videoModalOpen = ref(false)
    const video = ref(null)

    watch(videoModalOpen, () => {
      videoModalOpen.value ? video.value.play() : video.value.pause()
    })

    return {
      videoModalOpen,
      video,
    }
  } 
}
</script>