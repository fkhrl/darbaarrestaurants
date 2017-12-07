<?php
include("class/auth.php");
include("plugin/plugin.php");
$plugin = new cmsPlugin();
$table = "reservations";
?>
<?php
if (isset($_POST['create'])) {
    extract($_POST);
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($number_of_person) && !empty($reservations_date) && !empty($reservations_time) && !empty($message)) {
        $insert = array('name' => $name, 'email' => $email, 'phone' => $phone, 'number_of_person' => $number_of_person, 'reservations_date' => $reservations_date, 'reservations_time' => $reservations_time, 'message' => $message, 'date' => date('Y-m-d'), 'status' => 1);
        if ($obj->insert($table, $insert) == 1) {
            $plugin->Success("Successfully Saved", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    } else {
        $plugin->Error("Fields is Empty", $obj->filename());
    }
} elseif (isset($_POST['update'])) {
    extract($_POST);
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($number_of_person) && !empty($reservations_date) && !empty($reservations_time) && !empty($message)) {
        $updatearray = array("id" => $id);
        $upd2 = array('name' => $name, 'email' => $email, 'phone' => $phone, 'number_of_person' => $number_of_person, 'reservations_date' => $reservations_date, 'reservations_time' => $reservations_time, 'message' => $message, 'date' => date('Y-m-d'), 'status' => 1);
        $update_merge_array = array_merge($updatearray, $upd2);
        if ($obj->update($table, $update_merge_array) == 1) {
            $plugin->Success("Successfully Updated", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    }
} elseif (isset($_GET['del']) == "delete") {
    $delarray = array("id" => $_GET['id']);
    if ($obj->delete($table, $delarray) == 1) {
        $plugin->Success("Successfully Delete", $obj->filename());
    } else {
        $plugin->Error("Failed", $obj->filename());
    }
}
?><!doctype html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
    <head>
        <?php
        echo $plugin->softwareTitle();
        echo $plugin->TableCss();
        echo $plugin->KendoCss();
        ?>
    </head>
    <body class="">
        <?php
        include('include/topnav.php');
        include('include/mainnav.php');
        ?>





        <div id="content">
            <h1 class="content-heading bg-white border-bottom">Reservations</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Reservations</a></li>
                    <li><a href="reservations_data.php">Reservations List</a></li>
                </ul>
            </div>
            <div class="innerAll spacing-x2">
                <?php echo $plugin->ShowMsg(); ?>
                <!-- Widget -->

                <!-- Widget -->
                <div class="widget widget-inverse" >
                    <?php
                    if (isset($_GET['edit'])) {
                        ?>
                        <!-- Widget heading -->
                        <div class="widget-head">
                            <h4 class="heading">Update/Change - Reservations</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form">
                                <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='name' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "name"); ?>' placeholder='Name' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Email </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='email' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "email"); ?>' placeholder='Email' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Phone </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='phone' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "phone"); ?>' placeholder='Phone' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Number Of Person </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='number_of_person' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "number_of_person"); ?>' placeholder='Number Of Person' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Reservations Date </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='datepicker' name='reservations_date' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "reservations_date"); ?>' placeholder='Reservations Date' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Reservations Time </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='timepicker' name='reservations_time' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "reservations_time"); ?>' placeholder='Reservations Time' class='form-control' />

                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Message </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='message' placeholder='Message' class='form-control'><?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "message"); ?></textarea>
                                        <script>
                                            $(document).ready(function () {
                                                // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true
                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" name="update" class="btn btn-primary">Save Change</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php } else { ?>
                        <!-- Widget heading -->
                        <div class="widget-head">
                            <h4 class="heading">Create New Reservations</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='name' placeholder='Name' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Email </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='email' placeholder='Email' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Phone </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='phone' placeholder='Phone' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Number Of Person </label>

                                    <div class='col-sm-3'>
<!--                                        <input type='text' id='form-field-1' name='number_of_person' placeholder='Number Of Person' class='form-control' />-->
                                        <select name='number_of_person' class='form-control'>
                                            <option value="1 People">1 People</option>
                                            <option value="2 People" selected="">2 People</option>
                                            <option value="3 People">3 People</option>
                                            <option value="4 People">4 People</option>
                                            <option value="5 People">5 People</option>
                                            <option value="6 People">6 People</option>
                                            <option value="7 People">7 People</option>
                                            <option value="8 People">8 People</option>
                                            <option value="9 People">9 People</option>
                                            <option value="10 People">10 People</option>
                                        </select>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Reservations Date </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='datepicker' name='reservations_date' placeholder='Reservations Date' class='form-control' />
                                        <script>
                                            $(document).ready(function () {
                                                // create DatePicker from input HTML element
                                                $("#datepicker").kendoDatePicker();

                                                $("#monthpicker").kendoDatePicker({
                                                    // defines the start view
                                                    start: "year",

                                                    // defines when the calendar should return date
                                                    depth: "year",

                                                    // display month and year in the input
                                                    format: "MMMM yyyy",

                                                    // specifies that DateInput is used for masking the input element
                                                    dateInput: true
                                                });
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Reservations Time </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='timepicker' name='reservations_time' placeholder='Reservations Time' class='form-control' />
                                        <script>
                                            $(document).ready(function () {
                                                // create TimePicker from input HTML element
                                                $("#timepicker").kendoTimePicker({
                                                    dateInput: true
                                                });
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Message </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='message' placeholder='Message' class='form-control'></textarea>
                                        <script>
                                            $(document).ready(function () {
    // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true
                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit"   onclick="javascript:return confirm('Do You Want Create/save These Record?')"  name="create" class="btn btn-info">Save</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>
                <!-- // Widget END -->




                <!-- // Widget END -->
            </div>
        </div>
        <!-- // Content END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
        <?php include('include/footer.php'); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->

    <?php
    echo $plugin->TableJs();
    echo $plugin->KendoJS();
    ?></body>
</html>