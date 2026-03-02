<template>
    <dashboard :data="data"></dashboard>
    <alert  v-if="isAlert" :api-message="apiError"></alert>
    <button-to-top></button-to-top>
</template>

<script setup>
    import { computed } from 'vue';
    import Dashboard from '@/Components/Organism/Dashboard.vue';
    import Alert from '@/Components/Molecules/Alert.vue';
    import ButtonToTop from '@/Components/Atoms/Buttons/ButtonToTop.vue';


    const props = defineProps({
        data: Object,
        apiError: String
    });

    const isAlert = computed(() => !!props.apiError);
</script>
