<script setup>
defineProps(['issue']);
</script>

<template>
  <div class="issue-item-container rounded-xl p-4 m-2 w-full">
    <div class="flex-row text-left">
      <span class="text-lg text-left font-semibold text-slate-900 mr-2">
        {{issue.title}}
      </span>
      <span class="text-sm text-left text-slate-400">
        {{issue.errorFile}} в строке {{issue.errorLine}}
      </span>
    </div>

    <div class="text-left text-lg text-slate-900">
      {{issue.description}}
    </div>

    <div class="flex-row text-left">
      <img class="mr-1 inline" src="/icons/project.svg">
      <span class="text-left text-sm text-slate-900 w-fit mr-3">
        {{issue.projectName}}
      </span>

      <img class="mr-1 inline" src="/icons/clock.svg">
      <span class="text-left text-sm text-slate-400 w-fit mr-3">
        {{issue.time}}
      </span>

      <img class="mr-1 inline" src="/icons/comments.svg">
      <span class="text-left text-sm text-slate-500 w-fit mr-3">
        {{issue.commentsCount}}
      </span>
    </div>

  </div>
</template>

<style scoped>
.issue-item-container {
  border: 1px solid #E0E0E0;
  background: #FCFCFC;
}
</style>