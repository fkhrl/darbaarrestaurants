<?php
    $slider = $obj->SelectAll("slider");
?>
<div class="js-slider">
                    <?php
                        if(!empty($slider)){
                            foreach ($slider as $img) {
                    ?>
                    <div class="slide">
                        <div class="slider__item" style="background-image: url('cms-admin/upload/<?= $img->photo; ?>')">
                        </div>
                    </div>
                    <?php
                        }
                       }
                    ?>
                    
                </div>