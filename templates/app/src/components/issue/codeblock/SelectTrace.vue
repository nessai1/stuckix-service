<script setup>
</script>

<script>
export default {
  props: {
    context: Object,
  }
}
</script>
<template>
  <li
      :class="selected ? 'selected' : ''"
  >
    <div class="row">
      {{ context.line_number }}
    </div>
    <div class="file">
      <span>
        {{ context.abs_path }}
      </span>
    </div>
  </li>
</template>
<style lang="scss" scoped>
li {

  &:hover {
    background-color: #DEF6FF;
  }
  cursor: pointer;
  background-color: #F0FBFF;
  width: max-content;
  display: flex;

  .row {
    color: #2FC6F6;
    padding: 19px;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    letter-spacing: -0.024px;
    border-right: 1px #A5E9FF solid;
  }

  .file {
    padding: 8px;
    color: #009BCC;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    letter-spacing: -0.028px;
  }
}

.selected {
  background-color: #DEF6FF !important;
  .row {
    border-right: 1px #2FC6F6 solid !important;
  }
}

</style>