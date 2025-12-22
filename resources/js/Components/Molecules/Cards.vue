<template>
    <section class="cards">
        <div class="cards__inner">
            <h2 class="cards__heading">The upcoming week</h2>
            <ul class="cards__list">
                <li class="cards__item" v-for="(day, key) in forecastDays" :key="key">
                    <teaserCard :data="day"></teaserCard>
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

