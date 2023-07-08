<script>

export default {
  props: {
    avatar: {
      required: false,
      type: String,
    },
    email: {
      required: true,
      type: String,
    },
    name: {
      required: true,
      type: String,
    },
  },
}

</script>

<template>
  <div class="projects-sidebar-title-container">
    <div class="sidebar-user">
      <img class="avatar" width="33" height="33" v-if="$props.avatar" :src="avatar" alt="user avatar">
      <img class="avatar" width="33" height="33" v-else src="./anonim.jpg">
    </div>
    <div class="projects-sidebar-title-textblock">
      <div class="projects-sidebar-title-username">{{ $props.name }}</div>
      <div class="projects-sidebar-title-email">{{ $props.email }}</div>
    </div>
  </div>
</template>

<style scoped>
.sidebar-user {
  margin-right: 8px;
}
.projects-sidebar-title-container {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin: 20px;
  padding-bottom: 13px;
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

.avatar {
  border-radius: 5px;
}
</style>