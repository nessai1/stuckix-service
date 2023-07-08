import { createApp } from 'vue'
import './style.css'
import Login from "./Login.vue";

createApp(Login, {csrf: window.auth_csrf}).mount('#app')
