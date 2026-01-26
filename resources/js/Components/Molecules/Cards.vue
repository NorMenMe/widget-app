<template>
    <section class="cards">
        <div class="cards__inner">
            <h2 class="cards__heading">The upcoming week</h2>
            <div class="cards__content">
                <ul class="cards__list">
                    <li class="cards__item" v-for="(day, key) in forecastDays" :key="key">
                        <teaser-card :data="day"></teaser-card>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>

<script setup>
import TeaserCard from "./TeaserCard.vue";
import { useForecastDays } from '@/Components/Helpers/helpers.data-hardcoded';
import Icon from '@/Components/Atoms/Icon.vue';


const forecastDays = useForecastDays();
</script>

