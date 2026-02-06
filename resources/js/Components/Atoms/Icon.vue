<template>
  <span
    v-if="svgContent"
    v-html="svgContent"
    :class="class"
    class="icon"
  />
  <span
    v-else
    :class="class"
    class="inline-block bg-gray-200 rounded"
    :title="`Icon not found: ${name}`"
  />
</template>


<script setup>
import { computed, ref } from 'vue';

const props = defineProps({
  name: {
    type: String,
    required: true
  },
  class: {
    type: String,
    default: 'icon'
  }
});

const modules = import.meta.glob("/resources/js/images/icons/*.svg", {
  query: "?raw",
  import: "default",
  eager: true,
});

const svgContent = computed(() => {
  return modules["/resources/js/images/icons/" + (props.name ?? "") + ".svg"] ?? null;
});
</script>
