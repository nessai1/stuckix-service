<template>
  <Codeline v-for="(line, key) in context.lines" :line="key" :code="line" />
</template>
<script setup>
import Codeline from "./Codeline.vue";
const props = defineProps(['context']);
</script>