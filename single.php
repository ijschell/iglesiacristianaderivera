<?php 
get_header();
$ID = get_the_ID();
$post = get_post($ID);
$data = array(
    "post"      =>      $post,
    "image"     =>      get_the_post_thumbnail_url($ID, "full"),
    "fields"    =>      get_post_meta($ID)
);
?>

<?php 
if($data["post"]->post_type != "galeria_imagenes"){
    ?>

    <div id="singlePage">

        <div id="bannerSingle" data-parallax="scroll" data-image-src="<?php echo $data["image"] ?>"></div>

        <div class="container-fluid">

            <h2><?php echo $data["post"]->post_title ?></h2>

            <?php
            if ($data["post"]->post_type == "eventos") {
                ?>
                <p>
                    <b>Fecha del evento:</b>
                    <?php echo $data["fields"]["datetime"][0] ?>
                </p>
                <?php
            }
            ?>

            <div class="content">
                <?php echo $data["post"]->post_content?>
            </div>

            <?php 
            if($data["post"]->post_type == "libros"){
                ?>
                    <p class="precio"><span>Valor del libro:</span> $<?php echo $data["fields"]["price"][0] ?></p>
                <?php
            }
            ?>

            <?php 
            if($data["post"]->post_type == "oracion"){
                ?>
                <div class="form">
                    <?php echo do_shortcode('[wpforms id="43" title="false" description="false"]') ?>
                </div>
                <?php
            }elseif ($data["post"]->post_type == "casas_paz") {
                ?>
                <h3>La Casa de Paz se encuentra en esta zona:</h3>
                <div id="singleMap" data-coords="<?php echo $data["fields"]["coords"][0] ?>">  
                </div>
                <?php
            }
            ?>

            <div class="back">
                <a href="" class="goToBack btn btn-purpure">Volver</a>
            </div>

        </div>

    </div>

    <?php
}else{

    // gallery
    ?>
    <div id="singlePage">

        <div class="container-fluid">

            <h2><?php echo $data["post"]->post_title ?></h2>

            <div class="contentGallery">

                <?php 
                $site_url = get_site_url();
                if($data["fields"]["images_home"] != NULL){
                    foreach ($data["fields"]["images_home"] as $key => $value) {
                        $image_data = wp_get_attachment_metadata($value);
                        $image = $site_url . "/wp-content/uploads/" . $image_data["file"];
                        ?>
                        <div class="image" style="background-image: url(<?php echo $image  ?>)">
                            <a data-fancybox="gallery" href="<?php echo $image  ?>"></a>
                        </div>
                        <?php
                    }
                }
                if($data["fields"]["all_images"] != NULL){
                    foreach ($data["fields"]["all_images"] as $key => $value) {
                        $image_data = wp_get_attachment_metadata($value);
                        $image = $site_url . "/wp-content/uploads/" . $image_data["file"];
                        ?>
                        <div class="image" style="background-image: url(<?php echo $image  ?>)">
                            <a data-fancybox="gallery" href="<?php echo $image  ?>"></a>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>

            <div class="back">
                <a href="" class="goToBack btn btn-purpure">Volver</a>
            </div>

        </div>

    </div>
    <?php

}
?>


<?php
get_footer();
?>
