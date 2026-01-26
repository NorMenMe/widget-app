<template>
    <dashboard :data="data"></dashboard>
</template>

<script setup>
import Dashboard from '@/Components/Organism/Dashboard.vue';

defineProps({
    data: Object,
    apiError: String
});
</script>
