<template>
    <section class="cards">
        <div class="cards__inner">
            <header class="cards__header flow-xs">
                <h2>The upcoming week</h2>
                <h3>Click on the card to see the temperature.</h3>
            </header>
            <ul class="cards__list">
                <li class="cards__item" v-for="(day, key) in forecastDays" :key="key">
                    <teaser-card :data="day"></teaser-card>
                </li>
            </ul>
        </div>
    </section>
</template>

<script setup>
import TeaserCard from "./TeaserCard.vue";
import { useForecastDays } from '@/Components/Helpers/helpers.data-hardcoded';

const forecastDays = useForecastDays();
</script>

