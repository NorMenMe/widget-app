import { ref, watch, onMounted } from 'vue'

export default function useLocalStorage(store) {
    watch(store, (newValue) => {
      localStorage.setItem('userPreferences', JSON.stringify(newValue))
    }, { deep: true })
  }
