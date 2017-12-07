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
        <?php include 'include/head.php'; ?>

    </head>

    <body id="lotus-bar" data-page="lotus-bar" itemscope itemtype="http://schema.org/WebPage">


        <div class="page  page--lotus-bar">



            <header class="l-head  header js-header    header--fixed">
                <?php include './include/header.php'; ?>
            </header>

            <main role="main" class="l-main  content    content--sub ">


                <section class="slider">
                    <div class="js-slider">
                        <?php
                        $page_slider = $obj->FlyQuery("SELECT * FROM `page_slider` WHERE `category_id` =2");
                        if (!empty($page_slider)) {
                            foreach ($page_slider as $page):
                                ?>
                                <div class="slide">
                                    <div class="slider__item" style="background-image: url('cms-admin/upload/<?php echo $page->photo; ?>">
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        }
                        ?>
                    </div>
                </section>




                <div class="container  container--offset-home  text--centre">

                    <div class="col  col--10  col--center  block  block--intro  mq-desk--full--flush" data-background="beige-texture">

                        <div class="frame">

                            <div class="frame__inner press">
                                <?php
                                $category_page = $obj->FlyQuery("SELECT * FROM `category_page` WHERE `category_id` =2 ");
                                ?>
                                <h1 class="h_primary  h_bold  h_alpha  text--upper  sub-page">Lotus Bar</h1>

                                <img src="cms-admin/upload/<?= $category_page[0]->category_image; ?>" alt="Lotus Bar Logo" width="160" />

                                <p class="pt40">
                                    <?= html_entity_decode($category_page[0]->page_content); ?>
                                </p>


                                <div class="pb20">
                                    <img src="cms-admin/upload/<?= $category_page[0]->category_banner; ?>" alt="Late Night Live" class="img  img--full" />
                                </div>


                                <?php
                                $sub_category = $obj->FlyQuery("SELECT * FROM `sub_category` WHERE `category_id` = 2");
                                if (!empty($sub_category)) {
                                    $i = 0;
                                    foreach ($sub_category as $subc):
                                        ?>
                                        <a href="#" class="button  button--large  button--menu  button--dark  mlr10  mb20  js-scroll" data-scroll="<?php echo $i; ?>">
                                            <?= $subc->name; ?>                        </a>
                                        <?php
                                        $i++;
                                    endforeach;
                                }
                                ?>



                            </div>

                        </div>

                    </div>

                    <div class="block  menu">

                        <article class="block__bottom">


                            <?php
                            $sub_category = $obj->FlyQuery("SELECT * FROM `sub_category` WHERE `category_id` = 2");
                            if (!empty($sub_category)) {
                                $i = 0;
                                foreach ($sub_category as $subc):
                                    $sub_category_id = $subc->id;
                                    ?>
                                    <div class="block__primary  block__content-gold  pt40  pb30  menu__header" data-scroll-target="<?php echo $i; ?>" id="">

                                        <h2 class="h_primary  h_gamma  h_bold  text--upper  text--centre">
                                            <?= $subc->name; ?>
                                            <span class="h_light  h_zeta  h_inline">
                                            </span>
                                        </h2>

                                        <span class="logo  logo--sword"></span>

                                    </div>

                                    <div class="menu__content" id="505933" data-background="beige-texture">

                                        <div class="col  col--8  col--center  block__content  text--left  pt50  pb90  mq-tab--full">

                                            <div class="frame  menu">

                                                <?php
                                                $sub_category_name = $obj->FlyQuery("SELECT * FROM `sub_section` where `sub_category_id` = '".$sub_category_id."'");
                                                if (!empty($sub_category_name)) {
                                                    foreach ($sub_category_name as $subcn):
                                                        $produt_id = $subcn->id;
                                                        ?>
                                                        <div class="menu__wrap">

                                                            <h3 class="h_primary  h_bold  text--upper"> <?= $subcn->name; ?></h3>

                                                            <ul class="menu__list">
                                                                <?php 
                                                                $product = $obj->FlyQuery("SELECT 
                                                                                        p.id,
                                                                                        p.name as pro_name,
                                                                                        c.name as cat_name,
                                                                                        sc.name as sub_name,
                                                                                        ss.name as sub_section_name,
                                                                                        p.price

                                                                                        FROM `product` as p
                                                                                        left join category as c on c.id = p.`category_id`
                                                                                        left join sub_category as sc on sc.id = p.`sub_category_id`
                                                                                        left join sub_section as ss on ss.id = p.`sub_section_id`
                                                                                        WHERE p.sub_section_id='$produt_id'
                                                                                                "); 
                                                                if(!empty($product)){
                                                                foreach ($product as $pro):
                                                                ?>
                                                                <li>
                                                                    <p class="menu__title">
                                                                        <?php echo $pro->pro_name; ?>
                                                                    </p>

                                                                    <div class="menu__price">



                                                                        <span>  <?php echo $pro->price; ?></span>







                                                                    </div>

                                                                </li>
                                                                <?php
                                                                endforeach;
                                                                }
                                                                ?>



                                                            </ul>
                                                        </div>

                                                        <?php
                                                    endforeach;
                                                }
                                                ?>








                                            </div>

                                        </div>

                                    </div>                    

                                    <?php
                                    $i++;
                                endforeach;
                            }
                            ?>

                                              


                        </article>

                    </div>    

                </div>
            </main>

            <footer class="l-foot  clearall" role="contentinfo">
                <div class="container">
                    <?php include './include/footer.php' ?>
                </div>
            </footer>
        </div>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.php"><\/script>')</script>

        <script src="assets/js/lib/slick.min.js"></script>




        <script src="assets/js/copymain.min.js"></script>
    </body>
</html>
