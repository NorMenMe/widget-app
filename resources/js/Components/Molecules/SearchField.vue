<template>
    <div class="search-field">
        <icon class="search-field__icon" name="magnifier"></icon>
        <input-search
            class="search-field__input"
            placeholder="Search for a city"
            @update-value="updateParentValue"
        >
        </input-search>
    </div>
</template>

<script setup>
import InputSearch from "@/Components/Atoms/Inputs/InputSearch.vue";
import Icon from "@/Components/Atoms/Icon.vue";
import { ref } from "vue";

const searchLocation = ref();

const updateParentValue = (value) => {
    searchLocation.value = value;
};
</script>
