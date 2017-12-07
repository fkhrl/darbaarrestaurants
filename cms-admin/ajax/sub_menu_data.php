<?php
include("../class/auth.php");
$q=$_POST['scid'];

if(!empty($q)){
   $sql_subcategory = $obj->FlyQuery("SELECT * FROM `sub_menu` WHERE `category_id` ='$q'");
   ?>
    <option value="">Select A Menu</option>
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
            <option value="">Select A Sub Menu</option>
            <?php
        }
        ?>

<?php
}
?>



        
       