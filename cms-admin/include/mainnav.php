<div id="menu" class="hidden-print hidden-xs">
    <div class="sidebar sidebar-inverse">
        <div class="sidebarMenuWrapper" style="top:0px !important;">
            <ul class="list-unstyled">
                <li><a href="index.php"><i class=" icon-projector-screen-line"></i><span>Dashboard</span></a></li>
<!--                <li class="hasSubmenu">
                    <a href="#" data-target="#menu-style" data-toggle="collapse"><i class="icon-compose"></i><span>Menu &amp; Navbar</span></a>
                    <ul class="collapse" id="menu-style">
                        <li><a href=""><span class="pull-right badge badge-primary"><i class="fa fa-check"></i></span>Sidebar Menu Dark</a></li>
                        <li><a href="">Sidebar Menu Light</a></li>
                        <li><a href="">Top Menu Dark</a></li>
                        <li><a href="">Top Menu Light</a></li>
                        <li><a href=""><span class="pull-right badge badge-primary"><i class="fa fa-check"></i></span>Top Menu Primary</a></li>
                    </ul>
                </li>-->

                <!-- <li><a href="setting.php"><i class="icon-cogs"></i><span> Setting</span></a></li> -->

                <!-- <?php
                $sqlpage=$obj->FlyQuery("SELECT * FROM page_info ORDER BY page_name ASC");
                if (!empty($sqlpage))
                    foreach ($sqlpage as $page):
                        ?>
                        <li><a href="<?php echo $page->page_name; ?>"><i class="fa fa-folder-o"></i><span> <?php echo $page->menu_name; ?></span></a></li>
                                    <?php
                                endforeach;
                            ?> -->

                    
                <li><a href="site_basic_info.php"><i class="icon-settings-wheel-fill"></i><span>Site Settings</span></a></li>
                <li><a href="category_page.php"><i class="icon-settings-wheel-fill"></i><span>Category page</span></a></li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#Menu" data-toggle="collapse"><i class="icon-compose"></i><span>Add Menu </span></a>
                    <ul class="collapse " id="Menu">
                        <li><a href="category.php"><i class="fa fa-check-square-o"></i><span>Add Category</span></a></li>
                        <li><a href="sub_category.php"><i class="fa fa-check-square-o"></i><span>Add Sub Category</span></a></li>
                        <li><a href="sub_menu.php"><i class="fa fa-check-square-o"></i><span>Add Sub Menu</span></a></li>
                        <li><a href="sub_menu_section.php"><i class="fa fa-check-square-o"></i><span>Add Sub Menu Section</span></a></li>
                        <li><a href="sub_section.php"><i class="fa fa-check-square-o"></i><span>Add Sub Section</span></a></li>
                    </ul>
                </li>
                <!-- <li><a href="product.php"><i class=" fa fa-check-square-o"></i><span>Add New Products</span></a></li> -->
                <li class="hasSubmenu">
                    <a href="#" data-target="#product" data-toggle="collapse"><i class="icon-compose"></i><span>Product</span></a>
                    <ul class="collapse " id="product">
                        <li><a href="product.php"><i class="fa fa-check-square-o"></i><span>Add New Product</span></a></li>
                        <li><a href="product_manu.php"><i class="fa fa-check-square-o"></i><span>Add New Sub Menu Product</span></a></li>
                       
                    </ul>
                </li>
                <li><a href="slider.php"><i class=" fa fa-check-square-o"></i><span>Add Slider Photo</span></a></li>
                <li><a href="page_slider.php"><i class=" fa fa-check-square-o"></i><span>Add Page Slider Photo</span></a></li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#reservation" data-toggle="collapse"><i class="icon-compose"></i><span>Add Reservation </span></a>
                    <ul class="collapse " id="reservation">
                        <li><a href="reservations.php"><i class="fa fa-check-square-o"></i><span>Add New Reservation</span></a></li>
                        <li><a href="reservations_data.php"><i class="fa fa-check-square-o"></i><span>Reservation List</span></a></li>
                    </ul>
                </li>
                <li><a href="gallery.php"><i class=" fa fa-check-square-o"></i><span>Add Gallery Photo</span></a></li>
                <!-- <li><a href="blog.php"><i class=" fa fa-check-square-o"></i><span>Add Blog Data</span></a></li> -->
                <li class="hasSubmenu">
                    <a href="#" data-target="#promo" data-toggle="collapse"><i class="icon-compose"></i><span>Home Page </span></a>
                    <ul class="collapse " id="promo">
                        <li><a href="about_us.php"><i class="fa fa-check-square-o"></i><span>Add About Us</span></a></li>
                        <li><a href="welcome_content.php"><i class="fa fa-check-square-o"></i><span>Add Welcome Content</span></a></li>
                        <li><a href="darbaar_story.php"><i class="fa fa-check-square-o"></i><span>Add Story</span></a></li>
                        <li><a href="about_chef.php"><i class="fa fa-check-square-o"></i><span>Add About Chef</span></a></li>
                        
                    </ul>
                </li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#contact" data-toggle="collapse"><i class="icon-compose"></i><span>Contact Page</span></a>
                    <ul class="collapse " id="contact">
                        
                <li><a href="opening_hours.php"><i class="icon-settings-wheel-fill"></i><span>Opening Hours</span></a></li>
                        <li><a href="work_for_us_requirement.php"><i class="fa fa-check-square-o"></i><span>Add work for us Requirement</span></a></li>
                        <li><a href="work_for_us_details.php"><i class="fa fa-check-square-o"></i><span>Add work for us details</span></a></li>
                       
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>