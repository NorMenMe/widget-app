import { computed } from "vue";
import { store } from "@/Store/store";

export function useSearchInputs() {
    const searchInputs = computed(() => store.searchInputs);
    const hasSearchInputs = computed(() => searchInputs.value.length > 0);

    return { searchInputs, hasSearchInputs };
}
