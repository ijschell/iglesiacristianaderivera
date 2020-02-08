<?php
get_header();

$page = get_page_by_path("galeria-de-imagenes");

$site_url = get_site_url();

$galerias = get_posts(array(
        "post_type"     =>      "galeria_imagenes",
        "numberposts"   =>      -1,
        "post_status"   =>      "publish"
));

?>
<div id="singlePage">

    <!-- <div id="bannerSingle" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url( $page->ID, "full" ) ?>"></div> -->

    <div class="container-fluid">

        <h2><?php echo $page->post_title ?></h2>

        <div class="content">
            
            <?php 
            foreach ($galerias as $key1 => $value1) {
                $images = get_post_meta( $value1->ID, "images_home", false );
                ?>

                <h3><?php echo $value1->post_title ?></h3>

                <div class="contentGallery">

                    <?php 
                    foreach ($images as $key2 => $value2) {
                        
                        $image_data = wp_get_attachment_metadata($value2);
                        $image_url = $site_url . "/wp-content/uploads/" . $image_data["file"];
                        ?>
                        <div class="image" style="background-image: url(<?php echo $image_url  ?>)">
                            <a data-fancybox="gallery" href="<?php echo $image_url  ?>"></a>
                        </div>
                        <?php

                    }
                    ?>

                </div>
                <?php

            }
            ?>

        </div>

        <div class="back">
            <a href="<?php echo site_url(); ?>" class="btn btn-purpure">Volver</a>
        </div>

    </div>

</div>
<?php

get_footer();