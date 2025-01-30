
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
{collapseInstance.hide();}}}}});var menuItems=document.querySelectorAll('#wb_ResponsiveMenu1 ul li a');menuItems.forEach(function(item)
{item.addEventListener('click',function(event)
{var checkbox=document.querySelector('#wb_ResponsiveMenu1 input');checkbox.checked=false;});});var DropdownMenu2_dropdownToggle=document.querySelectorAll('#DropdownMenu2 .dropdown-toggle');DropdownMenu2_dropdownToggle.forEach(item=>{var dropdown=new bootstrap.Dropdown(item,{popperConfig:{placement:item.getAttribute('data-bs-placement')}});});var DropdownMenu2_dropdown=document.querySelectorAll('#DropdownMenu2 .dropdown');DropdownMenu2_dropdown.forEach(item=>{item.addEventListener('shown.bs.dropdown',function(e)
{e.currentTarget.classList.add('show');});item.addEventListener('hidden.bs.dropdown',function(e)
{e.currentTarget.classList.remove('show');});});document.addEventListener('click',function(e)
{var isChildOfDropdownMenu=false;var target=e.target;while(target!==null)
{if(target.classList&&target.classList.contains('DropdownMenu2-navbar-collapse')&&target.classList.contains('show'))
{isChildOfDropdownMenu=true;break;}
target=target.parentNode;}
if(isChildOfDropdownMenu)
{if(e.target.tagName.toLowerCase()==='a'&&!e.target.classList.contains('dropdown-toggle'))
{const dropdownMenu=document.querySelector('.DropdownMenu2-navbar-collapse');if(dropdownMenu)
{const collapseInstance=bootstrap.Collapse.getInstance(dropdownMenu);if(collapseInstance)
{collapseInstance.hide();}}}}});var DropdownMenu1_dropdownToggle=document.querySelectorAll('#DropdownMenu1 .dropdown-toggle');DropdownMenu1_dropdownToggle.forEach(item=>{var dropdown=new bootstrap.Dropdown(item,{popperConfig:{placement:item.getAttribute('data-bs-placement')}});});var DropdownMenu1_dropdown=document.querySelectorAll('#DropdownMenu1 .dropdown');DropdownMenu1_dropdown.forEach(item=>{item.addEventListener('shown.bs.dropdown',function(e)
{e.currentTarget.classList.add('show');});item.addEventListener('hidden.bs.dropdown',function(e)
{e.currentTarget.classList.remove('show');});});document.addEventListener('click',function(e)
{var isChildOfDropdownMenu=false;var target=e.target;while(target!==null)
{if(target.classList&&target.classList.contains('DropdownMenu1-navbar-collapse')&&target.classList.contains('show'))
{isChildOfDropdownMenu=true;break;}
target=target.parentNode;}
if(isChildOfDropdownMenu)
{if(e.target.tagName.toLowerCase()==='a'&&!e.target.classList.contains('dropdown-toggle'))
{const dropdownMenu=document.querySelector('.DropdownMenu1-navbar-collapse');if(dropdownMenu)
{const collapseInstance=bootstrap.Collapse.getInstance(dropdownMenu);if(collapseInstance)
{collapseInstance.hide();}}}}});var menuItems=document.querySelectorAll('#wb_ResponsiveMenu2 ul li a');menuItems.forEach(function(item)
{item.addEventListener('click',function(event)
{var checkbox=document.querySelector('#wb_ResponsiveMenu2 input');checkbox.checked=false;});});});$(document).ready(function()
{$("a[href*='#header13LayoutGrid2']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_header13LayoutGrid2').offset().top},600,'easeOutCirc');});$('#Blog1').each(function()
{var currentPage=0;var numPerPage=2;var $blog=$(this);var repaginate=function()
{$blog.find('.blogcolumn').hide().slice(currentPage*numPerPage,(currentPage+1)*numPerPage).show();};var numRows=$blog.find('.blogcolumn').length;var numPages=Math.ceil(numRows/numPerPage);var $pager=$('<div class="pager"></div>');for(var page=0;page<numPages;page++)
{$('<span class="page-number"></span>').text(page+1).bind('click',{newPage:page},function(event)
{currentPage=event.data['newPage'];repaginate();$(this).addClass('active').siblings().removeClass('active');}).appendTo($pager).addClass('clickable');}
$pager.appendTo($blog).find('span.page-number:first').addClass('active');repaginate();});});const btnUp={el:document.querySelector('.btn-up'),scrolling:false,show(){if(this.el.classList.contains('btn-up_hide')&&!this.el.classList.contains('btn-up_hiding')){this.el.classList.remove('btn-up_hide');this.el.classList.add('btn-up_hiding');window.setTimeout(()=>{this.el.classList.remove('btn-up_hiding');},300);}},hide(){if(!this.el.classList.contains('btn-up_hide')&&!this.el.classList.contains('btn-up_hiding')){this.el.classList.add('btn-up_hiding');window.setTimeout(()=>{this.el.classList.add('btn-up_hide');this.el.classList.remove('btn-up_hiding');},300);}},addEventListener(){window.addEventListener('scroll',()=>{const scrollY=window.scrollY||document.documentElement.scrollTop;if(this.scrolling&&scrollY>0){return;}
this.scrolling=false;if(scrollY>200){this.show();}else{this.hide();}});document.querySelector('.btn-up').onclick=()=>{this.scrolling=true;this.hide();window.scrollTo({top:0,left:0,behavior:'smooth'});}}}
btnUp.addEventListener();