<script setup>

</script>

<template>
  <div class="bg-white rounded-2xl shadow container grid content-between">
    <div class="p-4">
      <header class="flex py-4 font-bold text-lg">
        Logo
        Название
      </header>

      <form action="" method="">
        <div class="flex flex-col pt-2 w-min">
          Регистрация
          <div class="border-2 mt-1 rounded border-sky-400"/>
        </div>
        <div class="flex flex-col pt-2 pb-3">
          <label class="flex py-2">
            Логин
          </label>
          <input type="text" name="" id="" placeholder="Login" class="border border-gray-300 rounded pl-3 py-1">

          <label class="flex py-2">
            Пароль
          </label>
          <div class="input border border-gray-300 rounded flex justify-between">
            <input v-if="showPassword" type="text" v-model="password" placeholder="Password" class="pl-3 py-1 w-full">
            <input v-else type="password" v-model="password" placeholder="Password" class="pl-3 py-1 w-full">
            <button class="eye-button rounded" type="button" @click="toggleShow"></button>
          </div>
        </div>

        <footer class="flex justify-between">
          <button type="submit" class="sign-button rounded font-semibold text-white">
            Авторизоваться
          </button>
          <a class="grid content-center forget-password">
            Забыли пароль?
          </a>
        </footer>
      </form>
    </div>
  </div>
</template>

<style scoped>
.container{
  width: 550px;
}

.sign-button{
  background: #2FC6F6;
}

.forget-password{
  color: #2FC6F6;
  cursor: pointer;
}

.eye-button{
  background: url("../public/icons/eye.svg") no-repeat center;
}
</style>

<script>
export default {
  data() {
    return {
      showPassword: false,
      password: null
    };
  },
  computed: {
    buttonLabel() {
      return (this.showPassword) ? "Hide" : "Show";
    }
  },
  methods: {
    toggleShow() {
      this.showPassword = !this.showPassword;
    }
  }
};
</script>