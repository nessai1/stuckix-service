<script setup>

import IssuesList from "./components/IssuesList.vue";
import HeadWrapper from "./components/header/HeadWrapper.vue";
const props = defineProps(['issues']);
</script>

<template>
  <HeadWrapper id="errors">
    <IssuesList :issues="props.issues" :solved-count="12" :unsolved-count="10"></IssuesList>
  </HeadWrapper>
</template>

<style scoped>

</style>