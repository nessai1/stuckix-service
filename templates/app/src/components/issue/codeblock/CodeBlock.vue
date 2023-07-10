<script setup>
import Stack from "./Stack.vue";
const props = defineProps(['issue']);

function getPath(issue)
{
  return issue.exception.stacktrace.contexts.pop().abs_path;
}

function getErrorLine(issue)
{
  return issue.exception.stacktrace.contexts.pop().line_number;
}

</script>

<template>
  <div class="w-full border rounded-md code-block mt-3">
    <div>
      <div class="main-info border-b-2">
        <span>Ошибкa</span>
        <p>
          {{props.issue.exception.value}}
        </p>
      </div>
      <div class="error-info w-full border-b-2">
        <p>{{getPath(props.issue)}}</p>
      </div>
    </div>
    <Stack :issue="props.issue"/>
  </div>
</template>
<style lang="scss" scoped>
  .code-block {
    background-color: #FCFCFC;
    border-color: #E0E0E0;
  }

  .main-info {
    padding: 16px 16px;
    span {
      color: #0A0A0A;
      font-size: 20px;
      font-style: normal;
      font-weight: 500;
      line-height: 24px;
    }

    p {
      color: #727272;
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      letter-spacing: -0.028px;
    }
  }

  .error-info {
    padding: 12px 16px;
    span {
      color: #A1A1A1;
      font-size: 12px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      letter-spacing: -0.024px;
    }

    p {
      color: #727272;
      font-size: 14px;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      letter-spacing: -0.028px;
    }
  }
</style>