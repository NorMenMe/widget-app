<template>
    <teaser-dashboard :data="data"></teaser-dashboard>
</template>

<script setup>
    import TeaserDashboard from '@/Components/Molecules/TeaserDashboard.vue';

    defineProps({
        data: Array,
        apiError: String
    });
</script>
