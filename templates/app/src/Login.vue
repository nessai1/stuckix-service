<script setup>
const props = defineProps(['csrf'])
</script>

<template>
  <div class="bg-white rounded-2xl shadow container grid content-between">
    <div class="p-4">
      <header class="flex">
        <img class="logo"  src="../public/icons/Logo.png">
        <img class="logo-title ml-3" src="../public/icons/Stuckix.svg">
      </header>

      <form method="post">
        <input type="hidden" name="_csrf_token" :value="props.csrf">
        <div>
          <div class="flex flex-col pt-2 w-min">
            Регистрация
            <div class="border-2 mt-1 rounded border-sky-400"/>
          </div>
          <div class="flex flex-col pt-2 pb-3">
            <label class="flex py-2">
              Ваш аккаунт
            </label>
            <input type="text" name="" id="" placeholder="Имя пользователя или Email" class="border border-gray-300 rounded pl-3 py-2">

            <label class="flex py-2">
              Пароль
            </label>
            <div class="input border border-gray-300 rounded flex justify-between">
              <input name="password" v-if="showPassword" type="text" v-model="password" placeholder="Пароль" class="pl-3 w-full py-2">
              <input name="password" v-else type="password" v-model="password" placeholder="Пароль" class="pl-3 w-full py-2">
              <button class="eye-button rounded" type="button" @click="toggleShow"></button>
            </div>
          </div>
        </div>

        <footer class="flex justify-between mt-6">
          <button type="submit" class="sign-button rounded font-normal text-white">
            Зарегестрироваться
          </button>
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