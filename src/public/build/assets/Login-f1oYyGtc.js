import{_ as d,o as a,c as r,p,a as h,b as s,r as u,d as g,e as f,w as c,v as l,f as m,F as b,g as v}from"./main-vAkCRR3l.js";const k={},w=o=>(p("data-v-643e1c6d"),o=o(),h(),o),x={class:"loading-wrap"},y=w(()=>s("div",{class:"loading-indicator"},[s("img",{src:"https://i.gifer.com/XOsX.gif",alt:"...Loading"})],-1)),L=[y];function S(o,e){return a(),r("div",x,L)}const I=d(k,[["render",S],["__scopeId","data-v-643e1c6d"]]),V={components:{Skeleton:I},data(){return{user:{name:"",password:""},isLoading:!1}},methods:{handleLogin(){this.isLoading=!0,setTimeout(()=>{this.isLoading=!1},3e3),this.$store.dispatch("auth/loginUser",this.user)}}},C={id:"page-container"},N={id:"main-container"},B={class:"hero-static d-flex align-items-center"},F={class:"content"},T={class:"row justify-content-center push"},U={class:"col-md-8 col-lg-6 col-xl-4"},$={class:"block block-rounded mb-0"},j=v('<div class="block-header block-header-default"><h3 class="block-title">Sign In</h3><div class="block-options"><a class="btn-block-option fs-sm" href="op_auth_reminder.html">Forgot Password?</a><a class="btn-block-option" href="op_auth_signup.html" data-bs-toggle="tooltip" data-bs-placement="left" title="New Account"><i class="fa fa-user-plus"></i></a></div></div>',1),M={class:"block-content"},P={class:"p-sm-3 px-lg-4 px-xxl-5 py-lg-5"},X=s("p",{class:"fw-medium text-muted"}," Welcome, please login. ",-1),A={class:"js-validation-signin"},D={class:"py-3"},E={class:"mb-4"},G={class:"mb-4"},O=s("div",{class:"mb-4"},[s("div",{class:"form-check"},[s("input",{class:"form-check-input",type:"checkbox",value:"",id:"login-remember",name:"login-remember"}),s("label",{class:"form-check-label",for:"login-remember"},"Remember Me")])],-1),R={class:"row mb-4"},W={class:"col-md-6 col-xl-5"},q=s("i",{class:"fa fa-fw fa-sign-in-alt me-1 opacity-50"},null,-1),z=s("div",{class:"fs-sm text-muted text-center"},[s("strong",null,"Created by FGC Techlution"),m(" © "),s("span",{"data-toggle":"year-copy"})],-1);function H(o,e,J,K,t,i){const _=u("Skeleton");return a(),r(b,null,[t.isLoading?(a(),g(_,{key:0})):f("",!0),s("div",C,[s("main",N,[s("div",B,[s("div",F,[s("div",T,[s("div",U,[s("div",$,[j,s("div",M,[s("div",P,[X,s("div",A,[s("div",D,[s("div",E,[c(s("input",{type:"text","onUpdate:modelValue":e[0]||(e[0]=n=>t.user.name=n),class:"form-control form-control-alt form-control-lg",id:"login-username",name:"login-username",placeholder:"Username"},null,512),[[l,t.user.name]])]),s("div",G,[c(s("input",{type:"password","onUpdate:modelValue":e[1]||(e[1]=n=>t.user.password=n),class:"form-control form-control-alt form-control-lg",id:"login-password",name:"login-password",placeholder:"Password"},null,512),[[l,t.user.password]])]),O]),s("div",R,[s("div",W,[s("button",{class:"btn w-100 btn-alt-primary",id:"signin-button",type:"submit",onClick:e[2]||(e[2]=(...n)=>i.handleLogin&&i.handleLogin(...n))},[q,m(" Sign In ")])])])])])])])])]),z])])])])],64)}const Y=d(V,[["render",H]]);export{Y as default};
