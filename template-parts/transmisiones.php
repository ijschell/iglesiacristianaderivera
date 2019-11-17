<?php 

$data = get_last_transmisiones();

// var_dump($data);

?>
<div id="contnetTransmisiones">

    <?php 
    foreach ($data as $key => $value) {

        $embed = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$value["url_video"]);

        ?>
        
        <div class="transmision">
            
            <?php echo $embed; ?>

        </div>

        <?php
    }
    ?>

</div>