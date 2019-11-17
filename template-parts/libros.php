<?php 
$data = get_libros();
$page = get_page_by_path("libros-de-la-iglesia");
?>

<div id="containerLibros">

    <h2><?php echo $page->post_title ?></h2>

    <div class="container-fluid">

        <?php echo $page->post_content ?>

        <div class="contentLibros">

            <?php 
            foreach ($data as $key => $value) {
                ?>
                <div class="item">
                    <div class="image" style="background-image: url(<?php echo $value["image"] ?>)">
                        <a href="<?php echo $value["url"] ?>"></a>
                    </div>
                    <h3>
                        <a href="<?php echo $value["url"] ?>">
                            <?php echo $value["title"] ?>
                        </a>
                    </h3>
                    <p>$<?php echo $value["price"] ?></p>
                </div>
                <?php  
            }
            ?>

        </div>

    </div>

</div>