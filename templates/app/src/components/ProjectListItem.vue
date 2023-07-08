<script setup>

function getIconPath(type)
{
  return '/icons/environment/' + type + '.svg';
}

function copyToClipboard(text)
{
  navigator.clipboard.writeText(text);
}

const props = defineProps(['project']);
const issuesLink = "/project/" + props.project.token + "/issues";
</script>

<template>
<div class="project-item-container rounded-xl p-4 m-2 w-full flex-col">
  <div class="flex flex-row w-full justify-between" @click="toggleExpanded">
    <div class="flex flex-row items-center">
      <img :src="getIconPath(project.type)" alt="" class="inline mr-4">
      <div class="text-lg text-left font-semibold text-slate-900">
        {{project.title}} <br>
        <span class="font-medium text-slate-400 text-sm">{{project.description}}</span>
      </div>
      <br>

      <div class="project-delimiter ml-4 mr-4"></div>

      <span class="text-left text-lg text-slate-500 flex items-center">
      Ошибки: {{project.issuesCount}}
        <a style="margin-left: 20px" :href="issuesLink">Список ошибок</a>
    </span>

    </div>
    <img src="/icons/arrow-down.svg" alt="">
  </div>

  <div class="flex flex-col w-full justify-between" v-if="expanded">
    <div class="flex flex-row w-full m-5">
      <img src="/icons/token.svg" alt="" class="mr-4">
      <div class="flex flex-col">
        <div class="text-md text-left">Ключ токен:</div>
        <div class="text-md  flex flex-row">
          <div class="mr-6 text-blue-300" ref="token">{{project.token}}</div>
          <div class="flex flex-row text-sm cursor-pointer" @click="copyToClipboard(project.token)">
            <img src="/icons/copy.svg" alt="" class="mr-1"> скопировать
          </div>
        </div>
      </div>
    </div>

    <div class="flex flex-row m-5">
      <img src="/icons/folder.svg" alt="" class="mr-4">
      <div class="flex flex-col">
        <div class="text-md text-left">Путь до проекта:</div>
        <div class="text-md text-blue-300">
          {{project.projectPath}}
        </div>
      </div>
    </div>
  </div>

</div>
</template>

<style scoped>
.project-item-container {
  display: inline-flex;
  padding: 12px 16px 12px 13px;
  justify-content: space-between;
  align-items: center;
  gap: 8px;
  border: 1px solid #E0E0E0;
  border-radius: 6px;
  background: #FCFCFC;
}

.project-delimiter {
  width: 1px;
  align-self: stretch;
  background: #DEE2E6;
}
</style>

<script>
export default {
  data() {
    return {
      expanded: this.$props.project.expanded,
    };
  },
  methods:{
    toggleExpanded()
    {
      this.expanded = !this.expanded;
    }
  }
}
</script>