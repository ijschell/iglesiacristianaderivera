<?php 
function get_all_ongs(){

    $resolve = array();

    $posts = get_posts(array(
        "post_type"     =>      "ongs",
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
            "icon"              =>      wp_get_attachment_url(get_post_meta( $value->ID, "icon", true )),
            "short_description" =>      get_post_meta( $value->ID, "short_description", true ),
            "page"              =>      get_post_meta( $value->ID, "page", true ),
        ));

    }

    return $resolve;

}
?>