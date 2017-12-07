<?php
include './include/config.php';
$obj = new db_class();
?>

<?php
$site_basic_info = $obj->FlyQuery("select * from site_basic_info");
?>
<!doctype html>
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html">
<!--<![endif]-->


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
        <?php include 'include/head.php'; ?>

    </head>

<body id="menus" data-page="menus" itemscope
	itemtype="http://schema.org/WebPage">


	<div class="page  page--menus">



		<header class="l-head  header js-header    header--fixed">
                <?php include './include/header.php'; ?>
            </header>

		<main role="main"
			class="l-main  content    content--sub   content--menu">


		<section class="slider">
			<div class="js-slider">
                        <?php
                        $page_slider = $obj->FlyQuery("SELECT * FROM `page_slider` WHERE `category_id` =3");
                        if (! empty($page_slider)) {
                            foreach ($page_slider as $page) :
                                ?>
                        <div class="slide">
					<div class="slider__item" style="background-image: url('cms-admin/upload/<?php echo $page->photo; ?>">
					</div>
				</div>
                        <?php
                            endforeach
                            ;
                        }
                        ?>
                    </div>
		</section>



		<!-- Food Menu -->




		<div class="container  container--offset  text--centre">

			<div
				class="col  col--10  col--center  block  block--intro  mq-desk--full--flush"
				data-background="beige-texture">

				<div class="frame">

					<div class="frame__inner">
                                <?php
                                $category_page = $obj->FlyQuery("SELECT * FROM `category_page` WHERE `category_id` =3 ");
                                ?>
                                <style type="text/css">
