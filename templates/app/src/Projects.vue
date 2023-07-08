<script setup>

import ProjectsSidebar from "./components/ProjectsSidebar.vue";
import ProjectsList from "./components/ProjectsList.vue";
</script>

<template>
  <div class="projects-container">
    <div class="projects-sidebar">
      <ProjectsSidebar></ProjectsSidebar>
    </div>
    <div class="">
      <ProjectsList></ProjectsList>
    </div>
  </div>



<div class="projects-title bg-white space-y-4 p-4 sm:px-8 sm:py-6 lg:p-4 xl:px-8 xl:py-6">Проекты</div>
</template>

<style scoped>

.projects-container {
  display: flex;
  flex-direction: row;
  flex: 1;
  width: 100vw;
  height: 100vh;
}

.projects-sidebar {
  width: 20%;
  height: 100%;
  background: #189FCA;
}


</style>