import { createApp } from 'vue'
import './style.css'
import Issues from "./Issues.vue";

const issues = window.pageParams.issues;
window.pageParams.unsolvedCount = issues.filter(issue => issue.status === 'new').length;
window.pageParams.solvedCount = issues.filter(issue => issue.status === 'complete').length;

createApp(Issues, window.pageParams).mount('#app');