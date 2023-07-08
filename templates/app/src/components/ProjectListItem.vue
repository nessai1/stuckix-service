<script setup>

defineProps(['project']);
</script>

<template>
<div class="border-blue-300 border-2 rounded-xl p-4 m-2 w-full">
  <div class="text-lg text-left font-semibold text-slate-900">
    {{project.title}}
  </div>
  <div class="text-left text-lg text-slate-900">
    {{project.description}}
  </div>
</div>
</template>

<style scoped>

</style>