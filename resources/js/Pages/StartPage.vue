<template>
    <teaser-dashboard></teaser-dashboard>
    <icon name="moon-cloud"/>
</template>

<script setup>
    import Icon from '@/Components/Icon.vue';
    import TeaserDashboard from '@/Components/Molecules/TeaserDashboard.vue';

    defineProps({
        posts: Array,
        apiError: String
    });
</script>
