<script setup>
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <div>
    <div class="bg-slate-200" style="height: 300px; width: 300px"></div>
  </div>
  <a href="login.html">LOGIN PAGE</a>
  <br>
  <a href="projects.html">PROJECTS PAGE</a>
  <HelloWorld msg="Vite + Vue" />
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>