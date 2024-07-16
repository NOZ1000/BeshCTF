<template>
  <component :is="tag">
    <button
      class="h4 font-playfair-display flex items-center justify-between w-full text-left py-5"
      @click.stop="toggleAccordion(accordionOpen)"
      :aria-expanded="accordionOpen"
    >
      <span>{{title}}</span>    
      <svg class="w-4 h-4 fill-current text-blue-600 shrink-0 ml-8" :class="{'rotate-180': accordionOpen}" viewBox="0 0 16 16">
          <path d="m3 5 5 6 5-6z" />
      </svg>      
    </button>
    <div
      ref="accordion"
      class="text-gray-600 overflow-hidden transition-all duration-300 ease-in-out"
      :style="accordionOpen ? 'max-height: ' + $refs.accordion.scrollHeight + 'px; opacity: 1' : 'max-height: 0; opacity: 0'"
    >
      <p class="pb-5">
        <slot />
      </p>
    </div>    
  </component>
</template>
<script>
import { ref, onMounted } from 'vue'

export default {
  name: 'Accordion',
  props: {
    tag: {
      type: String,
      default: 'li'
    },    
    title: {
      type: String,
      default: null,
      required: true
    },
    active: {
      type: Boolean,
      default: false
    },    
  },
  setup(props) {

    const accordionOpen = ref(false)
    const accordion = ref(null)

    const toggleAccordion = (value) => {
      if (value) {
        accordion.value.style.maxHeight = accordion.value.scrollHeight + 'px'
        accordion.value.style.opacity = '1'
        accordionOpen.value = false
      } else {
        accordion.value.style.maxHeight = '0'
        accordion.value.style.opacity = '0'
        accordionOpen.value = true
      }
    }

    onMounted(() => {
      props.active && toggleAccordion()
    })    

    return {
      accordionOpen,
      accordion,
      toggleAccordion,
    }    
  }
}
</script>