import{f as C}from"./links.4c32e7b9.js";import{C as L}from"./Blur.36d19f95.js";import{C as I}from"./SettingsRow.d0f3e207.js";import{S as w}from"./Plus.3b9712cb.js";import{r as e,o as l,c as g,d as t,w as i,a as o,t as n,D as m,b as h,f}from"./vue.runtime.esm-bundler.ba5c08e0.js";import{_ as $}from"./_plugin-vue_export-helper.80405f63.js";import{R as B}from"./RequiredPlans.cbedd1ac.js";import{C as k}from"./Card.95fd844a.js";import{C as U}from"./ProBadge.a2777953.js";import{C as P}from"./Index.f352280d.js";import{C as z}from"./Cta.e15cd5d7.js";import{A}from"./AddonConditions.50466020.js";import"./default-i18n.3881921e.js";import"./isArrayLikeObject.ab8f4241.js";import"./Row.76881ed1.js";import"./addons.2b4a9919.js";import"./upperFirst.7faab9f8.js";import"./_stringToArray.4de3b1f3.js";import"./toString.7b877a36.js";import"./license.afc1306d.js";import"./index.df267eaa.js";import"./Caret.da0d1a59.js";import"./Tooltip.d28f6bf4.js";import"./Slide.3af65e43.js";import"./constants.238e5b7b.js";const D={components:{CoreBlur:L,CoreSettingsRow:I,SvgCirclePlus:w},data(){return{strings:{description:this.$t.sprintf(this.$t.__("Whether your business has multiple locations, or just one, %1$s makes it easy to configure and display relevant information about your local business. You can use the custom-built tools below, or you can use the Locations custom post type (multiple locations only) to generate relevant and necessary information for search engines or for your customers.",this.$td),"AIOSEO"),name:this.$t.__("name",this.$td),nameDesc:this.$t.__("Your name or company name.",this.$td),businessType:this.$t.__("Type",this.$td),urls:this.$t.__("URLs",this.$td),image:this.$t.__("Image",this.$td),uploadOrSelectImage:this.$t.__("Upload or Select Image",this.$td),pasteYourImageUrl:this.$t.__("Paste your image URL or select a new image",this.$td),minimumSize:this.$t.__("Minimum size: 112px x 112px, The image must be in JPG, PNG, GIF, SVG, or WEBP format.",this.$td),remove:this.$t.__("Remove",this.$td),websiteDesc:this.$t.__("Website URL:",this.$td),aboutDesc:this.$t.__("About Page URL:",this.$td),contactDesc:this.$t.__("Contact Page URL:",this.$td)},businessTypes:[{label:this.$t.__("default",this.$td),value:"LocalBusiness"},{label:this.$t.__("Animal Shelter",this.$td),value:"Animal Shelter"}]}}},R={class:"aioseo-locations-blur"},T={class:"aioseo-settings-row"},O={class:"aioseo-col col-xs-12 text-xs-left"},G={class:"field-description"},V={class:"image-upload"},E={class:"aioseo-description"},N={class:"aioseo-col col-xs-12 text-xs-left"},Y={class:"aioseo-col col-xs-12 text-xs-left"},q={class:"field-description"},M={class:"aioseo-col col-xs-12 text-xs-left"},W={class:"field-description mt-8"},F={class:"aioseo-col col-xs-12 text-xs-left"},H={class:"field-description mt-8"};function j(r,b,y,p,s,x){const a=e("base-input"),c=e("core-settings-row"),u=e("svg-circle-plus"),_=e("base-button"),d=e("base-select"),S=e("core-blur");return l(),g("div",R,[t(S,null,{default:i(()=>[o("div",T,n(s.strings.description),1),t(c,{name:s.strings.name,class:"info-name-row",align:""},{content:i(()=>[o("div",O,[t(a,{type:"text",size:"medium"}),o("span",G,n(s.strings.nameDesc),1)])]),_:1},8,["name"]),t(c,{class:"info-business-image",name:s.strings.image},{content:i(()=>[o("div",V,[t(a,{size:"medium",placeholder:s.strings.pasteYourImageUrl},null,8,["placeholder"]),t(_,{class:"insert-image",size:"medium",type:"black"},{default:i(()=>[t(u),m(" "+n(s.strings.uploadOrSelectImage),1)]),_:1}),t(_,{class:"remove-image",size:"medium",type:"gray"},{default:i(()=>[m(n(s.strings.remove),1)]),_:1})]),o("div",E,n(s.strings.minimumSize),1)]),_:1},8,["name"]),t(c,{name:s.strings.businessType,class:"info-business-type",align:""},{content:i(()=>[t(d,{size:"large",options:s.businessTypes,modelValue:"default"},null,8,["options"])]),_:1},8,["name"]),t(c,{name:s.strings.urls,class:"info-urls-row",align:""},{content:i(()=>[o("div",N,[o("div",Y,[o("span",q,n(s.strings.websiteDesc),1),t(a,{type:"text",size:"medium"})]),o("div",M,[o("span",W,n(s.strings.aboutDesc),1),t(a,{type:"text",size:"medium"})]),o("div",F,[o("span",H,n(s.strings.contactDesc),1),t(a,{type:"text",size:"medium"})])])]),_:1},8,["name"])]),_:1})])}const J=$(D,[["render",j]]);const K={setup(){return{licenseStore:C()}},components:{Blur:J,RequiredPlans:B,CoreCard:k,CoreProBadge:U,Cta:P},data(){return{features:[this.$t.__("Local Business Schema",this.$td),this.$t.__("Multiple Locations",this.$td),this.$t.__("Business Info and Location blocks, widgets and shortcodes",this.$td),this.$t.__("Detailed Address, Contact and Payment Info",this.$td)],strings:{locationInfo1:this.$t.__("Local Business schema markup informs Google about your business details like name, address, phone number, hours, and price range, which can appear in a Knowledge Graph card or business carousel.",this.$td),businessInfo:this.$t.__("Business Info",this.$td),ctaButtonText:this.$t.__("Unlock Local SEO",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Local SEO is a %1$s Feature",this.$td),"PRO")}}}},Q={class:"aioseo-locations-lite"};function X(r,b,y,p,s,x){const a=e("core-pro-badge"),c=e("blur"),u=e("required-plans"),_=e("cta"),d=e("core-card");return l(),g("div",Q,[t(d,{slug:"localBusinessInfo",class:"aioseo-locations-card",noSlide:!0},{header:i(()=>[o("span",null,n(s.strings.businessInfo),1),t(a)]),default:i(()=>[t(c),t(_,{"cta-link":r.$links.getPricingUrl("local-seo","local-seo-upsell","locations"),"button-text":s.strings.ctaButtonText,"learn-more-link":r.$links.getUpsellUrl("local-seo",null,r.$isPro?"pricing":"liteUpgrade"),"feature-list":s.features,"align-top":"","hide-bonus":!p.licenseStore.isUnlicensed},{"header-text":i(()=>[m(n(s.strings.ctaHeader),1)]),description:i(()=>[t(u,{addon:"aioseo-local-business"}),m(" "+n(s.strings.locationInfo1),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list","hide-bonus"])]),_:1})])}const v=$(K,[["render",X]]),Z={mixins:[A],components:{Locations:v,Cta:z,Lite:v},data(){return{addonSlug:"aioseo-local-business",strings:{businessInfo:this.$t.__("Business Info",this.$td)}}}},ss={class:"aioseo-locations"};function ts(r,b,y,p,s,x){const a=e("locations",!0),c=e("cta"),u=e("lite");return l(),g("div",ss,[r.shouldShowMain?(l(),h(a,{key:0})):f("",!0),r.shouldShowUpdate||r.shouldShowActivate?(l(),h(c,{key:1,"card-slug":"localBusinessInfo","header-text":s.strings.businessInfo,"align-top":""},null,8,["header-text"])):f("",!0),r.shouldShowLite?(l(),h(u,{key:2})):f("",!0)])}const ws=$(Z,[["render",ts]]);export{ws as default};