.logo--elephant-dark {
	display: block;
	max-width: 250px;
	height: 142px;
	background-image:
		url(cms-admin/upload/<?= $category_page[0]->category_image; ?>)
}
</style>
						<h1 class="h_primary  h_bold  h_alpha  text--upper  sub-page">
							Menus<span class="logo  logo--elephant-dark  pt40"></span>
						</h1>

						<p class="h_delta"><?= html_entity_decode($category_page[0]->page_content); ?></p>


						<div class="pb20">
							<img
								src="cms-admin/upload/<?= $category_page[0]->category_banner; ?>"
								alt="Late Night Live" class="img  img--full" />
						</div>

                                <?php
                                $sub_menu = $obj->FlyQuery("SELECT * FROM `sub_menu` WHERE `category_id` = 3");
                                if (! empty($sub_menu)) {
                                    foreach ($sub_menu as $menu) :
                                        $sub_menu_id = $menu->id;
                                        
                                        ?>
                                <div class="pt20">


							<h2 class="h_delta  h_bold  text--upper  text--centre  mt0"><?= $menu->name ?></h2>



                                    <?php
                                        $sub_menu_section = $obj->FlyQuery("SELECT * FROM `sub_menu_section` WHERE `sub_category_id` = '" . $sub_menu_id . "'");
                                        
                                        if (! empty($sub_menu_section)) {
                                            $i = 0;
                                            foreach ($sub_menu_section as $menus) :
                                                $sub_menu_section_id = $menus->id;
                                                ?>

                                    <a href="#"
								class="button  button--large  button--menu  button--dark  mlr10  mb20  js-scroll"
								data-scroll="<?= $i; ?>">
                                        <?= $menus->name; ?>									</a>
                                    <?php
                                                $i ++;
                                            endforeach
                                            ;
                                        }
                                        ?>




                                </div>
                                <?php
                                    endforeach
                                    ;
                                }
                                ?>


                            </div>

				</div>

			</div>


			<?php
                                $sub_menu = $obj->FlyQuery("SELECT * FROM `sub_menu` WHERE `category_id` = 3");
                                if (! empty($sub_menu)) {
                                    foreach ($sub_menu as $menu) :
                                    
                                    ?>

			
			<div class="block  menu">

				<article class="block__bottom">
                            <?php
                            $sub_menu_section = $obj->FlyQuery("SELECT * FROM `sub_menu_section` WHERE `sub_category_id` = '" . $menu->id . "'");
                            
                            if (! empty($sub_menu_section)) {
                                $i = 0;
                                foreach ($sub_menu_section as $menus) :
                                    $sub_menu_section_id = $menus->id;
                                    ?>

                            <div
						class="block__primary  block__content-gold  pt40  pb30  menu__header"
						data-scroll-target="<?= $i; ?>" id="">

						<h2 class="h_primary  h_gamma  h_bold  text--upper  text--centre">
                                    <?= $menus->name; ?>
                                    <span
								class="h_light  h_zeta  h_inline"> </span>
						</h2>

						<span class="logo  logo--sword"></span>

						<!--                                <span class="h_light  h_milli  h_inline  text--upper  mtb15">
                                    Chef recommends this menu to be ordered for the entire table to enhance their dining experience
                                </span>-->

					</div>

					<div class="menu__content" id="504739"
						data-background="beige-texture">

						<div
							class="col  col--8  col--center  block__content  text--left  pt50  pb90  mq-tab--full">

							<div class="frame  menu">


								<div class="menu__wrap">
											<?php
                                    $product_menu_name = $obj->FlyQuery("SELECT * FROM `product_menu_name` WHERE `sub_menu_section_id` = '" . $sub_menu_section_id . "'");
                                    
                                    if (! empty($product_menu_name)) {
                                        
                                        foreach ($product_menu_name as $name) :
                                            $product_menu_name_id = $name->id;
                                            ?>
                                            <h3
										class="h_primary  h_bold  text--upper"><?php echo $name->name; ?></h3>


									<ul class="menu__list">
										<?php
                                            $product_menu = $obj->FlyQuery("SELECT * FROM `product_manu` where `sub_menu_product_name_id` = '" . $product_menu_name_id . "'");
                                            
                                            if (! empty($product_menu)) {
                                                
                                                foreach ($product_menu as $pro) :
                                                    ?>
										<li>
											<p class="menu__title"><?php echo $pro->name; ?></p>

											<div class="menu__price">
												<span><?php echo $pro->price; ?></span>
											</div>
										</li>
										<?php
                                                endforeach
                                                ;
                                            }
                                            ?>

									</ul>
									<?php
                                        endforeach
                                        ;
                                    }
                                    ?>
								</div>


							</div>

						</div>

					</div>
                            <?php
                                    $i ++;
                                endforeach
                                ;
                            }
                            ?>





                        </article>

			</div>
			
			<?php  
			endforeach;
                                }
			?>

		</div>
	
	</div>



	<!--        <section class="block  booking" data-scroll-target="book"  data-background="beige-texture">

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

	<div class="block  links" data-background="dark">

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

	<!-- <div class="block  block--black-white  block--content-light  connect"
		data-background="black-white">

		<div class="container">

			<div
				class="col  col--10  mq-desk-mid--full  col--center  text--centre">

				<h2 class="h_gamma  sub-heading">Stay Connected</h2>

				<div
					class="col  col--flush-6  col--alpha  col--omega  col--border  pr20  mq-tab-lrg--full">


					<div id="signup-form-wrapper"
						class="form  form--light  form--signup">

						<h3 class="text--upper  h_delta  h_primary  h_primary--medium">Join
							our mailing list</h3>

						<p>Join our Chef's Members Club for exclusive offers & a chance to
							win dinner for 2!</p>





						<form action="#" method="post" enctype="multipart/form-data"
							id="signup-form">

							<div class="field-wrap">
								<label for="signup-form-forename">Name *</label> <input
									type="text" name="forename" id="signup-form-forename" value=""
									required />
							</div>

							<div class="field-wrap">
								<label for="signup-form-email">E-Mail *</label> <input
									type="email" name="email" id="signup-form-email" value=""
									required />
							</div>

							<div class="field-wrap  last">
								<label for="dob">DOB</label> <select name="dob-day" id="dob-day"
									required>
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
								</select> <select name="dob-month" id="dob-month" required>
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
								</select> <select name="dob-year" id="dob-year">
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

							<div style="display: none !important;">
								<textarea name="textboxfilter" rows="" cols=""></textarea>
								<input type="hidden" name="multiFormName" value="signup-form" />
							</div>

							<input type="submit" name="submitted" value="Submit >>"
								class="submit  mt10" />

						</form>


					</div>

				</div>

				<div
					class="col  col--flush-6  col--alpha  col--omega  mq-tab-lrg--full">

					<div class="twitter">

						<h3 class="text--left  text--upper  h_delta  h_primary  h_medium">@DarbaarbyAbdul</h3>



						<div class="js-twitter">


							<p>
								Join us this Saturday for #FathersDay &amp; treat your dad to a
								FREE masterclass &amp; whisky cocktail. Find out more here:… <a
									href="https://t.co/aXfh7psaMq" target="_blank">https://t.co/aXfh7psaMq</a>
							</p>


							<p>
								<a href="http://www.twitter.com/SumayyaUsmani" target="_blank">@SumayyaUsmani</a>
								Thank you Sumayya.
							</p>


							<p>
								Monday is a busy day for Darbaar. <a
									href="http://www.twitter.com/ChefAbdul_y" target="_blank">@ChefAbdul_y</a>
								spending time perfecting recipes and sharing knowledge with his
								tea… <a href="https://t.co/ME4t4TaXC6" target="_blank">https://t.co/ME4t4TaXC6</a>
							</p>


							<p>
								Behind the scenes of our photo shoot today which captured some
								of the fine dining cuisine you can expect from a tri… <a
									href="https://t.co/YhO723YjO4" target="_blank">https://t.co/YhO723YjO4</a>
							</p>


							<p>
								Want to find out how we're celebrating #LondonFoodMonth? Click
								here &amp; book to join us for celebrations:… <a
									href="https://t.co/OtioOW2Rr6" target="_blank">https://t.co/OtioOW2Rr6</a>
							</p>


						</div>




					</div>
				</div>

				<div class="clearAll  pt50  pb15">

					<a href="https://www.facebook.com/DarbaarbyAbdul/" target="_blank"
						class="h_delta  mr30"><i class="icon-facebook"></i></a> <a
						href="https://twitter.com/DarbaarbyAbdul" target="_blank"
						class="h_delta  mr30"><i class="icon-twitter"></i></a> <a
						href="https://instagram.com/darbaarbyabdul/" class="h_delta"><i
						class="icon-instagram"></i></a>

				</div>

			</div>

		</div>

	</div> -->
	</main>

	<footer class="l-foot  clearall" role="contentinfo">
		<div class="container">
            <?php include './include/footer.php'; ?>
        </div>
	</footer>
	</div>


	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.php"><\/script>')</script>

	<script src="assets/js/lib/slick.min.js"></script>




	<script src="assets/js/copymain.min.js"></script>


</body>


</html>
