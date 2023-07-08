<script setup>
defineProps(['issue']);

function redirectIssue(issue)
{
  window.location.href = 'issue.html?id=' + issue.id;
}
</script>

<template>
  <div
      class="issue-item-container rounded-xl p-4 m-2 w-full"
      @click="redirectIssue(issue)"
  >
    <div class="flex-row text-left">
      <img
          class="mr-1 inline"
          src="/icons/unsolved-issue.svg"
          v-if="!issue.solved"
      >
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
  transition: all .3s ease;
  cursor: pointer;
}
.issue-item-container:hover {
  background: #f6f6f6;
}
</style>