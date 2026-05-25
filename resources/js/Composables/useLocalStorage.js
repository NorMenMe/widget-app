import { watch } from "vue";

const STORAGE_KEY = "userPreferences";

export default function useLocalStorage(store) {
    // on init set store into localStorage
    const saved = localStorage.getItem(STORAGE_KEY);

    if (saved) {
        try {
            Object.assign(store, JSON.parse(saved));
        } catch (element) {
            console.log("[useLocalStorage] Failed to parse saved data", element);
        }
    }

    // Persist on every store change
    watch(
        store,
        (newValue) => {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(newValue));
        },
        { deep: true },
    );
}
