import { watch, ref } from 'vue'
import { store } from "@/Store/store";


export function useSearchInputs() {

   const searchInputs = ref();

   watch(
    () => store.searchInputs,
    (newInputValue) => {
        if (newInputValue?.length) {
            searchInputs.value = store.searchInputs;
        }
    },
);
    return {searchInputs};
  }
