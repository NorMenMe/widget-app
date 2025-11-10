<template>
    <section class="teaser-dashboard">
        <search-field class="teaser-dashboard__searchfield"></search-field>

        <header class="teaser-dashboard__header">
            <h1>
                <span class="location">{{ data.location.region }}</span>
                <span class="temperature">{{ data.current.temperature }}°</span>
            </h1>
             <h2>
                <span>Today</span>
                <icon name=""></icon>
            </h2>
        </header>

        <ul class="teaser-dashboard__list">
            <li class="teaser-dashboard__item">
                <span>Precipitation</span>
                <span>{{ data.current.precip }}mm</span>
            </li>
            <li class="teaser-dashboard__item">
                <span>Wind</span>
                <span>{{ data.current.wind_speed }}km/h</span>
            </li>
            <li class="teaser-dashboard__item">
                <span>UV Index</span>
                <span>{{ data.current.uv_index }}</span>
            </li>
        </ul>
    </section>
</template>

<script setup>
    import { toRefs } from 'vue';
    import SearchField from './SearchField.vue';
    import Icon from '@/Components/Icon.vue';


    const props = defineProps({
        data : {
            type: Object,
            required: true,
        }
    });

    const { data } = toRefs(props);
</script>

