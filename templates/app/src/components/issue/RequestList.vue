
<template>
  <div class="mt-8 w-full">
    <div class="border rounded-lg">
      <div id="accordion-collapse-heading-1" class="w-full">
        <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left text-2xl border-gray-200 border-0"
                @click="toggleShowPost">
          <span>Post</span>
          <svg v-if="!showPost" class="w-3 h-3 rotate-180 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
          <svg v-else class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </div>
      <ul v-if="showPost" class="border-t w-full py-4">
        <li class="flex mx-5 my-2 justify-between">
          <div class="border rounded-lg w-1/5 text-left pl-2 py-3" >
            Ключ
          </div>
          <div class="bg-gray-200 rounded-lg w-4/5 text-left pl-2 py-3 ml-3">
            Параметр
          </div>
        </li>
        <li class="flex mx-5 justify-between">
          <div class="border rounded-lg w-1/5 text-left pl-2 py-3" >
            Ключ
          </div>
          <div class="bg-gray-200 rounded-lg w-4/5 text-left pl-2 py-3 ml-3">
            Параметр
          </div>
        </li>
      </ul>
    </div>

    <div class="border rounded-lg mt-6">
      <div class="w-full">
        <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left text-2xl border-gray-200 border-0"
                @click="toggleShowGet">
          <span>Get</span>
          <svg v-if="!showGet" class="w-3 h-3 rotate-180 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
          <svg v-else class="w-3 h-3 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </div>
      <ul v-if="showGet" class="border-t w-full py-4">
        <li class="flex mx-5 my-2 justify-between">
          <div class="border rounded-lg w-1/5 text-left pl-2 py-3" >
            Ключ
          </div>
          <div class="bg-gray-200 rounded-lg w-4/5 text-left pl-2 py-3 ml-3">
            Параметр
          </div>
        </li>
        <li class="flex mx-5 justify-between">
          <div class="border rounded-lg w-1/5 text-left pl-2 py-3" >
            Ключ
          </div>
          <div class="bg-gray-200 rounded-lg w-4/5 text-left pl-2 py-3 ml-3">
            Параметр
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showPost: false,
      showGet: false
    };
  },
  methods:{
    toggleShowPost() {
      this.showPost = !this.showPost;
    },
    toggleShowGet() {
      this.showGet = !this.showGet;
    }
  }
}
</script>