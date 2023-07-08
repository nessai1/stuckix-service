<script setup>

import IssuesList from "./components/IssuesList.vue";
import HeadWrapper from "./components/header/HeadWrapper.vue";
const props = defineProps(['issues', 'solvedCount', 'unsolvedCount']);
</script>

<template>
  <HeadWrapper id="issues">
    <IssuesList :issues="props.issues" :solved-count="props.solvedCount" :unsolved-count="props.unsolvedCount"></IssuesList>
  </HeadWrapper>
</template>

<style scoped>

</style>