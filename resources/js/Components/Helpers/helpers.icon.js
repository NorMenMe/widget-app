export function useCurrentIcon(data) {
    const WEATHER_ICONS = ["sun", "cloud", "rain"];
	let stringSearch = null;

	console.log("---- ~ data:", data.value)
	if (data.value.current) {
        console.log('if');
		stringSearch = data?.value?.current?.weather_descriptions
			.join(" ")
			.toLowerCase();
	} else {
		stringSearch = data.value?.hourly[0]?.weather_descriptions[0];
	}

	const matchingIcon = WEATHER_ICONS.find((icon) =>
		stringSearch.includes(icon),
	);
	return matchingIcon || "cloud";
}
