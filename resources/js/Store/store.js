import { reactive } from 'vue'
import { chatItems } from '@/Components/Helpers/helpers.data-hardcoded';

export const store = reactive({
    teaserChatItems : [],
    generateChatItems() {
        const counter = chatItems.items.length -1;
        const key = 'isRead';

        for (let x = 0; x <= counter; x++) {
          const object = {};
          object[key] = false;
          this.teaserChatItems.push(object);
        }
    }
})
