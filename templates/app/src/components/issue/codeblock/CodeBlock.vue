<template>
  <div class="w-full border rounded-md code-block">
    <div>
      <div class="main-info border-b-2">
        <span>Ошибкa</span>
        <p>
          Описание ошибки в строчку, длинное описание ошибки, описание
          ошибки в две строки
        </p>
      </div>
      <div class="error-info w-full border-b-2">
        <span>illuminate\Routing\AbstractRouteCollection::methodNotAllowed</span>
        <p>E:\hrtoolkit\vendor\laravel\framework\src\illuminate</p>
      </div>
    </div>
    <Stack/>
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
<script setup>
import Stack from "./Stack.vue";
</script>