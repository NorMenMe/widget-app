<template>
    <section class="list-input">
        <div class="list-input__inner">
            <h2 class="list-input__heading">Searched Cities</h2>
            <div class="list-input__main">
                <ul class="list-input__list">
                    <li class="list-input__item" v-for="item in items">
                        <span>{{ item }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, watch, onMounted, computed } from "vue";
import Icon from "@/Components/Atoms/Icon.vue";
import { store } from "@/Store/store";

const items = ref();

watch(
    () => store.searchInputs,
    (newInputValue) => {
        if (newInputValue?.length) {
            items.value = store.searchInputs;
        }
    },
);
</script>
