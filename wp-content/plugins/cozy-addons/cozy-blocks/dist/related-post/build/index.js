(()=>{"use strict";var e,t={444:()=>{const e=window.wp.blocks,t=window.React,l=window.wp.i18n,o=window.wp.blockEditor,r=window.wp.components,n=window.wp.element,i=window.wp.compose,a=(0,n.memo)((({postsPerPage:e})=>{const l=(0,o.useInnerBlocksProps)({className:"cozy-block-related-post"},{template:[["core/query",{queryId:0,query:{perPage:e,postType:"post",parents:["cozy-block/related-post"],order:"desc"},lock:{move:!1,remove:!0}},[["core/post-template",{lock:{move:!1,remove:!0}},[["core/post-featured-image"],["core/post-title",{level:4,isLink:!0}],["core/post-date"],["core/post-excerpt",{excerptLength:29}]]]]]]});return(0,t.createElement)("div",{...l})})),c=(0,n.memo)((({clientId:e,attributes:l})=>{const[o,r]=(0,n.useState)(3),c=(0,i.useRefEffect)((e=>{r(l.postsPerPage);const t=[{property:"--cozyGridTemplateColumns",value:l.gridOptions.displayColumn},{property:"--cozyGridGap",value:`${l.gridOptions.columnGap}px`}];null!==e&&t.forEach((t=>{e.style.setProperty(t.property,t.value)}))}),[l]);return(0,t.createElement)("div",{className:"cozy-block-related-posts-wrapper",id:`cozyBlock_${e.replace(/-/gi,"_")}`,ref:c},(0,t.createElement)(a,{postsPerPage:o}))})),s=JSON.parse('{"u2":"cozy-block/related-post","WL":"Uncover additional relevant content using our \'Related Post\' block, offering curated suggestions tailored to your interests for an engaging exploration of aligned topics."}'),p=(0,t.createElement)("svg",{width:"27",height:"21",viewBox:"0 0 27 21",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,t.createElement)("rect",{fill:"none",x:"1",y:"1",width:"25",height:"19",stroke:"#0C50FF","stroke-width":"2"}),(0,t.createElement)("rect",{x:"4",y:"4",width:"9",height:"7",fill:"#0C50FF","fill-opacity":"0.5"}),(0,t.createElement)("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M4 13.5V12.5H10V13.5H4Z",fill:"#0C50FF","fill-opacity":"0.5"}),(0,t.createElement)("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M4 15V14H13V15H4Z",fill:"#0C50FF","fill-opacity":"0.5"}),(0,t.createElement)("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M4 16.5V15.5H8V16.5H4Z",fill:"#0C50FF","fill-opacity":"0.5"}),(0,t.createElement)("rect",{x:"14",y:"4",width:"9",height:"7",fill:"#0C50FF","fill-opacity":"0.5"}),(0,t.createElement)("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M14 13.5V12.5H20V13.5H14Z",fill:"#0C50FF","fill-opacity":"0.5"}),(0,t.createElement)("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M14 15V14H23V15H14Z",fill:"#0C50FF","fill-opacity":"0.5"}),(0,t.createElement)("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M14 16.5V15.5H18V16.5H14Z",fill:"#0C50FF","fill-opacity":"0.5"}));(0,e.registerBlockType)(s.u2,{title:(0,l.__)("Related Post","cozy-addons"),description:(0,l.__)(s.WL,"cozy-addons"),icon:{src:p},example:{attributes:{cover:cozyBlockAssets.imageDir+"/preview_related_post.jpg"},viewportWidth:1200},edit:function({attributes:e,setAttributes:n,clientId:i}){if(e.cover)return(0,t.createElement)("img",{src:e.cover});e.blockClientId=i;const a=(0,o.useBlockProps)({className:"cozy-block-wrapper"});return(0,t.createElement)(t.Fragment,null,(0,t.createElement)("div",{...a},(0,t.createElement)(c,{clientId:i,attributes:e})),(0,t.createElement)(o.InspectorControls,{key:"setting",group:"settings"},(0,t.createElement)(r.PanelBody,{title:(0,l.__)("General","cozy-addons")},(0,t.createElement)(r.TextControl,{label:(0,l.__)("Display Column","cozy-addons"),value:e.gridOptions.displayColumn,onChange:t=>n({...e,gridOptions:{...e.gridOptions,displayColumn:t}}),type:"number",min:1,step:1,max:5}),(0,t.createElement)(r.RangeControl,{label:(0,l.__)("Column gap","cozy-addons"),value:e.gridOptions.columnGap,onChange:t=>n({...e,gridOptions:{...e.gridOptions,columnGap:t}}),min:1,step:1,max:100}))))},save:function({attributes:e}){const{blockClientId:l}=e;return(0,t.createElement)(t.Fragment,null,(0,t.createElement)("div",{className:"cozy-block-related-posts-wrapper",id:`cozyBlock_${l.replace(/-/gi,"_")}`},(0,t.createElement)(o.InnerBlocks.Content,null)))}})}},l={};function o(e){var r=l[e];if(void 0!==r)return r.exports;var n=l[e]={exports:{}};return t[e](n,n.exports,o),n.exports}o.m=t,e=[],o.O=(t,l,r,n)=>{if(!l){var i=1/0;for(p=0;p<e.length;p++){for(var[l,r,n]=e[p],a=!0,c=0;c<l.length;c++)(!1&n||i>=n)&&Object.keys(o.O).every((e=>o.O[e](l[c])))?l.splice(c--,1):(a=!1,n<i&&(i=n));if(a){e.splice(p--,1);var s=r();void 0!==s&&(t=s)}}return t}n=n||0;for(var p=e.length;p>0&&e[p-1][2]>n;p--)e[p]=e[p-1];e[p]=[l,r,n]},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={826:0,431:0};o.O.j=t=>0===e[t];var t=(t,l)=>{var r,n,[i,a,c]=l,s=0;if(i.some((t=>0!==e[t]))){for(r in a)o.o(a,r)&&(o.m[r]=a[r]);if(c)var p=c(o)}for(t&&t(l);s<i.length;s++)n=i[s],o.o(e,n)&&e[n]&&e[n][0](),e[n]=0;return o.O(p)},l=globalThis.webpackChunkrelated_post=globalThis.webpackChunkrelated_post||[];l.forEach(t.bind(null,0)),l.push=t.bind(null,l.push.bind(l))})();var r=o.O(void 0,[431],(()=>o(444)));r=o.O(r)})();