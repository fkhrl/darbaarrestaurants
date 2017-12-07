<?php

include('../class/auth.php');
header("Content-type: application/json");

    extract($_POST);

        $arrayBanner=$obj->FlyQuery("SELECT ps.*,(SELECT name FROM category WHERE ps.category_id=category.id) as category FROM `page_slider` as ps");
        echo "{\"data\":" . json_encode($arrayBanner) . "}";
    



?>