<script setup>
const props = defineProps(['tag']);
</script>

<template>
<div class="tag-container mr-2">
  <div class="tag-key">{{props.tag.key}}</div>
  <div class="tag-delimiter"></div>
  <div class="tag-value">{{props.tag.value}}</div>
</div>
</template>

<style scoped>
.tag-container {
  display: inline-flex;
  padding: 2px 8px;
  align-items: center;
  gap: 8px;
  border-radius: 6px;
  border: 1px solid #F1F3F5;
  background: #FFF;
}

.tag-delimiter {
  width: 1px;
  align-self: stretch;
  background: #DEE2E6;
}

.tag-value {
  color: #269AFF;
}
</style>