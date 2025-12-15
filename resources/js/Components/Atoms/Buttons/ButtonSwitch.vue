
<template>
    <div class="button-switch" v-bind="$attrs">
        <label for="input-switch-weather">
            <input
                type="radio"
                id="input-switch-weather"
                :checked="internalValue === 'cards'"
                @change="handleChange('cards')"
               >
            </input>
            Weather Forecast
        </label>
        <label for="input-switch-messenger">
            <input
                type="radio"
                id="input-switch-messenger"
                :checked="internalValue === 'messenger'"
                @change="handleChange('messenger')"
            >
            </input>
            Messenger
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
