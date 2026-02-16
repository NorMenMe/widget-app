<template>
    <dashboard :data="data"></dashboard>
    <alert  v-if="isAlert" :api-message="apiError"></alert>
</template>

<script setup>
    import Dashboard from '@/Components/Organism/Dashboard.vue';
    import Alert from '@/Components/Molecules/Alert.vue';
    import { computed } from 'vue';

    const props = defineProps({
        data: Object,
        apiError: String
    });

    const isAlert = computed(() => !!props.apiError);
</script>
