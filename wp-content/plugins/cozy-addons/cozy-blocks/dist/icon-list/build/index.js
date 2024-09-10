(()=>{"use strict";var e,t={848:()=>{const e=window.wp.blocks,t=window.React,o=window.wp.i18n,n=window.wp.blockEditor,l=window.wp.components,a=window.wp.data,i=window.wp.primitives,r=(0,t.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"-2 -2 24 24"},(0,t.createElement)(i.Path,{d:"M10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm0 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zm1-11H9v3H6v2h3v3h2v-3h3V9h-3V6zM10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm0 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zm1-11H9v3H6v2h3v3h2v-3h3V9h-3V6z"})),c=window.wp.element,s=()=>(0,t.createElement)(t.Fragment,null,(0,t.createElement)("div",{style:{display:"flex",flexDirection:"column",justifyContent:"center",alignItems:"center",padding:"16px",marginBottom:"10px"}},(0,t.createElement)("p",null,(0,t.createElement)("svg",{width:"41",height:"48",viewBox:"0 0 41 48",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,t.createElement)("path",{d:"M0 34.7721L6.88004 38.677V15.8055L20.4542 7.80977L23.9872 9.4833L30.4953 5.57841L20.4542 -7.62939e-06L0 11.9006V34.7721Z",fill:"#38DAC7"}),(0,t.createElement)("path",{d:"M32.9284 6.87939L34.2126 7.61318L12.3825 19.904L12.1991 40.45L20.6376 45.8616L41.0001 33.6625V35.4969L20.6376 47.6043L10.8232 41.2755V18.9868L32.9284 6.87939Z",fill:"#5566CA"}),(0,t.createElement)("path",{d:"M37.6063 9.53936L36.2305 8.71385L14.217 21.3716V38.9824L20.5459 43.5685L41.0001 31.3694V29.5349L20.5459 41.8258L15.5928 38.2486V22.1054L37.6063 9.53936Z",fill:"#5566CA"}),(0,t.createElement)("path",{d:"M41.0001 11.3738L39.5325 10.5483L17.3356 23.2061V37.2397L20.5459 39.6244L41.0001 27.4253V25.6826L20.5459 37.79L18.9866 36.5976V24.1233L41.0001 11.3738Z",fill:"#5566CA"}))),(0,t.createElement)("h2",{style:{fontSize:"18px",fontFamily:"Inter",marginTop:"-5px",marginBottom:"15px"}},(0,o.__)("Access Without Limits!","cozy-addons")),(0,t.createElement)("p",{style:{textAlign:"center",lineHeight:"20px"}},(0,o.__)("Access more blocks and advanced features for effortless design. Upgrade today for a richer web-building experience!","cozy-addons")),(0,t.createElement)("a",{href:"https://cozythemes.com/pricing-and-plans/",target:"_blank"},(0,t.createElement)("button",{className:"cozy-block-premium-button",style:{backgroundColor:"#5566ca",borderRadius:"20px",padding:"10px",border:"none",color:"#fff",fontFamily:"Inter",fontSize:"10px",fontWeight:"500",cursor:"pointer"}},(0,t.createElement)("div",{style:{display:"flex",gap:"5px",margin:"0"}},(0,t.createElement)("div",null,(0,t.createElement)("svg",{width:"10",height:"10",viewBox:"0 0 10 10",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,t.createElement)("path",{d:"M9.29768 0.0630875L0.24397 5.2847C-0.109583 5.48778 -0.0646564 5.97987 0.286944 6.12828L2.36334 6.99919L7.97527 2.05487C8.0827 1.95919 8.23506 2.10565 8.14325 2.21695L3.43767 7.94822V9.52017C3.43767 9.98102 3.99437 10.1626 4.26784 9.8287L5.50821 8.31924L7.94206 9.33857C8.21943 9.45573 8.53588 9.28194 8.58666 8.98317L9.99306 0.547365C10.0595 0.152913 9.6356 -0.132186 9.29768 0.0630875Z",fill:"white"}))),(0,t.createElement)("div",null,(0,o.__)("Upgrade to Pro","cozy-addons"))))))),d=(0,c.memo)((()=>{const e=(0,n.useInnerBlocksProps)({className:"cozy-icon-list-wrapper"},{allowedBlocks:["cozy-block/list-item"],template:[["cozy-block/list-item"],["cozy-block/list-item"]]});return(0,t.createElement)("ul",{...e})})),y=(0,c.memo)((({clientId:i})=>{const{insertBlock:c,selectBlock:s}=(0,a.useDispatch)(n.store),d=(0,a.useSelect)((e=>e(n.store).getBlock(i).innerBlocks));return(0,t.createElement)(l.ToolbarGroup,null,(0,t.createElement)(l.ToolbarButton,{icon:r,onClick:()=>{const t=(0,e.createBlock)("cozy-block/list-item",{});c(t,d.length,i,!1),s(t.clientId)}},(0,o.__)("Add List Item","cozy-addons")),",")})),p=(0,c.memo)((({attributes:e,blockId:o,clientId:l})=>{const a=`\n    #${o} .cozy-block-list-item {\n      width: ${e.containerStyles.width}px;\n      height: ${e.containerStyles.height}px;\n      border-radius: ${e.containerStyles.borderRadius.top}px ${e.containerStyles.borderRadius.right}px ${e.containerStyles.borderRadius.bottom}px ${e.containerStyles.borderRadius.left}px;\n      background-color: ${e.containerStyles.bgColor};\n      font-weight: ${e.typography.fontWeight};\n\t  font-size: ${e.typography.fontSize}px;\n\t  font-family: ${e.typography.fontFamily};\n      color: ${e.typography.color};\n\t  text-align: ${e.textAlign};\n      padding: ${e.containerStyles?.padding?.top}px ${e.containerStyles?.padding?.right}px ${e.containerStyles?.padding?.bottom}px ${e.containerStyles?.padding?.left}px;\n\t  border-width: ${e.containerStyles?.borderWidth}px;\n\t  border-style: ${e.containerStyles?.borderType};\n\t  border-color: ${e.containerStyles?.borderColor};\n      gap: ${e.iconGap}px;\n    }\n    #${o} .cozy-block-list-item:hover {\n      background-color: ${e.containerStyles.bgColorHover};\n      color: ${e.typography.colorHover};\n\t  border-color: ${e.containerStyles?.borderColorHover};\n    }\n    #${o}.vertical .list-inline-block {\n      margin-bottom: ${e.containerStyles.gap}px;\n    }\n    #${o}.horizontal .list-inline-block {\n      margin-right: ${e.containerStyles.gap}px;\n    }\n    #${o} svg {\n      width: ${e.iconSize}px;\n      height: ${e.iconSize}px;\n      rotate: ${e.iconRotate}deg;\n      opacity: ${e.iconOpacity};\n    }\n    #${o}.fill svg {\n      fill: ${e.iconColor};\n    }\n    #${o}.outline svg {\n      stroke: ${e.iconColor};\n      fill: none;\n    }\n    #${o}.fill .cozy-block-list-item:hover svg {\n      fill: ${e.iconColorHover};\n    }\n    #${o}.outline .cozy-block-list-item:hover svg {\n      stroke: ${e.iconColorHover};\n      fill: none;\n    }\n    #${o}.stacked .list-icon-wrapper {\n      padding: ${e.iconBoxStyles.padding.top}px ${e.iconBoxStyles.padding.right}px ${e.iconBoxStyles.padding.bottom}px ${e.iconBoxStyles.padding.left}px;\n      border: ${e.iconBoxStyles.borderWidth}px ${e.iconBoxStyles.borderType} ${e.iconBoxStyles.borderColor};\n      border-radius: ${e.iconBoxStyles.borderRadius}px;\n      background-color: ${e.iconBoxStyles.bgColor};\n    }\n    #${o}.stacked .cozy-block-list-item:hover .list-icon-wrapper {\n      background-color: ${e.iconBoxStyles.bgColorHover};\n      border-color: ${e.iconBoxStyles.borderColorHover};\n    }\n  `;return(0,t.createElement)(t.Fragment,null,(0,t.createElement)(n.BlockControls,null,(0,t.createElement)(y,{clientId:l})),""!=e.typography.fontFamily&&null!=e.typography.fontFamily&&(0,t.createElement)("link",{rel:"stylesheet",href:`https://fonts.googleapis.com/css2?family=${e.typography.fontFamily}:wght@100;200;300;400;500;600;700;800;900`}),(0,t.createElement)("style",{dangerouslySetInnerHTML:{__html:a}}),(0,t.createElement)("div",{className:`cozy-block-icon-list ${e.listStyle} ${e.iconView} ${e.iconLayout}`,id:o},(0,t.createElement)(d,null)))})),m=JSON.parse('{"u2":"cozy-block/icon-list","TN":"Icon List"}'),g=(0,t.createElement)("svg",{width:"27",height:"22",viewBox:"0 0 27 22",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,t.createElement)("rect",{fill:"none",x:"1",y:"1",width:"25",height:"20",stroke:"#0C50FF","stroke-width":"2"}),(0,t.createElement)("path",{d:"M10 6L22 6",stroke:"#0C50FF","stroke-opacity":"0.5"}),(0,t.createElement)("path",{d:"M10 11L22 11",stroke:"#0C50FF","stroke-opacity":"0.5"}),(0,t.createElement)("path",{d:"M10 16L22 16",stroke:"#0C50FF","stroke-opacity":"0.5"}),(0,t.createElement)("path",{d:"M9 6C9 7.10457 8.10457 8 7 8C5.89543 8 5 7.10457 5 6C5 4.89543 5.89543 4 7 4C8.10457 4 9 4.89543 9 6ZM6.76866 7.05898L8.25253 5.57511C8.30292 5.52473 8.30292 5.44302 8.25253 5.39264L8.07006 5.21016C8.01967 5.15977 7.93797 5.15977 7.88757 5.21016L6.67742 6.42031L6.11243 5.85531C6.06204 5.80493 5.98034 5.80493 5.92994 5.85531L5.74747 6.03779C5.69708 6.08818 5.69708 6.16988 5.74747 6.22027L6.58618 7.05898C6.63657 7.10937 6.71827 7.10937 6.76866 7.05898Z",fill:"#0C50FF"}),(0,t.createElement)("path",{d:"M9 11C9 12.1046 8.10457 13 7 13C5.89543 13 5 12.1046 5 11C5 9.89543 5.89543 9 7 9C8.10457 9 9 9.89543 9 11ZM6.76866 12.059L8.25253 10.5751C8.30292 10.5247 8.30292 10.443 8.25253 10.3926L8.07006 10.2102C8.01967 10.1598 7.93797 10.1598 7.88757 10.2102L6.67742 11.4203L6.11243 10.8553C6.06204 10.8049 5.98034 10.8049 5.92994 10.8553L5.74747 11.0378C5.69708 11.0882 5.69708 11.1699 5.74747 11.2203L6.58618 12.059C6.63657 12.1094 6.71827 12.1094 6.76866 12.059Z",fill:"#0C50FF"}),(0,t.createElement)("path",{d:"M9 16C9 17.1046 8.10457 18 7 18C5.89543 18 5 17.1046 5 16C5 14.8954 5.89543 14 7 14C8.10457 14 9 14.8954 9 16ZM6.76866 17.059L8.25253 15.5751C8.30292 15.5247 8.30292 15.443 8.25253 15.3926L8.07006 15.2102C8.01967 15.1598 7.93797 15.1598 7.88757 15.2102L6.67742 16.4203L6.11243 15.8553C6.06204 15.8049 5.98034 15.8049 5.92994 15.8553L5.74747 16.0378C5.69708 16.0882 5.69708 16.1699 5.74747 16.2203L6.58618 17.059C6.63657 17.1094 6.71827 17.1094 6.76866 17.059Z",fill:"#0C50FF"})),h=(0,c.memo)((({blockId:e,attributes:l,enableTitle:a,enableLogo:i,linkType:r,iconPosition:c,setAttributes:s})=>(0,t.createElement)(t.Fragment,null,(0,t.createElement)("div",{className:"list-inline-block"},l.url.length>0&&"full"===r&&(0,t.createElement)("a",null,(0,t.createElement)("li",{className:"cozy-block-list-item",id:e},i&&"left"===c&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${l.iconViewBox.vx} ${l.iconViewBox.vy} ${l.iconViewBox.vw} ${l.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:l.iconPath}))),a&&(0,t.createElement)(n.RichText,{placeholder:(0,o.__)("Lorem Ipsum","cozy-addons"),value:l.title,onChange:e=>s({...l,title:e})}),i&&"right"===c&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${l.iconViewBox.vx} ${l.iconViewBox.vy} ${l.iconViewBox.vw} ${l.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:l.iconPath}))))),l.url.length>0&&"inline"===r&&(0,t.createElement)("li",{className:"cozy-block-list-item",id:e},"inline"===r&&(0,t.createElement)("a",{className:"cozy-block-list-item"},i&&"left"===c&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${l.iconViewBox.vx} ${l.iconViewBox.vy} ${l.iconViewBox.vw} ${l.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:l.iconPath}))),a&&(0,t.createElement)(n.RichText,{placeholder:(0,o.__)("Accordion Title","cozy-addons"),value:l.title,onChange:e=>s({...l,title:e})}),i&&"right"===c&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${l.iconViewBox.vx} ${l.iconViewBox.vy} ${l.iconViewBox.vw} ${l.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:l.iconPath}))))),l.url.length<=0&&(0,t.createElement)("li",{className:"cozy-block-list-item",id:e},i&&"left"===c&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${l.iconViewBox.vx} ${l.iconViewBox.vy} ${l.iconViewBox.vw} ${l.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:l.iconPath}))),a&&(0,t.createElement)(n.RichText,{placeholder:(0,o.__)("Accordion Title","cozy-addons"),value:l.title,onChange:e=>s({...l,title:e})}),i&&"right"===c&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${l.iconViewBox.vx} ${l.iconViewBox.vy} ${l.iconViewBox.vw} ${l.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:l.iconPath}))))))));(0,e.registerBlockType)("cozy-block/list-item",{title:(0,o.__)("List Item","cozy-addons"),category:"cozy-block",icon:()=>(0,t.createElement)("svg",{width:"25",height:"20",viewBox:"0 0 25 20",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,t.createElement)("rect",{fill:"white",x:"0.5",y:"0.5",width:"24",height:"19",rx:"2.5",stroke:"#5566CA"}),(0,t.createElement)("path",{d:"M12.5 5C9.7379 5 7.5 7.2379 7.5 10C7.5 12.7621 9.7379 15 12.5 15C15.2621 15 17.5 12.7621 17.5 10C17.5 7.2379 15.2621 5 12.5 5ZM15.4032 10.5645C15.4032 10.6976 15.2944 10.8065 15.1613 10.8065H13.3065V12.6613C13.3065 12.7944 13.1976 12.9032 13.0645 12.9032H11.9355C11.8024 12.9032 11.6935 12.7944 11.6935 12.6613V10.8065H9.83871C9.70565 10.8065 9.59677 10.6976 9.59677 10.5645V9.43548C9.59677 9.30242 9.70565 9.19355 9.83871 9.19355H11.6935V7.33871C11.6935 7.20565 11.8024 7.09677 11.9355 7.09677H13.0645C13.1976 7.09677 13.3065 7.20565 13.3065 7.33871V9.19355H15.1613C15.2944 9.19355 15.4032 9.30242 15.4032 9.43548V10.5645Z",fill:"#36CFC6"})),attributes:{blockClientId:{type:"string",default:""},iconViewBox:{type:"object",default:{vx:0,vy:0,vw:25,vh:19}},iconPath:{type:"string",default:"M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"},parentAttrs:{type:"object",default:{enableLogo:!0,enableTitle:!0,linkType:"full",linkNewTab:!0}},title:{type:"string",default:"Lorem Ipsum"},url:{type:"string",default:""},iconPosition:{type:"string",default:"left"}},edit:function({attributes:e,setAttributes:i,clientId:r}){e.blockClientId=r;const d=(0,a.select)("core/block-editor").getBlockRootClientId(r),y=(0,a.useSelect)((e=>e("core/block-editor").getBlockAttributes(d)),[d]);let p=!1,m=!0,g="full",b=!0,u="left";y&&(p=y.enableLogo,m=y.enableTitle,g=y.linkType,y.linkNewTab,u=y.iconPosition),(0,c.useEffect)((()=>{const e=(0,a.select)("core/block-editor").getBlock(r);if(e){const t={...e.attributes,parentAttrs:{...e.attributes.parentAttrs,enableLogo:y.enableLogo,enableTitle:y.enableTitle,linkType:y.linkType,linkNewTab:y.linkNewTab,iconPosition:y.iconPosition}};(0,a.dispatch)("core/block-editor").updateBlockAttributes(r,t)}}),[y]);const v=`cozyBlock_${r.replace(/-/gi,"_")}`,[C,w]=(0,c.useState)(""),x=Object.keys(cozyIcons.collection).filter((e=>e.toLowerCase().includes(C.toLowerCase())));return(0,t.createElement)(t.Fragment,null,(0,t.createElement)(h,{blockId:v,attributes:e,enableTitle:m,enableLogo:p,linkType:g,iconPosition:u,setAttributes:i}),(0,t.createElement)(n.InspectorControls,null,(0,t.createElement)(l.PanelBody,{title:(0,o.__)("General","cozy-addons")},(0,t.createElement)(l.BaseControl,null,(0,t.createElement)(l.BaseControl.VisualLabel,null,(0,o.__)("Select Icon","cozy-addons")),(0,t.createElement)("input",{type:"text",className:"cozy-icon-search",placeholder:(0,o.__)("Search Icons...","cozy-addons"),value:C,onChange:e=>{w(e.target.value)}}),(0,t.createElement)("div",{className:"cozy-icon-list"},x.map((o=>{const n=cozyIcons.collection[o],a=n.match(/d="([^"]+)"/),r=n.match(/viewBox\s*=\s*"([^"]*)"/),c=a?a[1]:"",s=r?r[1]:"";return(0,t.createElement)(l.Button,{key:o,onClick:()=>((t,o)=>{const n=o.split(" ");i({...e,iconPath:t,iconViewBox:{vx:n[0],vy:n[1],vw:n[2],vh:n[3]}})})(c,s)},(0,t.createElement)("div",{className:"cozy-icon",title:o,dangerouslySetInnerHTML:{__html:n}}))})))),m&&(0,t.createElement)(l.TextControl,{label:(0,o.__)("Title","cozy-addons"),type:"text",value:e.title,onChange:t=>i({...e,title:t}),placeholder:(0,o.__)("Lorem Ipsum","cozy-addons")}),(0,t.createElement)(l.TextControl,{label:(0,o.__)("Url","cozy-addons"),type:"url",value:e.url,onChange:t=>i({...e,url:t}),placeholder:"#"})),!cozyBlockAssets.isPremium&&(0,t.createElement)(s,null)))},save:function({attributes:e}){const o=`cozyBlock_${e.blockClientId.replace(/-/gi,"_")}`;return(0,t.createElement)(t.Fragment,null,(0,t.createElement)("div",{className:"list-inline-block"},e.url.length>0&&"full"===e.parentAttrs.linkType&&(0,t.createElement)("a",{href:e.url,target:e.parentAttrs.linkNewTab?"_blank":"",rel:"noopener"},(0,t.createElement)("li",{className:"cozy-block-list-item",id:o},e.parentAttrs.enableLogo&&"left"===e.parentAttrs.iconPosition&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${e.iconViewBox.vx} ${e.iconViewBox.vy} ${e.iconViewBox.vw} ${e.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:e.iconPath}))),e.parentAttrs.enableTitle&&(0,t.createElement)("p",null,e.title),e.parentAttrs.enableLogo&&"right"===e.parentAttrs.iconPosition&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${e.iconViewBox.vx} ${e.iconViewBox.vy} ${e.iconViewBox.vw} ${e.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:e.iconPath}))))),e.url.length>0&&"inline"===e.parentAttrs.linkType&&(0,t.createElement)("li",{className:"cozy-block-list-item",id:o},"inline"===e.parentAttrs.linkType&&(0,t.createElement)("a",{href:e.url,className:"cozy-block-list-item",target:e.parentAttrs.linkNewTab?"_blank":"",rel:"noopener"},e.parentAttrs.enableLogo&&"left"===e.parentAttrs.iconPosition&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${e.iconViewBox.vx} ${e.iconViewBox.vy} ${e.iconViewBox.vw} ${e.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:e.iconPath}))),e.parentAttrs.enableTitle&&(0,t.createElement)("p",null,e.title),e.parentAttrs.enableLogo&&"right"===e.parentAttrs.iconPosition&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${e.iconViewBox.vx} ${e.iconViewBox.vy} ${e.iconViewBox.vw} ${e.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:e.iconPath}))))),e.url.length<=0&&(0,t.createElement)("li",{className:"cozy-block-list-item",id:o},e.parentAttrs.enableLogo&&"left"===e.parentAttrs.iconPosition&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${e.iconViewBox.vx} ${e.iconViewBox.vy} ${e.iconViewBox.vw} ${e.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:e.iconPath}))),e.parentAttrs.enableTitle&&(0,t.createElement)("p",null,e.title),e.parentAttrs.enableLogo&&"right"===e.parentAttrs.iconPosition&&(0,t.createElement)("div",{className:"list-icon-wrapper"},(0,t.createElement)("svg",{viewBox:`${e.iconViewBox.vx} ${e.iconViewBox.vy} ${e.iconViewBox.vw} ${e.iconViewBox.vh}`,xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true"},(0,t.createElement)("path",{d:e.iconPath}))))))},supports:{inserter:!1}}),(0,e.registerBlockType)(m.u2,{title:(0,o.__)(m.TN,"cozy-addons"),description:(0,o.__)("Elevate your lists with style using the 'Icon List' block, offering advanced options to effortlessly integrate and customize icons for a visually appealing and informative presentation.","cozy-addons"),icon:{src:g},example:{attributes:{cover:cozyBlockAssets.imageDir+"/preview_icon_list.jpg"},viewportWidth:1200},edit:function({attributes:e,setAttributes:a,clientId:i}){if(e.blockClientId=i,e.cover)return(0,t.createElement)("img",{src:e.cover});const r=(0,n.useBlockProps)({className:"cozy-block-wrapper"}),d=`cozyBlock_${i.replace(/-/gi,"_")}`,[y,m]=(0,c.useState)(!0),g=(t,o)=>{let n={...e.containerStyles.padding};n={...n,top:Math.abs(o),right:Math.abs(o),bottom:Math.abs(o),left:Math.abs(o)},a(y?{...e,containerStyles:{...e.containerStyles,padding:n}}:{...e,containerStyles:{...e.containerStyles,padding:{...e.containerStyles.padding,[t]:Math.abs(o)}}})},[h,b]=(0,c.useState)(!0),u=(t,o)=>{let n={...e.containerStyles.borderRadius};n={...n,top:Math.abs(o),right:Math.abs(o),bottom:Math.abs(o),left:Math.abs(o)},a(h?{...e,containerStyles:{...e.containerStyles,borderRadius:n}}:{...e,containerStyles:{...e.containerStyles,borderRadius:{...e.containerStyles.borderRadius,[t]:Math.abs(o)}}})},[v,C]=(0,c.useState)(!0),w=(t,o)=>{let n={...e.iconBoxStyles.padding};n={...n,top:Math.abs(o),right:Math.abs(o),bottom:Math.abs(o),left:Math.abs(o)},a(v?{...e,iconBoxStyles:{...e.iconBoxStyles,padding:n}}:{...e,iconBoxStyles:{...e.iconBoxStyles,padding:{...e.iconBoxStyles.padding,[t]:Math.abs(o)}}})},x=function(){let e=[{label:"Default",value:""}];if("object"==typeof cozyBlockAssets.googleFonts)for(let t in cozyBlockAssets.googleFonts)e.push({label:cozyBlockAssets.googleFonts[t],value:t});return e}();return(0,t.createElement)(t.Fragment,null,(0,t.createElement)("div",{...r},(0,t.createElement)(n.BlockControls,null,(0,t.createElement)(n.AlignmentToolbar,{value:e.textAlign,onChange:t=>a({...e,textAlign:t})})),(0,t.createElement)(p,{attributes:e,blockId:d,clientId:i})),(0,t.createElement)(n.InspectorControls,{key:"setting",group:"settings"},(0,t.createElement)(l.PanelBody,{title:(0,o.__)("General","cozy-addons")},(0,t.createElement)(l.BaseControl,null,(0,t.createElement)(l.BaseControl.VisualLabel,null,(0,o.__)("Container Dimensions","cozy-addons")),(0,t.createElement)("div",{style:{display:"grid",gridTemplateColumns:"repeat(2, 1fr)",columnGap:"10px",height:"50px"}},(0,t.createElement)(l.TextControl,{label:(0,o.__)("Width","cozy-addons"),type:"number",autoComplete:"off",inputMode:"numeric",max:"Infinity",placeholder:(0,o.__)("Auto","cozy-addons"),value:e.containerStyles.width,onChange:t=>{a({...e,containerStyles:{...e.containerStyles,width:0==t?"":Math.abs(t)}})}}),(0,t.createElement)(l.TextControl,{label:(0,o.__)("Height","cozy-addons"),type:"number",autoComplete:"off",inputMode:"numeric",max:"Infinity",placeholder:(0,o.__)("Auto","cozy-addons"),value:e.containerStyles.height,onChange:t=>a({...e,containerStyles:{...e.containerStyles,height:0==t?"":Math.abs(t)}})}))),(0,t.createElement)(l.SelectControl,{label:(0,o.__)("List Style","cozy-addons"),options:[{label:(0,o.__)("Vertical","cozy-addons"),value:"vertical"},{label:(0,o.__)("Horizontal","cozy-addons"),value:"horizontal"}],value:e.listStyle,onChange:t=>a({...e,listStyle:t})}),(0,t.createElement)(l.RangeControl,{label:(0,o.__)("Gap","cozy-addons"),min:0,max:200,step:1,value:e.containerStyles.gap,onChange:t=>a({...e,containerStyles:{...e.containerStyles,gap:Math.abs(t)}})}),(0,t.createElement)(l.ToggleControl,{label:(0,o.__)("Enable Icon","cozy-addons"),checked:e.enableLogo,onChange:t=>a({...e,enableLogo:t})}),(0,t.createElement)(l.ToggleControl,{label:(0,o.__)("Enable Title","cozy-addons"),checked:e.enableTitle,onChange:t=>a({...e,enableTitle:t})}),(0,t.createElement)(l.SelectControl,{label:(0,o.__)("Apply link on","cozy-addons"),options:[{label:(0,o.__)("Full Width","cozy-addons"),value:"full"},{label:(0,o.__)("Inline","cozy-addons"),value:"inline"}],value:e.linkType,onChange:t=>a({...e,linkType:t})}),(0,t.createElement)(l.ToggleControl,{label:(0,o.__)("Open Link on new Tab","cozy-addons"),checked:e.linkNewTab,onChange:t=>a({...e,linkNewTab:t})})),!cozyBlockAssets.isPremium&&(0,t.createElement)(s,null)),(0,t.createElement)(n.InspectorControls,{key:"style",group:"styles"},(0,t.createElement)(l.PanelBody,{title:(0,o.__)("List Item Styles","cozy-addons")},(0,t.createElement)(l.BaseControl,null,(0,t.createElement)(l.BaseControl.VisualLabel,null,(0,o.__)("Padding","cozy-addons")),(0,t.createElement)("div",{style:{display:"flex",gap:"5px",height:"50px",position:"relative"}},(0,t.createElement)("button",{className:"cozy-link-styles "+(y?"":"cozy-attr-link-disabled"),onClick:()=>m(!y)},(0,t.createElement)("svg",{width:"10",height:"16",viewBox:"0 0 15 28",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,t.createElement)("path",{d:"M6.18931 9.59516L6.18931 19.3466H8.70581V9.59516H6.18931Z",fill:"black"}),(0,t.createElement)("path",{d:"M0.0553284 7.88029L0.0553284 13.2126H2.53381L2.53381 7.88029C2.82201 4.53678 5.6079 3.53757 6.94321 3.4415C10.9203 3.15534 12.1019 6.00678 12.3901 7.88029V13.2126L14.8398 13.2126V7.88029C14.1251 1.90809 9.2776 0.780139 6.94321 0.962687C1.84791 1.30857 0.0553284 5.92031 0.0553284 7.88029Z",fill:"black"}),(0,t.createElement)("path",{d:"M0.0553284 20.9042L0.0553284 15.5718H2.53381L2.53381 20.9042C2.82201 24.2477 5.6079 25.2469 6.94321 25.343C10.9203 25.6291 12.1019 22.7777 12.3901 20.9042V15.5718L14.8398 15.5718V20.9042C14.1251 26.8764 9.2776 28.0043 6.94321 27.8218C1.84791 27.4759 0.0553284 22.8641 0.0553284 20.9042Z",fill:"black"}))),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("Top","cozy-addons"),value:e.containerStyles?.padding?.top,onChange:e=>g("top",e)}),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("Right","cozy-addons"),value:e.containerStyles?.padding?.right,onChange:e=>g("right",e)}),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("Bottom","cozy-addons"),value:e.containerStyles?.padding?.bottom,onChange:e=>g("bottom",e)}),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("Left","cozy-addons"),value:e.containerStyles?.padding?.left,onChange:e=>g("left",e)}))),(0,t.createElement)(l.SelectControl,{label:(0,o.__)("Border Type","cozy-addons"),value:e.containerStyles?.borderType,options:[{label:(0,o.__)("None","cozy-addons"),value:"none"},{label:(0,o.__)("Solid","cozy-addons"),value:"solid"},{label:(0,o.__)("Double","cozy-addons"),value:"double"},{label:(0,o.__)("Dotted","cozy-addons"),value:"dotted"},{label:(0,o.__)("Dashed","cozy-addons"),value:"dashed"},{label:(0,o.__)("Groove","cozy-addons"),value:"groove"}],onChange:t=>a({...e,containerStyles:{...e.containerStyles,borderType:t}})}),"none"!==e.containerStyles?.borderType&&(0,t.createElement)(t.Fragment,null,(0,t.createElement)(l.RangeControl,{label:(0,o.__)("Border Width","cozy-addons"),min:1,max:50,step:1,value:e.containerStyles?.borderWidth,onChange:t=>a({...e,containerStyles:{...e.containerStyles,borderWidth:Math.abs(t)}})}),(0,t.createElement)(n.PanelColorSettings,{className:"cozy-color-control",enableAlpha:!0,title:(0,o.__)("Border Color","cozy-addons"),colorSettings:[{label:(0,o.__)("Normal","cozy-addons"),value:e.containerStyles?.borderColor,onChange:t=>a({...e,containerStyles:{...e.containerStyles,borderColor:t}})},{label:(0,o.__)("Hover","cozy-addons"),value:e.containerStyles?.borderColorHover,onChange:t=>a({...e,containerStyles:{...e.containerStyles,borderColorHover:t}})}]})),(0,t.createElement)(l.BaseControl,null,(0,t.createElement)(l.BaseControl.VisualLabel,null,(0,o.__)("Border Radius","cozy-addons")),(0,t.createElement)("div",{style:{display:"flex",gap:"5px",height:"50px",position:"relative"}},(0,t.createElement)("button",{className:"cozy-link-styles "+(h?"":"cozy-attr-link-disabled"),onClick:()=>b(!h)},(0,t.createElement)("svg",{width:"10",height:"16",viewBox:"0 0 15 28",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,t.createElement)("path",{d:"M6.18931 9.59516L6.18931 19.3466H8.70581V9.59516H6.18931Z",fill:"black"}),(0,t.createElement)("path",{d:"M0.0553284 7.88029L0.0553284 13.2126H2.53381L2.53381 7.88029C2.82201 4.53678 5.6079 3.53757 6.94321 3.4415C10.9203 3.15534 12.1019 6.00678 12.3901 7.88029V13.2126L14.8398 13.2126V7.88029C14.1251 1.90809 9.2776 0.780139 6.94321 0.962687C1.84791 1.30857 0.0553284 5.92031 0.0553284 7.88029Z",fill:"black"}),(0,t.createElement)("path",{d:"M0.0553284 20.9042L0.0553284 15.5718H2.53381L2.53381 20.9042C2.82201 24.2477 5.6079 25.2469 6.94321 25.343C10.9203 25.6291 12.1019 22.7777 12.3901 20.9042V15.5718L14.8398 15.5718V20.9042C14.1251 26.8764 9.2776 28.0043 6.94321 27.8218C1.84791 27.4759 0.0553284 22.8641 0.0553284 20.9042Z",fill:"black"}))),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("TopL","cozy-addons"),value:e.containerStyles.borderRadius.top,onChange:e=>u("top",e)}),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("TopR","cozy-addons"),value:e.containerStyles.borderRadius.right,onChange:e=>u("right",e)}),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("BottomL","cozy-addons"),value:e.containerStyles.borderRadius.left,onChange:e=>u("left",e)}),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("BottomR","cozy-addons"),value:e.containerStyles.borderRadius.bottom,onChange:e=>u("bottom",e)}))),(0,t.createElement)(n.PanelColorSettings,{className:"cozy-color-control",enableAlpha:!0,title:(0,o.__)("Background Color","cozy-addons"),colorSettings:[{label:(0,o.__)("Normal","cozy-addons"),value:e.containerStyles.bgColor,onChange:t=>a({...e,containerStyles:{...e.containerStyles,bgColor:t}})},{label:(0,o.__)("Hover","cozy-addons"),value:e.containerStyles.bgColorHover,onChange:t=>a({...e,containerStyles:{...e.containerStyles,bgColorHover:t}})}]})),e.enableLogo&&"stacked"===e.iconView&&(0,t.createElement)(l.PanelBody,{title:(0,o.__)("Icon Box Styles","cozy-addons"),initialOpen:!1},(0,t.createElement)(l.BaseControl,null,(0,t.createElement)(l.BaseControl.VisualLabel,null,(0,o.__)("Padding","cozy-addons")),(0,t.createElement)("div",{style:{display:"flex",gap:"5px",height:"50px",position:"relative"}},(0,t.createElement)("button",{className:"cozy-link-styles "+(v?"":"cozy-attr-link-disabled"),onClick:()=>C(!v)},(0,t.createElement)("svg",{width:"10",height:"16",viewBox:"0 0 15 28",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,t.createElement)("path",{d:"M6.18931 9.59516L6.18931 19.3466H8.70581V9.59516H6.18931Z",fill:"black"}),(0,t.createElement)("path",{d:"M0.0553284 7.88029L0.0553284 13.2126H2.53381L2.53381 7.88029C2.82201 4.53678 5.6079 3.53757 6.94321 3.4415C10.9203 3.15534 12.1019 6.00678 12.3901 7.88029V13.2126L14.8398 13.2126V7.88029C14.1251 1.90809 9.2776 0.780139 6.94321 0.962687C1.84791 1.30857 0.0553284 5.92031 0.0553284 7.88029Z",fill:"black"}),(0,t.createElement)("path",{d:"M0.0553284 20.9042L0.0553284 15.5718H2.53381L2.53381 20.9042C2.82201 24.2477 5.6079 25.2469 6.94321 25.343C10.9203 25.6291 12.1019 22.7777 12.3901 20.9042V15.5718L14.8398 15.5718V20.9042C14.1251 26.8764 9.2776 28.0043 6.94321 27.8218C1.84791 27.4759 0.0553284 22.8641 0.0553284 20.9042Z",fill:"black"}))),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("Top","cozy-addons"),value:e.iconBoxStyles.padding.top,onChange:e=>w("top",e)}),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("Right","cozy-addons"),value:e.iconBoxStyles.padding.right,onChange:e=>w("right",e)}),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("Bottom","cozy-addons"),value:e.iconBoxStyles.padding.bottom,onChange:e=>w("bottom",e)}),(0,t.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,o.__)("Left","cozy-addons"),value:e.iconBoxStyles.padding.left,onChange:e=>w("left",e)}))),(0,t.createElement)(l.SelectControl,{label:(0,o.__)("Border Type","cozy-addons"),value:e.iconBoxStyles.borderType,options:[{label:(0,o.__)("None","cozy-addons"),value:"none"},{label:(0,o.__)("Solid","cozy-addons"),value:"solid"},{label:(0,o.__)("Double","cozy-addons"),value:"double"},{label:(0,o.__)("Dotted","cozy-addons"),value:"dotted"},{label:(0,o.__)("Dashed","cozy-addons"),value:"dashed"},{label:(0,o.__)("Groove","cozy-addons"),value:"groove"}],onChange:t=>a({...e,iconBoxStyles:{...e.iconBoxStyles,borderType:t}})}),"none"!==e.iconBoxStyles.borderType&&(0,t.createElement)(t.Fragment,null,(0,t.createElement)(l.RangeControl,{label:(0,o.__)("Border Width","cozy-addons"),min:1,max:50,step:1,value:e.iconBoxStyles.borderWidth,onChange:t=>a({...e,iconBoxStyles:{...e.iconBoxStyles,borderWidth:Math.abs(t)}})}),(0,t.createElement)(n.PanelColorSettings,{className:"cozy-color-control",enableAlpha:!0,title:(0,o.__)("Border Color","cozy-addons"),colorSettings:[{label:(0,o.__)("Normal","cozy-addons"),value:e.iconBoxStyles.borderColor,onChange:t=>a({...e,iconBoxStyles:{...e.iconBoxStyles,borderColor:t}})},{label:(0,o.__)("Hover","cozy-addons"),value:e.iconBoxStyles.borderColorHover,onChange:t=>a({...e,iconBoxStyles:{...e.iconBoxStyles,borderColorHover:t}})}]})),(0,t.createElement)(l.RangeControl,{label:(0,o.__)("Border Radius","cozy-addons"),min:1,max:100,step:1,value:e.iconBoxStyles.borderRadius,onChange:t=>a({...e,iconBoxStyles:{...e.iconBoxStyles,borderRadius:Math.abs(t)}})}),(0,t.createElement)(n.PanelColorSettings,{className:"cozy-color-control",enableAlpha:!0,title:(0,o.__)("Background Color","cozy-addons"),colorSettings:[{label:(0,o.__)("Normal","cozy-addons"),value:e.iconBoxStyles.bgColor,onChange:t=>a({...e,iconBoxStyles:{...e.iconBoxStyles,bgColor:t}})},{label:(0,o.__)("Hover","cozy-addons"),value:e.iconBoxStyles.bgColorHover,onChange:t=>a({...e,iconBoxStyles:{...e.iconBoxStyles,bgColorHover:t}})}]})),e.enableLogo&&(0,t.createElement)(l.PanelBody,{title:(0,o.__)("Icon Styles","cozy-addons"),initialOpen:!1},(0,t.createElement)(l.SelectControl,{label:(0,o.__)("Icon Position","cozy-addons"),options:[{label:(0,o.__)("Left","cozy-addons"),value:"left"},{label:(0,o.__)("Right","cozy-addons"),value:"right"}],value:e.iconPosition,onChange:t=>a({...e,iconPosition:t})}),(0,t.createElement)(l.SelectControl,{label:(0,o.__)("Icon View","cozy-addons"),options:[{label:(0,o.__)("Default","cozy-addons"),value:"default"},{label:(0,o.__)("Stacked","cozy-addons"),value:"stacked"}],value:e.iconView,onChange:t=>a({...e,iconView:t})}),(0,t.createElement)(l.SelectControl,{label:(0,o.__)("Icon Layout","cozy-addons"),options:[{label:(0,o.__)("Fill","cozy-addons"),value:"fill"},{label:(0,o.__)("Outline","cozy-addons"),value:"outline"}],value:e.iconLayout,onChange:t=>a({...e,iconLayout:t})}),(0,t.createElement)(l.RangeControl,{label:(0,o.__)("Icon Gap","cozy-addons"),min:0,max:50,step:1,value:e.iconGap,onChange:t=>a({...e,iconGap:Math.abs(t)})}),(0,t.createElement)(l.RangeControl,{label:(0,o.__)("Size","cozy-addons"),min:10,max:200,step:1,value:e.iconSize,onChange:t=>a({...e,iconSize:Math.abs(t)})}),(0,t.createElement)(l.RangeControl,{label:(0,o.__)("Icon Rotate","cozy-addons"),min:0,max:360,step:1,value:e.iconRotate,onChange:t=>a({...e,iconRotate:Math.abs(t)})}),(0,t.createElement)(l.RangeControl,{label:(0,o.__)("Opacity","cozy-addons"),min:0,max:1,step:.1,value:e.iconOpacity,onChange:t=>a({...e,iconOpacity:Math.abs(t)})}),(0,t.createElement)(n.PanelColorSettings,{className:"cozy-color-control",enableAlpha:!0,title:(0,o.__)("Color","cozy-addons"),colorSettings:[{label:(0,o.__)("Normal","cozy-addons"),value:e.iconColor,onChange:t=>a({...e,iconColor:t})},{label:(0,o.__)("Hover","cozy-addons"),value:e.iconColorHover,onChange:t=>a({...e,iconColorHover:t})}]})),(0,t.createElement)(l.PanelBody,{title:(0,o.__)("Typography","cozy-addons"),initialOpen:!1},(0,t.createElement)(l.SelectControl,{label:(0,o.__)("Font","cozy-addons"),options:x,value:e.typography.fontFamily,onChange:t=>a({...e,typography:{...e.typography,fontFamily:t}})}),(0,t.createElement)(l.TextControl,{label:(0,o.__)("Font Size","cozy-addons"),type:"number",min:10,value:e.typography.fontSize,onChange:t=>a({...e,typography:{...e.typography,fontSize:Math.abs(t)}})}),(0,t.createElement)(l.SelectControl,{label:(0,o.__)("Font Weight","cozy-addons"),options:[{label:(0,o.__)("Thin","cozy-addons"),value:100},{label:(0,o.__)("Extra Light","cozy-addons"),value:200},{label:(0,o.__)("Light","cozy-addons"),value:300},{label:(0,o.__)("Normal","cozy-addons"),value:400},{label:(0,o.__)("Medium","cozy-addons"),value:500},{label:(0,o.__)("Semi Bold","cozy-addons"),value:600},{label:(0,o.__)("Bold","cozy-addons"),value:700},{label:(0,o.__)("Extra Bold","cozy-addons"),value:800}],value:e.typography.fontWeight,onChange:t=>a({...e,typography:{...e.typography,fontWeight:t}})}),(0,t.createElement)(n.PanelColorSettings,{className:"cozy-color-control",enableAlpha:!0,title:(0,o.__)("Color","cozy-addons"),colorSettings:[{label:(0,o.__)("Normal","cozy-addons"),value:e.typography.color,onChange:t=>a({...e,typography:{...e.typography,color:t}})},{label:(0,o.__)("Hover","cozy-addons"),value:e.typography.colorHover,onChange:t=>a({...e,typography:{...e.typography,colorHover:t}})}]}))))},save:function({attributes:e}){const o=`cozyBlock_${e.blockClientId.replace(/-/gi,"_")}`;return(0,t.createElement)(t.Fragment,null,(0,t.createElement)("ul",{className:`cozy-block-icon-list ${e.listStyle} ${e.iconView} ${e.iconLayout}`,id:o},(0,t.createElement)(n.InnerBlocks.Content,null)))}})}},o={};function n(e){var l=o[e];if(void 0!==l)return l.exports;var a=o[e]={exports:{}};return t[e](a,a.exports,n),a.exports}n.m=t,e=[],n.O=(t,o,l,a)=>{if(!o){var i=1/0;for(d=0;d<e.length;d++){for(var[o,l,a]=e[d],r=!0,c=0;c<o.length;c++)(!1&a||i>=a)&&Object.keys(n.O).every((e=>n.O[e](o[c])))?o.splice(c--,1):(r=!1,a<i&&(i=a));if(r){e.splice(d--,1);var s=l();void 0!==s&&(t=s)}}return t}a=a||0;for(var d=e.length;d>0&&e[d-1][2]>a;d--)e[d]=e[d-1];e[d]=[o,l,a]},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={826:0,431:0};n.O.j=t=>0===e[t];var t=(t,o)=>{var l,a,[i,r,c]=o,s=0;if(i.some((t=>0!==e[t]))){for(l in r)n.o(r,l)&&(n.m[l]=r[l]);if(c)var d=c(n)}for(t&&t(o);s<i.length;s++)a=i[s],n.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return n.O(d)},o=globalThis.webpackChunkicon_list=globalThis.webpackChunkicon_list||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})();var l=n.O(void 0,[431],(()=>n(848)));l=n.O(l)})();