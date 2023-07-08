<template>
  <Codeline line="23" code="echo 'hello world!';" />
  <Codeline line="23" code="echo 'hello world!';" />
  <Codeline line="23" code="echo 'hello world!';" />
  <Codeline :active="true" line="23" code="echo 'hello world!';" />
  <Codeline line="230" code="echo 'hello world!';" />
</template>
<script setup>
import Codeline from "./Codeline.vue";
</script>