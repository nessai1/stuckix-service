<template>
  <div class="w-full p-5 text-left dark:bg-white">
    <Header />
    <br>
    <br>
    <EnvironmentList/>
    <TagList/>
    <CodeBlock/>
    <RequestList/>
  </div>
</template>
<script setup>
import Header from "./Header.vue";
import CodeBlock from "./codeblock/CodeBlock.vue";
import EnvironmentList from "./EnvironmentList.vue";
import TagList from "./TagList.vue";
import RequestList from "./RequestList.vue";
</script>