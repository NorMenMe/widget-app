import { ref, watch, onMounted } from 'vue'

export default function useLocalStorage() {
    const userPreferences = ref({
      theme: 'light',
      language: 'en',
      searchInputs: [],
    })

    onMounted(() => {
      const saved = localStorage.getItem('userPreferences')
      if (saved) {
        userPreferences.value = JSON.parse(saved)
      }
    })

    watch(userPreferences, (newValue) => {
      localStorage.setItem('userPreferences', JSON.stringify(newValue))
    }, { deep: true })

    return { userPreferences }
  }
