<template>
  <div
    class="relative"
    @mouseenter="tooltipOpen = true"
    @mouseleave="tooltipOpen = false"
    @focusin="tooltipOpen = true"
    @focusout="tooltipOpen = false"    
  >
    <button
      class="block"
      aria-haspopup="true"
      aria-expanded="tooltipOpen"
      @click.prevent
    >
      <svg class="w-4 h-4 fill-current text-slate-400 shrink-0" viewBox="0 0 16 16">
        <path d="M8 0c4.4 0 8 3.6 8 8s-3.6 8-8 8-8-3.6-8-8 3.6-8 8-8Zm0 14c3.3 0 6-2.7 6-6s-2.7-6-6-6-6 2.7-6 6 2.7 6 6 6ZM7 7h2v5H7V7Zm1-1a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
      </svg>
    </button>
    <div class="z-10 absolute" :class="positionOuterClasses(position)">
      <transition
        enter-active-class="transition ease-out duration-200 transform"
        enter-from-class="opacity-0 -translate-y-2"
        enter-to-class="opacity-100 translate-y-0"
        leave-active-class="transition ease-out duration-200"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
      >
        <div
          v-show="tooltipOpen" class="min-w-[12rem] bg-slate-800 p-2 rounded overflow-hidden"
          :class="positionInnerClasses(position)"          
        >
          <slot />
        </div>
      </transition>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue'

export default {
  name: 'Tooltip',
  props: ['position'],
  setup() {

    const tooltipOpen = ref(false)

    const positionOuterClasses = (position) => {
      switch (position) {
        case 'right':
          return 'left-full top-1/2 transform -translate-y-1/2';
        case 'left':
          return 'right-full top-1/2 transform -translate-y-1/2';
        case 'bottom':
          return 'top-full left-1/2 transform -translate-x-1/2';
        default:
          return 'bottom-full left-1/2 transform -translate-x-1/2';
      }
    }

    const positionInnerClasses = (position) => {
      switch (position) {
        case 'right':
          return 'ml-2';
        case 'left':
          return 'mr-2';
        case 'bottom':
          return 'mt-2';
        default:
          return 'mb-2';
      }
    }    

    return {
      tooltipOpen,
      positionOuterClasses,
      positionInnerClasses,
    }
  }
}
</script>