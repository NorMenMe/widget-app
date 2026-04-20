<template>
    <input
        class="input--search"
        :class="class"
        type="search"
        id="input-search"
        :placeholder="placeholder"
    />
</template>

<script setup>
import { ref } from "vue";

const props = defineProps({
    class: {
        type: String,
        default: "form-input",
    },
    placeholder: {
        type: String,
        default: "Search for",
    },
});
</script>
