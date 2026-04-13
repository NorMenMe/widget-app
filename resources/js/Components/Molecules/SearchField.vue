<template>
    <div class="search-field">
        <form class="search-field__form" @submit.prevent="handleSubmit">
            <icon class="search-field__icon" name="magnifier"></icon>
            <input-search
                class="search-field__input"
                placeholder="Search for a city"
            >
            </input-search>
        </form>
    </div>
</template>

<script setup>
import InputSearch from "@/Components/Atoms/Inputs/InputSearch.vue";
import Icon from "@/Components/Atoms/Icon.vue";
import { ref } from "vue";

const searchLocation = ref();

const handleSubmit = (event) => {
    const input = event.srcElement.querySelector("input");
    if (input) {
        searchLocation.value = input.value;
    }
};
</script>
