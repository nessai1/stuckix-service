<script setup>

import SidebarUser from "./SidebarUser.vue";
import SidebarItemList from "./SidebarItemList.vue";

const itemList = [
  {
    id: 'errors',
    title: 'Ошибки',
    icon: '/icons/error.svg',
    path: 'errors.html',
    active: false,
  },
  {
    id: 'projects',
    title: 'Проекты',
    icon: '/icons/projects.svg',
    path: 'projects.html',
    active: true,
  },
];
</script>

<template>
  <sidebar-user></sidebar-user>
  <sidebar-item-list :items=itemList></sidebar-item-list>
</template>

<style scoped>



</style>