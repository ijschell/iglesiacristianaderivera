<?php
/*
 * Template Name: Página de Eventos
 * Template Post Type: page
 */
get_header();

$page = get_page_by_path("todos-los-eventos");

// var_dump($page);
?>
<div id="singlePage">

    <div class="container-fluid">

        <h2><?php echo $page->post_title ?></h2>

        <div class="content">
            <?php echo $page->post_content?>
        </div>

        <div class="eventos">

            <div>
                <h3>Eventos futuros</h3>
                <table cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>
                                Fecha
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Descripción
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $events = get_eventos(true, -1);
                        foreach ($events as $key => $value) {
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo $value["url"] ?>">
                                        <?php echo date("d-m-Y", strtotime($value["datetime"])) ?>hs
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $value["url"] ?>">
                                        <?php echo $value["title"] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $value["url"] ?>">
                                        <?php echo $value["title"] ?>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div>

                <h3>Eventos pasados</h3>

                <table cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>
                                Fecha
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Descripción
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $events = get_eventos(false, -1);
                        foreach ($events as $key => $value) {
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo $value["url"] ?>">
                                        <?php echo date("d-m-Y", strtotime($value["datetime"])) ?>hs
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $value["url"] ?>">
                                        <?php echo $value["title"] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $value["url"] ?>">
                                        <?php echo $value["title"] ?>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>

        <div class="back">
            <a href="<?php echo site_url(); ?>" class="btn btn-purpure">Volver</a>
        </div>

    </div>

</div>
<?php

get_footer();