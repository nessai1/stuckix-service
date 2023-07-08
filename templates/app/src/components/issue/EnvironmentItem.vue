<script setup>
const props = defineProps(['item']);

function getIconPath(envId)
{
  return '/icons/environment/' + envId + '.svg';
}
</script>

<template>
<div class="environment-item-container">
  <img class="environment-item-icon" :src="getIconPath(props.item.id)">
  <div class="environment-item-text">
    <div class="environment-item-title font-semibold text-slate-900">{{props.item.title}}</div>
    <div class="environment-item-version text-slate-500">Версия: {{props.item.version}}</div>
  </div>
</div>
</template>

<style scoped>
.environment-item-container {
  display: inline-flex;
  padding: 12px;
  align-items: center;
  gap: 16px;
  border-radius: 12px;
  border: 1px solid #F1F3F5;
  background: #FFF;
  margin-left: 20px;
}

</style>