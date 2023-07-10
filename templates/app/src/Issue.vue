<script setup>
import HeadWrapper from "./components/header/HeadWrapper.vue";
import IssueComponent from "./components/issue/IssueComponent.vue";

const props = defineProps(['issues']);
</script>

<template>
  <HeadWrapper id="issue">
    <IssueComponent />
  </HeadWrapper>
</template>

<style scoped>
</style>
