<template>
    <div class="dashboard">
        <div class="dashboard__inner">
            <div class="dashboard__main">
                <search-field></search-field>
                <teaser-dashboard :data="data"></teaser-dashboard>
            </div>
            <div class="dashboard__extra">
                <cards v-if="currentView === 'cards'" :data="data"></cards>
                <messenger v-else-if="currentView === 'messenger'"></messenger>
                <button-switch v-model:internalValue="currentView"></button-switch>
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
    import Messenger from '@/Components/Molecules/Messenger.vue';

    defineProps({
        data: Object,
        apiError: String
    });

    const currentView = ref('cards');
</script>

