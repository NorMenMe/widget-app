<template>
    <section class="teaser-chat" :class="{'is-read' : isRead}">
        <picture class="teaser-chat__image">
            <img :src="item.image" alt="image of teaser-chat person">
        </picture>
        <div class="teaser-chat__content flow-xs">
            <h3 class="teaser-chat__heading">{{ item.name }}</h3>
            <p class="teaser-chat__copy">{{ item.copy }}</p>
        </div>
        <button
            class="teaser-chat__button"
            @click="toggleRead">
            <span class="sr-only">Mark as {{isRead ? 'unread' : 'read'}}</span>
            <icon class="teaser-chat__icon" name="unread"></icon>
        </button>
    </section>
</template>

<script setup>
import { ref, watch } from 'vue';
import Icon from '@/Components/Atoms/Icon.vue';
import { store } from '@/Store/store';

const props = defineProps({
	item: {
		type: Object,
		required: true,
	},
    forceRead: {
		type: Boolean,
		default: false,
	},
});

const isRead = ref(store.teaserChatItems[props.item.id]?.isRead || false);

const emit = defineEmits(['toggleRead'])

function toggleRead() {
    isRead.value = !isRead.value;

    if (!isRead.value) {
        emit('toggleRead')
    }
}

watch(isRead, (newValue) => {
    const storeItem = store.teaserChatItems[props.item.id];
    if (storeItem) {
        storeItem.isRead = newValue;
    }
});

watch(() => props.forceRead, () => {
    if (props.forceRead) {
        isRead.value = true;
    }
});
</script>

