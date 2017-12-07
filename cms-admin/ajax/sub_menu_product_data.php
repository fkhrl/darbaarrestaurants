<?php
include("../class/auth.php");
$q=$_POST['smpid'];

if(!empty($q)){
   $sql_subcategory = $obj->FlyQuery("SELECT * FROM `product_menu_name` WHERE `sub_menu_section_id` ='$q'");
   ?>
    <option value="">Select A Sub Menu Product Name</option>
    <?php
     if (!empty($sql_subcategory)) {
            foreach ($sql_subcategory as $subcategory):
                ?>
                <option value="<?php echo $subcategory->id ?>"><?php echo $subcategory->name ?></option>

                <?php
            endforeach;
        }
        else {
            ?>
            <option value="">Select A Sub Menu Section</option>
            <?php
        }
        ?>

<?php
}
?>



        
       