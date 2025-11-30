<template>
    <section class="teaser-card">
        <article class="teaser-card__article">
            <div class="front">
                <h4>Sun</h4>
                <icon
                    class="teaser-card__icon"
                    name="cloud"
                    :name="currentWeatherIcon"
                    ></icon>
            </div>
            <div class="back">
                <p>
                    Min:
                    <span>7°</span>
                </p>
                <p>
                    Max:
                    <span>14°</span>
                </p>
            </div>
        </article>
    </section>
</template>

<script setup>
import Icon from "@/Components/Atoms/Icon.vue";
</script>

