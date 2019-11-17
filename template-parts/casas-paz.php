<?php 
$data = get_casas_paz();
?>

<div id="containerContact">

    <h2>Contáctenos</h2>

    <div class="container-fluid">
    
        <div class="left">

            <?php 
            // echo do_shortcode('[wpforms id="40" title="false" description="false"]');

            foreach ($data as $key => $value) {
                
                ?>
                <div class="casaPaz" data-coords="<?php echo $value["coords"] ?>">
                    <h3><?php echo $value["title"] ?></h3>
                    <div class="description">
                        <?php 
                        echo wp_trim_words( $value["description"], 20, '...' );
                        ?>
                    </div>
                    <div class="action">
                        <a class="btn btn-dark btn-xs" href="<?php echo $value["url"] ?>">más</a>
                    </div>
                </div>
                <?php

            }

            ?>

        </div>

        <div class="right">
        
            <!-- <iframe id="mapaGoogle" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16282.86543135138!2d-55.54941007609105!3d-30.91320436605701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a9feec4125885f%3A0xf22b95e7bd8ced7a!2sRivera%2C%20Departamento%20de%20Rivera!5e0!3m2!1ses-419!2suy!4v1571274332244!5m2!1ses-419!2suy" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
            <div id="map"></div>

        </div>

    </div>

</div>