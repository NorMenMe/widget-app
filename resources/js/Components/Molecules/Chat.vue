<template>
    <section class="chat">
        <div class="chat__inner">
            <h2 class="chat__heading">Your Chats</h2>
            <div class="chat__content">
                <ul class="chat__list">
                    <li class="chat__item" v-for="item in chatItems.items" >
                        <teaser-chat
                            :item="item"
                            :force-read="isAllRead"
                            @handle-unread="markAllAsUnread"
                            >
                        </teaser-chat>
                    </li>
                </ul>
                <button class="chat__button" :class="{'is-hidden' : isHidden}" type="button" @click="markAllAsRead">
                    <span>Mark all as read</span>
                </button>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { chatItems } from '@/Components/Helpers/helpers.data-hardcoded';
import { store } from '@/Store/store';
import TeaserChat from "./TeaserChat.vue";

const isAllRead = ref(false);
const isHidden = ref(false);

function markAllAsRead() {
    if (!isAllRead.value) {
        isAllRead.value = true;
        isHidden.value = true;
    }
}

function markAllAsUnread() {
    isAllRead.value = false;
    isHidden.value = false;
}

onMounted(() => store.generateChatItems());
</script>

