import{S as d}from"./Caret.da0d1a59.js";import{r as m,o as a,b as u,w as p,a as o,c as l,e as n,I as _,d as f,f as r,J as v,L as y}from"./vue.runtime.esm-bundler.ba5c08e0.js";import{_ as h}from"./_plugin-vue_export-helper.80405f63.js";const w={emits:["close"],components:{SvgClose:d},props:{classes:{type:Array,default(){return[]}},noHeader:Boolean,isolate:Boolean,allowOverflow:Boolean,confirmation:Boolean},methods:{scrollToElement(){const e=this.$el.getElementsByClassName("component-wrapper")[0];setTimeout(()=>{e&&(e.firstChild.scrollTop=0)},10)},escapeListener(e){e.key==="Escape"&&!this.confirmation&&this.$emit("close")}},mounted(){document.addEventListener("keydown",this.escapeListener),this.scrollToElement(),this.isolate&&document.body.appendChild(this.$el)},beforeUnmount(){document.removeEventListener("click",this.escapeListener)}},C={class:"modal-mask"},$={class:"modal-wrapper"},k={class:"modal-container"},g={key:0,class:"modal-header"},B={class:"modal-body"},L={key:1,class:"modal-container__footer"};function b(e,s,t,E,T,A){const i=m("svg-close");return a(),u(y,{name:"modal"},{default:p(()=>[o("div",{class:v(["aioseo-modal",[{"aioseo-app":t.isolate,"allow-overflow":t.allowOverflow},...t.classes]])},[o("div",C,[o("div",$,[o("div",k,[t.noHeader?r("",!0):(a(),l("div",g,[n(e.$slots,"header",{},()=>[n(e.$slots,"headerTitle"),o("button",{class:"close",type:"button",onClick:s[1]||(s[1]=_(c=>e.$emit("close"),["stop"]))},[f(i,{onClick:s[0]||(s[0]=c=>e.$emit("close"))})])])])),o("div",B,[n(e.$slots,"body")]),e.$slots.footer?(a(),l("div",L,[n(e.$slots,"footer")])):r("",!0)])])])],2)]),_:3})}const x=h(w,[["render",b]]);export{x as C};
