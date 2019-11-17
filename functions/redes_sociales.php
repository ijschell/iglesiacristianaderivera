<?php 
function get_redes_sociales(){

    $resolve = array();

    $posts = get_posts(array(
        "post_type"     =>      "redes_sociales",
        "numberposts"   =>      -1,
        "post_status"   =>      "publish"
    ));

    foreach ($posts as $key => $value) {
        
        array_push($resolve, array(
            "ID"                =>      $value->ID,
            "url"               =>      get_post_meta($value->ID, "url_social", true),
            "title"             =>      $value->post_title,
            "image"             =>      get_the_post_thumbnail_url( $value, "full" ),
        ));

    }

    return $resolve;

}
?>