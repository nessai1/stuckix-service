<script setup>
defineProps(['issue']);

function redirectIssue(issue)
{
  window.location.href = 'issue.html?id=' + issue.eventId;
}

function getPath(issue)
{
  return issue.exception.stacktrace.contexts.pop().abs_path;
}

function getErrorLine(issue)
{
  console.log(issue.exception.stacktrace);
  return issue.exception.stacktrace.contexts.pop().line_number;
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
          v-if="issue.status === 'new'"
      >
      <span class="text-lg text-left font-semibold text-slate-900 mr-2">
        {{issue.exception.value}}
      </span>
      <span class="text-sm text-left text-slate-400">
        {{getPath(issue)}} в строке {{getErrorLine(issue)}}
      </span>
    </div>

    <div class="text-left text-lg text-slate-900">
      {{issue.description}}
    </div>

    <div class="flex-row text-left">
      <img class="mr-1 inline" src="/icons/project.svg">
      <span class="text-left text-sm text-slate-900 w-fit mr-3">
        {{issue.project.name}}
      </span>

      <img class="mr-1 inline" src="/icons/clock.svg">
      <span class="text-left text-sm text-slate-400 w-fit mr-3">
        {{issue.exceptionDate.date}}
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