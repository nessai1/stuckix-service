import { createApp } from 'vue'
import './style.css'
import Issues from "./Issues.vue";

createApp(Issues, window.pageParams).mount('#app');