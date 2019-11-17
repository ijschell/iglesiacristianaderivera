<?php 
function get_casas_paz(){

    $resolve = array();

    $posts = get_posts(array(
        "post_type"     =>      "casas_paz",
        "numberposts"   =>      -1,
        "post_status"   =>      "publish"
    ));

    foreach ($posts as $key => $value) {
        
        array_push($resolve, array(
            "ID"                =>      $value->ID,
            "url"               =>      get_site_url() . "/" . $value->post_type . "/" . $value->post_name,
            "title"             =>      $value->post_title,
            "description"       =>      $value->post_content,
            "image"             =>      get_the_post_thumbnail_url( $value, "full" ),
            "coords"            =>      get_post_meta( $value->ID, "coords", true ),
        ));

    }

    return $resolve;

}
?>