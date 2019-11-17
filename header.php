<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Iglesia_de_rivera
 * @since Iglesia de Rivera 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo get_bloginfo( 'title' ) ?></title>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ) ?>">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/leafletmap/leaflet.css">
	<link rel="stylesheet" href="<?php echo site_url() ?>/wp-includes/css/dashicons.min.css?ver=5.2.4">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/tooltip/tooltipster.bundle.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/tooltip/tooltipster.main.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
	
</head>
<body id="header">
	<header>
		<div class="container-fluid">
			<div class="left">
				<h1>
					<a href="<?php echo site_url() ?>">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logotipo.png" name="<?php echo get_bloginfo("title") ?>" />
					</a>
				</h1>
			</div>
			<div class="right">
				<ul id="menu">
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
		</div>
	</header>