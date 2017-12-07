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



        <title>Find out more about Darbaar Indian Restaurant featured in the press</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function(e, t, n){function r(n){if (!t[n]){var o = t[n] = {exports:{}}; e[n][0].call(o.exports, function(t){var o = e[n][1][t]; return r(o || t)}, o, o.exports)}return t[n].exports}if ("function" == typeof __nr_require)return __nr_require; for (var o = 0; o < n.length; o++)r(n[o]); return r}({1:[function(e, t, n){function r(){}function o(e, t, n){return function(){return i(e, [(new Date).getTime()].concat(u(arguments)), t?null:this, n), t?void 0:this}}var i = e("handle"), a = e(2), u = e(3), c = e("ee").get("tracer"), f = NREUM; "undefined" == typeof window.newrelic && (newrelic = f); var s = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"], l = "api-", p = l + "ixn-"; a(s, function(e, t){f[t] = o(l + t, !0, "api")}), f.addPageAction = o(l + "addPageAction", !0), f.setCurrentRouteName = o(l + "routeName", !0), t.exports = newrelic, f.interaction = function(){return(new r).get()}; var d = r.prototype = {createTracer:function(e, t){var n = {}, r = this, o = "function" == typeof t; return i(p + "tracer", [Date.now(), e, n], r), function(){if (c.emit((o?"":"no-") + "fn-start", [Date.now(), r, o], n), o)try{return t.apply(this, arguments)} finally{c.emit("fn-end", [Date.now()], n)}}}}; a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, t){d[t] = o(p + t)}), newrelic.noticeError = function(e){"string" == typeof e && (e = new Error(e)), i("err", [e, (new Date).getTime()])}}, {}], 2:[function(e, t, n){function r(e, t){var n = [], r = "", i = 0; for (r in e)o.call(e, r) && (n[i] = t(r, e[r]), i += 1); return n}var o = Object.prototype.hasOwnProperty; t.exports = r}, {}], 3:[function(e, t, n){function r(e, t, n){t || (t = 0), "undefined" == typeof n && (n = e?e.length:0); for (var r = - 1, o = n - t || 0, i = Array(o < 0?0:o); ++r < o; )i[r] = e[t + r]; return i}t.exports = r}, {}], ee:[function(e, t, n){function r(){}function o(e){function t(e){return e && e instanceof r?e:e?c(e, u, i):i()}function n(n, r, o){if (!p.aborted){e && e(n, r, o); for (var i = t(o), a = v(n), u = a.length, c = 0; c < u; c++)a[c].apply(i, r); var f = s[w[n]]; return f && f.push([y, n, r, i]), i}}function d(e, t){b[e] = v(e).concat(t)}function v(e){return b[e] || []}function g(e){return l[e] = l[e] || o(n)}function m(e, t){f(e, function(e, n){t = t || "feature", w[n] = t, t in s || (s[t] = [])})}var b = {}, w = {}, y = {on:d, emit:n, get:g, listeners:v, context:t, buffer:m, abort:a, aborted:!1}; return y}function i(){return new r}function a(){(s.api || s.feature) && (p.aborted = !0, s = p.backlog = {})}var u = "nr@context", c = e("gos"), f = e(2), s = {}, l = {}, p = t.exports = o(); p.backlog = s}, {}], gos:[function(e, t, n){function r(e, t, n){if (o.call(e, t))return e[t]; var r = n(); if (Object.defineProperty && Object.keys)try{return Object.defineProperty(e, t, {value:r, writable:!0, enumerable:!1}), r} catch (i){}return e[t] = r, r}var o = Object.prototype.hasOwnProperty; t.exports = r}, {}], handle:[function(e, t, n){function r(e, t, n, r){o.buffer([e], r), o.emit(e, t, n)}var o = e("ee").get("handle"); t.exports = r, r.ee = o}, {}], id:[function(e, t, n){function r(e){var t = typeof e; return!e || "object" !== t && "function" !== t? - 1:e === window?0:a(e, i, function(){return o++})}var o = 1, i = "nr@id", a = e("gos"); t.exports = r}, {}], loader:[function(e, t, n){function r(){if (!h++){var e = y.info = NREUM.info, t = l.getElementsByTagName("script")[0]; if (setTimeout(f.abort, 3e4), !(e && e.licenseKey && e.applicationID && t))return f.abort(); c(b, function(t, n){e[t] || (e[t] = n)}), u("mark", ["onload", a()], null, "api"); var n = l.createElement("script"); n.src = "https://" + e.agent, t.parentNode.insertBefore(n, t)}}function o(){"complete" === l.readyState && i()}function i(){u("mark", ["domContent", a()], null, "api")}function a(){return(new Date).getTime()}var u = e("handle"), c = e(2), f = e("ee"), s = window, l = s.document, p = "addEventListener", d = "attachEvent", v = s.XMLHttpRequest, g = v && v.prototype; NREUM.o = {ST:setTimeout, CT:clearTimeout, XHR:v, REQ:s.Request, EV:s.Event, PR:s.Promise, MO:s.MutationObserver}, e(1); var m = "" + location, b = {beacon:"bam.nr-data.net", errorBeacon:"bam.nr-data.net", agent:"js-agent.newrelic.com/nr-1016.min.js"}, w = v && g && g[p] && !/CriOS/.test(navigator.userAgent), y = t.exports = {offset:a(), origin:m, features:{}, xhrWrappable:w}; l[p]?(l[p]("DOMContentLoaded", i, !1), s[p]("load", r, !1)):(l[d]("onreadystatechange", o), s[d]("onload", r)), u("mark", ["firstbyte", a()], null, "api"); var h = 0}, {}]}, {}, ["loader"]);</script>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="revisit-after" content="14 days">
        <meta name="robots" content="all">
        <meta name="generator" content="http://www.propeller.uk.com">
        <meta name="author" content="Propeller Communications">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="PropellerComms">
        <meta name="twitter:title" content="Darbaar Restaurant">
        <meta name="twitter:description" content="Find out more about Darbaar Indian Restaurant featured in the press">
        <meta name="twitter:image" content="http://darbaarrestaurants.com/assets/img/social-avatar.jpg">

        <meta property="og:title" content="Darbaar Restaurant">
        <meta property="og:image" content="http://darbaarrestaurants.com/assets/img/social-avatar.jpg">
        <meta property="og:site_name" content="Darbaar Restaurant">
        <meta property="og:description" content="Find out more about Darbaar Indian Restaurant featured in the press">

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="assets/css/main.css">

        <
    </head>

    <body id="press" data-page="press" itemscope itemtype="http://schema.org/WebPage">


        <div class="page  page--press">



            <header class="l-head  header js-header    header--fixed">
                <?php include './include/header.php'; ?>
            </header>

            <main role="main" class="l-main  content    content--sub ">


                <section class="slider">
                    <div class="js-slider">

                        <div class="slide">
                            <div class="slider__item" style="background-image: url('assets/img/slides/index/01.jpg')">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slider__item" style="background-image: url('assets/img/slides/index/02.jpg')">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slider__item" style="background-image: url('assets/img/slides/index/03.jpg')">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slider__item" style="background-image: url('assets/img/slides/index/04.jpg')">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slider__item" style="background-image: url('assets/img/slides/index/05.jpg')">
                            </div>
                        </div>
                    </div>
                </section>



                <div class="container  container--offset-home  text--centre">

                    <div class="col  col--10  col--center  block  block--intro  mq-desk--full--flush" data-background="beige-texture">

                        <div class="frame">

                            <div class="frame__inner press">

                                <h1 class="h_primary  h_bold  h_alpha  text--upper  sub-page">Press <span class="logo  logo--elephant-dark  pt40"></span></h1>

                                <div class="press__review">
                                    <img src="assets/img/press/evening-standard.png">
                                    <a href="http://www.standard.co.uk/goingout/restaurants/fay-maschler-reviews-darbaar-a-right-royal-indian-banquet-a3165886.php" target="_blank">Read Review</a>
                                </div>

                                <div class="press__review">
                                    <img src="assets/img/press/cityam.png">
                                    <a href="http://www.cityam.com/232811/darbaar-restaurant-review-indian-fine-dining-inspired-by-the-banquets-of-the-indian-royal-court" target="_blank">Read Review</a>
                                </div>

                                <div class="press__review">
                                    <img src="assets/img/press/andy-hayler.png">
                                    <a href="http://www.andyhayler.com/restaurant/darbaar" target="_blank">Read Review</a>
                                </div>

                                <div class="press__review">
                                    <img src="assets/img/press/the-american-logo.png">
                                    <a href="assets/pdf/the-american-darbaar.pdf" target="_blank">Read Review</a>
                                </div>

                                <div class="press__review">
                                    <img src="assets/img/press/gq-logo.png">
                                    <a href="http://www.gq-magazine.co.uk/article/darbaar-review-indian-recipe" target="_blank">Read Review</a>
                                </div>

                                <div class="press__review">
                                    <img src="assets/img/press/city-luxldn.png">
                                    <a href="assets/pdf/021%20CITY%20FEB17%20-%20CITY%20SOCIAL1.pdf" target="_blank">Read Review</a>
                                </div>


                                <div class="press__review">
                                    <img src="assets/img/press/a-life-beautifully-travelled.png">
                                    <a href="http://www.beautifullytravelled.com/darbaar-london-review/" target="_blank">Read Review</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </main>

            <footer class="l-foot  clearall" role="contentinfo">
                <div class="container">
                    <?php include './include/footer.php';?>
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
            adiSrc.src = ("https:" == document.location.protocol ? "https://static-ssl" : "http://static-cdn") + ".responsetap.com/static/scripts/rTapTrack.min.js";
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


        <script type="text/javascript">window.NREUM || (NREUM = {}); NREUM.info = {"beacon":"bam.nr-data.net", "licenseKey":"52eb360af1", "applicationID":"5420941", "transactionName":"M1ZWZEdXCxBQBRVZWgocYUJcGQwNVQMZHkUMQw==", "queueTime":0, "applicationTime":187, "atts":"HxFVEg9NGB4=", "errorBeacon":"bam.nr-data.net", "agent":""}</script></body>

</html>
