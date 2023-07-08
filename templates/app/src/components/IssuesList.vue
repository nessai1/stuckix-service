<script setup>

import IssuesListItem from "./IssuesListItem.vue";
defineProps(['issues', 'solvedCount', 'unsolvedCount'])
</script>

<template>
  <div class="issues-list-container">
    <div class="font-semibold text-slate-900 text-4xl text-left m-10">Ошибки</div>
    <div class="issues-buttons">
      <div class="issues-button-container issues-button-container-solved">
        <div class="issues-button-solved-text">Решенные</div>
        <div class="issues-button-solved-count issues-button-count-containter">{{solvedCount}}</div>
      </div>

      <div class="issues-button-container issues-button-container-unsolved">
        <div class="issues-button-unsolved-text">Нерешенные</div>
        <div class="issues-button-unsolved-count issues-button-count-containter">{{unsolvedCount}}</div>
      </div>
    </div>
    <IssuesListItem
        v-for="issue in issues"
        :key="issue.id"
        :issue="issue"
    ></IssuesListItem>
  </div>
</template>

<style scoped>

.issues-list-container {
  display: flex;
  flex-direction: column;
  margin: 40px;
  flex: 1;
}

.issues-buttons {
  display: flex;
  flex-direction: row;
  align-items: center;
}
.issues-button-container {
  display: flex;
  padding: 9px 8px;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  gap: 4px;
  margin: 0 10px;
}

.issues-button-container-solved {
  border-radius: 10px;
  background: #E9F5FF;
}

.issues-button-container-unsolved {
  border-radius: 10px;
  background: #ffe9e9;
}

.issues-button-count-containter {
  color: white;
  padding: 0 5px;
  margin: 0 5px;
  border-radius: 5px;
}

.issues-button-solved-count {
  background: #2FC6F6;
}

.issues-button-unsolved-count {
  background: #f62f2f;
}
</style>