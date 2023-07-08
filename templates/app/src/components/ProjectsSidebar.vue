<script setup>

import SidebarUser from "./SidebarUser.vue";
import SidebarItemList from "./SidebarItemList.vue";

const itemList = [
  {
    id: 'errors',
    title: 'Ошибки',
    icon: '/icons/error.svg',
    path: 'issues.html',
    active: false,
  },
  {
    id: 'projects',
    title: 'Проекты',
    icon: '/icons/projects.svg',
    path: 'projects.html',
    active: false,
  },
];
</script>

<template>
  <div class="projects-sidebar">
    <sidebar-user></sidebar-user>
    <sidebar-item-list :items=itemList></sidebar-item-list>
  </div>
</template>

<style scoped>

.projects-sidebar {
  width: 20%;
  height: 100%;
  background: #189FCA;
}

</style>