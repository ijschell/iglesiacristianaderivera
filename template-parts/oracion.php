<?php 

$data = get_oracion_home();
$data = $data[0];

?>
<div id="contnetOracion">

    <div class="oracion" data-parallax="scroll" data-image-src="<?php echo $data["image"] ?>" data-speed="0.7">
        
        <div class="center">

            <h2><?php echo $data["title"] ?></h2>
            <div class="button">
                <a href="<?php echo $data["url"] ?>" class="btn btn-success">Escribir oración</a>
            </div>

        </div>

    </div>

</div>