<?php 

$data = get_all_ongs();

?>
<div id="contnetOngs">

    <?php 
    foreach ($data as $key => $value) {
        ?>
        
        <div class="ong">
            <div class="icon">
                <img src="<?php echo $value["icon"] ?>" alt="<?php echo $value["title"] ?>">
            </div>
            <div class="title"><h4><?php echo $value["title"] ?></h4></div>
            <div class="shortDescription"><?php echo $value["short_description"] ?></div>
            <div class="link">
                <a href="<?php echo $value["url"] ?>">Leer más</a>
            </div>
        </div>

        <?php
    }
    ?>

</div>