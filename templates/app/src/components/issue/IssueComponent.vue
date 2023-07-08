<template>
  <div class="w-full p-5 text-left">
    <Header />
    <br>
    <br>
    <EnvironmentList/>
    <CodeBlock/>

  </div>
</template>
<script setup>
import Header from "./Header.vue";
import CodeBlock from "./codeblock/CodeBlock.vue";
import EnvironmentList from "./EnvironmentList.vue";
</script>