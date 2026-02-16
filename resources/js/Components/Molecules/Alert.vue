<template>
    <div
        v-if="!isClosed"
        role="alert"
        :class="`alert ${alert.className}`"
        :type="alert.type"
        :key="alert.message"
        >
        <span>
            {{ alert.message }}
        </span>
        <button @click="handleClose" type="button">
            ⅹ
            <span class="sr-only">close button</span>
        </button>
    </div>
</template>

<script setup>
import { ref } from 'vue'

const props = defineProps({
    apiMessage : {
        type: String,
        default: null,
    }
})

const alert = ref(
    {
        type: 'error',
        message: props.apiMessage,
        className: 'alert--api-error'
    },
);

const isClosed = ref(false)

const handleClose = () => {
    isClosed.value = true;
}
</script>

