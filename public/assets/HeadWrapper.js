import{_ as o,o as a,c as i,a as r,t as l,F as v,r as b,n as h,l as p,i as m,m as f}from"./_plugin-vue_export-helper.js";const $="/anonim.jpg";const g={props:{avatar:{required:!1,type:String},email:{required:!0,type:String},name:{required:!0,type:String}}},S={class:"projects-sidebar-title-container"},y={class:"sidebar-user"},j=["src"],I={key:1,class:"avatar",width:"33",height:"33",src:$},x={class:"projects-sidebar-title-textblock"},L={class:"projects-sidebar-title-username"},k={class:"projects-sidebar-title-email"};function U(t,c,e,d,n,_){return a(),i("div",S,[r("div",y,[t.$props.avatar?(a(),i("img",{key:0,class:"avatar",width:"33",height:"33",src:e.avatar,alt:"user avatar"},null,8,j)):(a(),i("img",I))]),r("div",x,[r("div",L,l(t.$props.name),1),r("div",k,l(t.$props.email),1)])])}const q=o(g,[["render",U],["__scopeId","data-v-92b327dc"]]);const B={props:{items:Array,id:String}},H={class:"sidebar-items-container"},w=["href"],C=["src"],F={class:"sidebar-item-text"};function N(t,c,e,d,n,_){return a(),i("div",H,[(a(!0),i(v,null,b(e.items,s=>(a(),i("a",{class:h(["sidebar-item",[s.id===t.$props.id?"sidebar-item-active":""]]),href:s.path,key:s.id},[r("img",{class:"sidebar-item-icon",src:s.icon},null,8,C),r("div",F,l(s.title),1)],10,w))),128))])}const V=o(B,[["render",N],["__scopeId","data-v-53977a2f"]]);const W={components:{SidebarItemList:V,SidebarUser:q},props:{user:Object,id:String},data(){return{itemsList:[{id:"issues",title:"Ошибки",icon:"/icons/issues.svg",path:"issues.html"},{id:"projects",title:"Проекты",icon:"/icons/projects.svg",path:"projects.html"}]}}},z={class:"projects-sidebar"},A={class:"sidebar-content"};function D(t,c,e,d,n,_){const s=p("SidebarUser"),u=p("SidebarItemList");return a(),i("div",z,[r("div",A,[m(s,{name:e.user.name,email:e.user.email},null,8,["name","email"]),m(u,{id:e.id,items:n.itemsList},null,8,["id","items"])])])}const E=o(W,[["render",D],["__scopeId","data-v-f4ffa7d8"]]);const O={components:{Sidebar:E},props:{id:String},data(){return{user:{name:"aaa",email:"bbb"}}}},G={class:"projects-container"};function J(t,c,e,d,n,_){const s=p("Sidebar");return a(),i("div",G,[m(s,{id:e.id,user:{name:"Главный поцеху",email:"some@mail.ru"}},null,8,["id","user"]),f(t.$slots,"default",{},void 0,!0)])}const M=o(O,[["render",J],["__scopeId","data-v-d5d41c62"]]);export{M as H};
