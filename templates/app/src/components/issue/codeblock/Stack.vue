<script setup>
import SelectTrace from "./SelectTrace.vue";
import Code from "./Code.vue";
const props = defineProps(['issue']);

function getPath(issue)
{
  return issue.exception.stacktrace.contexts.pop().abs_path;
}
</script>

<template>
  <div class="stack">
    <ul class="w-8/12 selector">
      <SelectTrace v-for="context in props.issue.exception.stacktrace.contexts" :context="context" />
    </ul>
    <div class="w-full code selector">
      <Code :context="props.issue.exception.stacktrace.contexts[3]" />
    </div>
  </div>
</template>

<style lang="scss">
  .stack {
    display: flex;
    flex-direction: row;
  }

  .selector {
    max-height: 370px;
    overflow: scroll;
  }
</style>