<template>
    <input
    :class="class"
    v-model="searchQuery"
    class="input--search"
    type="search"
    id="input-search"
    :placeholder="placeholder"
    @keydown.enter=triggerSearch
    >
    <slot></slot>
</template>

<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const searchQuery = ref('');

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


function triggerSearch() {
    router.get('/', { query: searchQuery.value }, {
        preserveState: true,
        preserveScroll: true
    });
}
</script>
