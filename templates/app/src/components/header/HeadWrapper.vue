<script>
import Sidebar from "./Sidebar.vue";

export default {
  components: {Sidebar},
  props: {
    id: String
  },
  data() {
    return {
      user: {
        name: 'aaa',
        email: 'bbb',
      }
    }
  }
}
</script>
<template>
  <div class="projects-container">
    <Sidebar :id="id" :user="{name: 'Главный поцеху', email: 'some@mail.ru'}"></Sidebar>
    <slot/>
  </div>
</template>

<style lang="scss" scoped>
.projects-container {
  display: flex;
  flex-direction: row;
  flex: 1;
  width: 100vw;
  height: 100vh;
}

</style>