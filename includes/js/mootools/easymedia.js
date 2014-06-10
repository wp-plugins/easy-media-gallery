/*
mediaboxAdvanced v1.5.4 - The ultimate extension of Slimbox and Mediabox; an all-media script
updated 2011.2.19
	(c) 2007-2011 John Einselen - http://iaian7.com
based on Slimbox v1.64 - The ultimate lightweight Lightbox clone
	(c) 2007-2008 Christophe Beyls - http://www.digitalia.be

description: The ultimate extension of Slimbox and Mediabox; an all-media script

license: MIT-style

authors:
- John Einselen
- Christophe Beyls
- Contributions from many others

requires:
- core/1.3.2: [Core, Array, String, Number, Function, Object, Event, Browser, Class, Class.Extras, Slick.*, Element.*, FX.*, DOMReady, Swiff]
- Quickie/2.1: '*'

provides: [Mediabox.open, Mediabox.close, Mediabox.recenter, Mediabox.scanPage]

--------------------------------------------------------------------------------------+
Easy Media Gallery Lite v1.2.43 rev.1.1.3.23

http://ghozylab.com/
http://wordpress.org/extend/plugins/easy-media-gallery/
--------------------------------------------------------------------------------------+*/

var Easymedia;var scripts=document.getElementsByTagName("script");var thisScript=scripts[scripts.length-1];var ajaxpathcur=thisScript.src.split("/").slice(0,-3).join("/")+"/ajax.php";(function(){function R(){v.setStyles({top:window.getScrollTop(),left:window.getScrollLeft()})}function U(){f=window.getWidth();l=window.getHeight();v.setStyles({width:f,height:l})}function z(t){if(Browser.firefox){["object",window.ie?"select":"embed"].forEach(function(e){Array.forEach($$(e),function(e){if(t)e._easymedia=e.style.visibility;e.style.visibility=t?"hidden":e._easymedia})})}v.style.display=t?"":"none";var n=t?"addEvent":"removeEvent";if(Browser.Platform.ios||Browser.ie6)window[n]("scroll",R);window[n]("resize",U);if(e.keyboard)document[n]("keydown",W)}function W(t){if(e.keyboardAlpha){switch(t.code){case 27:case 88:case 67:Y();break;case 37:case 80:X();break;case 39:case 78:V()}}else{switch(t.code){case 27:Y();break;case 37:X();break;case 39:V()}}if(e.keyboardStop){return false}}function X(){return $(r)}function V(){return $(i)}function $(s){if(s>=0){g.set("html","");n=s;r=(n||!e.loop?n:t.length)-1;i=n+1;if(i==t.length)i=e.loop?0:-1;G();m.className="mbLoading";if(h&&B=="inline"&&!e.inlineClone)h.adopt(g.getChildren());if(!t[s][2])t[s][2]="";O=t[s][2].split(" ");M=O.length;if(M>1){P=O[M-2].match("%")?window.getWidth()*O[M-2].replace("%","")*.01:O[M-2];H=O[M-1].match("%")?window.getHeight()*O[M-1].replace("%","")*.01:O[M-1]}else{P="";H=""}A=t[s][0];D=t[s][3];var o=new Request.JSON({url:e.ajaxpath,method:"get",onRequest:function(){},onComplete:function(t){function n(){if(A.match(/quietube\.com/i)){j=A.split("v.php/");A=j[1]}else if(A.match(/\/\/yfrog/i)){B=A.substring(A.length-1);if(B.match(/b|g|j|p|t/i))B="image";if(B=="s")B="flash";if(B.match(/f|z/i))B="video";A=A+":iphone"}if(A.match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i)||B=="image"){B="img";A=A.replace(/twitpic\.com/i,"twitpic.com/show/full");h=new Image;h.onload=J;h.src=A}else if(A.match(/\.flv|\.m4v|\.mp4/i)||B=="video"){B="obj";P=P||e.defaultWidth;H=H||e.defaultHeight;h=new Swiff(""+e.playerpath+"?&teaserURL=&mediaURL="+A+"&allowSmoothing=true&autoPlay="+e.autoplay+"&buffer=6&showTimecode="+e.showTimecode+"&loop="+e.medialoop+"&controlColor="+e.controlColor+"&controlBackColor="+e.controlBackColor+"&playerBackColor="+e.playerBackColor+"&defaultVolume="+e.volume+"&scaleIfFullScreen=true&showScalingButton=true&crop=false",{id:"mbVideo",width:P,height:H,params:{wmode:e.wmodeNB,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/\.mp3|\.aac|tweetmic\.com|tmic\.fm/i)||B=="audio"){B="obj";P=P||e.defaultWidth;H=H||"17";if(A.match(/tweetmic\.com|tmic\.fm/i)){A=A.split("/");A[4]=A[4]||A[3];A="http://media4.fjarnet.net/tweet/tweetmicapp-"+A[4]+".mp3"}h=new Swiff(""+e.playerpath+"?mediaURL="+A+"&allowSmoothing=true&autoPlay="+e.autoplay+"&buffer=6&showTimecode="+e.showTimecode+"&loop="+e.medialoop+"&controlColor="+e.controlColor+"&controlBackColor="+e.controlBackColor+"&defaultVolume="+e.volume+"&scaleIfFullScreen=true&showScalingButton=true&crop=false",{id:"mbAudio",width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/\.swf/i)||B=="flash"){B="obj";P=P||e.defaultWidth;H=H||e.defaultHeight;h=new Swiff(A,{id:"mbFlash",width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/\.mov|\.m4a|\.aiff|\.avi|\.caf|\.dv|\.mid|\.m3u|\.mp3|\.mp2|\.mp4|\.qtz/i)||B=="qt"){B="qt";P=P||e.defaultWidth;H=parseInt(H,10)+16||e.defaultHeight;h=new Quickie(A,{id:"EasymediaQT",width:P,height:H,attributes:{controller:e.controller,autoplay:e.autoplay,volume:e.volume,loop:e.medialoop,bgcolor:e.bgcolor}});J()}else if(A.match(/blip\.tv/i)){B="obj";P=P||"640";H=H||"390";h=new Swiff(A,{src:A,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/break\.com/i)){B="obj";P=P||"464";H=H||"376";F=A.match(/\d{6}/g);h=new Swiff("http://embed.break.com/"+F,{width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/dailymotion\.com/i)){dlmtnID=A.split(/[_]/)[0];j=dlmtnID.split("/");if(e.html5){B="url";P=P||"560";H=H||"315";F=j[4];h=new Element("iframe",{src:"http://www.dailymotion.com/embed/video/"+F+"?logo=0&autoPlay="+e.autoplayNum,id:F,width:P,height:H,frameborder:0});J()}else{B="obj";P=P||"480";H=H||"381";h=new Swiff(A,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}}else if(A.match(/facebook\.com/i)){if(e.html5){j=A.split("video_id=");B="url";P=P||"1280";H=H||"720";F="mediaId_"+(new Date).getTime();h=new Element("iframe",{src:"https://www.facebook.com/video/embed?video_id="+j[1]+"",id:F,width:P,height:H,frameborder:0});J()}else{B="obj";P=P||"320";H=H||"240";j=A.split("v=");j=j[1].split("&");F=j[0];h=new Swiff("http://www.facebook.com/v/"+F,{movie:"http://www.facebook.com/v/"+F,classid:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}}else if(A.match(/flickr\.com(?!.+\/show\/)/i)){B="obj";P=P||"500";H=H||"375";j=A.split("/");F=j[5];h=new Swiff("http://www.flickr.com/apps/video/stewart.swf",{id:F,classid:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",width:P,height:H,params:{flashvars:"photo_id="+F+"&show_info_box="+e.flInfo,wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/gametrailers\.com/i)){B="obj";P=P||"480";H=H||"392";F=A.match(/\d{5}/g);h=new Swiff("http://www.gametrailers.com/remote_wrap.php?mid="+F,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/google\.com\/videoplay/i)){B="obj";P=P||"400";H=H||"326";j=A.split("=");F=j[1];h=new Swiff("http://video.google.com/googleplayer.swf?docId="+F+"&autoplay="+e.autoplayNum,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/megavideo\.com/i)){B="obj";P=P||"640";H=H||"360";j=A.split("=");F=j[1];h=new Swiff("http://wwwstatic.megavideo.com/mv_player.swf?v="+F,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/metacafe\.com\/watch/i)){B="obj";P=P||"400";H=H||"345";j=A.split("/");F=j[4];h=new Swiff("http://www.metacafe.com/fplayer/"+F+"/.swf?playerVars=autoPlay="+e.autoplayYes,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/vids\.myspace\.com/i)){B="obj";P=P||"425";H=H||"360";h=new Swiff(A,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/revver\.com/i)){B="obj";P=P||"480";H=H||"392";j=A.split("/");F=j[4];h=new Swiff("http://flash.revver.com/player/1.0/player.swf?mediaId="+F+"&affiliateId="+e.revverID+"&allowFullScreen="+e.revverFullscreen+"&autoStart="+e.autoplay+"&backColor=#"+e.revverBack+"&frontColor=#"+e.revverFront+"&gradColor=#"+e.revverGrad+"&shareUrl=revver",{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/rutube\.ru/i)){B="obj";P=P||"470";H=H||"353";j=A.split("=");F=j[1];h=new Swiff("http://video.rutube.ru/"+F,{movie:"http://video.rutube.ru/"+F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/tudou\.com/i)){B="obj";P=P||"400";H=H||"340";j=A.split("/");F=j[5];h=new Swiff("http://www.tudou.com/v/"+F,{width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/twitcam\.com/i)){B="obj";P=P||"320";H=H||"265";j=A.split("/");F=j[3];h=new Swiff("http://static.livestream.com/chromelessPlayer/wrappers/TwitcamPlayer.swf?hash="+F,{width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/twitvid\.com/i)){B="obj";P=P||"600";H=H||"338";j=A.split("/");F=j[3];h=new Swiff("http://www.twitvid.com/player/"+F,{width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/ustream\.tv/i)){B="url";P=P||"480";H=H||"302";F="ustream_"+(new Date).getTime();h=new Element("iframe",{src:A+"?v=3&wmode=opaque",id:F,width:P,height:H,frameborder:0});J()}else if(A.match(/youku\.com/i)){if(e.html5){B="url";P=P||"510";H=H||"498";j=A.replace(/.*id_([^&]*)\.html.*/,"$1");h=new Element("iframe",{src:"http://player.youku.com/embed/"+j,id:F,width:P,height:H,frameborder:0});J()}else{B="obj";P=P||"480";H=H||"400";j=A.split("id_");F=j[1];h=new Swiff("http://player.youku.com/player.php/sid/"+F+"=/v.swf",{width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}}else if(A.match(/youtu\.be\//i)){j=A.split(".be/");if(e.html5){B="url";P=P||"640";H=H||"385";F="mediaId_"+(new Date).getTime();h=new Element("iframe",{src:"http://www.youtube.com/embed/"+j[1]+"?rel="+e.ytRel+e.ytautoplay,id:F,width:P,height:H,frameborder:0});J()}else{B="obj";F=j[1];P=P||"480";H=H||"385";h=new Swiff("http://www.youtube.com/v/"+F+"&autoplay="+e.ytautoplay+"&fs="+e.fullscreenNum+"&border="+e.ytBorder+"&color1=0x"+e.ytColor1+"&color2=0x"+e.ytColor2+"&rel="+e.ytRel+"&showinfo="+e.ytInfo+"&showsearch="+e.ytSearch,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}}else if(A.match(/youtube\.com\/watch/i)){var t=/\&list=/g;var n=A.match(t);if(n!="&list="){j=A.split("v=");if(e.html5){B="url";P=P||"640";H=H||"385";F="mediaId_"+(new Date).getTime();h=new Element("iframe",{src:"http://www.youtube.com/embed/"+j[1]+"?rel="+e.ytRel+e.ytautoplay,id:F,width:P,height:H,frameborder:0});J()}else{B="obj";F=j[1];P=P||"480";H=H||"385";h=new Swiff("http://www.youtube.com/v/"+F+"&autoplay="+e.ytautoplay+"&fs="+e.fullscreenNum+"&border="+e.ytBorder+"&color1=0x"+e.ytColor1+"&color2=0x"+e.ytColor2+"&rel="+e.ytRel+"&showinfo="+e.ytInfo+"&showsearch="+e.ytSearch,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}}else if(n=="&list="){B="url";ytplID=A.split(/[=&]/)[1];ytplList=A.split("list=");P=P||"480";H=H||"385";h=new Element("iframe",{src:"http://www.youtube.com/embed/"+ytplID+"?list="+ytplList[1]+"&rel="+e.ytRel+e.ytautoplay,id:ytplID,width:P,height:H,frameborder:0});J()}}else if(A.match(/youtube\.com\/embed/i)){j=A.split("embed/");if(e.html5){B="url";P=P||"640";H=H||"385";F="mediaId_"+(new Date).getTime();h=new Element("iframe",{src:"http://www.youtube.com/embed/"+j[1]+"?rel="+e.ytRel+e.ytautoplay,id:F,width:P,height:H,frameborder:0});J()}else{B="obj";F=j[1];P=P||"480";H=H||"385";h=new Swiff("http://www.youtube.com/v/"+F+"&autoplay="+e.ytautoplay+"&fs="+e.fullscreenNum+"&border="+e.ytBorder+"&color1=0x"+e.ytColor1+"&color2=0x"+e.ytColor2+"&rel="+e.ytRel+"&showinfo="+e.ytInfo+"&showsearch="+e.ytSearch,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}}else if(A.match(/veoh\.com/i)){B="obj";P=P||"410";H=H||"341";A=A.replace("%3D","/");j=A.split("watch/");F=j[1];h=new Swiff("http://www.veoh.com/swf/webplayer/WebPlayer.swf?version=AFrontend.5.7.0.1396&permalinkId="+F+"&player=videodetailsembedded&videoAutoPlay="+e.autoplayNum+"&id=anonymous",{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}else if(A.match(/viddler\.com/i)){B="obj";P=P||"437";H=H||"370";j=A.split("/");F=j[4];h=new Swiff(A,{id:"viddler_"+F,movie:A,classid:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen,id:"viddler_"+F,movie:A}});J()}else if(A.match(/livestream\.com/i)){B="url";F="liveStream_"+(new Date).getTime();P=P||"510";H=H||"498";h=new Element("iframe",{src:A+"?autoPlay="+e.lsautoplay,id:F,width:P,height:H,frameborder:0});J()}else if(A.match(/vimeo\.com/i)){P=P||"640";H=H||"360";j=A.split("/");F=j[3];if(e.html5){B="url";F="mediaId_"+(new Date).getTime();h=new Element("iframe",{src:"http://player.vimeo.com/video/"+j[3]+e.vmautoplay,id:F,width:P,height:H,frameborder:0});J()}else{B="obj";h=new Swiff("http://www.vimeo.com/moogaloop.swf?clip_id="+F+"&server=www.vimeo.com&fullscreen="+e.fullscreenNum+"&autoplay="+e.vmautoplay+"&show_title="+e.vmTitle+"&show_byline="+e.vmByline+"&show_portrait="+e.vmPortrait+"&color="+e.vmColor,{id:F,width:P,height:H,params:{wmode:e.wmode,bgcolor:e.bgcolor,allowscriptaccess:e.scriptaccess,allowfullscreen:e.fullscreen}});J()}}else if(A.match(/\#mb_/i)){B="inline";P=P||e.defaultWidth;H=H||e.defaultHeight;URLsplit=A.split("#");h=document.id(URLsplit[1]);J()}else{B="url";P=P||e.defaultWidth;H=H||e.defaultHeight;F="mediaId_"+(new Date).getTime();h=new Element("iframe",{src:A,id:F,width:P,height:H,frameborder:0});J()}}b=[t[0],t[1]];n()},onFailure:function(){b=["Data not available.","Data not available.","Data not available.","Data not available."];alert("Ajax request failed, please refresh your browser window.")}});(function(){o.send({data:{id:D}});return false}).delay(100,this)}return false}function J(){B=="img"?g.addEvent("click",V):g.removeEvent("click",V);if(B=="img"||B=="url"){P=h.width;H=h.height;g.setStyles({cursor:"pointer"});if(e.imgBackground){g.setStyles({backgroundImage:"url("+A+")",display:""})}else{if(H>=l-e.imgPadding&&H/l>=P/f){H=l-e.imgPadding;P=h.width=parseInt(H/h.height*P,10);h.height=H}else if(P>=f-e.imgPadding&&H/l<P/f){P=f-e.imgPadding;H=h.height=parseInt(P/h.width*H,10);h.width=P}if(Browser.ie)h=document.id(h);if(e.clickBlock=="true"){if(e.clickBlock)h.addEvent("mousedown",function(e){e.stop()}).addEvent("contextmenu",function(e){e.stop()})}g.setStyles({backgroundImage:"none",display:""});h.inject(g)}}else if(B=="inline"){g.setStyles({backgroundImage:"none",display:""});e.inlineClone?g.grab(h.get("html")):g.adopt(h.getChildren())}else if(B=="qt"){g.setStyles({backgroundImage:"none",display:""});h.inject(g)}else if(B=="url"){g.setStyles({backgroundImage:"none",display:""});h.inject(g)}else if(B=="obj"){if(Browser.Plugins.Flash.version<"8"){g.setStyles({backgroundImage:"none",display:""});g.set("html",'<div id="mbError"><b>Error</b><br/>Adobe Flash is either not installed or not up to date, please visit <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" title="Get Flash" target="_new">Adobe.com</a> to download the free player.</div>');P=e.DefaultWidth;H=e.DefaultHeight}else{g.setStyles({backgroundImage:"none",display:""});h.inject(g)}}else{g.setStyles({backgroundImage:"none",display:""});g.set("html",e.flashText);P=e.defaultWidth;H=e.defaultHeight}if(b[0]!="none"){S.setStyles({display:""});S.set("text",e.showCaption?b[0]:"")}else{S.setStyles({display:"none"})}if(b[1]!="none"){x.setStyles({display:""});x.set("html",b[1])}else{x.setStyles({display:"none"})}C.set("html",e.showCounter&&t.length>1?e.counterText.replace(/\{x\}/,e.countBack?t.length-n:n+1).replace(/\{y\}/,t.length):"");if(r>=0&&t[r][0].match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i))p.src=t[r][0].replace(/twitpic\.com/i,"twitpic.com/show/full");if(i>=0&&t[i][0].match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i))d.src=t[i][0].replace(/twitpic\.com/i,"twitpic.com/show/full");if(r>=0)k.style.display="";if(i>=0)L.style.display="";g.setStyles({width:P+"px",height:H+"px"});w.setStyles({width:P-q+"px"});T.setStyles({width:P-q+"px"});P=g.offsetWidth;H=g.offsetHeight+w.offsetHeight;if(H>=s+s){o=-s}else{o=-(H/2)}if(P>=u+u){a=-u}else{a=-(P/2)}if(e.resizeOpening){c.resize.start({width:P+20,height:H,marginTop:-250,marginLeft:a-I})}else{m.setStyles({width:P+20,height:H,marginTop:o-I,marginLeft:a-I});K()}jQuery("#mbCenter").stop().animate({top:jQuery(window).scrollTop()+290},500);(function(){m.setStyle("height","auto")}).delay(500,this)}function K(){c.media.start(1)}function Q(){m.className="";c.bottom.start(1)}function G(){if(h){if(B=="inline"&&!e.inlineClone)h.adopt(g.getChildren());h.onload=function(){}}c.resize.cancel();c.media.cancel().set(0);c.bottom.cancel().set(0);$$(k,L).setStyle("display","none");$$(C).setStyle("display","none")}function Y(){if(n>=0){if(B=="inline"&&!e.inlineClone)h.adopt(g.getChildren());h.onload=function(){};g.empty();for(var t in c)c[t].cancel();m.setStyle("display","none");c.overlay.chain(z).start(0)}return false}var e,t,n,r,i,s,o,u,a,f,l,c,h,p=new Image,d=new Image,v,m,g,y,b,w,E,S,x,T,N,C,k,L,A,O,M,_,D,P,H,B="none",j,F="easyMedia",I,q;window.addEvent("domready",function(){document.id(document.body).adopt($$([v=(new Element("div",{id:"mbOverlay"})).addEvent("click",Y),m=new Element("div",{id:"mbCenter"})]).setStyle("display","none"));y=(new Element("div",{id:"mbContainer"})).inject(m,"inside");g=(new Element("div",{id:"mbMedia"})).inject(y,"inside");w=(new Element("div",{id:"mbBottom"})).inject(m,"inside").adopt(L=(new Element("a",{id:"mbNextLink",href:"#"})).addEvent("click",V),k=(new Element("a",{id:"mbPrevLink",href:"#"})).addEvent("click",X),S=new Element("div",{id:"mbTitle"}),x=new Element("div",{id:"mbSbtitle"}),C=new Element("div",{id:"mbNumber"}),T=new Element("div",{id:"mbCaption"}),N=new Element("div",{id:"mbSosmeddiv"}),closeLink=(new Element("a",{id:"mbCloseLink",href:"#"})).addEvent("click",Y));c={overlay:(new Fx.Tween(v,{property:"opacity",duration:360})).set(0),media:new Fx.Tween(g,{property:"opacity",duration:360,onComplete:Q}),bottom:(new Fx.Tween(w,{property:"opacity",duration:240})).set(0)}});Easymedia={close:function(){Y()},recenter:function(){if(m&&!Browser.Platform.ios){u=window.getScrollLeft()+window.getWidth()/2;m.setStyles({left:u,marginLeft:-(P/2)-I});s=window.getScrollTop()+window.getHeight()/2;I=m.getStyle("padding-left").toInt()+g.getStyle("margin-left").toInt()+g.getStyle("padding-left").toInt();m.setStyles({top:s,left:u,marginTop:-(H/2)-I,marginLeft:-(P/2)-I})}},open:function(n,r,i){e={buttonText:["<big>«</big>","<big>»</big>","<big></big>"],counterText:"({x} of {y})",linkText:'<a href="{x}" target="_new">{x}</a><br/>open in a new tab</div>',flashText:'<b>Error</b><br/>Adobe Flash is either not installed or not up to date, please visit <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" title="Get Flash" target="_new">Adobe.com</a> to download the free player.',center:true,loop:true,keyboard:true,keyboardAlpha:false,keyboardStop:false,overlayOpacity:EasyLite.ovrlayop,resizeOpening:true,resizeDuration:240,initialWidth:90,initialHeight:90,defaultWidth:640,defaultHeight:360,showCaption:true,showCounter:false,countBack:false,clickBlock:EasyLite.drclick,iOShtml:true,imgBackground:false,imgPadding:100,overflow:"auto",inlineClone:false,html5:"true",scriptaccess:"true",fullscreen:"true",fullscreenNum:"1",autoplay:EasyLite.audioautoplay,autoplayNum:EasyLite.vidautopc,autoplayYes:"yes",volume:EasyLite.audiovol,medialoop:EasyLite.audioloop,bgcolor:"#000000",wmode:"transparent",playerpath:EasyLite.nblaswf,showTimecode:"false",controlColor:"0xFFFFFF",controlBackColor:"0x0000000",playerBackColor:"",wmodeNB:"transparent",controller:"true",flInfo:"true",revverID:"187866",revverFullscreen:"true",revverBack:"000000",revverFront:"ffffff",revverGrad:"000000",usViewers:"true",ytBorder:"0",ytColor1:"000000",ytColor2:"333333",ytRel:"0",ytInfo:"1",ytSearch:"0",ytautoplay:EasyLite.vidautopa,lsautoplay:EasyLite.vidautopd,vuPlayer:"basic",vmTitle:"1",vmByline:"1",vmPortrait:"1",vmautoplay:EasyLite.vidautopb,vmColor:"ffffff",ajaxpath:EasyLite.ajaxpth};if(Browser.firefox2){e.overlayOpacity=1;v.className="mbOverlayOpaque"}if(Browser.Platform.ios){e.keyboard=false;e.resizeOpening=false;v.className="mbMobile";w.className="mbMobile";R()}if(Browser.ie6){e.resizeOpening=false;v.className="mbOverlayAbsolute";R()}if(typeof n=="string"){n=[[n,r,i]];r=0}t=n;e.loop=e.loop&&t.length>1;U();z(true);s=window.getScrollTop()+window.getHeight()/2;u=window.getScrollLeft()+window.getWidth()/2;I=m.getStyle("padding-left").toInt()+g.getStyle("margin-left").toInt()+g.getStyle("padding-left").toInt();q=w.getStyle("margin-left").toInt()+w.getStyle("padding-left").toInt()+w.getStyle("margin-right").toInt()+w.getStyle("padding-right").toInt();m.setStyles({top:s,left:u,width:e.initialWidth,height:e.initialHeight,marginTop:-(e.initialHeight/2)-I,marginLeft:-(e.initialWidth/2)-I,display:""});c.resize=new Fx.Morph(m,{duration:e.resizeDuration,onComplete:K});c.overlay.start(e.overlayOpacity);return $(r)}};Element.implement({easymedia:function(e,t){$$(this).easymedia(e,t);return this}});Elements.implement({easymedia:function(e,t,n,r){t=t||function(e){_=e.rel.split(/[\[\]]/);_=_[1];return[e.get("href"),e.title,_,e.get("class")]};n=n||function(){return true};var i=this;i.addEvent("contextmenu",function(e){if(this.toString().match(/\.gif|\.jpg|\.jpeg|\.png/i))e.stop()});i.removeEvents("click").addEvent("click",function(){var r=i.filter(n,this);var s=[];var o=[];r.each(function(e,t){if(o.indexOf(e.toString())<0){s.include(r[t]);o.include(r[t].toString())}});return Easymedia.open(s.map(t),o.indexOf(this.toString()),e)});return i}})})();Browser.Plugins.QuickTime=function(){if(navigator.plugins){for(var e=0,t=navigator.plugins.length;e<t;e++){if(navigator.plugins[e].name.indexOf("QuickTime")>=0){return true}}}else{var n;try{n=new ActiveXObject("QuickTime.QuickTime")}catch(r){}if(n){return true}}return false}();Easymedia.scanPage=function(){var e=$$("a").filter(function(e){return e.rel&&e.rel.test(/^easymedia/i)});e.easymedia({},null,function(e){var t=this.rel.replace(/[\[\]|]/gi," ");var n=t.split(" ");var r="\\["+n[1]+"[ \\]]";var i=new RegExp(r);return this==e||this.rel.length>8&&e.rel.match(i)})};window.addEvents({domready:Easymedia.scanPage,resize:Easymedia.recenter})