function blogwidget_pluginAppObj_9_42(){x5engine.boot.push(function(){if(1)$("#pluginAppObj_9_42 .post_title").on("click",function(event){var link="";$(location).attr("href").indexOf("blog/")==-1&&(link+="blog/");link+=$(this).attr("data-link");$(this).attr("href",link);$(this)[0].click();event.stopPropagation()})})}