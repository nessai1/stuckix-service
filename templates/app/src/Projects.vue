<script setup>

import ProjectsList from "./components/ProjectsList.vue";
import HeadWrapper from "./components/header/HeadWrapper.vue";

const props = defineProps(['projects']);
</script>

<template>
  <HeadWrapper id="projects">
    <ProjectsList :projects="projects"></ProjectsList>
  </HeadWrapper>
</template>

<style scoped>


</style>