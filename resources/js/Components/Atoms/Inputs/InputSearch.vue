<template>
    <input
        v-model="searchQuery"
        class="input--search"
        :class="class"
        type="search"
        id="input-search"
        :placeholder="placeholder"
    />
</template>

<script setup>
import { ref } from "vue";
import { defineEmits } from "vue";

const searchQuery = defineModel();
const emit = defineEmits(["update-value"]);

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

const handleSubmit = (event) => {
    emit("update-value", event.srcElement.firstElementChild.value);
};
</script>
