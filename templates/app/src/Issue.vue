<script setup>
import HeadWrapper from "./components/header/HeadWrapper.vue";
import IssueComponent from "./components/issue/IssueComponent.vue";

const props = defineProps(['some']);
</script>

<template>
  <HeadWrapper id="errors">
    <IssueComponent />
  </HeadWrapper>
</template>

<style scoped>
</style>
