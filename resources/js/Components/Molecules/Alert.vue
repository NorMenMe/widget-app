<template>
    <transition name="fade">
        <div
            v-if="!isClosed"
            :class="`alert ${alert.className}`"
            role="alert"
            :type="alert.type"
            :key="alert.message"
            >
            <div class="alert__inner">
                <div class="alert__content">
                    <icon class="alert__icon icon--info" name="info"></icon>
                    <p class="alert__copy">
                        {{ alert.message }}
                    </p>
                </div>
                <button class="alert__button" @click="handleClose" type="button">
                    <icon class="alert__icon icon--close" name="close"></icon>
                    <span class="sr-only">close button</span>
                </button>
            </div>
        </div>
    </transition>
</template>

<script setup>
import { ref } from 'vue';
import Icon from '@/Components/Atoms/Icon.vue';


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

