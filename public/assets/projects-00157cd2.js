import{_ as l,o as s,c as n,a as t,d as $,t as _,f as y,p as h,b as v,F as g,r as j,g as u,n as S,h as f,i as m,j as w,k as I,e as k}from"./_plugin-vue_export-helper-1d525e5b.js";const L="/icons/arrow-down.svg",P="/icons/token.svg",C="/icons/copy.svg",E="/icons/folder.svg";const r=e=>(h("data-v-1323bd7d"),e=e(),v(),e),B={class:"project-item-container rounded-xl p-4 m-2 w-full flex-col"},N={class:"flex flex-row items-center"},U=["src"],V={class:"text-lg text-left font-semibold text-slate-900"},q=r(()=>t("br",null,null,-1)),A={class:"font-medium text-slate-400 text-sm"},T=r(()=>t("br",null,null,-1)),F=r(()=>t("div",{class:"project-delimiter ml-4 mr-4"},null,-1)),H={class:"text-left text-lg text-slate-500 flex items-center"},O=r(()=>t("img",{src:L,alt:""},null,-1)),W={key:0,class:"flex flex-col w-full justify-between"},z={class:"flex flex-row w-full m-5"},D=r(()=>t("img",{src:P,alt:"",class:"mr-4"},null,-1)),G={class:"flex flex-col"},J=r(()=>t("div",{class:"text-md text-left"},"Ключ токен:",-1)),K={class:"text-md flex flex-row"},M=r(()=>t("img",{src:C,alt:"",class:"mr-1"},null,-1)),Q={class:"flex flex-row m-5"},R=r(()=>t("img",{src:E,alt:"",class:"mr-4"},null,-1)),X={class:"flex flex-col"},Y=r(()=>t("div",{class:"text-md text-left"},"Путь до проекта:",-1)),Z={class:"text-md text-blue-300"},ee={data(){return{expanded:this.$props.project.expanded}},methods:{toggleExpanded(){this.expanded=!this.expanded}}},te=Object.assign(ee,{__name:"ProjectListItem",props:["project"],setup(e){function d(o){return"/icons/environment/"+o+".svg"}function c(o){navigator.clipboard.writeText(o)}return(o,i)=>(s(),n("div",B,[t("div",{class:"flex flex-row w-full justify-between",onClick:i[0]||(i[0]=(...p)=>o.toggleExpanded&&o.toggleExpanded(...p))},[t("div",N,[t("img",{src:d(e.project.type),alt:"",class:"inline mr-4"},null,8,U),t("div",V,[$(_(e.project.title)+" ",1),q,t("span",A,_(e.project.description),1)]),T,F,t("span",H," Ошибки: "+_(e.project.issuesCount),1)]),O]),o.expanded?(s(),n("div",W,[t("div",z,[D,t("div",G,[J,t("div",K,[t("div",{class:"mr-6 text-blue-300",ref:"token"},_(e.project.token),513),t("div",{class:"flex flex-row text-sm cursor-pointer",onClick:i[1]||(i[1]=p=>c(e.project.token))},[M,$(" скопировать ")])])])]),t("div",Q,[R,t("div",X,[Y,t("div",Z,_(e.project.projectPath),1)])])])):y("",!0)]))}}),se=l(te,[["__scopeId","data-v-1323bd7d"]]),oe="/icons/empty-states/projects.svg";const ce={},x=e=>(h("data-v-df018075"),e=e(),v(),e),ne={class:"empty-state"},ie=x(()=>t("img",{src:oe,alt:"empty state projects"},null,-1)),ae=x(()=>t("div",{class:"empty-state-text"},"У вас еще нет добавленных проектов",-1)),re=x(()=>t("a",{class:"empty-state-button",href:"/projectAdd.html"},"Добавить проект",-1)),de=[ie,ae,re];function _e(e,d){return s(),n("div",ne,de)}const le=l(ce,[["render",_e],["__scopeId","data-v-df018075"]]);const pe=e=>(h("data-v-a6656eee"),e=e(),v(),e),me={key:0,class:"project-list-container"},ue=pe(()=>t("div",{class:"font-semibold text-slate-900 text-4xl text-left m-10"},"Проекты",-1)),fe={__name:"ProjectsList",props:["projects"],setup(e){return(d,c)=>e.projects.length?(s(),n("div",me,[ue,(s(!0),n(g,null,j(e.projects,o=>(s(),u(se,{key:o.id,project:o},null,8,["project"]))),128))])):(s(),u(le,{key:1}))}},he=l(fe,[["__scopeId","data-v-a6656eee"]]),ve="/assets/anonim-55566ac4.jpg";const xe={props:{avatar:{required:!1,type:String},email:{required:!0,type:String},name:{required:!0,type:String}}},$e={class:"projects-sidebar-title-container"},ge={class:"sidebar-user"},je=["src"],be={key:1,class:"avatar",width:"33",height:"33",src:ve},ye={class:"projects-sidebar-title-textblock"},Se={class:"projects-sidebar-title-username"},we={class:"projects-sidebar-title-email"};function Ie(e,d,c,o,i,p){return s(),n("div",$e,[t("div",ge,[e.$props.avatar?(s(),n("img",{key:0,class:"avatar",width:"33",height:"33",src:c.avatar,alt:"user avatar"},null,8,je)):(s(),n("img",be))]),t("div",ye,[t("div",Se,_(e.$props.name),1),t("div",we,_(e.$props.email),1)])])}const ke=l(xe,[["render",Ie],["__scopeId","data-v-92b327dc"]]);const Le={props:{items:Array,id:String}},Pe={class:"sidebar-items-container"},Ce=["href"],Ee=["src"],Be={class:"sidebar-item-text"};function Ne(e,d,c,o,i,p){return s(),n("div",Pe,[(s(!0),n(g,null,j(c.items,a=>(s(),n("a",{class:S(["sidebar-item",[a.id===e.$props.id?"sidebar-item-active":""]]),href:a.path,key:a.id},[t("img",{class:"sidebar-item-icon",src:a.icon},null,8,Ee),t("div",Be,_(a.title),1)],10,Ce))),128))])}const Ue=l(Le,[["render",Ne],["__scopeId","data-v-53977a2f"]]);const Ve={components:{SidebarItemList:Ue,SidebarUser:ke},props:{user:Object,id:String},data(){return{itemsList:[{id:"issues",title:"Ошибки",icon:"/icons/issues.svg",path:"issues.html"},{id:"projects",title:"Проекты",icon:"/icons/projects.svg",path:"projects.html"}]}}},qe={class:"projects-sidebar"},Ae={class:"sidebar-content"};function Te(e,d,c,o,i,p){const a=f("SidebarUser"),b=f("SidebarItemList");return s(),n("div",qe,[t("div",Ae,[m(a,{name:c.user.name,email:c.user.email},null,8,["name","email"]),m(b,{id:c.id,items:i.itemsList},null,8,["id","items"])])])}const Fe=l(Ve,[["render",Te],["__scopeId","data-v-f4ffa7d8"]]);const He={components:{Sidebar:Fe},props:{id:String},data(){return{user:{name:"aaa",email:"bbb"}}}},Oe={class:"projects-container"};function We(e,d,c,o,i,p){const a=f("Sidebar");return s(),n("div",Oe,[m(a,{id:c.id,user:{name:"Главный поцеху",email:"some@mail.ru"}},null,8,["id","user"]),w(e.$slots,"default",{},void 0,!0)])}const ze=l(He,[["render",We],["__scopeId","data-v-d5d41c62"]]),De={__name:"Projects",props:["projects"],setup(e){return(d,c)=>(s(),u(ze,{id:"projects"},{default:I(()=>[m(he,{projects:e.projects},null,8,["projects"])]),_:1}))}};k(De,window.pageParams).mount("#app");
