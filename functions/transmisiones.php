<?php 
function get_last_transmisiones(){

    $resolve = array();

    $posts = get_posts(array(
        "post_type"     =>      "transmisiones",
        "numberposts"   =>      -1,
        "post_status"   =>      "publish"
    ));

    foreach ($posts as $key => $value) {
        
        array_push($resolve, array(
            "ID"                =>      $value->ID,
            "url"               =>      get_site_url() . "/" . $value->post_type . "/" . $value->post_name,
            "url_video"         =>      get_post_meta( $value->ID, "url_video", true ),
        ));

    }

    return $resolve;

}
?>