<template>
    <dashboard :data="data"></dashboard>
    <alert
      v-if="isAlert"
      :key="alert.message"
      :type="alert.type"
      @closed="handleClose"
    >
      {{ alert.message }}
    </alert>
</template>

<script setup>
    import Dashboard from '@/Components/Organism/Dashboard.vue';
    import Alert from '@/Components/Molecules/Alert.vue';
    import { ref } from 'vue';

    const props = defineProps({
        data: Object,
        apiError: String
    });

    const alert = ref(
        {
            message: props.apiError,
            type: 'api-error',
        },
    );

    const isAlert = ref(true);

    const handleClose = () => {
        isAlert.value = false;
    }

</script>
