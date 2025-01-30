
document.addEventListener('DOMContentLoaded',function(event)
{var header13Menu_dropdownToggle=document.querySelectorAll('#header13Menu .dropdown-toggle');header13Menu_dropdownToggle.forEach(item=>{var dropdown=new bootstrap.Dropdown(item,{popperConfig:{placement:item.getAttribute('data-bs-placement')}});});var header13Menu_dropdown=document.querySelectorAll('#header13Menu .dropdown');header13Menu_dropdown.forEach(item=>{item.addEventListener('shown.bs.dropdown',function(e)
{e.currentTarget.classList.add('show');});item.addEventListener('hidden.bs.dropdown',function(e)
{e.currentTarget.classList.remove('show');});});document.addEventListener('click',function(e)
{var isChildOfDropdownMenu=false;var target=e.target;while(target!==null)
{if(target.classList&&target.classList.contains('header13Menu-navbar-collapse')&&target.classList.contains('show'))
{isChildOfDropdownMenu=true;break;}
target=target.parentNode;}
if(isChildOfDropdownMenu)
{if(e.target.tagName.toLowerCase()==='a'&&!e.target.classList.contains('dropdown-toggle'))
{const dropdownMenu=document.querySelector('.header13Menu-navbar-collapse');if(dropdownMenu)
{const collapseInstance=bootstrap.Collapse.getInstance(dropdownMenu);if(collapseInstance)
{collapseInstance.hide();}}}}});});$(document).ready(function()
{$("a[href*='#header13LayoutGrid2']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_header13LayoutGrid2').offset().top},600,'easeOutCirc');});$("a[data-rel='prettyPhoto_gallery3Photos[gallery3Photos]']").attr('rel','prettyPhoto_gallery3Photos[gallery3Photos]');$("a[rel^='prettyPhoto_gallery3Photos']").prettyPhoto({theme:'facebook',social_tools:false});$("a[href*='#factsLayoutGrid']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_factsLayoutGrid').offset().top-88},600,'easeOutCirc');});function countUpfactsJavaScript1()
{var $obj=$('#factsJavaScript1');var count=$obj.attr('data-count');var bottomObj=$obj.offset().top+$obj.outerHeight();var bottomWnd=$(window).scrollTop()+$(window).height();if(bottomWnd>bottomObj&&count!=0)
{$({countUp:$obj.text()}).animate({countUp:count},{duration:1000,step:function(){$obj.text(Math.floor(this.countUp));},complete:function(){$obj.text(this.countUp);$obj.attr('data-count',0);}});}}
$(window).scroll(function()
{countUpfactsJavaScript1();});countUpfactsJavaScript1();function skrollrInit()
{skrollr.init({forceHeight:false,mobileCheck:function(){return false;},smoothScrolling:false});}
skrollrInit();function countUpfactsJavaScript2()
{var $obj=$('#factsJavaScript2');var count=$obj.attr('data-count');var bottomObj=$obj.offset().top+$obj.outerHeight();var bottomWnd=$(window).scrollTop()+$(window).height();if(bottomWnd>bottomObj&&count!=0)
{$({countUp:$obj.text()}).animate({countUp:count},{duration:1000,step:function(){$obj.text(Math.floor(this.countUp));},complete:function(){$obj.text(this.countUp);$obj.attr('data-count',0);}});}}
$(window).scroll(function()
{countUpfactsJavaScript2();});countUpfactsJavaScript2();function countUpfactsJavaScript3()
{var $obj=$('#factsJavaScript3');var count=$obj.attr('data-count');var bottomObj=$obj.offset().top+$obj.outerHeight();var bottomWnd=$(window).scrollTop()+$(window).height();if(bottomWnd>bottomObj&&count!=0)
{$({countUp:$obj.text()}).animate({countUp:count},{duration:1000,step:function(){$obj.text(Math.floor(this.countUp));},complete:function(){$obj.text(this.countUp);$obj.attr('data-count',0);}});}}
$(window).scroll(function()
{countUpfactsJavaScript3();});countUpfactsJavaScript3();function countUpfactsJavaScript4()
{var $obj=$('#factsJavaScript4');var count=$obj.attr('data-count');var bottomObj=$obj.offset().top+$obj.outerHeight();var bottomWnd=$(window).scrollTop()+$(window).height();if(bottomWnd>bottomObj&&count!=0)
{$({countUp:$obj.text()}).animate({countUp:count},{duration:1000,step:function(){$obj.text(Math.floor(this.countUp));},complete:function(){$obj.text(this.countUp);$obj.attr('data-count',0);}});}}
$(window).scroll(function()
{countUpfactsJavaScript4();});countUpfactsJavaScript4();});const btnUp={el:document.querySelector('.btn-up'),scrolling:false,show(){if(this.el.classList.contains('btn-up_hide')&&!this.el.classList.contains('btn-up_hiding')){this.el.classList.remove('btn-up_hide');this.el.classList.add('btn-up_hiding');window.setTimeout(()=>{this.el.classList.remove('btn-up_hiding');},300);}},hide(){if(!this.el.classList.contains('btn-up_hide')&&!this.el.classList.contains('btn-up_hiding')){this.el.classList.add('btn-up_hiding');window.setTimeout(()=>{this.el.classList.add('btn-up_hide');this.el.classList.remove('btn-up_hiding');},300);}},addEventListener(){window.addEventListener('scroll',()=>{const scrollY=window.scrollY||document.documentElement.scrollTop;if(this.scrolling&&scrollY>0){return;}
this.scrolling=false;if(scrollY>200){this.show();}else{this.hide();}});document.querySelector('.btn-up').onclick=()=>{this.scrolling=true;this.hide();window.scrollTo({top:0,left:0,behavior:'smooth'});}}}
btnUp.addEventListener();