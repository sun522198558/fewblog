(function(o){function f(i){return typeof(i)!=="undefined";}function p(q,i){return(q-i);}function m(i,q){return i.sort(function(s,r){return q[s]-q[r];});}function c(r){var i=[];var q;for(q in r){if(r.hasOwnProperty(q)){i.push(q);}}return i;}var d={};var g=o.getElementsByTagName("script");var a=g[g.length-1];var e=a.src.replace(/^[^\?]+\??/,"").split("&");var l=0;for(l=0;l<e.length;l++){var k=e[l].split("=");d[k[0]]=unescape(k[1]);}if(!f(d.minsize)){d.minsize=120;}if(!f(d.maxsize)){d.maxsize=280;}if(!f(d.math)){d.math="log";}var h=(!f(d.url))?o.domain:d.url;var j="http://"+h+"/";if(["default","flickr"].indexOf(d.css)!==-1){var n="http://rive.rs/stylesheets/tumblr_tag_clouds/"+d.css+".css";var b='<link rel="stylesheet" type="text/css" href="'+n+'" />';o.write(b);}o.write('<div id="tag_cloud"><div id="loading_tag_cloud">Loading tags...</div><ul id="tag_list"></ul></div>');$(o).ready(function(){var u=0;var q=[];var i=[];var r={};function s(){var v=j+"api/read/json?callback=?&num=50&start="+u;$.getJSON(v,function(w){$(w.posts).each(function(y,x){$(x.tags).each(function(A,z){if(typeof(z)==="string"){q.push(z);}});});if(u+50<w["posts-total"]){u=u+50;s();}else{t();}});}function t(){var A={};var B={};var x;$(q).each(function(D,C){r[C]=(r[C]?r[C]+1:1);});var w;for(w in r){if(r.hasOwnProperty(w)){A[w]=r[w];}}if(d.math==="log"){for(w in r){if(r.hasOwnProperty(w)){r[w]=Math.log(r[w]);}}}var v=c(r);var y;if(d.order==="frequency"){x=m(v,r).reverse();for(y in x){if(x.hasOwnProperty(y)){B[x[y]]=r[x[y]];}}r=B;}else{if(d.order==="alphabetical"){x=v.sort(function(D,F){var E=String(D).toUpperCase();var C=String(F).toUpperCase();if(E>C){return 1;}if(E<C){return -1;}return 0;});for(y in x){if(x.hasOwnProperty(y)){B[x[y]]=r[x[y]];}}r=B;}}sizeRange=d.maxsize-d.minsize;var z;for(z in r){if(r.hasOwnProperty(z)){i.push(r[z]);}}i.sort(p);minCount=i[0];maxCount=i[i.length-1];slope=sizeRange/(maxCount-minCount);count=0;for(w in r){if(r.hasOwnProperty(w)){count++;if(f(d.limit)&&d.limit!=="none"&&count>d.limit){break;}fontSize=Math.round(slope*r[w]-(slope*minCount-d.minsize));title=(A[w]===1?A[w]+" post":A[w]+" posts");link='<a href="'+j+"tagged/"+w+'/" title="'+title+'">'+w+"</a>";output='<li style="font-size:'+fontSize+'%;">'+link+" </li>";$("#tag_list").append(output);}}$("#loading_tag_cloud").html("");}s();});}(document));