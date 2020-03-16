<?php
/*
 * Template Name: Página Nuestra Misión
 * Template Post Type: page
 */
get_header();

$page = get_page_by_path("nuestra-mision");

// var_dump($page);
?>
<div id="singlePage">

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