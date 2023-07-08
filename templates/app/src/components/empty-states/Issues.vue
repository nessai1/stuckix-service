<script setup>

</script>

<template>
  <div class="empty-state">
    <img src="/icons/empty-states/issues.svg" alt="empty state issues">
    <div class="empty-state-text">Нет ошибок для отображения</div>
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
</style>