<?php
get_header();

$page = get_page_by_path("radio");
?>
<div id="singlePage">

    <div id="bannerSingle" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url( $page->ID, "full" ) ?>"></div>

    <div class="container-fluid">

        <h2><?php echo $page->post_title ?></h2>

        <div class="content">
            <?php echo $page->post_content?>
        </div>

        <div class="back">
            <a href="<?php echo site_url(); ?>" class="btn btn-purpure">Volver</a>
        </div>

    </div>

</div>
<?php

get_footer();