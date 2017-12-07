<?php
include("class/auth.php");
include("plugin/plugin.php");
$plugin = new cmsPlugin();
?>
<!doctype html>
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
            <h1 class="content-heading bg-white border-bottom">Dashboard</h1>
            <!--                        <div class="innerAll bg-white border-bottom">
                                        <ul class="menubar">
                                            <li class="active"><a href="#">Create Info</a></li>
                                            <li><a href="#">Data List</a></li>
                                        </ul>
                                    </div>-->
            <div class="innerAll spacing-x2">
                <?php echo $plugin->ShowMsg(); ?>
                <!---------------------------- Start Here Box Design-------------------->
                               <div class="row">
                
                <!-- <?php
                                   $sqlmenu_custom=$obj->SelectAll("page_info");
                   if (!empty($sqlmenu_custom))
                        foreach ($sqlmenu_custom as $custom):
                ?>
                
                                            <div class="col-md-3 col-sm-6">
                                                <div class="panel-3d">
                                                    <div class="front">
                
                                                        <div class="widget text-center">
                                                            <div class="widget-body padding-none">
                                                                <div>
                                                                    <div class="innerAll bg-info innerAll">
                                                                        <p class="lead text-white strong margin-none"><i class="icon-user-1"></i></p>
                                                                    </div>
                                                                    <div class="innerAll">
                                                                        <a href="<?php echo $custom->page_name;    ?>"><b style="color: brown;"> View <?php echo $custom->menu_name;    ?> </b></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                    </div>
                
                                                </div>
                                            </div>
                <?php
                endforeach;
                ?>
                 -->
                
                
                
                
                                </div>


                

                <div class="row">
                    <div class="col-md-3">
                        <a href="site_basic_info.php" class="widget widget-inverse innerAll text-center text-regular">
                            <i class="display-block fa fa-cog fa-spin text-xlarge"></i>
                            <span class="lead">Site Setting</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="category.php" class="widget widget-primary innerAll text-center">
                            <i class="display-block fa fa-align-justify text-xlarge"></i>
                            <span class="lead">Menu</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="sub_category.php" class="widget widget-dark innerAll text-center" style="background:  #b26e5c ">
                            <i class="display-block fa fa-align-justify text-xlarge"></i>
                            <span class="lead">Sub Category</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="sub_menu_section.php" class="widget widget-info innerAll text-center">
                            <i class="display-block fa fa-th-list text-xlarge"></i>
                            <span class="lead">Sub Menu Section</span>
                        </a>
                    </div>
                    
                    
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="sub_section.php" class="widget widget-info innerAll text-center">
                            <i class="display-block fa fa-th-list text-xlarge"></i>
                            <span class="lead">Sub Section</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="gallery.php" class="widget innerAll text-center text-regular" style="background: #c2cd73 ; color: #fff">
                            <i class="display-block fa fa-picture-o text-xlarge"></i>
                            <span class="lead">Gallery</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="slider.php" class="widget btn--primary innerAll text-center" style="background: #7d8489; color: #fff">
                            <i class="display-block fa fa-list-ul text-xlarge"></i>
                            <span class="lead">Slider</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="reservations.php" class="widget btn-green innerAll text-center" style="background: #ededed; color: #000    ">
                            <i class="display-block fa fa-group text-xlarge"></i>
                            <span class="lead">Reservation</span>
                        </a>
                    </div>
                    
                     
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="product_manu.php" class="widget widget-dark innerAll text-center" style="background: #677b08">
                            <i class="display-block fa  fa-stack-exchange text-xlarge"></i>
                            <span class="lead">Menu Product</span>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="product.php" class="widget widget-inverse innerAll text-center text-regular" style="background:#a699f4;color: #fff">
                            <i class="display-block fa fa-archive text-xlarge" style="color: #fff"></i>
                            <span class="lead"style="color: #fff">Product</span>
                        </a>
                    </div>
                    <!-- <div class="col-md-3">
                        <a href="blog.php" class="widget widget-primary innerAll text-center" style="background:  #99c7f4 ">
                            <i class="display-block fa fa-bookmark text-xlarge"></i>
                            <span class="lead">Blog</span>
                        </a>
                    </div> -->
                    <div class="col-md-3">
                        <a href="opening_hours.php" class="widget widget-info innerAll text-center" style="background:  #f4b029 ">
                            <i class="display-block fa fa-minus-square-o text-xlarge"></i>
                            <span class="lead">Opening hours</span>
                        </a>
                    </div>
                     <div class="col-md-3">
                        <a href="page_slider.php" class="widget widget-info innerAll text-center">
                            <i class="display-block fa fa-th-list text-xlarge"></i>
                            <span class="lead">Page Slider Photo</span>
                        </a>
                    </div>
                </div>









            </div>
            <!------------------------------End Here Boxed design--------------------------->


            <!--start table-->

            
            <!-- <div id="content" style="margin-left: -2px;">
                <div class="innerAll spacing-x2">
                    <h3 class="content-heading">Log</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 col-sm-12" id="spare_parts_5"></div>
                            <!--<div class="col-sm-6" id="spare_parts_5"></div>-->
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- // Spare Parts END -->

            <!--                <div class="clearfix"></div>-->
            <!-- // Sidebar menu & Spare Parts wrapper END -->





