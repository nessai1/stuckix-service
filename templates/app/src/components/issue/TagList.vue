<script setup>
import TagItem from "./TagItem.vue";

// const props = defineProps(['tags']);
const props = {};
props.tags = [
  {
    key: 'среда',
    value: 'обрабатывается',
  },
  {
    key: 'обрабатывается',
    value: 'да',
  },
  {
    key: 'уровень',
    value: 'ошибка',
  },
]

</script>

<template>
  <div class="font-semibold text-slate-900 text-2xl mb-4">Теги</div>
  <TagItem
      v-for="tag in props.tags"
      :key="tag.key"
      :tag="tag"
  />
</template>

<style scoped>

</style>