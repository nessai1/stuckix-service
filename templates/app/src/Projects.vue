<script setup>

import ProjectsSidebar from "./components/ProjectsSidebar.vue";
import ProjectsList from "./components/ProjectsList.vue";

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
  <div class="projects-container">
    <ProjectsSidebar></ProjectsSidebar>
    <ProjectsList :projects="projects"></ProjectsList>
  </div>
</template>

<style scoped>

.projects-container {
  display: flex;
  flex-direction: row;
  flex: 1;
  width: 100vw;
  height: 100vh;
}


</style>