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
                    :name="weatherIcon"
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
    import { toRefs, computed } from 'vue';
    import Icon from '@/Components/Atoms/Icon.vue';
    import Icon from '@/Components/Icon.vue';


    const props = defineProps({
        data : {
            type: Object,
            required: true,
        }
    });

    const { data } = toRefs(props);

    const WEATHER_ICONS = ['sun','cloud','rain'];

    const currentWeatherIcon = computed(() => {
        const stringSearch = data?.value?.current?.weather_descriptions.join(' ').toLowerCase();

        if ( !stringSearch) return;

        const matchingIcon = WEATHER_ICONS.find( icon => stringSearch.includes(icon));
        return matchingIcon || 'cloud';
    })
</script>