<div id="content">
            <h1 class="content-heading bg-white border-bottom">Reservations Data</h1>
            
          <div class="innerAll spacing-x2">
                <div class="col-sm-12" id="reservations_6"></div>
            </div>
        </div>
        <!-- // Reservations END -->

        <div class="clearfix"></div>



<script id="edit_reservations" type="text/x-kendo-template">
             <a class="k-button k-button-icontext k-grid-edit" href="reservations.php?edit=#= id#"><span class="k-icon k-edit"></span>Edit</a>
            </script>
    <script id="delete_reservations" type="text/x-kendo-template">
                    <a class="k-button k-button-icontext k-grid-delete" onclick="javascript:deleteClick(#= id #);" ><span class="k-icon k-delete"></span>Delete</a>
            </script>        
    <script type="text/javascript">
                function deleteClick(reservations_id) {
                    var c = confirm("Do you want to delete?");
                    if (c === true) {
                        $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: "./json_data/banner_list.php",
                            data: {id: reservations_id,table:"reservations",acst:3},
                            success: function (result) {
                            if(result==1)
                            {
                                location.reload();
                            }
                            else
                            {
                                $(".k-i-refresh").click();
                            }
                            }
                        });
                    }
                }

            </script>
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    var postarray={"id":1};
                    var dataSource = new kendo.data.DataSource({
                        pageSize: 5,
                        transport: {
                            read: {
                                url: "./json_data/banner_list.php",
                                type: "POST",
                                data:
                                {
                                    "acst":1, //action status sending to json file
                                    "table":"reservations_view",
                                    "cond":0,
                                    "multi":postarray
                                    
                                }
                            }
                        },
                        autoSync: false,
                        schema: {
                            data: "data",
                            total: "data.length",
                            model: {
                                id: "id",
                                fields: {
                                    id: {nullable: true},name: {type: "string"},email: {type: "string"},phone: {type: "string"},number_of_person: {type: "string"},reservations_date: {type: "string"},reservations_time: {type: "string"},message: {type: "string"},
                                    date: {type: "string"}
                                }
                            }
                        }
                    });
                    jQuery("#reservations_6").kendoGrid({
                        dataSource: dataSource,
                        filterable: true,
                        pageable: {
                            refresh: true,
                            input: true,
                            numeric: false,
                            pageSizes: true,
                            pageSizes: [5, 10, 20, 50],
                        },
                        sortable: true,
                        groupable: true,
                        columns: [
                        {field: "name", title: "Name", width:120},
                        {field: "email", title: "Email", width:150},
                        {field: "phone", title: "Phone", width:120},
                        {field: "number_of_person", title: "Number Of Person", width:120},
                        {field: "reservations_date", title: "Reservations Date", width:120},
                        {field: "reservations_time", title: "Reservations Time", width:120},
                        {field: "message", title: "Message", width:120},
                            {field: "date", title: "Record Added", width: "100px"},
                            {
                                title: "Edit",
                                template: kendo.template($("#edit_reservations").html())
                            },
                            {
                                title: "Delete",
                                template: kendo.template($("#delete_reservations").html())
                            }
                        ]
                    });
                });

            </script>
































            <?php include('include/footer.php'); ?>
            <!-- // Footer END -->

            <!-- // Main Container Fluid END -->
            <!-- Global -->

            <script type="text/javascript">
                function deleteClick(spare_parts_id) {
                    var c = confirm("Do you want to delete?");
                    if (c === true) {
                        $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: "./json_data/banner_list.php",
                            data: {id: spare_parts_id, table: "page_info", acst: 3},
                            success: function (result) {
                                $(".k-i-refresh").click();
                            }
                        });
                    }
                }

            </script>
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    var postarray = {"id": 1};
                    var dataSource = new kendo.data.DataSource({
                        pageSize: 5,
                        transport: {
                            read: {
                                url: "./json_data/banner_list.php",
                                type: "POST",
                                data:
                                        {
                                            "acst": 1, //action status sending to json file
                                            "table": "page_info",
                                            "cond": 0,
                                            "multi": postarray

                                        }
                            }
                        },
                        autoSync: false,
                        schema: {
                            data: "data",
                            total: "data.length",
                            model: {
                                id: "id",
                                fields: {
                                    id: {nullable: true},
                                    page_name: {type: "string"},
                                    name: {type: "string"},
                                    date: {type: "string"}
                                }
                            }
                        }
                    });
                    jQuery("#spare_parts_5").kendoGrid({
                        dataSource: dataSource,
                        filterable: true,
                        pageable: {
                            refresh: true,
                            input: true,
                            numeric: false,
                            pageSizes: true,
                            pageSizes: [5, 10, 20, 50],
                        },
                        sortable: true,
                        groupable: true,
                        columns: [
                            {field: "page_name", title: "Page Name"},
                            {field: "name", title: "Name"},
                            {field: "date", title: "Record Added", width: "120px"}

                        ]
                    });
                });

            </script>
            <?php
            echo $plugin->TableJs();
            echo $plugin->KendoJS();
            ?>

            <!--end table-->
        </div>
        <!-- // Content END -->
        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->

        <!-- // Footer END -->
        <!-- // Main Container Fluid END -->
        <!-- Global -->

    </body>
</html>