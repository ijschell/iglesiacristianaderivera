<?php 

$data = get_redes_sociales();

?>
<div id="contnetRedesSociales">
    <div class="container-fluid">
                
        <?php 
        foreach ($data as $key => $value) {
            ?>
            <div class="redSocial">
                <div class="image">
                    <a href="<?php echo $value["url"] ?>" target="_blank">
                        <img src="<?php echo $value["image"] ?>" alt="<?php echo $value["title"] ?>">
                    </a>
                </div>
                <div class="title">
                    <a href="<?php echo $value["url"] ?>" target="_blank">
                        <?php echo $value["title"] ?>
                    </a>
                </div>
            </div>
            <?php
        }
        ?>

    </div>

</div>