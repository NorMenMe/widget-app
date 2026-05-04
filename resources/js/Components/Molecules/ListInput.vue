<template>
    <section class="list-input">
        <div class="list-input__inner">
            <h3 class="list-input__heading">Searched Cities</h3>
            <div class="list-input__main">
                <ul class="list-input__list">
                    <li
                        class="list-input__item"
                        v-for="input in props.searchInputs"
                    >
                        <span>{{ input }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>

<script setup>
import Icon from "@/Components/Atoms/Icon.vue";

const props = defineProps({
    searchInputs: Array,
});
</script>
