<template>
    <section class="chat">
        <div class="chat__inner">
            <h2 class="chat__heading">Your Chats</h2>
            <ul class="chat__list">
                <li class="chat__item" v-for="item in chatItems.items" :key="item.id">
                    <teaser-chat :item="item" :force-read="isAllRead"></teaser-chat>
                </li>
            </ul>
            <button class="chat__button" type="button" @click="markAllAsRead">
                <span>Mark all as read</span>
            </button>
        </div>
    </section>
</template>

<script setup>
import TeaserChat from "./TeaserChat.vue";
import { chatItems } from '@/Components/Helpers/helpers.data-hardcoded';
import { ref } from 'vue';


const isAllRead = ref(false);

function markAllAsRead() {
    isAllRead.value = true;
}

</script>

