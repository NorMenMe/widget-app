
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
import { ref, watch, onMounted } from 'vue';

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

const loadIcon = async (iconName) => {
  try {
   const icons = import.meta.glob('../../Images/icons/*.svg', { as: 'raw', eager: false });

    const iconKey = Object.keys(icons).find(key =>
      key.endsWith(`/${iconName}.svg`)
    );

    if (iconKey) {
      svgContent.value = await icons[iconKey]();
    } else {
      console.warn(`Icon "${iconName}" not found`);
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
