<template>
  <div role="alert" :class="`alert ${alertType}`">
    <span><slot></slot></span>
    <button @click="close">
        ⅹ
        <span class="sr-only">close button</span>
    </button>
  </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  type: {
    type: String,
    default: 'info'
    }
})

const alertType = computed(() => {
  return {
    error: 'alert-error',
  }[props.type]
})

const emit = defineEmits(['closed'])

const close = () => {
  emit('closed')
}
</script>
