<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Iglesia_de_rivera
 * @since Iglesia de Rivera 1.0
 */
add_theme_support( 'post-thumbnails' );

function cut_string($string, $characters){
    return wp_trim_words($string, $characters);
}

include_once get_template_directory() . "/functions/meta_box.php";
include_once get_template_directory() . "/functions/slider.php";
include_once get_template_directory() . "/functions/ongs.php";
include_once get_template_directory() . "/functions/pastor.php";
include_once get_template_directory() . "/functions/eventos.php";
include_once get_template_directory() . "/functions/galeria.php";
include_once get_template_directory() . "/functions/redes_sociales.php";
include_once get_template_directory() . "/functions/oracion.php";
include_once get_template_directory() . "/functions/transmisiones.php";
include_once get_template_directory() . "/functions/casas-paz.php";
include_once get_template_directory() . "/functions/libros.php";