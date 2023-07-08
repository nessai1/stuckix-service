<script setup>

import ProjectsList from "./components/ProjectsList.vue";
import HeadWrapper from "./components/header/HeadWrapper.vue";

const projects = [
  {
    id: 1,
    title: 'First project',
    description: 'prkdsfgsdpjfdsjg opsdj vs  sdopsdjv ',
  },
  {
    id: 2,
    title: 'second project',
    description: 'prkdsfgsdpjfdsjg opsdj vs  sdopsdjv ',
  },
]
</script>

<template>
  <HeadWrapper id="projects">
    <ProjectsList :projects="projects"></ProjectsList>
  </HeadWrapper>
</template>

<style scoped>


</style>