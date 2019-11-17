<?php 
function get_home_gallery(){

    $resolve = array();

    $posts = get_posts(array(
        "post_type"     =>      "galeria_imagenes",
        "numberposts"   =>      1,
        "post_status"   =>      "publish"
    ));

    foreach ($posts as $key => $value) {

        $images = array();

        foreach (get_post_meta( $value->ID, "images_home", false ) as $key => $image) {
            
            array_push($images, wp_get_attachment_metadata($image));

        }
        
        array_push($resolve, array(
            "ID"                =>      $value->ID,
            "url"               =>      get_site_url() . "/" . $value->post_type . "/" . $value->post_name,
            "title"             =>      $value->post_title,
            "images"            =>      $images,
        ));

    }

    return $resolve;

}
?>