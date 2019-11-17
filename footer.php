<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Iglesia_de_rivera
 * @since Iglesia de Rivera 1.0
 */
?>

		
<footer>
    <div class="container-fluid">

        <div class="black">

            <div class="top">
                <!-- social -->
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/004-facebook.png" alt="Compartir en Facebok">
                </a>
                <a target="_blank" href="https://twitter.com/home?status=<?php echo site_url(); ?> <?php echo get_bloginfo("description") ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/002-gorjeo.png" alt="Compartir en Twitter">
                </a>
                <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo site_url(); ?>&title=<?php echo get_bloginfo("title") ?>&summary=<?php echo get_bloginfo("description") ?>&source=">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/001-linkedin.png" alt="Compartir en Linkedin">
                </a>
                <a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo site_url(); ?>&media=&description=<?php echo get_bloginfo("description") ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/003-pinterest.png" alt="Compartir en Pinterest">
                </a>
            </div>
            <div class="middle">
                <!-- menu -->
                <ul>
                    <li>
						<a href="<?php echo get_site_url() ?>/#header" class="active">Inicio</a>
					</li>
					<li>
						<a href="<?php echo get_site_url() ?>/nuestra-mision">Nuestra misión</a>
					</li>
					<li>
						<a href="<?php echo get_site_url() ?>/#contnetGalleryHome">Galería</a>
					</li>
					<li>
						<a href="<?php echo get_site_url() ?>/#contnetOracion">Oración</a>
					</li>
                </ul>
            </div>
            <div class="bottom">
                <p><b>Iglesia Cristiana de Rivera</b>, las imágenes aquí utilizadas son propias o de dominio público.</p>
            </div>

        </div>

    </div>
</footer>

<a id="scrollToTop" href="<?php echo get_site_url() ?>/#header" class="tooltip" title="Ir arriba">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/boton-de-carga.png" alt="">
</a>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/parallax/parallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/tooltip/tooltipster.main.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/tooltip/tooltipster.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/script.js"></script>
<?php 
if(is_single() == true){
    ?>
    <script src="<?php echo get_template_directory_uri() ?>/assets/libs/leafletmap/leaflet.js" onload="initMapSingle();"></script>
    <?php
}else{
    ?>
    <script src="<?php echo get_template_directory_uri() ?>/assets/libs/leafletmap/leaflet.js" onload="casasDePazMap();"></script>
    <?php
}
?>
</body>
</html>
