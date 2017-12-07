<?php 
    include './include/config.php';
    $obj = new db_class();
?>
<?php
 $site_basic_info = $obj->FlyQuery("select * from site_basic_info");
    $gallery = $obj->FlyQuery("select * from gallery order by id desc");
     // print_r($gallery);
     // exit();
 $welcome_content = $obj->FlyQuery("select * from welcome_content");
?>
<!doctype html>
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->


    <!-- Mirrored from www.darbaarrestaurants.com/gallery by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2017 20:06:58 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
         <?php include "include/head.php" ?>

    </head>

    <body id="gallery" data-page="gallery" itemscope itemtype="http://schema.org/WebPage">


        <div class="page  page--gallery">



            <header class="l-head  header js-header    header--fixed">
                <?php include './include/header.php' ?>
            </header>

            <main role="main" class="l-main  content    content--sub ">




                <section class="region  region--introduction  clearfix">

                    <div class="col  col--full  text--centre">

                        <a href="<?= $welcome_content[0]->map; ?>" target="_blank" class="btn  btn--alt  btn--max  btn--spaced">Take A Tour</a>

                    </div>

                </section>

                <section class="gallery" >

                    <div class="col  col--full  col--center  text--centre  gallery__inner  js-gallery">

                        <?php
                        if(!empty($gallery)){
                          foreach ($gallery as $img):
                            
                        ?>

<a href="cms-admin/upload/<?= $img->photo; ?>"
 class="gallery__img  col  col--flush-3  mq-tab--quart--flush  mq-mob-lrg--half--flush  mq-mob--full--flush  lazy  scale-with-grid" 
 data-img-lrg="cms-admin/upload/<?= $img->photo; ?>" 
 data-original="cms-admin/upload/<?= $img->thumbnail_photo; ?>" ></a>
                           <?php
                              endforeach;
                            }  
                           ?>



                    </div>
                </section>




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

                <!-- <div class="block  block--black-white  block--content-light  connect"  data-background="black-white">

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

                </div> -->        </main>

            <footer class="l-foot  clearall" role="contentinfo">
                <div class="container">
                    <?php include './include/footer.php';?>
                </div>
            </footer>
        </div>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.php"><\/script>')</script>

        <script src="assets/js/lib/slick.min.js"></script>


        <script src="assets/js/lib/lazyload.js"></script>
        <script src="assets/js/lib/magnific-popup.min.js"></script>


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


        <script type="text/javascript">window.NREUM || (NREUM = {}); NREUM.info = {"beacon":"bam.nr-data.net", "licenseKey":"52eb360af1", "applicationID":"5420941", "transactionName":"M1ZWZEdXCxBQBRVZWgocYUJcGQwNVQMZHkUMQw==", "queueTime":0, "applicationTime":109, "atts":"HxFVEg9NGB4=", "errorBeacon":"bam.nr-data.net", "agent":""}</script></body>


    </html>
