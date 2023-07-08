<script setup>
import HeadWrapper from "./components/header/HeadWrapper.vue";

const props = defineProps(['some']);
</script>

<template>
  <HeadWrapper>
    <div>{{props.some}}</div>
  </HeadWrapper>
</template>

<style scoped>
</style>
