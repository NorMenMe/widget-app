
<template>
    <button
        class="button-to-top"
        :class="{'is-active' : isButtonDisplayed}"
        type="button"
        @click="handleClick"
        >
            <icon class="button-to-top__icon" name="arrow-up"></icon>
            <span class="sr-only">Go back to top</span>
    </button>
</template>

<script setup>
    import { ref, onMounted, onBeforeUnmount } from 'vue';
    import Icon from '@/Components/Atoms/Icon.vue';

    const props = defineProps({
	    scrollTreshold: {
	    	type: Number,
	    	default: 300,
	    },
    });

    const isButtonDisplayed = ref(false);

    const handleClick = () => {
        window.scrollTo({ top:0, behavior:'smooth' });
    }

    const handleScroll = () => {
        if ( window.scrollY >= props.scrollTreshold) {
            isButtonDisplayed.value = true;
        } else {
            isButtonDisplayed.value = false;
        }
    }

    onMounted(() => {
        window.addEventListener('scroll', handleScroll);
    })

    onBeforeUnmount(() => {
        window.removeEventListener('scroll', handleScroll);
    })
 </script>
