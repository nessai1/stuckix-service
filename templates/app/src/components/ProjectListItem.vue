<script setup>

defineProps(['project']);
</script>

<template>
<div class="project-item-container rounded-xl p-4 m-2 w-full">
  <div class="text-lg text-left font-semibold text-slate-900">
    {{project.title}}
  </div>
  <div class="text-left text-lg text-slate-900">
    {{project.description}}
  </div>
</div>
</template>

<style scoped>
.project-item-container {
  border: 1px solid #E0E0E0;
  background: #FCFCFC;
}
</style>