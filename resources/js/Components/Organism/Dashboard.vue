<template>
    <div class="dashboard">
        <div class="dashboard__inner">
            <div class="dashboard__main">
                <search-field></search-field>
                <teaser-dashboard :data="data"></teaser-dashboard>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue';
    import ButtonSwitch from '@/Components/Atoms/Buttons/ButtonSwitch.vue';
    import SearchField from '@/Components/Molecules/SearchField.vue';
    import TeaserDashboard from '@/Components/Molecules/TeaserDashboard.vue';
    import Cards from '@/Components/Molecules/Cards.vue';
    import Chat from '@/Components/Molecules/Chat.vue';

    defineProps({
        data: Object,
        apiError: String
    });

    const currentView = ref('cards');
</script>

