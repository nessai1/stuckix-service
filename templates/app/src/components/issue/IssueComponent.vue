<script setup>
import Header from "./Header.vue";
import CodeBlock from "./codeblock/CodeBlock.vue";
import EnvironmentList from "./EnvironmentList.vue";
import TagList from "./TagList.vue";
import RequestList from "./RequestList.vue";
const props = window.pageParams;


</script>

<template>
  <div class="w-full p-5 text-left dark:bg-white">
    <Header :issue="props.issues"/>
    <br>
    <br>
    <EnvironmentList :issue="props.issues"/>
    <TagList/>
    <CodeBlock :issue="props.issues"/>
    <RequestList :issue="props.issues"/>
  </div>
</template>