<script setup>

</script>

<template>
  <div class="bg-white rounded-2xl shadow container grid content-between">
    <div class="p-4">
      <header class="flex">
        <img class="logo"  src="../public/icons/Logo.png">
        <img class="logo-title ml-3" src="../public/icons/Stuckix.svg">
      </header>

      <form action="" method="">
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
              <input v-if="showPassword" type="text" v-model="password" placeholder="Пароль" class="pl-3 w-full py-2">
              <input v-else type="password" v-model="password" placeholder="Пароль" class="pl-3 w-full py-2">
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

.logo{
  max-width: 50px;
  max-height: 50px;
}

.sign-button{
  background: #2FC6F6;
}

.eye-button{
  background: url("../public/icons/eye.svg") no-repeat center;
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