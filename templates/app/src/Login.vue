<script setup>
const props = defineProps(['csrf'])
</script>

<template>
  <div class="bg-white rounded-2xl shadow container grid content-between dark:text-black">
    <div class="p-4">
      <header class="flex">
        <img class="logo"  src="/icons/Logo.png">
        <img class="logo-title ml-3" src="/icons/Stuckix.svg">
      </header>

      <form method="post">
        <input type="hidden" name="_csrf_token" :value="props.csrf">
        <div>
          <div class="flex flex-col pt-2 w-min">
            Авторизация
            <div class="border-2 mt-1 rounded border-sky-400"/>
          </div>
          <div class="flex flex-col pt-2 pb-3">
            <label class="flex py-2">
              Ваш аккаунт
            </label>
            <input type="text" name="email" id="" placeholder="Имя пользователя или Email" class="border border-gray-300 rounded pl-3 py-2 dark:bg-white">

            <label class="flex py-2">
              Пароль
            </label>
            <div class="input border border-gray-300 rounded flex justify-between">
              <input name="password" v-if="showPassword" type="text" v-model="password" placeholder="Пароль" class="pl-3 w-full py-2 dark:bg-white">
              <input name="password" v-else type="password" v-model="password" placeholder="Пароль" class="pl-3 w-full py-2 dark:bg-white">
              <button class="eye-button rounded" type="button" @click="toggleShow"></button>
            </div>
          </div>
        </div>

        <footer class="flex justify-between mt-6">
          <button type="submit" class="sign-button rounded font-normal text-white">
            Войти
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

.logo{
  max-width: 50px;
  max-height: 50px;
}

.sign-button{
  background: #2FC6F6;
}

.forget-password{
  color: #2FC6F6;
  cursor: pointer;
}

.eye-button{
  background: url("/icons/eye.svg") no-repeat center;
}

@media (max-width: 768px) {
  .container{
    margin-top: 50px;
    width: 100vw !important;
    height: 100vh !important;
    box-shadow: none;
  }
  header{
    flex-direction: column;
    align-items: center;
  }
  .logo-title{
    margin-left: 0;
    margin-top: 30px;
    width: 164px;
    height: 30px;
  }
  .logo{
    max-width: 93px;
    max-height: 93px;
  }
  form{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
  }
  footer{
    flex-direction: column;
    margin-bottom: 20px;
  }
  .menu-button{

  }
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