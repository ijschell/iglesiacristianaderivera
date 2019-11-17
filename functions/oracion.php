<?php 
function get_oracion_home(){

    $resolve = array();

    $posts = get_posts(array(
        "post_type"     =>      "oracion",
        "numberposts"   =>      1,
        "post_status"   =>      "publish"
    ));

    foreach ($posts as $key => $value) {
        
        array_push($resolve, array(
            "ID"                =>      $value->ID,
            "title"             =>      $value->post_title,
            "url"               =>      get_site_url() . "/" . $value->post_type . "/" . $value->post_name,
            "description"       =>      $value->post_content,
            "image"             =>      get_the_post_thumbnail_url( $value, "full" )
        ));

    }

    return $resolve;

}
?>