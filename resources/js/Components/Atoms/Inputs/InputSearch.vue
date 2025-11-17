<template>
    <input
    :class="class"
    class="input--search"
    type="search"
    id="input-search"
    :placeholder="placeholder"
    >
    <slot></slot>
</template>

<script setup>

const props = defineProps({
  class: {
    type: String,
    default: 'input'
  },
  placeholder: {
    type: String,
    default: 'Search for'
  },

});
</script>
