
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
{collapseInstance.hide();}}}}});var Carousel1=new bootstrap.Carousel('#Carousel1',{interval:4000,pause:false});});$(document).ready(function()
{$('#wb_Card4').addClass('visibility-hidden');$('#wb_Card5').addClass('visibility-hidden');$('#wb_Card6').addClass('visibility-hidden');$("a[href*='#header13LayoutGrid2']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_header13LayoutGrid2').offset().top},600,'easeOutCirc');});$('#wb_LayoutGrid1').parallax();$("a[href*='#LayoutGrid4']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_LayoutGrid4').offset().top-88},600,'easeOutCirc');});$("a[href*='#LayoutGrid3']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_LayoutGrid3').offset().top-88},600,'easeOutCirc');});function onScrollCard4()
{var $obj=$("#wb_Card4");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(true))
{$obj.addClass("in-viewport");AnimateCss('wb_Card4','slide-left-in',0,1250);}}
onScrollCard4();$(window).scroll(function(event)
{onScrollCard4();});function onScrollCard5()
{var $obj=$("#wb_Card5");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(true))
{$obj.addClass("in-viewport");AnimateCss('wb_Card5','slide-up-in',0,1250);}}
onScrollCard5();$(window).scroll(function(event)
{onScrollCard5();});function onScrollCard6()
{var $obj=$("#wb_Card6");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(true))
{$obj.addClass("in-viewport");AnimateCss('wb_Card6','slide-right-in',0,1250);}}
onScrollCard6();$(window).scroll(function(event)
{onScrollCard6();});$("#Accordion1").accordion({event:'click',animate:'linear',icons:null,active:false,collapsible:true,header:'h4',heightStyle:'content'});var iOS=!!navigator.platform&&/iPad|iPhone|iPod/.test(navigator.platform);if(iOS)
{$('#wb_LayoutGrid1,#wb_LayoutGrid5,#wb_LayoutGrid7').css('background-attachment','scroll');}});const btnUp={el:document.querySelector('.btn-up'),scrolling:false,show(){if(this.el.classList.contains('btn-up_hide')&&!this.el.classList.contains('btn-up_hiding')){this.el.classList.remove('btn-up_hide');this.el.classList.add('btn-up_hiding');window.setTimeout(()=>{this.el.classList.remove('btn-up_hiding');},300);}},hide(){if(!this.el.classList.contains('btn-up_hide')&&!this.el.classList.contains('btn-up_hiding')){this.el.classList.add('btn-up_hiding');window.setTimeout(()=>{this.el.classList.add('btn-up_hide');this.el.classList.remove('btn-up_hiding');},300);}},addEventListener(){window.addEventListener('scroll',()=>{const scrollY=window.scrollY||document.documentElement.scrollTop;if(this.scrolling&&scrollY>0){return;}
this.scrolling=false;if(scrollY>200){this.show();}else{this.hide();}});document.querySelector('.btn-up').onclick=()=>{this.scrolling=true;this.hide();window.scrollTo({top:0,left:0,behavior:'smooth'});}}}
btnUp.addEventListener();