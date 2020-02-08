<?php 

$data = get_home_gallery();

// $data = $data;

?>
<div id="contnetGalleryHome">

    <div class="gallery">
        <div class="container-fluid">
              <h2><?php echo $data["title"] ?></h2>
        </div>

        <div class="images">

            <?php 

            $site_url = get_site_url();

            foreach ($data as $key1 => $value1) {
                foreach ($value1["images"] as $key => $value) {
                    $base_url = $site_url . "/wp-content/uploads/" . explode("/", $value["file"])[0] ."/". explode("/", $value["images"]["file"])[1] . "/";
                    $image = $base_url . $value["sizes"]["medium_large"]["file"];
                    $image = $site_url . "/wp-content/uploads/" . $value["file"];
                    ?>
                    <div style="background-image: url(<?php echo $image ?>)"></div>
                    <?php
                }
            }
            ?>

        </div>

        <div class="button">
            <a href="/galeria-de-imagenes" class="btn btn-success">Ver galería</a>
        </div>

    </div>

</div>