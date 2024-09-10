(()=>{"use strict";var e,o={673:(e,o,a)=>{const t=window.wp.blocks;var n=a(196);const l=window.wp.i18n,i=window.wp.blockEditor,r=window.wp.components,s=window.wp.element,c=window.wp.compose,p=()=>(0,n.createElement)(n.Fragment,null,(0,n.createElement)("div",{style:{display:"flex",flexDirection:"column",justifyContent:"center",alignItems:"center",padding:"16px",marginBottom:"10px"}},(0,n.createElement)("p",null,(0,n.createElement)("svg",{width:"41",height:"48",viewBox:"0 0 41 48",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,n.createElement)("path",{d:"M0 34.7721L6.88004 38.677V15.8055L20.4542 7.80977L23.9872 9.4833L30.4953 5.57841L20.4542 -7.62939e-06L0 11.9006V34.7721Z",fill:"#38DAC7"}),(0,n.createElement)("path",{d:"M32.9284 6.87939L34.2126 7.61318L12.3825 19.904L12.1991 40.45L20.6376 45.8616L41.0001 33.6625V35.4969L20.6376 47.6043L10.8232 41.2755V18.9868L32.9284 6.87939Z",fill:"#5566CA"}),(0,n.createElement)("path",{d:"M37.6063 9.53936L36.2305 8.71385L14.217 21.3716V38.9824L20.5459 43.5685L41.0001 31.3694V29.5349L20.5459 41.8258L15.5928 38.2486V22.1054L37.6063 9.53936Z",fill:"#5566CA"}),(0,n.createElement)("path",{d:"M41.0001 11.3738L39.5325 10.5483L17.3356 23.2061V37.2397L20.5459 39.6244L41.0001 27.4253V25.6826L20.5459 37.79L18.9866 36.5976V24.1233L41.0001 11.3738Z",fill:"#5566CA"}))),(0,n.createElement)("h2",{style:{fontSize:"18px",fontFamily:"Inter",marginTop:"-5px",marginBottom:"15px"}},(0,l.__)("Access Without Limits!","cozy-addons")),(0,n.createElement)("p",{style:{textAlign:"center",lineHeight:"20px"}},(0,l.__)("Access more blocks and advanced features for effortless design. Upgrade today for a richer web-building experience!","cozy-addons")),(0,n.createElement)("a",{href:"https://cozythemes.com/pricing-and-plans/",target:"_blank"},(0,n.createElement)("button",{className:"cozy-block-premium-button",style:{backgroundColor:"#5566ca",borderRadius:"20px",padding:"10px",border:"none",color:"#fff",fontFamily:"Inter",fontSize:"10px",fontWeight:"500",cursor:"pointer"}},(0,n.createElement)("div",{style:{display:"flex",gap:"5px",margin:"0"}},(0,n.createElement)("div",null,(0,n.createElement)("svg",{width:"10",height:"10",viewBox:"0 0 10 10",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,n.createElement)("path",{d:"M9.29768 0.0630875L0.24397 5.2847C-0.109583 5.48778 -0.0646564 5.97987 0.286944 6.12828L2.36334 6.99919L7.97527 2.05487C8.0827 1.95919 8.23506 2.10565 8.14325 2.21695L3.43767 7.94822V9.52017C3.43767 9.98102 3.99437 10.1626 4.26784 9.8287L5.50821 8.31924L7.94206 9.33857C8.21943 9.45573 8.53588 9.28194 8.58666 8.98317L9.99306 0.547365C10.0595 0.152913 9.6356 -0.132186 9.29768 0.0630875Z",fill:"white"}))),(0,n.createElement)("div",null,(0,l.__)("Upgrade to Pro","cozy-addons"))))))),d=window.wp.primitives;var u=a(893);const g=(0,u.jsx)(d.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",children:(0,u.jsx)(d.Path,{d:"M9 9v6h11V9H9zM4 20h1.5V4H4v16z"})}),m=(0,u.jsx)(d.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",children:(0,u.jsx)(d.Path,{d:"M12.5 15v5H11v-5H4V9h7V4h1.5v5h7v6h-7Z"})}),y=(0,u.jsx)(d.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",children:(0,u.jsx)(d.Path,{d:"M4 15h11V9H4v6zM18.5 4v16H20V4h-1.5z"})}),v=(0,s.memo)((({layout:e})=>{const o=(0,i.useInnerBlocksProps)({className:`cozy-block-post-${e}`},{template:[["core/query",{className:"cozy-query swiper-container",queryId:1,query:{perPage:"6",postType:"post"},lock:{move:!1,remove:!0}},[["core/post-template",{className:"cozy-layout-grid swiper-wrapper",lock:{move:!1,remove:!0}},[["core/post-featured-image"],["core/post-title",{level:4,isLink:!0,linkTarget:"_blank"}],["core/post-date"],["core/post-excerpt",{excerptLength:29}]]]]]]});return(0,n.createElement)("div",{...o})})),O=(0,s.memo)((({clientId:e,attributes:o})=>{const a=(0,c.useRefEffect)((e=>{const a=[{property:"--cozyGridTemplateColumns",value:o.gridOptions.displayColumn},{property:"--cozyGridGap",value:`${o.gridOptions.columnGap}px`}];null!==e&&a.forEach((o=>{e.style.setProperty(o.property,o.value)}))})),t=(0,c.useRefEffect)((e=>{const a=e.querySelector(".swiper-button-prev"),t=e.querySelector(".swiper-button-next"),n=e.querySelector(".swiper-pagination"),l=[{property:"--cozyNavIconSize",value:`${o.carouselOptions.navigation.iconSize}px`},{property:"--cozyNavWidth",value:`${o.carouselOptions.navigation.iconBoxWidth}px`},{property:"--cozyNavHeight",value:`${o.carouselOptions.navigation.iconBoxHeight}px`},{property:"--cozyNavBorderRadius",value:`${o.carouselOptions.navigation.borderRadius}px`},{property:"--cozyNavIconColor",value:o.carouselOptions.navigation.color},{property:"--cozyNavIconColorHover",value:o.carouselOptions.navigation.colorHover},{property:"--cozyNavBgColor",value:o.carouselOptions.navigation.backgroundColor},{property:"--cozyNavBgColorHover",value:o.carouselOptions.navigation.backgroundColorHover},{property:"--cozyPaginationWidth",value:`${o.carouselOptions.pagination.width}px`},{property:"--cozyPaginationHeight",value:`${o.carouselOptions.pagination.height}px`},{property:"--cozyPaginationBorderRadius",value:`${o.carouselOptions.pagination.borderRadius}px`},{property:"--cozyPaginationActiveWidth",value:`${o.carouselOptions.pagination.activeWidth}px`},{property:"--cozyPaginationActiveBorderRadius",value:`${o.carouselOptions.pagination.activeBorderRadius}px`},{property:"--cozyPaginationColor",value:o.carouselOptions.pagination.color},{property:"--cozyPaginationColorHover",value:o.carouselOptions.pagination.colorHover},{property:"--cozyPaginationActiveColor",value:o.carouselOptions.pagination.activeColor},{property:"--cozyPaginationActiveColorHover",value:o.carouselOptions.pagination.activeColorHover},{property:"--cozyPaginationPositionVertical",value:`${o.carouselOptions.pagination.positionVertical}px`},{property:"--cozyPaginationAlign",value:o.carouselOptions.pagination?.align?o.carouselOptions.pagination?.align:"center"},{property:"--cozyPaginationLeft",value:"left"===o.carouselOptions.pagination?.align?o.carouselOptions.pagination?.left:""},{property:"--cozyPaginationRight",value:"right"===o.carouselOptions.pagination?.align?o.carouselOptions.pagination?.right:""}];null!==e&&l.forEach((o=>{e.style.setProperty(o.property,o.value)}));let i={};const r=setInterval((()=>{if(e){const l=e.querySelectorAll(".wp-block-post");if(l.length>0){clearInterval(r),l.forEach((e=>{e.classList.add("swiper-slide")}));const s=e.querySelector(".swiper-container"),c={init:!0,speed:o.carouselOptions.sliderOptions.speed,centeredSlides:o.carouselOptions.sliderOptions.centeredSlides,slidesPerView:o.carouselOptions.sliderOptions.slidesPerView,spaceBetween:o.carouselOptions.sliderOptions.spaceBetween,navigation:{nextEl:t,prevEl:a},pagination:{clickable:!0,el:n},breakpoints:{400:{slidesPerView:1},767:{slidesPerView:o.carouselOptions.sliderOptions.slidesPerView<=2?o.carouselOptions.sliderOptions.slidesPerView:2},1024:{slidesPerView:o.carouselOptions.sliderOptions.slidesPerView<=3?o.carouselOptions.sliderOptions.slidesPerView:3},1180:{slidesPerView:o.carouselOptions.sliderOptions.slidesPerView}},allowTouchMove:!o.carouselOptions.navigation.enabled};i=new Swiper(s,c)}}return()=>{clearInterval(r)}}),1e3);return()=>{"carousel"===o.layout&&Object.keys(i).length>0&&i.destroy()}}));return(0,n.createElement)(n.Fragment,null,"grid"===o.layout&&(0,n.createElement)("div",{className:"cozy-block-post-grid-wrapper "+(o.gridOptions.masonryEnabled?"has-masonry":""),id:`cozyBlock_${e.replace(/-/gi,"_")}`,ref:a},(0,n.createElement)(v,{layout:o.layout})),"carousel"===o.layout&&(0,n.createElement)("div",{className:"cozy-block-post-carousel-wrapper "+(o.hoverShow?"hover-show":""),id:`cozyBlock_${e.replace(/-/gi,"_")}`,ref:t},(0,n.createElement)(v,{layout:o.layout}),o.carouselOptions.navigation.enabled&&(0,n.createElement)(n.Fragment,null,(0,n.createElement)("div",{className:"swiper-button-prev cozy-block-button-prev"}),(0,n.createElement)("div",{className:"swiper-button-next cozy-block-button-next"})),o.carouselOptions.pagination.enabled&&(0,n.createElement)("div",{className:"swiper-pagination cozy-pagination"})))})),h=JSON.parse('{"u2":"cozy-block/post-carousel","TN":"Post Grid/Carousel","WL":"Immerse yourself in an engaging browsing journey using our \'Post Carousel\' block, showcasing visually stunning and interactive featured content for effortless exploration."}'),_=(0,n.createElement)("svg",{width:"27",height:"20",viewBox:"0 0 27 20",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,n.createElement)("rect",{fill:"none",x:"1",y:"1",width:"11",height:"14",stroke:"#0C50FF","stroke-width":"2"}),(0,n.createElement)("rect",{x:"3",y:"3",width:"7",height:"5",fill:"#0C50FF","fill-opacity":"0.5"}),(0,n.createElement)("path",{fill:"none",d:"M3 9H8",stroke:"#0C50FF","stroke-opacity":"0.5"}),(0,n.createElement)("path",{fill:"none",d:"M3 10.5H10",stroke:"#0C50FF","stroke-opacity":"0.5"}),(0,n.createElement)("path",{fill:"none",d:"M3 12H7",stroke:"#0C50FF","stroke-opacity":"0.5"}),(0,n.createElement)("rect",{fill:"none",x:"15",y:"1",width:"11",height:"14",stroke:"#0C50FF","stroke-width":"2"}),(0,n.createElement)("rect",{x:"17",y:"3",width:"7",height:"5",fill:"#0C50FF","fill-opacity":"0.5"}),(0,n.createElement)("path",{fill:"none",d:"M17 9H22",stroke:"#0C50FF","stroke-opacity":"0.5"}),(0,n.createElement)("path",{fill:"none",d:"M17 10.5H24",stroke:"#0C50FF","stroke-opacity":"0.5"}),(0,n.createElement)("path",{fill:"none",d:"M17 12H21",stroke:"#0C50FF","stroke-opacity":"0.5"}),(0,n.createElement)("rect",{x:"9",y:"18",width:"2",height:"2",rx:"1",fill:"#0C50FF","fill-opacity":"0.5"}),(0,n.createElement)("rect",{x:"12",y:"18",width:"2",height:"2",rx:"1",fill:"#0C50FF"}),(0,n.createElement)("rect",{x:"15",y:"18",width:"2",height:"2",rx:"1",fill:"#0C50FF","fill-opacity":"0.5"}));(0,t.registerBlockType)(h.u2,{title:(0,l.__)(h.TN,"cozy-addons"),description:(0,l.__)(h.WL,"cozy-addons"),icon:{src:_},example:{attributes:{cover:cozyBlockAssets.imageDir+"/preview_post_carousel.jpg"},viewportWidth:1200},edit:function(e){const{attributes:o,setAttributes:a,clientId:t}=e;if(o.cover)return(0,n.createElement)("img",{src:o.cover});o.blockClientId=t;const s=(0,i.useBlockProps)({className:"cozy-block-wrapper"});return(0,n.createElement)(n.Fragment,null,(0,n.createElement)("div",{...s},(0,n.createElement)(O,{clientId:t,attributes:o})),(0,n.createElement)(i.InspectorControls,{key:"setting",group:"settings"},(0,n.createElement)(r.PanelBody,{title:(0,l.__)("General","cozy-addons")},(0,n.createElement)(r.SelectControl,{label:(0,l.__)("Layout","cozy-addons"),options:[{label:(0,l.__)("Grid","cozy-addons"),value:"grid"},{label:(0,l.__)("Carousel","cozy-addons"),value:"carousel"}],value:o.layout,onChange:e=>a({...o,layout:e})}),"grid"===o.layout&&(0,n.createElement)(n.Fragment,null,(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Display Column","cozy-addons"),min:1,max:10,step:1,value:o.gridOptions.displayColumn,onChange:e=>a({...o,gridOptions:{...o.gridOptions,displayColumn:e}})}),(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Column gap","cozy-addons"),value:o.gridOptions.columnGap,onChange:e=>a({...o,gridOptions:{...o.gridOptions,columnGap:e}}),min:0,step:1,max:100}),(0,n.createElement)(r.ToggleControl,{label:(0,l.__)("Enable Masonry","cozy-addons"),checked:o.gridOptions.masonryEnabled,onChange:e=>a({...o,gridOptions:{...o.gridOptions,masonryEnabled:e}})}))),"carousel"===o.layout&&(0,n.createElement)(r.PanelBody,{title:(0,l.__)("Slider Options","cozy-addons"),initialOpen:!1},!cozyBlockAssets.isPremium&&(0,n.createElement)(n.Fragment,null,(0,n.createElement)(r.BaseControl,null,(0,n.createElement)("div",{style:{display:"flex",gap:"15px"}},(0,n.createElement)(r.BaseControl.VisualLabel,null,(0,l.__)("Slides per View","cozy-addons")),(0,n.createElement)("p",{className:"cozy-block-pro-label"},(0,l.__)("PRO","cozy-addons"))),(0,n.createElement)(r.RangeControl,{value:o.carouselOptions.sliderOptions.slidesPerView,help:(0,l.__)("*Note: To enhance the visual impact, activate centered slides and use fractional numbers as input.","cozy-addons"),disabled:!0})),(0,n.createElement)(r.BaseControl,null,(0,n.createElement)("div",{style:{display:"flex",gap:"15px"}},(0,n.createElement)(r.BaseControl.VisualLabel,null,(0,l.__)("Centered Slides","cozy-addons")),(0,n.createElement)("p",{className:"cozy-block-pro-label"},(0,l.__)("PRO","cozy-addons"))),(0,n.createElement)(r.ToggleControl,{checked:o.carouselOptions.sliderOptions.centeredSlides,disabled:!0})),(0,n.createElement)(r.BaseControl,null,(0,n.createElement)("div",{style:{display:"flex",gap:"15px"}},(0,n.createElement)(r.BaseControl.VisualLabel,null,(0,l.__)("Gap","cozy-addons")),(0,n.createElement)("p",{className:"cozy-block-pro-label"},(0,l.__)("PRO","cozy-addons"))),(0,n.createElement)(r.RangeControl,{value:o.carouselOptions.sliderOptions.spaceBetween,disabled:!0,min:0,max:100}))),cozyBlockAssets.isPremium&&(0,n.createElement)(n.Fragment,null,(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Slides per View","cozy-addons"),min:1,max:10,step:.1,value:o.carouselOptions.sliderOptions.slidesPerView,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,sliderOptions:{...o.carouselOptions.sliderOptions,slidesPerView:e}}}),help:(0,l.__)("*Note: To enhance the visual impact, activate centered slides and use fractional numbers as input.","cozy-addons")}),(0,n.createElement)(r.ToggleControl,{label:(0,l.__)("Centered Slides","cozy-addons"),checked:o.carouselOptions.sliderOptions.centeredSlides,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,sliderOptions:{...o.carouselOptions.sliderOptions,centeredSlides:e}}})}),(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Gap","cozy-addons"),value:o.carouselOptions.sliderOptions.spaceBetween,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,sliderOptions:{...o.carouselOptions.sliderOptions,spaceBetween:e}}}),min:0,step:1,max:100})),(0,n.createElement)(r.ToggleControl,{label:(0,l.__)("Loop","cozy-addons"),checked:o.carouselOptions.sliderOptions.loop,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,sliderOptions:{...o.carouselOptions.sliderOptions,loop:e}}})}),(0,n.createElement)(r.ToggleControl,{label:(0,l.__)("Autoplay","cozy-addons"),checked:o.carouselOptions.sliderOptions.autoplay.enabled,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,sliderOptions:{...o.carouselOptions.sliderOptions,autoplay:{...o.carouselOptions.sliderOptions.autoplay,enabled:e}}}})}),o.carouselOptions.sliderOptions.autoplay.enabled&&(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Autoplay Delay","cozy-addons"),min:500,max:5e3,step:100,value:o.carouselOptions.sliderOptions.autoplay.delay,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,sliderOptions:{...o.carouselOptions.sliderOptions,autoplay:{...o.carouselOptions.sliderOptions.autoplay,delay:Math.abs(e)}}}})}),!cozyBlockAssets.isPremium&&(0,n.createElement)(r.BaseControl,null,(0,n.createElement)("div",{style:{display:"flex",gap:"15px"}},(0,n.createElement)(r.BaseControl.VisualLabel,null,(0,l.__)("Speed (ms)","cozy-addons")),(0,n.createElement)("p",{className:"cozy-block-pro-label"},(0,l.__)("PRO","cozy-addons"))),(0,n.createElement)(r.RangeControl,{value:o.carouselOptions.sliderOptions.speed,disabled:!0,help:(0,l.__)("*Note: Greater the value, greater the delay.","cozy-addons")})),cozyBlockAssets.isPremium&&(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Speed (ms)","cozy-addons"),value:o.carouselOptions.sliderOptions.speed,min:500,max:5e3,step:100,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,sliderOptions:{...o.carouselOptions.sliderOptions,speed:e}}}),help:(0,l.__)("*Note: Greater the value, greater the delay.","cozy-addons")}),(0,n.createElement)(r.ToggleControl,{label:(0,l.__)("Enable Pagination","cozy-addons"),checked:o.carouselOptions.pagination.enabled,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,enabled:e}}})}),(0,n.createElement)(r.ToggleControl,{label:(0,l.__)("Enable Navigation","cozy-addons"),checked:o.carouselOptions.navigation.enabled,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,navigation:{...o.carouselOptions.navigation,enabled:e}}})}),o.carouselOptions.navigation.enabled&&(0,n.createElement)(r.ToggleControl,{label:(0,l.__)("Display on Hover","cozy-addons"),checked:o.hoverShow,onChange:e=>a({hoverShow:e}),help:(0,l.__)("*Note: Show navigation only after hovering the block.")})),!cozyBlockAssets.isPremium&&(0,n.createElement)(p,null)),(0,n.createElement)(i.InspectorControls,{key:"style",group:"styles"},o.carouselOptions.pagination.enabled&&(0,n.createElement)(r.PanelBody,{title:(0,l.__)("Pagination Styles","cozy-addons"),initialOpen:!1},(0,n.createElement)(r.__experimentalToggleGroupControl,{label:(0,l.__)("Align","cozy-addons"),isBlock:!0,value:o.carouselOptions.pagination?.align,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,align:e}}})},(0,n.createElement)(r.__experimentalToggleGroupControlOptionIcon,{label:(0,l.__)("Left","cozy-addons"),value:"left",icon:g}),(0,n.createElement)(r.__experimentalToggleGroupControlOptionIcon,{label:(0,l.__)("Center","cozy-addons"),value:"center",icon:m}),(0,n.createElement)(r.__experimentalToggleGroupControlOptionIcon,{label:(0,l.__)("Right","cozy-addons"),value:"right",icon:y})),(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Vertical Positioning","cozy-addons"),value:o.carouselOptions.pagination.positionVertical,min:-300,max:300,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,positionVertical:e}}})}),"left"===o.carouselOptions.pagination?.align&&(0,n.createElement)("div",{className:"components-base-control"},(0,n.createElement)(i.HeightControl,{label:(0,l.__)("Horizontal Positioning","cozy-addons"),value:o.carouselOptions.pagination?.left,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,left:e}}})})),"right"===o.carouselOptions.pagination?.align&&(0,n.createElement)("div",{className:"components-base-control"},(0,n.createElement)(i.HeightControl,{label:(0,l.__)("Horizontal Positioning","cozy-addons"),value:o.carouselOptions.pagination?.right,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,right:e}}})})),(0,n.createElement)(r.TabPanel,{className:"cozy-tab-panel",activeClass:"active-tab",tabs:[{name:"cozy-tab__default",title:(0,l.__)("Default","cozy-addons"),className:"tab-one"},{name:"cozy-tab__active",title:(0,l.__)("Active","cozy-addons"),className:"tab-two"}]},(e=>(0,n.createElement)(n.Fragment,null,"cozy-tab__default"===e.name&&(0,n.createElement)(n.Fragment,null,(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Width","cozy-addons"),value:o.carouselOptions.pagination.width,min:1,max:100,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,width:e}}})}),(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Height","cozy-addons"),value:o.carouselOptions.pagination.height,min:1,max:100,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,height:e}}})}),(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Border Radius","cozy-addons"),value:o.carouselOptions.pagination.borderRadius,min:1,max:100,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,borderRadius:e}}})})),"cozy-tab__active"===e.name&&(0,n.createElement)(n.Fragment,null,(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Width","cozy-addons"),value:o.carouselOptions.pagination.activeWidth,min:1,max:100,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,activeWidth:e}}})}),(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Border Radius","cozy-addons"),value:o.carouselOptions.pagination.activeBorderRadius,min:1,max:100,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,activeBorderRadius:e}}})}))))),(0,n.createElement)(i.PanelColorSettings,{className:"cozy-color-control",enableAlpha:!0,title:(0,l.__)("Color","cozy-addons"),colorSettings:[{value:o.carouselOptions.pagination.color,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,color:e}}}),label:(0,l.__)("Default","cozy-addons")},{value:o.carouselOptions.pagination.colorHover,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,colorHover:e}}}),label:(0,l.__)("Default (Hover)","cozy-addons")},{value:o.carouselOptions.pagination.activeColor,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,activeColor:e}}}),label:(0,l.__)("Active","cozy-addons")},{value:o.carouselOptions.pagination.activeColorHover,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,pagination:{...o.carouselOptions.pagination,activeColorHover:e}}}),label:(0,l.__)("Active (Hover)","cozy-addons")}]})),o.carouselOptions.navigation.enabled&&(0,n.createElement)(r.PanelBody,{title:(0,l.__)("Navigation Style","cozy-addons"),initialOpen:!1},(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Icon Size","cozy-addons"),value:o.carouselOptions.navigation.iconSize,min:1,max:50,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,navigation:{...o.carouselOptions.navigation,iconSize:e}}})}),(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Icon Box Width","cozy-addons"),value:o.carouselOptions.navigation.iconBoxWidth,min:1,max:50,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,navigation:{...o.carouselOptions.navigation,iconBoxWidth:e}}})}),(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Icon Box Height","cozy-addons"),value:o.carouselOptions.navigation.iconBoxHeight,min:1,max:50,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,navigation:{...o.carouselOptions.navigation,iconBoxHeight:e}}})}),(0,n.createElement)(r.RangeControl,{label:(0,l.__)("Border Radius","cozy-addons"),value:o.carouselOptions.navigation.borderRadius,min:1,max:50,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,navigation:{...o.carouselOptions.navigation,borderRadius:e}}})}),(0,n.createElement)(i.PanelColorSettings,{className:"cozy-color-control",enableAlpha:!0,title:(0,l.__)("Background Color","cozy-addons"),colorSettings:[{value:o.carouselOptions.navigation.backgroundColor,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,navigation:{...o.carouselOptions.navigation,backgroundColor:e}}}),label:(0,l.__)("Normal","cozy-addons")},{value:o.carouselOptions.navigation.backgroundColorHover,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,navigation:{...o.carouselOptions.navigation,backgroundColorHover:e}}}),label:(0,l.__)("Hover","cozy-addons")}]}),(0,n.createElement)(i.PanelColorSettings,{className:"cozy-color-control",enableAlpha:!0,title:(0,l.__)("Color","cozy-addons"),colorSettings:[{value:o.carouselOptions.navigation.color,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,navigation:{...o.carouselOptions.navigation,color:e}}}),label:(0,l.__)("Normal","cozy-addons")},{value:o.carouselOptions.navigation.colorHover,onChange:e=>a({...o,carouselOptions:{...o.carouselOptions,navigation:{...o.carouselOptions.navigation,colorHover:e}}}),label:(0,l.__)("Hover","cozy-addons")}]}))))},save:function({attributes:e}){const{blockClientId:o,layout:a}=e;return(0,n.createElement)(n.Fragment,null,(0,n.createElement)("div",{className:`cozy-block-post-${a}-wrapper ${"grid"===a&&e.gridOptions.masonryEnabled?"has-masonry":""} ${e.hoverShow?"hover-show":""}`,id:`cozyBlock_${o.replace(/-/gi,"_")}`},(0,n.createElement)(i.InnerBlocks.Content,null),"carousel"===e.layout&&e.carouselOptions.navigation.enabled&&(0,n.createElement)(n.Fragment,null,(0,n.createElement)("div",{className:"swiper-button-prev cozy-block-button-prev"}),(0,n.createElement)("div",{className:"swiper-button-next cozy-block-button-next"})),"carousel"===e.layout&&e.carouselOptions.pagination.enabled&&(0,n.createElement)("div",{className:"swiper-pagination cozy-pagination"})))}})},251:(e,o,a)=>{var t=a(196),n=Symbol.for("react.element"),l=(Symbol.for("react.fragment"),Object.prototype.hasOwnProperty),i=t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,r={key:!0,ref:!0,__self:!0,__source:!0};o.jsx=function(e,o,a){var t,s={},c=null,p=null;for(t in void 0!==a&&(c=""+a),void 0!==o.key&&(c=""+o.key),void 0!==o.ref&&(p=o.ref),o)l.call(o,t)&&!r.hasOwnProperty(t)&&(s[t]=o[t]);if(e&&e.defaultProps)for(t in o=e.defaultProps)void 0===s[t]&&(s[t]=o[t]);return{$$typeof:n,type:e,key:c,ref:p,props:s,_owner:i.current}}},893:(e,o,a)=>{e.exports=a(251)},196:e=>{e.exports=window.React}},a={};function t(e){var n=a[e];if(void 0!==n)return n.exports;var l=a[e]={exports:{}};return o[e](l,l.exports,t),l.exports}t.m=o,e=[],t.O=(o,a,n,l)=>{if(!a){var i=1/0;for(p=0;p<e.length;p++){for(var[a,n,l]=e[p],r=!0,s=0;s<a.length;s++)(!1&l||i>=l)&&Object.keys(t.O).every((e=>t.O[e](a[s])))?a.splice(s--,1):(r=!1,l<i&&(i=l));if(r){e.splice(p--,1);var c=n();void 0!==c&&(o=c)}}return o}l=l||0;for(var p=e.length;p>0&&e[p-1][2]>l;p--)e[p]=e[p-1];e[p]=[a,n,l]},t.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={826:0,431:0};t.O.j=o=>0===e[o];var o=(o,a)=>{var n,l,[i,r,s]=a,c=0;if(i.some((o=>0!==e[o]))){for(n in r)t.o(r,n)&&(t.m[n]=r[n]);if(s)var p=s(t)}for(o&&o(a);c<i.length;c++)l=i[c],t.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return t.O(p)},a=globalThis.webpackChunkpost_carousel=globalThis.webpackChunkpost_carousel||[];a.forEach(o.bind(null,0)),a.push=o.bind(null,a.push.bind(a))})();var n=t.O(void 0,[431],(()=>t(673)));n=t.O(n)})();