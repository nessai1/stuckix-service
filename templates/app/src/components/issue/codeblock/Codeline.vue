<script>
import hljs from "highlight.js";
export default {
  props: {
    line: Number,
    code: String,
    active: {
      type: Boolean,
      default: false,
      required: false,
    }
  },
  computed: {
    codeline() {
      return hljs.highlight(this.code, {language: 'php', }).value
    },

    linestyles() {
      let styles = 'codeline';

      if (this.active)
      {
        styles += ' active';
      }

      return styles;
    }
  }
}
</script>
<template>
  <div :class="linestyles">
    <div class="line">{{line}}</div>
    <div class="code" v-html="codeline"></div>
  </div>
</template>
<style lang="scss" scoped>

  .active {
    .line {
      background-color: rgb(241, 190, 190) !important;
      border-left: 1px solid rgb(220 38 38) !important;
      border-right: 1px solid rgb(220 38 38) !important;
      color: rgb(220 38 38) !important;
    }
    .code {
      background-color: rgb(241, 190, 190) !important;
    }
  }
  .codeline {
    display: flex;
    font-family: 'Roboto Mono', sans-serif;

    &:hover {
      cursor: pointer;
      .line {
        background-color: #d5d5d5;
      }
      .code {
        background-color: #e7e7e7;
      }
    }
    .line {
      max-width: 40px;
      width: 100%;
      color: #A1A1A1;
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      letter-spacing: -0.024px;
      padding: 4px 10px;
      background-color:  #FCFCFC;
      border-left: 1px solid #E0E0E0;
      border-right: 1px solid #E0E0E0;
    }
    .code {
      padding-left: 5px;
      width: 100%;
      background-color: white;
      letter-spacing: -1px !important;
    }
  }
</style>