<template>
    <section class="teaser-dashboard">
        <header class="teaser-dashboard__header flow-l">
            <h1>
                <span class="location">{{ data.location.region }}</span>
                <span class="temperature">{{ data.current.temperature }}°</span>
            </h1>
            <h2>
                <span>Today</span>
                <icon
                    class="teaser-dashboard__icon"
                    :name="currentWeatherIcon"
                ></icon>
            </h2>
        </header>
        <ul class="teaser-dashboard__list" role="list">
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
import { toRefs, computed } from "vue";
import Icon from "@/Components/Atoms/Icon.vue";


const props = defineProps({
	data: {
		type: Object,
		required: true,
	},
});

const { data } = toRefs(props);

const WEATHER_ICONS = ["sun", "cloud", "rain"];

const currentWeatherIcon = computed(() => {
	let stringSearch = null;

    if (data.value.current) {
        stringSearch = data?.value?.current?.weather_descriptions
		.join(" ")
		.toLowerCase();
    } else {
        stringSearch = data.value?.hourly[0]?.weather_descriptions[0]
    }

    const matchingIcon = WEATHER_ICONS.find((icon) =>
		stringSearch.includes(icon),
	);
	return matchingIcon || "cloud";
});
</script>

