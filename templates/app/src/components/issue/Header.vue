<script setup>
const props = defineProps(['issue']);

function getPath(issue)
{
  return issue.exception.stacktrace.contexts.pop().abs_path;
}

function getErrorLine(issue)
{
  return issue.exception.stacktrace.contexts.pop().line_number;
}
console.log(props.issue)
</script>

<template>
  <div class="header-container w-full h-min">
    <div class="flex text-gray-300">
      <img class="menu-button mr-3" src="/icons/menu-3-line.svg">
      <span>Ошибки</span>
      <img src="/icons/arrow-up-s-line.svg" class="ml-3">
      <img src="/icons/folder-5-fill.svg" class="ml-3">
      <span class="ml-2" v-if="props.issue.project">{{props.issue.project.name}}</span>
    </div>

    <div class="flex mt-4 items-end">
      <span class="font-semibold text-2xl">Ошибка</span>
      <span class="font-medium text-gray-500 ml-3 pb-0.5">{{getPath(issue)}} в строке {{getErrorLine(issue)}}</span>
    </div>

    <div class="flex mt-4">
      <div class="red-dot border bg-red-600 rounded-full mt-2"></div>
      <span class="ml-3 w-1/2 text-gray-600 text-left">
        {{props.issue.exception.value}}
      </span>
    </div>
  </div>
</template>

<style>
.red-dot{
  height: 10px;
  width: 10px;
}

@media (min-width: 768px) {
  .menu-button{
    display: none;
  }
}
</style>