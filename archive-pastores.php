<?php 
get_header();

$posts = get_posts(array(
    "post_type"     =>      "pastores",
    "numberposts"   =>      -1,
    "post_status"   =>      "publish"
));

?>

<div class="archivePage">

    <div class="container-fluid">

        <h2>Aquí verás a todos los Pastores.</h2>

        <div class="content">

            <?php 
                
                foreach ($posts as $key => $value) {
                    
                    $item = array(
                        "image"         =>      get_the_post_thumbnail_url( $value, "full" ),
                        "title"         =>      $value->post_title,
                        "description"   =>      $value->post_content,
                        "url"           =>      get_site_url() . "/" . $value->post_type . "/" . $value->post_name
                    );

                    ?>
                    <div class="item">

                        <div class="background">

                            <div class="image" style="background-image: url(<?php echo $item["image"] ?>)"></div>
                            <h3><?php echo $item["title"] ?></h3>
                            <div class="body">
                                <?php echo cut_string("",""); ?>
                            </div>
                            <div class="button">
                                <a href="<?php echo $item["url"] ?>" class="btn btn-success">Ver más</a>
                            </div>

                        </div>

                    </div>
                    <?php

                }

            ?>

        </div>

    </div>

</div>

<?php 
get_footer();
?>