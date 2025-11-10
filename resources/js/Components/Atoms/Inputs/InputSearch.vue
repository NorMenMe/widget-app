<template>
    <input
    :class="class"
    class="input--search"
    type="search"
    id="input-search"
    >
</template>

<script setup>

const props = defineProps({
  class: {
    type: String,
    default: 'input'
  }
});
</script>
