<script setup>

import IssueComponent from "./components/issue/IssueComponent.vue";
import HeadWrapper from "./components/header/HeadWrapper.vue";
</script>

<template>
  <HeadWrapper id="issues">
    <form action="/api/v1/project" class="project-add-container" method="post">
      <div class="project-add-title text-lg m-5">Укажите название проекта</div>
      <input type="text" name="name" placeholder="Название проекта">

      <div class="project-add-title text-lg m-5">Описание проекта</div>
      <input type="text" name="description" placeholder="Описание проекта">

      <button type="submit" class="project-add-button">Создать</button>
    </form>
  </HeadWrapper>



</template>

<style scoped>

.project-add-container {
  display: flex;
  flex: 1;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.project-add-container input {
  width: 400px;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #C2C2C2;
  background: #FFF;
}

.project-add-button {
  display: flex;
  padding: 9px 8px;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  gap: 4px;
  cursor: pointer;
  background: #2dd9da;
  margin: 30px;
}
</style>