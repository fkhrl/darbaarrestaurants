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


    <head>
        <?php include './include/head.php'; ?>

    </head>

    <body id="contact" data-page="contact" itemscope itemtype="http://schema.org/WebPage">


        <div class="page  page--contact">



            <header class="l-head  header js-header    header--fixed">
                <?php include './include/header.php'; ?>
            </header>

            <main role="main" class="l-main  content    content--sub ">


                <!--<div id="google-map" class="map"></div>-->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2482.55408759349!2d-0.08461768422983175!3d51.52139631750076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1502189328365" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>



                <div class="container  container--offset-contact  text--centre">

                    <div class="col  col--10  col--center  block  block--intro  block--intro-short  mq-desk--full--flush" data-background="beige-texture">

                        <div class="frame">

                            <div class="frame__inner">

                                <h1 class="h_primary  h_bold  h_alpha  text--upper  sub-page">Contact <span class="logo  logo--elephant-dark  pt40"></span></h1>

                                <a class="btn  btn--max  btn--spaced  js-scroll" data-scroll="book">Book Now</a>

                                <div class="col  col--6  mq-tab-sml--full  text--center">
                                    <h2 class="h_delta  h_medium  text--upper"><?= $site_basic_info[0]->site_name; ?></h2>

                                        <address class="h_medium  mb30">
                                            <?= $site_basic_info[0]->address; ?>
                                        </address>

                                        <p class="h_medium  pb40">
                                            <a href="mailto:<?= $site_basic_info[0]->email; ?>"><?= $site_basic_info[0]->email; ?></a><br />
                                            <a href="tel:<?= $site_basic_info[0]->phone; ?>" class="js-phone-event"><?= $site_basic_info[0]->phone; ?></a>
                                        </p>

                                        <a href="#" target="_blank"><i class="icon-facebook"></i></a>

                                        <a href="https://twitter.com/DarbaarbyAbdul" target="_blank" class="mlr15  mb40"><i class="icon-twitter"></i></a>

                                        <a href="#" target="_blank"><i class="icon-instagram"></i></a>

                                </div>

                                <div class="col  col--6  mq-tab-sml--full  text--centre">

                                    <h2 class="h_delta  h_medium  text--upper  mb30">Opening Hours</h3>
                                        <?php
                                        $opening_hours = $obj->SelectAll("opening_hours");
                                        ?>
                                        <?php
                                        echo html_entity_decode($opening_hours[0]->details);
                                        ?>
                                </div>

                            </div>

                        </div>

                    </div>

                    <a href="#" class="scroll  js-scroll" data-scroll="book">Scroll<i class="icon-arrow-down"></i></a>

                </div>




<!--                <section class="block  booking" data-scroll-target="book"  data-background="beige-texture">

                    <div class="container">

                        <div class="col  col--8  col--center  mq-tab-lrg--full">

                            <h2 class="h_gamma  sub-heading  text--centre">Book a table</h2>
                             Start Bookatable Code 
                            <script type="text/javascript" src="https://bda.bookatable.com/deploy/lbui.direct.min.js"></script>
                            <script type="text/javascript">
                                LBDirect_Embed({
                                    connectionid: "UK-RES-DARBAARRESTAURANT_301924:84821",
                                    uaAccountNumber: "UA-64223025-1"
                                });
                            </script>
                             End Bookatable Code 
                        </div>

                    </div>

                </section>-->



                <div class="block  block--main  block--work-for-us" data-background="green-pattern">

                    <div class="container">

                        <article class="block__bottom"  data-background="beige-texture">

                            <div class="block__primary  block__content-gold  block__header">

                                <h2 class="h_primary  h_gamma  h_bold  text--upper  text--centre">Work for us<span class="h_light  h_zeta  h_inline">Careers@Darbaar</span></h2>

                                <span class="logo  logo--sword"></span>
                            </div>

                            <div class="col  col--8  col--center  text--left  block__content  mq-desk--full">

                                <div class="frame">

                                    <ul>
                                        <?php
                                        $work_for_us_requirement = $obj->SelectAll("work_for_us_requirement order by id desc");
                                        if (!empty($work_for_us_requirement)) {
                                            foreach ($work_for_us_requirement as $req):
                                                ?>
                                                <li><?= $req->name; ?></li>
                                                <?php
                                            endforeach;
                                        }
                                        ?>
                                    </ul>

                                </div>

                                <p style="width: 100%; text-align: justify; ">
                                    <?php
                                        $work_for_us_details = $obj->SelectAll("work_for_us_details");
                                        echo html_entity_decode($work_for_us_details[0]->details);
                                    ?>
                                </p>

                            </div>

                    </div>

                    </article>

                </div>
        </div>

        <div class="block  links"  data-background="dark">

            <div class="container">

                <div class="col  col--flush-12  col--center">

                    <?php
                             $category = $obj->FlyQuery("SELECT * FROM `category` order by id limit 3");
                             if(!empty($category)){
                                foreach ($category as $cat) {
                                    if ($cat->name == "Reservations") {
                                   $page = "reservations.php";
                                   $class = 'class="link--vouchers"';
                               }
                               elseif ($cat->name == "Lotus Bar") {
                                   $page = "lotus-bar.php";
                                   $class = '';
                               }
                               elseif ($cat->name == "Menus") {
                                   $page = "menus.php";
                                   $class = '';
                               }
                        ?>
                            <div class="col  col--third  col--alpha  mq-mob-lrg--full">

                                <a href="<?= $page; ?>" class="button  button--diamond"><span><?= $cat->name; ?></span></a>

                            </div>
                            <?php
                        }
                    }
                            ?>

                </div>

            </div>

        </div>

<!--        <div class="block  block--black-white  block--content-light  connect"  data-background="black-white">

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

        </div>        </main>-->

    <footer class="l-foot  clearall" role="contentinfo">
        <div class="container">
            <?php include './include/footer.php'; ?>
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
    (function () {
        var adiSrc = document.createElement("script");
        adiSrc.type = "text/javascript";
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


</body>


</html>
