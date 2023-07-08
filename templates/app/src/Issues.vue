<script setup>

import IssuesList from "./components/IssuesList.vue";
import HeadWrapper from "./components/header/HeadWrapper.vue";
import ProjectsList from "./components/ProjectsList.vue";

const issues = [
  {
    id: 1,
    title: 'error 1!',
    errorFile: '/iblock/admin.php',
    errorLine: 392,
    description: 'sd fdsf dsf   dsf dsf sd f fsdfsd sd fdsf dsf   dsf dsf sd f fsdfs sd fdsf dsf   dsf dsf sd f fsdfs',
    projectName: 'Project 2',
    time: '24 June 2012 14:24:55',
    commentsCount: 12,
    solved: false,
  },
  {
    id: 2,
    title: 'error 2!',
    errorFile: '/iblock/admin.php',
    errorLine: 39244,
    description: 'sd fdsf dsf   dsf dsf sd f fsdfsd sd fdsf dsf   dsf dsf sd f fsdfs sd fdsf dsf   dsf dsf sd f fsdfs',
    projectName: 'Project 5',
    time: '24 June 2012 14:24:55',
    commentsCount: 0,
    solved: false,
  },
  {
    id: 3,
    title: 'error 31!',
    errorFile: '/iblock/admin.php',
    errorLine: 436,
    description: 'sd fdsf dsf   dsf dsf sd f fsdfsd sd fdsf dsf   dsf dsf sd f fsdfs sd fdsf dsf   dsf dsf sd f fsdfs',
    projectName: 'Profsdf ',
    time: '26 June 2012 14:24:55',
    commentsCount: 6,
    solved: false,
  },
]
</script>

<template>
  <HeadWrapper id="errors">
    <IssuesList :issues="issues" :solved-count="12" :unsolved-count="10"></IssuesList>
  </HeadWrapper>
</template>

<style scoped>

</style>