import{_ as c,o as l,c as n,a as s,w as r,v as p,p as u,b as _,d as w,e as b}from"./_plugin-vue_export-helper-032fb438.js";const h="/assets/Logo-56df1614.png",f="/assets/Stuckix-96bcb4b1.svg";const t=d=>(u("data-v-be81e4bd"),d=d(),_(),d),m={class:"bg-white rounded-2xl shadow container grid content-between dark:text-black"},g={class:"p-4"},y=t(()=>s("header",{class:"flex"},[s("img",{class:"logo",src:h}),s("img",{class:"logo-title ml-3",src:f})],-1)),v={method:"post"},x=["value"],k=t(()=>s("div",{class:"flex flex-col pt-2 w-min"},[w(" Регистрация "),s("div",{class:"border-2 mt-1 rounded border-sky-400"})],-1)),S={class:"flex flex-col pt-2 pb-3"},L=t(()=>s("label",{class:"flex py-2"}," Ваш аккаунт ",-1)),P=t(()=>s("input",{type:"text",name:"",id:"",placeholder:"Имя пользователя или Email",class:"border border-gray-300 rounded pl-3 py-2"},null,-1)),I=t(()=>s("label",{class:"flex py-2"}," Пароль ",-1)),V={class:"input border border-gray-300 rounded flex justify-between"},j=t(()=>s("footer",{class:"flex justify-between mt-6"},[s("button",{type:"submit",class:"sign-button rounded font-normal text-white"}," Зарегистрироваться ")],-1)),B={data(){return{showPassword:!1,password:null}},computed:{buttonLabel(){return this.showPassword?"Hide":"Show"}},methods:{toggleShow(){this.showPassword=!this.showPassword}}},E=Object.assign(B,{__name:"Login",props:["csrf"],setup(d){const i=d;return(e,o)=>(l(),n("div",m,[s("div",g,[y,s("form",v,[s("input",{type:"hidden",name:"_csrf_token",value:i.csrf},null,8,x),s("div",null,[k,s("div",S,[L,P,I,s("div",V,[e.showPassword?r((l(),n("input",{key:0,name:"password",type:"text","onUpdate:modelValue":o[0]||(o[0]=a=>e.password=a),placeholder:"Пароль",class:"pl-3 w-full py-2 dark:bg-white"},null,512)),[[p,e.password]]):r((l(),n("input",{key:1,name:"password",type:"password","onUpdate:modelValue":o[1]||(o[1]=a=>e.password=a),placeholder:"Пароль",class:"pl-3 w-full py-2 dark:bg-white"},null,512)),[[p,e.password]]),s("button",{class:"eye-button rounded",type:"button",onClick:o[2]||(o[2]=(...a)=>e.toggleShow&&e.toggleShow(...a))})])])]),j])])]))}}),N=c(E,[["__scopeId","data-v-be81e4bd"]]);b(N,{csrf:window.auth_csrf}).mount("#app");