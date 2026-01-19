<template>
  <span
    v-if="svgContent"
    :class="class"
    class="icon"
    v-html="svgContent"
  />
  <span
    v-else
    :class="class"
    class="inline-block bg-gray-200 rounded"
    :title="`Icon not found: ${name}`"
  />
</template>

<script setup>
import { ref, watch, onMounted, computed } from 'vue';

const props = defineProps({
  name: {
    type: String,
    required: true
  },
  class: {
    type: String,
    default: 'icon'
  }
});

const svgContent = ref('');

// Pre-import all icons as raw strings for working well on dev & production environment
const iconModules = import.meta.glob('@/Images/icons/*.svg', {
  as: '?raw',
  eager: true
});

// Create a normalized icon map for faster lookup
const iconMap = computed(() => {
  const map = {};
  Object.entries(iconModules).forEach(([path, content]) => {
    // Extract just the icon name (e.g., "sun" from "/path/to/sun.svg")
    const match = path.match(/\/([^\/]+)\.svg$/);
    if (match) {
      const iconName = match[1];
      map[iconName] = content;
    }
  });
  return map;
});

const loadIcon = (iconName) => {
  try {
    const normalizedName = iconName.replace(/\.svg$/, '');

    if (iconMap.value[normalizedName]) {
      svgContent.value = iconMap.value[normalizedName];
      return;
    }

    // Fallback: search for partial matches
    const partialMatch = Object.keys(iconMap.value).find(key =>
      key.includes(normalizedName) || normalizedName.includes(key)
    );

    if (partialMatch) {
      svgContent.value = iconMap.value[partialMatch];
    } else {
      console.warn(`Icon "${normalizedName}" not found. Available:`, Object.keys(iconMap.value).join(', '));
      svgContent.value = '';
    }
  } catch (error) {
    console.error(`Error loading icon "${iconName}":`, error);
    svgContent.value = '';
  }
};

onMounted(() => loadIcon(props.name));
watch(() => props.name, loadIcon);
</script>
