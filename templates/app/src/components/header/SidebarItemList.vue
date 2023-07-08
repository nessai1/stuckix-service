<script>

export default {
  props: {
    items: Array,
    id: String
  }
}
</script>

<template>
  <div class="sidebar-items-container">
    <a
        class="sidebar-item"
        :href="item.path"
        :class="[item.id === $props.id ? 'sidebar-item-active' : '']"
        v-for="item in items"
        :key="item.id"
    >
      <img class="sidebar-item-icon" :src="item.icon">
      <div class="sidebar-item-text">{{item.title}}</div>
    </a>
  </div>
</template>

<style lang="scss" scoped>

.sidebar-items-container {
  display: flex;
  align-items: center;
  flex-direction: column;
}

.sidebar-item {
  display: flex;
  width: 199px;
  height: 40px;
  padding: 8px 99px 8px 8px;
  align-items: center;
  flex-shrink: 0;
  border-radius: 8px;
  margin-bottom: 8px;
  cursor: pointer;
  transition: all .3s ease;
}

.sidebar-item:hover {
  background: rgba(255, 255, 255, 0.21);
}

.sidebar-item-icon {
  margin: 10px;
}

.sidebar-item-text {
  color: #FFF;
  font-family: Inter, sans-serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 500;
  line-height: 20px;
}

.sidebar-item-active {
  background: rgba(255, 255, 255, 0.21);

  .sidebar-item-text {
    font-weight: 600;
  }
}
</style>