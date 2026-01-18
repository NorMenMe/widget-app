import { reactive } from 'vue'
import { chatItems } from '@/Components/Helpers/helpers.data-hardcoded';

export const store = reactive({
    teaserChatItems : [],
    initializeChatItems() {
        const counter = chatItems.items.length -1;
        const key = 'isRead';

        for (let x = 0; x <= counter; x++) {
          const object = {...chatItems.items[x]};
          object[key] = false;
          this.teaserChatItems.push(object);
        }
    },
    isAllChatRead : false,
})
