<?php 

$data = get_all_sliders();

?>
<div id="sliderHeader">

    <?php 
    foreach ($data as $key => $value) {
        ?>
        <div class="slide" style="background-image: url(<?php echo $value["image"] ?>)">
            <div class="center">
                <h3><?php echo $value["title"] ?></h3>
                <div class="description"><?php echo $value["description"] ?></div>
            </div>
        </div>
        <?php
    }
    ?>

</div>