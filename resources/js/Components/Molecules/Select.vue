<template>
    <select class="select" name="select-custom" id="select">
        <button class="select__button" type="button">
            <span>{{ selectButtonText }}</span>
            <selectedcontent> </selectedcontent>
        </button>
        <option
            class="select__option"
            value="newest"
            v-for="label in optionLabels"
        >
            <div class="custom-option">
                <span class="option-text">{{ label }}</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 40 40"
                    aria-hidden="true"
                    class="custom-option__icon"
                >
                    <path
                        fill="currentColor"
                        d="M37.856 12.91 20 29.717 2.144 12.91l1.712-1.82L20 26.283 36.144                            11.09l1.712 1.82Z"
                    ></path>
                </svg>
            </div>
        </option>
    </select>
</template>

<script setup>
import Icon from "@/Components/Atoms/Icon.vue";

const props = defineProps({
    optionLabels: Array,
    selectButtonText: String,
});
</script>
