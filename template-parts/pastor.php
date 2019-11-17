<?php 

$data = get_pastor();

?>
<div id="contnetPastor">

    <?php 
    foreach ($data as $key => $value) {
        ?>
        
        <div class="pastor">
            <div class="container-fluid">
                <div class="left">
                    <div class="image" style="background-image: url(<?php echo $value["image"] ?>)"></div>
                </div>
                <div class="right">
                    <div class="title"><h4><?php echo $value["title"] ?></h4></div>
                    <div class="shortDescription"><?php echo $value["short_description"] ?></div>
                    <a href="<?php echo $value["url"] ?>" class="btn btn-success">Conocer más</a>
                </div>
            </div>
        </div>

        <?php
    }
    ?>

</div>