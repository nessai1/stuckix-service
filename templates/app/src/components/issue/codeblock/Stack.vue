<template>
  <div class="stack">
    <ul class="w-8/12 selector">
      <SelectTrace row="12" file="E:\hrtoolkit\vendor\laravel\framework\src\illuminateadadasdasdasd" />
      <SelectTrace :selected="true" row="12" file="E:\hrtoolkit\vendor\laravel\framework\src\illuminateadadasdasdasd" />
      <SelectTrace row="12" file="E:\hrtoolkit\vendor\laravel\framework\src\illuminateadadasdasdasd" />
    </ul>
    <div class="w-full code">
      code
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
<script setup>
import SelectTrace from "./SelectTrace.vue";
</script>