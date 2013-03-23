/*
// Infinite Scroll jQuery plugin
// copyright Paul Irish, licensed GPL & MIT
// version 1.5.100504

// home and docs: http://www.infinite-scroll.com
*/

(function(a){a.fn.infinitescroll=function(n,i){function f(){b.debug&&window.console&&console.log.call(console,arguments)}function k(){return b.localMode?a(c.container)[0].scrollHeight&&a(c.container)[0].scrollHeight:a(document).height()}function l(){c.loadingMsg.find("img").hide().parent().find("div").html(b.donetext).animate({opacity:1},2E3,function(){a(this).parent().fadeOut("normal")});b.errorCallback()}function o(){if(c.isDone){l();return false}else{var d=g.children().get();if(d.length==0)return a.event.trigger("ajaxError",
[{status:404}]);for(;g[0].firstChild;)j.appendChild(g[0].firstChild);a(b.contentSelector)[0].appendChild(j);c.loadingMsg.fadeOut("normal");if(b.animate){var e=a(window).scrollTop()+a("#infscr-loading").height()+b.extraScrollPx+"px";a("html,body").animate({scrollTop:e},800,function(){c.isDuringAjax=false})}i.call(a(b.contentSelector)[0],d,c.currPage);if(!b.animate)c.isDuringAjax=false}}a.browser.ie6=a.browser.msie&&a.browser.version<7;var b=a.extend({},a.infinitescroll.defaults,n),c=a.infinitescroll,g,j;i=i||
function(){};if(!function(d){for(var e in d){if(e.indexOf&&e.indexOf("Selector")>-1&&a(d[e]).length===0){f("Your "+e+" found no elements.");return false}return true}}(b))return false;c.container=b.localMode?this:document.documentElement;b.contentSelector=b.contentSelector||this;b.loadMsgSelector=b.loadMsgSelector||b.contentSelector;var m=/(.*?\/\/).*?(\/.*)/,h=a(b.nextSelector).attr("href");if(h){h=function(d){d.match(m)&&d.match(m);if(d.match(/^(.*?)\b2\b(.*?$)/))d=d.match(/^(.*?)\b2\b(.*?$)/).slice(1);
else if(d.match(/^(.*?)2(.*?$)/)){if(d.match(/^(.*?page=)2(\/.*|$)/))return d=d.match(/^(.*?page=)2(\/.*|$)/).slice(1);f("Trying backup next selector parse technique. Treacherous waters here, matey.");d=d.match(/^(.*?)2(.*?$)/).slice(1)}else{if(d.match(/^(.*?page=)1(\/.*|$)/))return d=d.match(/^(.*?page=)1(\/.*|$)/).slice(1);f("Sorry, we couldn't parse your Next (Previous Posts) URL. Verify your the css selector points to the correct A tag. If you still get this error: yell, scream, and kindly ask for help at infinite-scroll.com.");
c.isInvalidPage=true}return d}(h);if(b.localMode)a(c.container)[0].scrollTop=0;c.pixelsFromNavToBottom=k()+(c.container==document.documentElement?0:a(c.container).offset().top)-a(b.navSelector).offset().top;c.loadingMsg=a('<div id="infscr-loading" style="text-align: center;"><img alt="Loading..." src="'+b.loadingImg+'" /><div>'+b.loadingText+"</div></div>");(new Image).src=b.loadingImg;a(document).ajaxError(function(d,e){f("Page not found. Self-destructing...");if(e.status==404){l();c.isDone=true;
a(b.localMode?this:window).unbind("scroll.infscr")}});a(b.localMode?this:window).bind("scroll.infscr",function(){if(!(c.isDuringAjax||c.isInvalidPage||c.isDone)){var d=0+k()-(b.localMode?a(c.container).scrollTop():a(c.container).scrollTop()||a(c.container.ownerDocument.body).scrollTop())-a(b.localMode?c.container:window).height();f("math:",d,c.pixelsFromNavToBottom);d-b.bufferPx<c.pixelsFromNavToBottom&&a(document).trigger("retrieve.infscr")}}).trigger("scroll.infscr");a(document).bind("retrieve.infscr",
function(){c.isDuringAjax=true;c.loadingMsg.appendTo(b.loadMsgSelector).show();a(b.navSelector).hide();c.currPage++;f("heading into ajax",h);g=a(b.contentSelector).is("table")?a("<tbody/>"):a("<div/>");j=document.createDocumentFragment();g.load(h.join(c.currPage)+" "+b.itemSelector,null,o)});return this}else f("Navigation selector not found")};a.infinitescroll={defaults:{debug:false,preload:false,nextSelector:"div.navigation a:first",loadingImg:"http://www.infinite-scroll.com/loading.gif",loadingText:"<em>Loading the next set of posts...</em>",
donetext:"<em>Congratulations, you've reached the end of the internet.</em>",navSelector:"div.navigation",contentSelector:null,loadMsgSelector:null,extraScrollPx:150,itemSelector:"div.post",animate:false,localMode:false,bufferPx:40,errorCallback:function(){}},loadingImg:undefined,loadingMsg:undefined,container:undefined,currPage:1,currDOMChunk:null,isDuringAjax:false,isInvalidPage:false,isDone:false}})(jQuery);