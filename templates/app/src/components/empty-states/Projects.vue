<script setup>

</script>

<template>
<div class="empty-state">
  <img src="/icons/empty-states/projects.svg" alt="empty state projects">
  <div class="empty-state-text">У вас еще нет добавленных проектов</div>
  <a class="empty-state-button" href="/projectAdd.html">Добавить проект</a>

</div>
</template>

<style scoped>
.empty-state {
  display: flex;
  flex-direction: column;
  flex: 1;
  align-items: center;
  justify-content: center;
}
.empty-state-text {
  color: #7e7e7e;
  font-size: 18px;
  font-style: normal;
  font-weight: 700;
  line-height: 160%;
  letter-spacing: -0.036px;
  margin-bottom: 20px;
}

.empty-state-button {
  display: flex;
  width: 200px;
  height: 50px;
  justify-content: center;
  align-items: center;
  border-radius: 4px;
  background: #269AFF;
  text-decoration: none;
  color: white;
}
</style>