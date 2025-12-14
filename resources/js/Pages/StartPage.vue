<template>
    <dashboard :data="data"></dashboard>
</template>

<script setup>
    import Dashboard from '@/Components/Organism/Dashboard.vue';
    import { ref } from 'vue';


   // Hardcoded dummy data (simulating API response)
const data = ref({
    request: {
        type: "City",
        query: "Berlin, Germany",
        language: "en",
        unit: "m"
    },
    location: {
        name: "Berlin",
        country: "Germany",
        region: "Berlin",
        lat: "52.517",
        lon: "13.400",
        timezone_id: "Europe/Berlin",
        localtime: "2025-12-14 09:24",
        localtime_epoch: 1765704240,
        utc_offset: "1.0"
    },
    current: {
        observation_time: "08:24 AM",
        temperature: 5,
        weather_code: 143,
        weather_icons: ["https://cdn.worldweatheronline.com/images/wsymbols01_png_64/wsymbol_0006_mist.png"],
        weather_descriptions: ["Mist"],
        astro: {
            sunrise: "08:10 AM",
            sunset: "03:52 PM",
            moonrise: "02:22 AM",
            moonset: "12:47 PM",
            moon_phase: "Waning Crescent",
            moon_illumination: 30
        },
        air_quality: {
            co: "241.85",
            no2: "22.85",
            o3: "22",
            so2: "3.35",
            pm2_5: "17.05",
            pm10: "19.15",
            "us-epa-index": "2",
            "gb-defra-index": "2"
        },
        wind_speed: 9,
        wind_degree: 221,
        wind_dir: "SW",
        pressure: 1026,
        precip: 0,
        humidity: 87,
        cloudcover: 75,
        feelslike: 3,
        uv_index: 0,
        visibility: 10,
        is_day: "yes"
    }
});
</script>
