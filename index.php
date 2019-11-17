<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Iglesia_de_rivera
 * @since Iglesia de Rivera 1.0
 */

get_header();

// slider banner
include_once get_template_directory() . "/template-parts/slider.php";
// ONGS
include_once get_template_directory() . "/template-parts/ongs.php";
// PASTOR
include_once get_template_directory() . "/template-parts/pastor.php";
// EVENTOS
include_once get_template_directory() . "/template-parts/eventos.php";
// LIBROS
include_once get_template_directory() . "/template-parts/libros.php";
// ORACION
include_once get_template_directory() . "/template-parts/oracion.php";
// GALLERY
include_once get_template_directory() . "/template-parts/galeria.php";
// REDES SOCIALES
include_once get_template_directory() . "/template-parts/redes_sociales.php";
// TRANSMISIONES
include_once get_template_directory() . "/template-parts/transmisiones.php";
// CONTACTO
include_once get_template_directory() . "/template-parts/casas-paz.php";

get_footer(); 
?>
