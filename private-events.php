<?php 
    include './include/config.php';
    $obj = new db_class();
?>
<?php
    $site_basic_info = $obj->FlyQuery("select * from site_basic_info");
    // print_r($site_basic_info);
    // exit();

?>
<!doctype html>
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">

        <link rel="dns-prefetch" href="http://ajax.googleapis.com/">
    <link rel="dns-prefetch" href="http://www.google-analytics.com/">

        

    <title>Private Events &amp; Chef Table at Darbaar Indian Restaurant in London</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[(new Date).getTime()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(s,function(e,t){f[t]=o(l+t,!0,"api")}),f.addPageAction=o(l+"addPageAction",!0),f.setCurrentRouteName=o(l+"routeName",!0),t.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(p+"tracer",[Date.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return t.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){d[t]=o(p+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o){if(!p.aborted){e&&e(n,r,o);for(var i=t(o),a=v(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var f=s[w[n]];return f&&f.push([y,n,r,i]),i}}function d(e,t){b[e]=v(e).concat(t)}function v(e){return b[e]||[]}function g(e){return l[e]=l[e]||o(n)}function m(e,t){f(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var b={},w={},y={on:d,emit:n,get:g,listeners:v,context:t,buffer:m,abort:a,aborted:!1};return y}function i(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},l={},p=t.exports=o();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!h++){var e=y.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return f.abort();c(b,function(t,n){e[t]||(e[t]=n)}),u("mark",["onload",a()],null,"api");var n=l.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===l.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=e("ee"),s=window,l=s.document,p="addEventListener",d="attachEvent",v=s.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:v,REQ:s.Request,EV:s.Event,PR:s.Promise,MO:s.MutationObserver},e(1);var m=""+location,b={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1016.min.js"},w=v&&g&&g[p]&&!/CriOS/.test(navigator.userAgent),y=t.exports={offset:a(),origin:m,features:{},xhrWrappable:w};l[p]?(l[p]("DOMContentLoaded",i,!1),s[p]("load",r,!1)):(l[d]("onreadystatechange",o),s[d]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="revisit-after" content="14 days">
    <meta name="robots" content="all">
    <meta name="generator" content="http://www.propeller.uk.com">
    <meta name="author" content="Propeller Communications">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="PropellerComms">
    <meta name="twitter:title" content="Darbaar Restaurant">
    <meta name="twitter:description" content="Private Events &amp; Chef Table at Darbaar Indian Restaurant in London">
    <meta name="twitter:image" content="http://darbaarrestaurants.com/assets/img/social-avatar.jpg">

    <meta property="og:title" content="Darbaar Restaurant">
    <meta property="og:image" content="http://darbaarrestaurants.com/assets/img/social-avatar.jpg">
    <meta property="og:site_name" content="Darbaar Restaurant">
    <meta property="og:description" content="Private Events &amp; Chef Table at Darbaar Indian Restaurant in London">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<script src="https://use.typekit.net/hzg6nft.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

    <link rel="stylesheet" href="assets/css/main.css">

        <script>
    /* Modernizr(Custom Build) - Build: http://goo.gl/iGV1kD */
    ;window.Modernizr=function(a,b,c){function A(a){j.cssText=a}function B(a,b){return A(m.join(a+";")+(b||""))}function C(a,b){return typeof a===b}function D(a,b){return!!~(""+a).indexOf(b)}function E(a,b){for(var d in a){var e=a[d];if(!D(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function F(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:C(f,"function")?f.bind(d||b):f}return!1}function G(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return C(b,"string")||C(b,"undefined")?E(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),F(e,b,c))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x=function(b){var c=a.matchMedia||a.msMatchMedia;if(c)return c(b)&&c(b).matches||!1;var d;return w("@media "+b+" { #"+h+" { position: absolute; } }",function(b){d=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle)["position"]=="absolute"}),d},y={}.hasOwnProperty,z;!C(y,"undefined")&&!C(y.call,"undefined")?z=function(a,b){return y.call(a,b)}:z=function(a,b){return b in a&&C(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:w(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},q.csstransforms=function(){return!!G("transform")},q.csstransforms3d=function(){var a=!!G("perspective");return a&&"webkitPerspective"in g.style&&w("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a};for(var H in q)z(q,H)&&(v=H.toLowerCase(),e[v]=q[H](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)z(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},A(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.php5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.php5=s,r(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.mq=x,e.testProp=function(a){return E([a])},e.testAllProps=G,e.testStyles=w,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("index.php").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
</script>

        <script>
        // GA Tracking
        (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","http://www.google-analytics.com/analytics.js","ga");ga("create","UA-64223025-1","auto");ga("send","pageview");
    </script>

    <!-- Facebook Pixel Code/tracks visits -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','http://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1515359682091948');
        fbq('track', "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1515359682091948&amp;ev=PageView&amp;noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body id="private-events" data-page="private-events" itemscope itemtype="http://schema.org/WebPage">

    
    <div class="page  page--private-events">

        

        <header class="l-head  header js-header    header--fixed">
            <div class="container">
                <div class="col  col--12  col--center">

                    <a href="index.php" class="logo  logo--gold">
                        <img src="assets/img/logos/gold-logo.png" class="scale-with-grid" alt="Darbaar by Abdul Yaseen">
                    </a>

                    <nav class="js-nav">
                        <a href="reservations.php" class="link--vouchers">Reservations</a>
                        <a href="menus.php" class="">Menus</a>
                        <a href="lotus-bar.php" class="">Lotus Bar</a>
                        <a href="private-events.php" class="  active">Private Events</a>
                        <a href="whats-on.php" class="">Top Offers & News</a>
                        <a href="gallery.php" class="">Gallery</a>
                        <a href="contact.php" class="">Contact</a>
                        <a href="tel:02074224100" class="social js-phone-event"><img src="assets/img/icons/phone.png"></a>

                        <a href="https://www.facebook.com/DarbaarbyAbdul/" target="_blank" class="social"><i class="icon-facebook"></i></a>

                        <a href="https://twitter.com/DarbaarbyAbdul" target="_blank" class="social" ><i class="icon-twitter"></i></a>

                        <a href="https://instagram.com/darbaarbyabdul/" target="_blank" class="social" ><i class="icon-instagram"></i></a>
                    </nav>

                    <a href="reservations.php" class="btn  btn--vouchers">
                        BOOK
                    </a>

                    <a href="#" class="js-menu  rwd-menu">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                    </a>
                </div>
            </div>
        </header>

        <main role="main" class="l-main  content    content--sub ">

            
                <section class="slider">
                    <div class="js-slider">
                        
                                                                                    <div class="slide">
                                    <div class="slider__item" style="background-image: url('assets/img/slides/private-events/01.jpg')">
                                    </div>
                                                                    </div>
                                                                                                                                            <div class="slide">
                                    <div class="slider__item" style="background-image: url('assets/img/slides/private-events/02.jpg')">
                                    </div>
                                                                    </div>
                                                                                                                                            <div class="slide">
                                    <div class="slider__item" style="background-image: url('assets/img/slides/private-events/03.jpg')">
                                    </div>
                                                                    </div>
                                                                                                                                            <div class="slide">
                                    <div class="slider__item" style="background-image: url('assets/img/slides/private-events/04.jpg')">
                                    </div>
                                                                    </div>
                                                                                                                                            <div class="slide">
                                    <div class="slider__item" style="background-image: url('assets/img/slides/private-events/05.jpg')">
                                    </div>
                                                                    </div>
                                                                                                                                            <div class="slide">
                                    <div class="slider__item" style="background-image: url('assets/img/slides/private-events/06.jpg')">
                                    </div>
                                                                    </div>
                                                                                                    </div>
                </section>

            

            <!-- Food Menu -->


<div class="container  container--offset  text--centre">

	<div class="col  col--10  col--center  block  block--intro  mq-desk--full--flush" data-background="beige-texture">

		<div class="frame">

			<div class="frame__inner">

				<h1 class="h_primary  h_bold  h_alpha  text--upper  sub-page">Private Events <span class="logo  logo--elephant-dark  pt40"></span></h1>

                <a href="https://goo.gl/maps/EnEXyXBt34J2" target="_blank" class="btn  btn--tour  btn--spaced">Take A Virtual Tour</a>

				<p class="h_delta">A beautiful and flexible space, Darbaar can accommodate any function, whether private dining or a cocktail party, with a beautiful private area, seating up to 20 and chef’s table for up to 12 people. We also have other areas that can cater for parties ranging for up to 220 people.</p>

				<p class="h_delta">An array of set menus are available, ranging from tasting menus to canapés, for more information please go to <a href="menus.php">menus</a>.</p>

                                    <a href="#" class="button  button--large  button--dark  mlr10  mb20  js-scroll"
                   data-scroll="1">Dawat Menu</a>
                                    <a href="#" class="button  button--large  button--dark  mlr10  mb20  js-scroll"
                   data-scroll="2">Darbaar Menu</a>
                                    <a href="#" class="button  button--large  button--dark  mlr10  mb20  js-scroll"
                   data-scroll="3">Maharaja Menu</a>
                
				<a href="assets/pdf/events-packf7d6.pdf?view=fit" target="_blank" class="button  button--large  button--dark  mlr10  mb20">View Events Pack</a>

                <br/>
                <br/>
                <br/>
                <br/>

				<a href="#" class="button  button--large  button--dark  mlr10  js-scroll" data-scroll="private-booking">Booking Enquiry</a>

			</div>

		</div>

	</div>

    <div class="block  menu">

        <article class="block__bottom">

                        
            
                <div class="block__primary  block__content-gold  pt40  pb30  menu__header"
                     data-scroll-target="1" id="dawat">

                    <h2 class="h_primary  h_gamma  h_bold  text--upper  text--centre">
                        Dawat
                        <span class="h_light  h_zeta  h_inline">
    						DAWAT @ &pound;40 per person <br>A FRIENDLY INVITATION    					</span>
                    </h2>

                    <span class="logo  logo--sword"></span>

					<span class="h_light  h_milli  h_inline  text--upper  mtb15">
                                                    Chef recommends this menu to be ordered for the entire table to enhance their dining experience
                        					</span>

                </div>

                <div class="menu__content  menu__first" id="504017"
                     data-background="beige-texture">

                    <div class="col  col--8  col--center  block__content  text--left  pt50  pb90  mq-tab--full">

                        <div class="frame  menu">

                            
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                DAWAT @ £40 per person                                             </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            A FRIENDLY INVITATION
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                STARTER                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            HARIYALI DATE AND SAMOSA CHAAT (V) 
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            TANDOORI SALMON TIKKA & SUFIYANI LAMB SEEKH KEBAB
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                MAIN COURSE                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                             ‘SAAG’ PANEER WITH GARLIC & SMOKED CHILLIES (V)
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            KASTURI BUTTER CHICKEN WITH DRIED FENUGREEK
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            KERALA SPICED SHRIMP WITH COCONUT & CURRY LEAVES
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                SIDE DISH                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            KAALI DAAL | NAAN BREAD  | PILAU RICE
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                DESSERT                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            SPICED CARROT CAKE, CARDAMOM SHIRIKHAND, LEMON FIGS
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                                            </div>

                    </div>

                </div>

            
                <div class="block__primary  block__content-gold  pt40  pb30  menu__header"
                     data-scroll-target="2" id="darbaar-">

                    <h2 class="h_primary  h_gamma  h_bold  text--upper  text--centre">
                        Darbaar 
                        <span class="h_light  h_zeta  h_inline">
    						    					</span>
                    </h2>

                    <span class="logo  logo--sword"></span>

					<span class="h_light  h_milli  h_inline  text--upper  mtb15">
                                                    Chef recommends this menu to be ordered for the entire table to enhance their dining experience
                        					</span>

                </div>

                <div class="menu__content " id="501364"
                     data-background="beige-texture">

                    <div class="col  col--8  col--center  block__content  text--left  pt50  pb90  mq-tab--full">

                        <div class="frame  menu">

                            
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                DARBAAR @ £55 PER PERSON                                             </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            AN INDULGENT FEAST THAT INCAPSULATES THE ESENCE OF DARBAAR
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                APPETISER                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            TAWA HARI TIKKI CHAAT WITH TAMARIND & SEV (V)
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                STARTER                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            SPICED CORN KEBAB & TANDOORI PANEER & YOUNG DATES (V)
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            
                                                            
                                                                <span class="menu__description">
																	OR																</span>

                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            KERALAN SHRIMPS, TANDOORI SALMON, TULSI MURGH MALAI KEBAB
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                MAIN COURSE                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            ‘SAAG’ PANEER WITH GARLIC & SMOKED CHILLIES (V)
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            NIZAMI BABY AUBERGINE WITH DRIED PLUM (V)
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            
                                                            
                                                                <span class="menu__description">
																	OR																</span>

                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            SHIKARI STYLE MURGH BHUNA MASALA
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            KASHMIRI LAMB ROGANJOSH 
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                SIDE DISH                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            KAALI DAAL | NAAN BREAD  | PILAU RICE
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                DESSERT                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            RAS MALAI DUMPLING WITH PISTACCIO KHEER
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                                            </div>

                    </div>

                </div>

            
                <div class="block__primary  block__content-gold  pt40  pb30  menu__header"
                     data-scroll-target="3" id="maharaja">

                    <h2 class="h_primary  h_gamma  h_bold  text--upper  text--centre">
                        MAHARAJA
                        <span class="h_light  h_zeta  h_inline">
    						MAHARAJA @ &pound;65 per person <br>A JOURNEY TO THE KINGS COURT    					</span>
                    </h2>

                    <span class="logo  logo--sword"></span>

					<span class="h_light  h_milli  h_inline  text--upper  mtb15">
                                                    Chef recommends this menu to be ordered for the entire table to enhance their dining experience
                        					</span>

                </div>

                <div class="menu__content " id="501531"
                     data-background="beige-texture">

                    <div class="col  col--8  col--center  block__content  text--left  pt50  pb90  mq-tab--full">

                        <div class="frame  menu">

                            
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                MAHARAJA @ £65 per person                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            A JOURNEY TO THE KINGS COURT
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                APPETIZER                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            PICKLED FRUIT SALAD WITH POMEGRENETTE (V)
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                STARTER                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            ABDUL’S PLATTER OF ASSORTED KEBABS & GRILL
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            
                                                            
                                                                <span class="menu__description">
																	OR																</span>

                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            TASTING OF PANEER, HARI TIKKI, TANDOORI GOBI (V)
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                MIDDLE COURSE                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            LUCKNOWI SUBZ SHIKHAMPURI KEBAB (V)
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            
                                                            
                                                                <span class="menu__description">
																	OR																</span>

                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            ROYAL BENGAL STYLE WILD MADAGASCAR PRAWN
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                MAIN COURSE                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            TAWA WILD MUSHROOM & CORN TAK – ATIN (V)
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            
                                                            
                                                                <span class="menu__description">
																	OR																</span>

                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            RAAN -E-MUSSALAM – DOUBLE ROASTED LEG OF BABY LAMB
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                SIDE DISH                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            KEEMA MATAR | KAALI DAAL | NAAN BREAD  | PILAU RICE
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                    
                                        <div class="menu__wrap">

                                            <h3 class="h_primary  h_bold  text--upper">
                                                DESSERT                                            </h3>

                                            <ul class="menu__list">
                                                
                                                    <li>
                                                        <p class="menu__title">
                                                            SHAHI KULFI WITH PISTACCHIO AND SAFFRON
                                                                                                                    </p>

                                                        <div class="menu__price">

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>

                                                    </li>

                                                                                            </ul>
                                        </div>

                                                            </div>

                    </div>

                </div>

            
        </article>

    </div>

</div>





<section class="block  booking  mt40" data-background="beige-texture" data-scroll-target="private-booking">

	<div class="container">

		<div class="col  col--8  col--center  mq-desk--full--flush">

			<h2 class="h_gamma  sub-heading  text--centre">Private Events Booking Enquiry</h2>

			<div class="booking-form-wrapper" id="booking-form-wrapper">

								
								
										
						<p class="welcomeText">Enter your name and email address below to hear the latest news from us.</p>

					
					<form action="#" method="post" enctype="multipart/form-data" id="booking-form" class="block  booking" data-background="beige-texture" data-scroll-target="private-booking" >

						<div class="field-wrap  field-wrap--half">
							<label for="booking-form-forename">First Name</label>
							<input type="text" name="forename" id="booking-form-forename" value="" required />
						</div>

						<div class="field-wrap  field-wrap--half  field-wrap--right">
							<label for="booking-form-surname">Surname</label>
							<input type="text" name="surname" id="booking-form-surname" value="" required />
						</div>

						<div class="field-wrap  field-wrap--half">
							<label for="booking-form-email">E-Mail</label>
							<input type="email" name="email" id="booking-form-email" value="" required />
						</div>

						<div class="field-wrap  field-wrap--half  field-wrap--right">
							<label for="booking-form-phone">Phone</label>
							<input type="tel" name="phone" id="booking-form-phone" value="" required />
						</div>

						<div class="field-wrap  field-wrap--half">
							<label for="reservation-date" >Date</label>
							<select name="reservation-date-day" id="reservation-date-day" required>
								<option value="">DD</option>
																	<option class="date-day-1" value="1">1</option>
																	<option class="date-day-2" value="2">2</option>
																	<option class="date-day-3" value="3">3</option>
																	<option class="date-day-4" value="4">4</option>
																	<option class="date-day-5" value="5">5</option>
																	<option class="date-day-6" value="6">6</option>
																	<option class="date-day-7" value="7">7</option>
																	<option class="date-day-8" value="8">8</option>
																	<option class="date-day-9" value="9">9</option>
																	<option class="date-day-10" value="10">10</option>
																	<option class="date-day-11" value="11">11</option>
																	<option class="date-day-12" value="12">12</option>
																	<option class="date-day-13" value="13">13</option>
																	<option class="date-day-14" value="14">14</option>
																	<option class="date-day-15" value="15">15</option>
																	<option class="date-day-16" value="16">16</option>
																	<option class="date-day-17" value="17">17</option>
																	<option class="date-day-18" value="18">18</option>
																	<option class="date-day-19" value="19">19</option>
																	<option class="date-day-20" value="20">20</option>
																	<option class="date-day-21" value="21">21</option>
																	<option class="date-day-22" value="22">22</option>
																	<option class="date-day-23" value="23">23</option>
																	<option class="date-day-24" value="24">24</option>
																	<option class="date-day-25" value="25">25</option>
																	<option class="date-day-26" value="26">26</option>
																	<option class="date-day-27" value="27">27</option>
																	<option class="date-day-28" value="28">28</option>
																	<option class="date-day-29" value="29">29</option>
																	<option class="date-day-30" value="30">30</option>
																	<option class="date-day-31" value="31">31</option>
															</select>
							<select name="reservation-date-month" id="reservation-date-month" required>
								<option value="">MM</option>
																	<option class="2017" value="6">Jun</option>
																	<option class="2017" value="7">Jul</option>
																	<option class="2017" value="8">Aug</option>
																	<option class="2017" value="9">Sep</option>
																	<option class="2017" value="10">Oct</option>
																	<option class="2017" value="11">Nov</option>
																	<option class="2017" value="12">Dec</option>
																	<option class="2018" value="1">Jan</option>
																	<option class="2018" value="2">Feb</option>
																	<option class="2018" value="3">Mar</option>
																	<option class="2018" value="4">Apr</option>
																	<option class="2018" value="5">May</option>
															</select>
							<select name="reservation-date-year" id="reservation-date-year" required>
								<option value="">YY</option>
								<option class="2017" value="2017">2017</option>
								<option class="2018" value="2018">2018</option>
															</select>
						</div>

						<div class="field-wrap  field-wrap--half  field-wrap--right">
							<label for="reservation-time">Time</label>
							<select name="reservation-time-hour" id="reservation-time-hour" required>
								<option value="">Hour</option>
																	<option value="0">00</option>
																	<option value="1">01</option>
																	<option value="2">02</option>
																	<option value="3">03</option>
																	<option value="4">04</option>
																	<option value="5">05</option>
																	<option value="6">06</option>
																	<option value="7">07</option>
																	<option value="8">08</option>
																	<option value="9">09</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
															</select>

							<select name="reservation-time-minute" id="reservation-time-minute" required>
								<option value="">Minute</option>
																	<option value="0">00</option>
																	<option value="5">05</option>
																	<option value="10">10</option>
																	<option value="15">15</option>
																	<option value="20">20</option>
																	<option value="25">25</option>
																	<option value="30">30</option>
																	<option value="35">35</option>
																	<option value="40">40</option>
																	<option value="45">45</option>
																	<option value="50">50</option>
																	<option value="55">55</option>
															</select>
						</div>

						<div class="field-wrap  field-wrap--half">
							<label for="booking-form-reservation-guests">No of Guests</label>
							<input maxlength="3" type="text" name="reservation-guests" id="booking-form-reservation-guests" value="" required />
						</div>
						<div class="field-wrap  field-wrap--border-none">
							<label for="booking-form-comments">Comments</label>
							<textarea name="comments" cols="" rows="5" id="booking-form-comments" ></textarea>
						</div>

						<div style="display:none !important;">
							<textarea name="textboxfilter" rows="" cols=""></textarea>
							<input type="hidden" name="multiFormName" value="booking-form" />
						</div>

						<input type="submit" name="submitted" value="Send" class="submit" />

					</form>

				
			</div>

		</div>

	</div>

</section>
<div class="block  links"  data-background="dark">

	<div class="container">

		<div class="col  col--flush-12  col--center">

			<div class="col  col--third  col--alpha  mq-mob-lrg--full">

				<a href="menus.php" class="button  button--diamond"><span>Menus</span></a>

			</div>

			<div class="col  col--third  mq-mob-lrg--full">

				<a href="private-events.php" class="button  button--diamond"><span>Private Dining</a>

			</div>

			<div class="col  col--third  col--omega  mq-mob-lrg--full">

				<a href="press.php" class="button  button--diamond"><span>Press</span></a>

			</div>

		</div>

	</div>

</div>

<div class="block  block--black-white  block--content-light  connect"  data-background="black-white">

	<div class="container">

		<div class="col  col--10  mq-desk-mid--full  col--center  text--centre">

			<h2 class="h_gamma  sub-heading">Stay Connected</h2>

			<div class="col  col--flush-6  col--alpha  col--omega  col--border  pr20  mq-tab-lrg--full">
				
				
<div id="signup-form-wrapper"  class="form  form--light  form--signup">

	<h3 class="text--upper  h_delta  h_primary  h_primary--medium">Join our mailing list</h3>

	<p>Join our Chef's Members Club for exclusive offers & a chance to win dinner for 2! </p>

		
		
				
		
		<form action="#" method="post" enctype="multipart/form-data" id="signup-form" >

			<div class="field-wrap">
				<label for="signup-form-forename">Name *</label>
				<input type="text" name="forename" id="signup-form-forename" value="" required />
			</div>

			<div class="field-wrap">
				<label for="signup-form-email">E-Mail *</label>
				<input type="email" name="email" id="signup-form-email" value="" required />
			</div>

			<div class="field-wrap  last">
				<label for="dob">DOB</label>
				
                    <select name="dob-day" id="dob-day" required>
                        <option value="Day">DD</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                            </select>

                    <select name="dob-month" id="dob-month" required>
                        <option value="Month">MM</option>
                                                    <option value="1">Jan</option>
                                                    <option value="2">Feb</option>
                                                    <option value="3">Mar</option>
                                                    <option value="4">Apr</option>
                                                    <option value="5">May</option>
                                                    <option value="6">Jun</option>
                                                    <option value="7">Jul</option>
                                                    <option value="8">Aug</option>
                                                    <option value="9">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dec</option>
                                            </select>

                    <select name="dob-year" id="dob-year" >
                        <option value="Year">YY</option>
                                                    <option value="2001">2001</option>
                    	                            <option value="2000">2000</option>
                    	                            <option value="1999">1999</option>
                    	                            <option value="1998">1998</option>
                    	                            <option value="1997">1997</option>
                    	                            <option value="1996">1996</option>
                    	                            <option value="1995">1995</option>
                    	                            <option value="1994">1994</option>
                    	                            <option value="1993">1993</option>
                    	                            <option value="1992">1992</option>
                    	                            <option value="1991">1991</option>
                    	                            <option value="1990">1990</option>
                    	                            <option value="1989">1989</option>
                    	                            <option value="1988">1988</option>
                    	                            <option value="1987">1987</option>
                    	                            <option value="1986">1986</option>
                    	                            <option value="1985">1985</option>
                    	                            <option value="1984">1984</option>
                    	                            <option value="1983">1983</option>
                    	                            <option value="1982">1982</option>
                    	                            <option value="1981">1981</option>
                    	                            <option value="1980">1980</option>
                    	                            <option value="1979">1979</option>
                    	                            <option value="1978">1978</option>
                    	                            <option value="1977">1977</option>
                    	                            <option value="1976">1976</option>
                    	                            <option value="1975">1975</option>
                    	                            <option value="1974">1974</option>
                    	                            <option value="1973">1973</option>
                    	                            <option value="1972">1972</option>
                    	                            <option value="1971">1971</option>
                    	                            <option value="1970">1970</option>
                    	                            <option value="1969">1969</option>
                    	                            <option value="1968">1968</option>
                    	                            <option value="1967">1967</option>
                    	                            <option value="1966">1966</option>
                    	                            <option value="1965">1965</option>
                    	                            <option value="1964">1964</option>
                    	                            <option value="1963">1963</option>
                    	                            <option value="1962">1962</option>
                    	                            <option value="1961">1961</option>
                    	                            <option value="1960">1960</option>
                    	                            <option value="1959">1959</option>
                    	                            <option value="1958">1958</option>
                    	                            <option value="1957">1957</option>
                    	                            <option value="1956">1956</option>
                    	                            <option value="1955">1955</option>
                    	                            <option value="1954">1954</option>
                    	                            <option value="1953">1953</option>
                    	                            <option value="1952">1952</option>
                    	                            <option value="1951">1951</option>
                    	                            <option value="1950">1950</option>
                    	                            <option value="1949">1949</option>
                    	                            <option value="1948">1948</option>
                    	                            <option value="1947">1947</option>
                    	                            <option value="1946">1946</option>
                    	                            <option value="1945">1945</option>
                    	                            <option value="1944">1944</option>
                    	                            <option value="1943">1943</option>
                    	                            <option value="1942">1942</option>
                    	                            <option value="1941">1941</option>
                    	                            <option value="1940">1940</option>
                    	                            <option value="1939">1939</option>
                    	                            <option value="1938">1938</option>
                    	                            <option value="1937">1937</option>
                    	                            <option value="1936">1936</option>
                    	                            <option value="1935">1935</option>
                    	                            <option value="1934">1934</option>
                    	                            <option value="1933">1933</option>
                    	                            <option value="1932">1932</option>
                    	                            <option value="1931">1931</option>
                    	                            <option value="1930">1930</option>
                    	                            <option value="1929">1929</option>
                    	                            <option value="1928">1928</option>
                    	                            <option value="1927">1927</option>
                    	                            <option value="1926">1926</option>
                    	                            <option value="1925">1925</option>
                    	                            <option value="1924">1924</option>
                    	                            <option value="1923">1923</option>
                    	                            <option value="1922">1922</option>
                    	                            <option value="1921">1921</option>
                    	                            <option value="1920">1920</option>
                    	                            <option value="1919">1919</option>
                    	                            <option value="1918">1918</option>
                    	                            <option value="1917">1917</option>
                    	                            <option value="1916">1916</option>
                    	                            <option value="1915">1915</option>
                    	                    </select>
				
			</div>

			<div style="display:none !important;">
				<textarea name="textboxfilter" rows="" cols=""></textarea>
				<input type="hidden" name="multiFormName" value="signup-form" />
			</div>

			<input type="submit" name="submitted" value="Submit >>" class="submit  mt10" />

		</form>

	
</div>

			</div>

			<div class="col  col--flush-6  col--alpha  col--omega  mq-tab-lrg--full">

				<div class="twitter">

	<h3 class="text--left  text--upper  h_delta  h_primary  h_medium">@DarbaarbyAbdul</h3>
	
	
					
			<div class="js-twitter">

				
					<p >Join us this Saturday for #FathersDay &amp; treat your dad to a FREE masterclass &amp; whisky cocktail. Find out more here:… <a href="https://t.co/aXfh7psaMq" target="_blank">https://t.co/aXfh7psaMq</a></p>

				
					<p ><a href="http://www.twitter.com/SumayyaUsmani" target="_blank">@SumayyaUsmani</a> Thank you Sumayya.</p>

				
					<p >Monday is a busy day for Darbaar.  <a href="http://www.twitter.com/ChefAbdul_y" target="_blank">@ChefAbdul_y</a> spending time perfecting recipes and sharing knowledge with his tea… <a href="https://t.co/ME4t4TaXC6" target="_blank">https://t.co/ME4t4TaXC6</a></p>

				
					<p >Behind the scenes of our photo shoot today which captured some of the fine dining cuisine you can expect from a tri… <a href="https://t.co/YhO723YjO4" target="_blank">https://t.co/YhO723YjO4</a></p>

				
					<p >Want to find out how we're celebrating #LondonFoodMonth? Click here &amp; book to join us for celebrations:… <a href="https://t.co/OtioOW2Rr6" target="_blank">https://t.co/OtioOW2Rr6</a></p>

				
			</div>

		
			

</div>
			</div>

			<div class="clearAll  pt50  pb15">

				<a href="https://www.facebook.com/DarbaarbyAbdul/" target="_blank" class="h_delta  mr30"><i class="icon-facebook"></i></a>
				<a href="https://twitter.com/DarbaarbyAbdul" target="_blank" class="h_delta  mr30"><i class="icon-twitter"></i></a>
				<a href="https://instagram.com/darbaarbyabdul/" class="h_delta"><i class="icon-instagram"></i></a>

			</div>

		</div>

	</div>

</div>        </main>

        <footer class="l-foot  clearall" role="contentinfo">
            <div class="container">
                <div class="col  col--12  col--center  text--centre">
                    <address>Darbaar Restaurant <span>|</span> 1 Snowden Street <span>|</span>   Broadgate Quarter <span>|</span> London <span>|</span> EC2A 2DQ <span>|</span></address>
                    <a href="mailto:info@darbaarrestaurants.com" class="contact"> info@darbaarrestaurants.com</a>
                    <span> | </span>
                    <a href="tel:02074224100" class="contact js-phone-event">02074224100</a>
                      <span> | </span>
                    <a href="https://www.facebook.com/DarbaarbyAbdul/" target="_blank" class="social"><i class="icon-facebook"></i></a>
                    <span> | </span>
                    <a href="https://twitter.com/DarbaarbyAbdul" target="_blank" class="social" ><i class="icon-twitter"></i></a>
                    <span> | </span>
                    <a href="https://instagram.com/darbaarbyabdul/" target="_blank" class="social" ><i class="icon-instagram"></i></a>

                    <a href="http://www.propcom.co.uk/" target="_blank" class="siteby">Site by Propeller</a>
                </div>
            </div>
        </footer>
    </div>

    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.php"><\/script>')</script>

    <script src="assets/js/lib/slick.min.js"></script>

    
    
    
    <script src="assets/js/main.min.js"></script>

    <!-- Response Tab Code START -->
    <script type="text/javascript">
       var adiInit = "32144", adiRVO = true;
       var adiFunc = null;
       (function() {
          var adiSrc = document.createElement("script"); adiSrc.type = "text/javascript";
          adiSrc.async = true;
          adiSrc.src = ("https:" == document.location.protocol ? "https://static-ssl" : "http://static-cdn")+ ".responsetap.com/static/scripts/rTapTrack.min.js";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(adiSrc, s);
       })();
    </script>
    <!-- Response Tab Code END -->

    <!-- Google Code for Remarketing Tag -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 870741941;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/870741941/?guid=ON&amp;script=0"/>
        </div>
    </noscript>
    <!-- END Google Code -->

    
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"52eb360af1","applicationID":"5420941","transactionName":"M1ZWZEdXCxBQBRVZWgocYUJcGQwNVQMZHkUMQw==","queueTime":0,"applicationTime":259,"atts":"HxFVEg9NGB4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>


</html>
