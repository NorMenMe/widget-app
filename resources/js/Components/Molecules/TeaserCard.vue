<template>
    <section class="teaser-card">
        <article class="teaser-card__article">
            <div class="front">
                <h4>{{ getDay }}</h4>
                <icon
                    class="teaser-card__icon"
                    :name="currentIcon"
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
import { computed, toRefs } from 'vue';
import { useCurrentIcon } from "@/Components/Helpers/helpers.icon";

const props = defineProps({
	data: {
		type: Object,
		required: true,
	},
});
const { data } = toRefs(props);

const getDay = computed(() => {
    const day = new Date(data?.value?.date).getDay();
    const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    return dayNames[day];
})

const currentIcon = useCurrentIcon(data);
</script>

