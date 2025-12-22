
<template>
    <div class="button-switch">
        <label v-if="internalValue === 'messenger'" for="input-switch-weather" class="button-switch__label">
            <input
                type="radio"
                id="input-switch-weather"
                class="button-switch__input"
                :checked="internalValue === 'cards'"
                @change="handleChange('cards')"
               >
            </input>
            <span>Switch to Weather Forecast</span>
        </label>
        <label v-if="internalValue === 'cards'" for="input-switch-messenger" class="button-switch__label">
            <input
                type="radio"
                id="input-switch-messenger"
                class="button-switch__input"
                :checked="internalValue === 'messenger'"
                @change="handleChange('messenger')"
            >
            </input>
            <span>Switch to Messenger</span>
        </label>
    </div>
</template>

<script setup>
    const props = defineProps({
        internalValue: {
            type: String,
            default: 'cards'
        }
    });

    const emit = defineEmits(['update:internalValue']);

    const handleChange = (value) => {
        emit('update:internalValue', value);
    }
 </script>
