<script setup>

import EnvironmentItem from "./EnvironmentItem.vue";
// const props = defineProps(['environment']);
const props = {};
props.environment = [
  {
    id: 'php',
    title: 'php',
    version: '8.1.18',
  },
  {
    id: 'apple',
    title: 'Darwin',
    version: '22.5.0',
  },
];
</script>

<template>
<EnvironmentItem
    v-for="item in props.environment"
    :item="item"
    :key="item.id"
/>
</template>

<style scoped>

</style>