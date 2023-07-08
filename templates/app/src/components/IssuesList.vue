<script setup>

import IssuesListItem from "./IssuesListItem.vue";
import IssuesEmptyState from "./empty-states/Issues.vue";
const props = defineProps(['issues', 'solvedCount', 'unsolvedCount']);
console.log(props.issues);

</script>

<template>
  <div class="issues-list-container" v-if="props.issues.length">
    <div class="font-semibold text-slate-900 text-4xl text-left ml-2 mb-6">Ошибки</div>
    <div class="issues-buttons">
      <div class="issues-button-container issues-button-container-all" @click="allIssues">
        <div class="issues-button-solved-text">Все</div>
        <div class="issues-button-all-count issues-button-count-containter">{{props.solvedCount + props.unsolvedCount}}</div>
      </div>

      <div class="issues-button-container issues-button-container-solved" @click="solvedIssues">
        <div class="issues-button-solved-text">Решенные</div>
        <div class="issues-button-solved-count issues-button-count-containter">{{props.solvedCount}}</div>
      </div>

      <div class="issues-button-container issues-button-container-unsolved" @click="unsolvedIssues">
        <div class="issues-button-unsolved-text">Нерешенные</div>
        <div class="issues-button-unsolved-count issues-button-count-containter">{{props.unsolvedCount}}</div>
      </div>
    </div>
    <IssuesListItem
        v-for="issue in this.issues"
        :key="issue.eventId"
        :issue="issue"
    ></IssuesListItem>
  </div>
  <IssuesEmptyState v-else/>
</template>

<script>
export default {
  data() {
    return {
      issues: this.$props.issues,
    };
  },
  methods: {
    allIssues: function () {
      this.issues = this.$props.issues;
    },
    solvedIssues: function () {
      this.issues = this.$props.issues.filter(issue => issue.status === 'complete');
    },
    unsolvedIssues: function () {
      this.issues =  this.$props.issues.filter(issue => issue.status === 'new');
    },
  },
};
</script>

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
  cursor: pointer;
}

.issues-button-container-solved {
  border-radius: 10px;
  background: #efffe9;
}

.issues-button-container-unsolved {
  border-radius: 10px;
  background: #ffe9e9;
}

.issues-button-container-all {
  border-radius: 10px;
  background: #e9fffc;
}

.issues-button-count-containter {
  color: white;
  padding: 0 5px;
  margin: 0 5px;
  border-radius: 5px;
}

.issues-button-all-count {
  background: #2fc8f6;
}

.issues-button-solved-count {
  background: #4af62f;
}

.issues-button-unsolved-count {
  background: #f62f2f;
}
</style>