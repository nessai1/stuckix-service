<script setup>

import EnvironmentItem from "./EnvironmentItem.vue";
const props = defineProps(['issue']);
const environment = [
  {
    id: props.issue.platform,
    title: props.issue.platform,
    version: props.issue.phpVersion,
  },
];
</script>

<template>
<EnvironmentItem
    v-for="item in environment"
    :item="item"
    :key="item.id"
/>
</template>

<style scoped>

</style>