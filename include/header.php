
<style type="text/css">
    .logo--elephant-gold {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url(cms-admin/upload/<?php echo $site_basic_info[0]->top_logo; ?> );
    width: 100%;
    z-index: 200;
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center center
}
.logo--gold-large {
    background: url(cms-admin/upload/<?php echo $site_basic_info[0]->top_logo; ?> );
}
.logo--elephant-green {
    display: block;
    max-width: 94px !important;
    height: 103px;
    background: url(cms-admin/upload/<?php echo $site_basic_info[0]->top_logo; ?> );
}
.logo--elephant-red {
    display: block;
    max-width: 94px !important;
    height: 103px;
    background: url(cms-admin/upload/<?php echo $site_basic_info[0]->top_logo; ?> );
}
.logo--text-plain {
    float: left;
    max-width: 145px;
    width: 100%;
    height: 45px;
    background: url(cms-admin/upload/<?php echo $site_basic_info[0]->top_logo; ?> );
}

@media screen and (max-width: 640px) {
    .logo--elephant-gold {
        background-size: 80%;
        background: url(cms-admin/upload/<?php echo $site_basic_info[0]->top_logo; ?> );
        background-repeat: no-repeat;
        background-position: center center
    }
}
.touch .logo--elephant-gold {
    background-attachment: initial;
    background: url(cms-admin/upload/<?php echo $site_basic_info[0]->top_logo; ?> );
    background-size: 135px;
    background-repeat: no-repeat;
    background-position: center center
}
</style>
<div class="container">
                <div class="col  col--12  col--center">

                    <a href="index.php" class="logo  logo--gold">
                        <img src="cms-admin/upload/<?= $site_basic_info[0]->logo; ?>" class="scale-with-grid" alt=" <?php echo $site_basic_info[0]->site_name; ?> ">
                    </a>

                    <nav class="js-nav">
                    	<?php 
                    	   $category = $obj->FlyQuery("SELECT * FROM `category` order by id limit 5");
                    	   if (!empty($category)){
                    	       foreach ($category as $cat):
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
                    	       elseif ($cat->name == "Gallery") {
                    	           $page = "gallery.php";
                    	           $class = '';
                    	       }
                    	       elseif ($cat->name == "Contact") {
                    	           $page = "contact.php";
                    	           $class = '';
                    	       }
                    	?>
                    		<a href="<?php echo $page; ?>" <?php echo $class?>><?php echo $cat->name; ?></a>
						<?php 
						  endforeach;
                    	   }
						?>
                        <a href="tel:<?php echo $site_basic_info[0]->phone; ?>" class="social js-phone-event"><img src="assets/img/icons/phone.png"></a>

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