
<template>
    <div class="button-switch">
        <button
            v-if="internalValue === 'chat'"
            class="button-switch__button button"
            id="button-switch-chat"
            type="button"
            @click="toggleWidget('cards')"
            >
                <span class="sr-only">Switch to Weather Forecast</span>
                <span>Switch to Weather Forecast</span>
        </button>
        <button
            v-else-if="internalValue === 'cards'"
            class="button-switch__button button"
            id="button-switch-cards"
            type="button"
            @click="toggleWidget('chat')"
            >
                <span class="sr-only">Switch to Chat</span>
                <span>Switch to Chat</span>
        </button>
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

    const toggleWidget = (value) => {
        emit('update:internalValue', value);
    }
 </script>
