<script setup>

import ProjectListItem from "./ProjectListItem.vue";

defineProps(['projects']);
</script>

<template>
  <div class="project-list-container">
    <div class="text-xl font-semibold text-slate-900 text-4xl text-left m-10">Проекты</div>
    <ProjectListItem
        v-for="project in projects"
        :key="project.id"
        :project="project"
    ></ProjectListItem>
  </div>

</template>

<style scoped>
.project-list-container {
  display: flex;
  flex-direction: column;
  margin: 40px;
  flex: 1;
}

.project-list-title {
  color: #0A0A0A;
  font-size: 32px;
  font-style: normal;
  font-weight: 500;
  line-height: 24px;
}
</style>