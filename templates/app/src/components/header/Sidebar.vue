<script>

import SidebarUser from "./SidebarUser.vue";
import SidebarItemList from "./SidebarItemList.vue";

export default {
  components: {SidebarItemList, SidebarUser},
  props: {
    user: Object,
    id: String
  },
  data() {
    return {
      itemsList: [
        {
          id: 'issues',
          title: 'Ошибки',
          icon: '/icons/issues.svg',
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
      ]
    }
  }
}
</script>

<template>
  <div class="projects-sidebar">
    <SidebarUser :name="user.name" :email="user.email"></SidebarUser>
    <SidebarItemList :id="id" :items=itemsList></SidebarItemList>
  </div>
</template>

<style scoped>

.projects-sidebar {
  width: 20%;
  height: 100%;
  background: #189FCA;
}

</style>