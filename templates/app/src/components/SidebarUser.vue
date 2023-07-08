<script setup>

</script>

<template>
  <div class="projects-sidebar-title-container">
    <div class="projects-sidebar-title-logo">Logo</div>
    <div class="projects-sidebar-title-textblock">
      <div class="projects-sidebar-title-username">UserName</div>
      <div class="projects-sidebar-title-email">assdaf@ss.ss</div>
    </div>
  </div>
</template>

<style scoped>
.projects-sidebar-title-container {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin: 30px;
  border-bottom: 1px solid #FFFFFF38;
}

.projects-sidebar-title-logo {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  background: #D9D9D9;
  color: #000000;
  border-radius: 10px;
  margin: 10px;
}

.projects-sidebar-title-textblock {
  display: flex;
  flex-direction: column;
  align-items: flex-start;

}
.projects-sidebar-title-username {
  color: #000;
}

.projects-sidebar-title-email {
  color: #EBEBEB;
}
</style>