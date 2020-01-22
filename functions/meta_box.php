<?php 
add_filter( 'rwmb_meta_boxes', 'prefix_register_meta_boxes' );
function prefix_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = array(
        'title'      => 'Información adicional',
        'post_types' => 'ongs',

        'fields' => array(
            array(
                'name'  => 'Descripción corta',
                'desc'  => 'Más o menos 150 carácteres',
                'id'    => 'short_description',
                'type'  => 'textarea'
            ),
            array(
                'name'  => 'Icono',
                'desc'  => 'Inserte el icono aquí',
                'id'    => 'icon',
                'type'  => 'image'
            ),
            array(
                'name'        => 'Seleccione página perteneciente',
                'id'          => 'page',
                'type'        => 'post',
                'post_type'   => 'page',
                'field_type'  => 'select_advanced',
                'placeholder' => 'Selccione una página',
                'query_args'  => array(
                    'post_status'    => 'publish',
                    'posts_per_page' => - 1,
                ),
            ),
        )
    );

    $meta_boxes[] = array(
        'title'      => 'Información adicional',
        'post_types' => 'pastores',

        'fields' => array(
            array(
                'name'  => 'Descripción corta',
                'desc'  => 'Más o menos 150 carácteres',
                'id'    => 'short_description',
                'type'  => 'textarea'
            ),
        )
    );

    $meta_boxes[] = array(
        'title'      => 'Link a radio',
        'post_types' => 'radio_online',

        'fields' => array(
            array(
                'name'  => 'Link a radio online',
                'desc'  => 'Inserte aquí el enlace a la radio online.',
                'id'    => 'radio_field',
                'type'  => 'text'
            ),
        )
    );

    $meta_boxes[] = array(
        'title'      => 'Galería de imágenes',
        'post_types' => 'galeria_imagenes',

        'fields' => array(
            array(
                'name'  => 'Imágenes para Home',
                'desc'  => 'Tamaño óptimo aprox. 800px x 800px',
                'id'    => 'images_home',
                'type'  => 'image_advanced'
            ),
            array(
                'name'  => 'Todas las imágenes',
                'desc'  => 'Tamaño óptimo aprox. 800px x 800px',
                'id'    => 'all_images',
                'type'  => 'image_advanced'
            ),
        ),
        
    );

    $meta_boxes[] = array(
        'title'      => 'Url',
        'post_types' => 'redes_sociales',

        'fields' => array(
            array(
                'name'  => 'Url de la red social',
                'desc'  => 'Ingrese la url completa.',
                'id'    => 'url_social',
                'type'  => 'text'
            ),
        ),
        
    );

    $meta_boxes[] = array(
        'title'      => 'Url Youtube',
        'post_types' => 'transmisiones',

        'fields' => array(
            array(
                'name'  => 'Url de Youtube',
                'desc'  => 'Pega aquí la URL del video desde Youtube.',
                'id'    => 'url_video',
                'type'  => 'text'
            ),
        ),
        
    );

    $meta_boxes[] = array(
        'title'      => 'Coordenadas de mapa',
        'post_types' => 'casas_paz',

        'fields' => array(
            array(
                'name'  => 'Ingrese coordenadas para la dirección',
                'desc'  => 'Para averiguar la coordenada, debe ir a Google Maps y copiarlas de allí.',
                'id'    => 'coords',
                'type'  => 'text'
            ),
        ),
        
    );

    $meta_boxes[] = array(
        'title'      => 'Precio',
        'post_types' => 'libros',

        'fields' => array(
            array(
                'name'  => 'Precio del libro',
                'desc'  => 'Ingrese aquí el precio del libro.',
                'id'    => 'price',
                'type'  => 'number'
            ),
        ),
        
    );

    $meta_boxes[] = array(
        'title'      => 'Información adicional',
        'post_types' => 'eventos',

        'fields' => array(
            array(
                'name'  => 'Fecha del evento',
                'desc'  => 'Ingrese la fecha del evento',
                'id'    => 'datetime',
                'type'  => 'datetime'
            ),
        )        
    );

    return $meta_boxes;
}

?>