import{_ as m}from"./_plugin-vue_export-helper.js";import{o,c as l,a as t,d as _,t as n,f as g,p as x,b as f,F as y,r as w,g as p,h as $,i as k,e as b}from"./vendor.js";import{H as I}from"./HeadWrapper.js";const P="/icons/arrow-down.svg",L="/icons/token.svg",S="/icons/copy.svg",C="/icons/folder.svg";const s=e=>(x("data-v-ed469202"),e=e(),f(),e),E={class:"project-item-container rounded-xl p-4 m-2 w-full flex-col"},B={class:"flex flex-row items-center"},N=["src"],V={class:"text-lg text-left font-semibold text-slate-900"},A=s(()=>t("br",null,null,-1)),T={class:"font-medium text-slate-400 text-sm"},F=s(()=>t("br",null,null,-1)),H=s(()=>t("div",{class:"project-delimiter ml-4 mr-4"},null,-1)),D={class:"text-left text-lg text-slate-500 flex items-center"},O=s(()=>t("img",{src:P,alt:""},null,-1)),W={key:0,class:"flex flex-col w-full justify-between"},q={class:"flex flex-row w-full m-5"},z=s(()=>t("img",{src:L,alt:"",class:"mr-4"},null,-1)),G={class:"flex flex-col"},J=s(()=>t("div",{class:"text-md text-left"},"Ключ токен:",-1)),K={class:"text-md flex flex-row"},M=s(()=>t("img",{src:S,alt:"",class:"mr-1"},null,-1)),Q={class:"flex flex-row m-5"},R=s(()=>t("img",{src:C,alt:"",class:"mr-4"},null,-1)),U={class:"flex flex-col"},X=s(()=>t("div",{class:"text-md text-left"},"Путь до проекта:",-1)),Y={class:"text-md text-blue-300"},Z={data(){return{expanded:this.$props.project.expanded}},methods:{toggleExpanded(){this.expanded=!this.expanded}}},tt=Object.assign(Z,{__name:"ProjectListItem",props:["project"],setup(e){const i=e;function d(c){return"/icons/environment/"+c+".svg"}function r(c){navigator.clipboard.writeText(c)}const j="/project/"+i.project.token+"/issues";return(c,a)=>(o(),l("div",E,[t("div",{class:"flex flex-row w-full justify-between",onClick:a[0]||(a[0]=(...h)=>c.toggleExpanded&&c.toggleExpanded(...h))},[t("div",B,[t("img",{src:d(e.project.type),alt:"",class:"inline mr-4"},null,8,N),t("div",V,[_(n(e.project.title)+" ",1),A,t("span",T,n(e.project.description),1)]),F,H,t("span",D,[_(" Ошибки: "+n(e.project.issuesCount)+" ",1),t("a",{style:{"margin-left":"20px"},href:j},"Список ошибок")])]),O]),c.expanded?(o(),l("div",W,[t("div",q,[z,t("div",G,[J,t("div",K,[t("div",{class:"mr-6 text-blue-300",ref:"token"},n(e.project.token),513),t("div",{class:"flex flex-row text-sm cursor-pointer",onClick:a[1]||(a[1]=h=>r(e.project.token))},[M,_(" скопировать ")])])])]),t("div",Q,[R,t("div",U,[X,t("div",Y,n(e.project.projectPath),1)])])])):g("",!0)]))}}),et=m(tt,[["__scopeId","data-v-ed469202"]]),st="/icons/empty-states/projects.svg";const ot={},u=e=>(x("data-v-df018075"),e=e(),f(),e),ct={class:"empty-state"},nt=u(()=>t("img",{src:st,alt:"empty state projects"},null,-1)),lt=u(()=>t("div",{class:"empty-state-text"},"У вас еще нет добавленных проектов",-1)),it=u(()=>t("a",{class:"empty-state-button",href:"/projectAdd.html"},"Добавить проект",-1)),rt=[nt,lt,it];function at(e,i){return o(),l("div",ct,rt)}const dt=m(ot,[["render",at],["__scopeId","data-v-df018075"]]);const v=e=>(x("data-v-9f768497"),e=e(),f(),e),_t={key:0,class:"project-list-container"},pt=v(()=>t("div",{class:"font-semibold text-slate-900 text-4xl text-left ml-2 mb-6"},"Проекты",-1)),mt=v(()=>t("a",{href:"/projectAdd.html",class:"text-xl text-left m-3"},"Добавить проект",-1)),xt={__name:"ProjectsList",props:["projects"],setup(e){return(i,d)=>e.projects.length?(o(),l("div",_t,[pt,mt,(o(!0),l(y,null,w(e.projects,r=>(o(),p(et,{key:r.id,project:r},null,8,["project"]))),128))])):(o(),p(dt,{key:1}))}},ft=m(xt,[["__scopeId","data-v-9f768497"]]),ut={__name:"Projects",props:["projects"],setup(e){return(i,d)=>(o(),p(I,{id:"projects"},{default:$(()=>[k(ft,{projects:e.projects},null,8,["projects"])]),_:1}))}};b(ut,window.pageParams).mount("#app");
