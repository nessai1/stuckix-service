<script setup>

import ProjectListItem from "./ProjectListItem.vue";
import ProjectEmptyState from "./empty-states/Projects.vue";

defineProps(['projects']);
</script>

<template>
  <div class="project-list-container" v-if="projects.length">
    <div class="font-semibold text-slate-900 text-4xl text-left ml-2 mb-6">Проекты</div>
    <a href="/projectAdd.html" class="text-xl text-left m-3">Добавить проект</a>

    <ProjectListItem
        v-for="project in projects"
        :key="project.id"
        :project="project"
    ></ProjectListItem>
  </div>
  <ProjectEmptyState v-else/>

</template>

<style scoped>
.project-list-container {
  display: flex;
  flex-direction: column;
  margin: 40px;
  flex: 1;
}
</style>