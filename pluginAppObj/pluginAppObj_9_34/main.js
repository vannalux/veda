function init_pluginAppObj_9_34(param){function boot_pluginAppObj_9_34(){render_modern_pluginAppObj_9_34();addLink_pluginAppObj_9_34($("#testimonial_pluginAppObj_9_34_container"));resizeObject_pluginAppObj_9_34();$("#imContent").on("breakpointChangedOrFluid",function(e,breakpoint){breakpoint.fluid?$("#testimonial_pluginAppObj_9_34").addClass("fluid"):$("#testimonial_pluginAppObj_9_34").removeClass("fluid");resizeObject_pluginAppObj_9_34()});if($("#testimonial_pluginAppObj_9_34").hasClass("modern")&&!0)270<=$("#testimonial_pluginAppObj_9_34").find(".img").width()&&335<=$("#testimonial_pluginAppObj_9_34").find(".img").height()&&$("#testimonial_pluginAppObj_9_34").find(".img").css({"background-size":"auto"})}function isIE(){return navigator.userAgent.indexOf("MSIE")!==-1||navigator.appVersion.indexOf("Trident/")>0}function resizeObject_pluginAppObj_9_34(){var userWidth=700,userHeight=350,dimensions=getObject_Dimensions_pluginAppObj_9_34(),container=$("#testimonial_pluginAppObj_9_34_container"),testimonial=$("#testimonial_pluginAppObj_9_34"),imgSize,availableSpace,imageTitleSize,scaledImgSize;if(1)if(testimonial.css({width:dimensions[0],height:"auto","min-height":dimensions[1]}),testimonial.hasClass("modern")){if(isIE()&&testimonial.css({height:dimensions[1]}),testimonial.removeClass("column"),testimonial.find(".img").css({height:"auto",width:"50%"}),testimonial.find(".data").width()<200){isIE()&&testimonial.css({height:""});var containerWidth=container.width(),newWidth=Math.min(userWidth/2,containerWidth),newHeight=userHeight*newWidth/userWidth;testimonial.addClass("column");testimonial.css({width:newWidth,"min-height":newHeight});testimonial.find(".img").css({height:userHeight*newWidth/(userWidth/2),width:"100%"})}}else testimonial.hasClass("comics")?(testimonial.find(".speech-bubble").css({"min-height":dimensions[1]}),isIE()&&testimonial.find(".speech-bubble").css({height:dimensions[1]}),testimonial.find(".speech-bubble").width()>200?(testimonial.removeClass("column"),testimonial.find(".img").removeClass("small"),testimonial.find(".data .ratings-container").removeClass("small"),imageTitleSize=30*dimensions[0]/100,scaledImgSize=imageTitleSize-dimensions[0]*6/100-25,testimonial.find(".img_mask").css({height:scaledImgSize,width:scaledImgSize})):(isIE()&&testimonial.find(".speech-bubble").css({height:""}),testimonial.addClass("column"),testimonial.find(".img").addClass("small"),testimonial.find(".data .ratings-container").addClass("small"),imageTitleSize=30*userWidth/100,scaledImgSize=imageTitleSize-dimensions[0]*6/100-25,testimonial.find(".img_mask").css({height:scaledImgSize,width:scaledImgSize}))):testimonial.hasClass("journal")?(imgSize=testimonial.find(".img_mask").css("max-width").replace(/[^-\d\.]/g,""),availableSpace=dimensions[0]-dimensions[0]*6/100,imgSize>availableSpace?testimonial.find(".img_mask").css({height:availableSpace,width:availableSpace}):testimonial.find(".img_mask").css({height:imgSize,width:imgSize})):testimonial.hasClass("card")&&(imageTitleSize=30*dimensions[0]/100,scaledImgSize=imageTitleSize-dimensions[0]*6/100-30,testimonial.removeClass("column"),testimonial.find(".img_mask").css({height:scaledImgSize,width:scaledImgSize}),testimonial.find(".data").width()<200&&(imageTitleSize=30*userWidth/100,scaledImgSize=imageTitleSize-userWidth*6/100-30,testimonial.addClass("column"),testimonial.find(".img_mask").css({height:scaledImgSize,width:scaledImgSize})));else resizeObject_uipreview(testimonial,dimensions)}function resizeObject_uipreview(testimonial,dimensions){var imgSize,imageTitleSize,scaledImgSize;testimonial.hasClass("comics")?(testimonial.css({width:dimensions[0],height:dimensions[1]}),imageTitleSize=30*dimensions[0]/100,scaledImgSize=imageTitleSize-dimensions[0]*6/100-25,testimonial.find(".img_mask").css({height:scaledImgSize,width:scaledImgSize})):testimonial.hasClass("journal")?(imgSize=testimonial.find(".img").width(),testimonial.find(".img_mask").css({height:imgSize,width:imgSize})):testimonial.hasClass("card")&&(imageTitleSize=30*dimensions[0]/100,scaledImgSize=imageTitleSize-dimensions[0]*6/100-30,testimonial.find(".img_mask").css({height:scaledImgSize,width:scaledImgSize}))}function getObject_Dimensions_pluginAppObj_9_34(){var pageWidth=700,containerWidth=$("#pluginAppObj_9_34").width(),fact=containerWidth<pageWidth?containerWidth/pageWidth:1,dimensions=[pageWidth*fact,350*fact];return!1&&(dimensions=dimensions[0]<=485&&dimensions[1]<=340?[dimensions[0],dimensions[1]]:newDimensions(dimensions[0],dimensions[1],485,340)),dimensions}function newDimensions(w,h,contW,contH){return w<=contW&&h<=contH?[Math.round(w),Math.round(h)]:(w>h?(w=contW,h=h*(contH/w)):w<h?(w=w*(contW/h),h=contH):(w=contW,h=contH),[Math.round(w),Math.round(h)])}function addLink_pluginAppObj_9_34(obj){if(0){var objLink=decodeHtml(""+obj.html()+"");obj.html(objLink)}}function getIcon_stars(i,state){var svg='<svg viewBox="0 0 51 48" xmlns="http://www.w3.org/2000/svg" class="star icon" data-state="'+state+'" data-rating="'+(i+1)+'">';return svg+='<path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>',svg+"<\/svg>"}function getRatingContainer(){var ratingContainer,i,state;if(param.ratingScore!=0){for(ratingContainer='<div class="rating-container '+param.ratingStyle+" "+param.style+'">',i=0;i<5;i++)state=i+1<=param.ratingScore?"on":"off",ratingContainer+=getIcon_stars(i,state);return ratingContainer+="<\/div>",$(ratingContainer)}}function render_modern_pluginAppObj_9_34(){var divImg=getImg_pluginAppObj_9_34(),divImg=$('<div class="img"><\/div>'),divData=$('<div class="data"><\/div>'),divRating=getRatingContainer(),divSeparator=$('<div class="separator"><\/div>'),divSignatures=$('<div class="signatures"><\/div>');param.haveCitation&&(divData.append(getCitation_pluginAppObj_9_34()),divData.append(divSeparator));divData.append(divRating);divSignatures.append(getSignature_pluginAppObj_9_34("div",1));divSignatures.append(getSignature_pluginAppObj_9_34("div",2));divData.append(divSignatures);$("#testimonial_pluginAppObj_9_34").append(divImg);$("#testimonial_pluginAppObj_9_34").append(divData)}function br(text){var brRegex=new RegExp("(<br\\s/>|<br>)","g");return text.replace(/&gt;/g,">").replace(/&lt;/g,"<").replace(/&amp;/g,"&").replace(/&quot;/g,'"').replace(/&gt;/g,">").replace(/&lt;/g,"<").replace(/&amp;/g,"&").replace(/&quot;/g,'"').replace(/\r/g,"").replace(/\n/g,"").replace(brRegex,"<br>")}function getCitation_pluginAppObj_9_34(){var div=$('<div class="citation"><\/div>');return!0&&div.html(br("&amp;lt;strong&amp;gt;&amp;lt;span style=&quot;font-size:24px&quot;&amp;gt;&amp;lt;span style=&quot;color:#A52A2A&quot;&amp;gt;LOREM IPSUM&amp;lt;/span&amp;gt;&amp;lt;/span&amp;gt;&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;br /&gt;")),div}function getSignature_pluginAppObj_9_34(tag,which){var elem;return which==1&&!0?null:which==2&&!0?null:(tag=tag||"div",which=which||1,elem=tag=="div"?$("<div><\/div>"):$("<span><\/span>"),elem.addClass("signature"+which),which==1?elem.html(""):elem.html(""),elem)}function getImg_pluginAppObj_9_34(onlyImgMask){var div=$('<div class="img"><\/div>');return!0&&(onlyImgMask!=undefined&&(onlyImgMask==!0||onlyMask==1)?div.html('<div class="img_mask"><\/div>'):div.html('<div class="img_mask"><img src="pluginAppObj/pluginAppObj_9_34/im4.webp"><\/div>')),div}function decodeHtml(encoded){return encoded=replaceAll("&amp;gt;",">",encoded),encoded=replaceAll("&amp;lt;","<",encoded),encoded=replaceAll("\\'","'",encoded),encoded=replaceAll("&quot;",'"',encoded),encoded=replaceAll("&lt;br /&gt;","\n",encoded),encoded=replaceAll("&amp;","&",encoded),replaceAll("\\\\","\\",encoded)}function replaceAll(find,replace,str){return str.replace(new RegExp(find,"g"),replace)}x5engine.boot.push(function(){boot_pluginAppObj_9_34()})}