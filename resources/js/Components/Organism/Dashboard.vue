<template>
    <div class="dashboard">
        <div class="dashboard__inner">
            <div class="dashboard__main">
                <search-field></search-field>
                <teaser-dashboard :data="data"></teaser-dashboard>
            </div>
            <div class="dashboard__extra"></div>
        </div>
    </div>
</template>

<script setup>
    import SearchField from '@/Components/Molecules/SearchField.vue';
    import TeaserDashboard from '@/Components/Molecules/TeaserDashboard.vue';
</script>

