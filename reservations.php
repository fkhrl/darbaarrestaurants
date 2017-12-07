
<?php
session_start();
include('./cms-admin/class/db_Class.php');
$obj = new db_class();
include('./cms-admin/plugin/plugin.php');
$plugin = new cmsPlugin();
$table = 'reservations';
if (isset($_POST['submit'])) {
    extract($_POST);
//    print_r($_POST);
//    exit();
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($number_of_person) && !empty($reservations_date) && !empty($reservations_time) && !empty($message)) {
        $insert = array('name' => $name, 'email' => $email, 'phone' => $phone, 'number_of_person' => $number_of_person, 'reservations_date' => $reservations_date, 'reservations_time' => $reservations_time,
            'message' => $message, 'date' => date('Y-m-d'), 'status' => 1);
        if ($obj->insert($table, $insert) == 1) {
            $plugin->Success("Your message has been sent successfully. Thanks", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    } else {
        $plugin->Error("Fields is Empty", $obj->filename());
    }
}
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
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="assets/calendar/dist/date-time-picker.min.js"></script>
        <style type="text/css">
            #J-demo-01{ cursor:text; }
        </style>
    </head>

    <body id="reservations" data-page="reservations" itemscope itemtype="http://schema.org/WebPage">


        <div class="page  page--reservations">



            <header class="l-head  header js-header    header--fixed">
                <?php include './include/header.php'; ?>
            </header>

            <main role="main" class="l-main  content    content--sub ">

                <div class="container  container--offset  text--centre">

                    <div class="col  col--10  col--center  block  block--intro  block--intro-short  mq-desk--full--flush" data-background="beige-texture">

                        <div class="frame  frame--widget">

                            <div class="frame__inner">

                            

                                <?php echo $plugin->ShowMsg(); ?>
                                <div>
                                    <form action="" method="post" enctype="multipart/form-data"  >

                                        <div class="field-wrap">
                                            <label for="Full Name">Name *</label>
                                            <input type="text" name="name"  value="" required />
                                        </div>

                                        <div class="field-wrap">
                                            <label for="E-Mail">E-Mail *</label>
                                            <input type="email" name="email"  value="" required />
                                        </div>

                                        <div class="field-wrap">
                                            <label for="Phone">Phone *</label>
                                            <input type="text" name="phone" value="" required />
                                        </div>
                                        <div class="field-wrap">
                                            <label for="Number Of Person">Number Of Person *</label>
                                            <select name="number_of_person" required>
                                                <option value="1 Person">1 Person</option>
                                                <option value="2 Person" selected="">2 Person</option>
                                                <option value="3 Person">3 Person</option>
                                                <option value="4 Person">4 Person</option>
                                                <option value="5 Person">5 Person</option>
                                                <option value="6 Person">6 Person</option>
                                                <option value="7 Person">7 Person</option>
                                                <option value="8 Person">8 Person</option>
                                                <option value="9 Person">9 Person</option>
                                                <option value="10 Person">10 Person</option>
                                            </select>
                                        </div>
                                        <div class="field-wrap">
                                            <label for="Reservations Date">Reservations Date *</label>
                                            <input type="text"  name="reservations_date"  id="J-demo-01" required value="" />

                                        </div>

                                        <script type="text/javascript">
                                            $('#J-demo-01').dateTimePicker({'readonly': false});
                                            $('#J-demo-01').attr("readonly", false);
                                        </script>

                                        <div class="field-wrap">
                                            <label for="Reservations Time">Reservations Time *</label>
                                            <select name="reservations_time" required>
                                                <option value="">Select Timing</option>
                                                <?php
                                                $interval = date_interval_create_from_date_string('30 minute');
                                                $begin = date_create('00:00:00');
                                                $end = date_create('23:55:00')->add($interval);
                                                foreach (new DatePeriod($begin, $interval, $end) as $dt) {
                                                    ?>
                                                    <option value="<?= $dt->format('H:i') ?>"><?= $dt->format('H:i') ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>    
                                        </div>

                                        <div class="field-wrap  field-wrap--border-none">
                                            <label for="Booking Form Comments">Comments</label>
                                            <textarea name="message" cols="" rows="5" required ></textarea>
                                        </div>

                                        <input type="submit" name="submit" value="Submit >>"  />

                                    </form>
                                </div>



                            </div>

                        </div>

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

                                <a href="<?php echo $page; ?>" class="button  button--diamond"><span><?= $cat->name; ?></span></a>

                            </div>
                            <?php
                        }
                    }
                            ?>

                            

                        </div>

                    </div>

                </div>



                <div class="clearAll  pt50  pb15">

                    <a href="" target="_blank" class="h_delta  mr30"><i class="icon-facebook"></i></a>
                    <a href="" target="_blank" class="h_delta  mr30"><i class="icon-twitter"></i></a>
                    <a href="" class="h_delta"><i class="icon-instagram"></i></a>

                </div>

        </div>

    </div>

</div>        </main>

<footer class="l-foot  clearall" role="contentinfo">
    <div class="container">
        <?php include './include/footer.php'; ?>
    </div>
</footer>
</div>



   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.php"><\/script>')</script>

        <script src="assets/js/lib/slick.min.js"></script>




        <script src="assets/js/copymain.min.js"></script>
        </body>
</html>