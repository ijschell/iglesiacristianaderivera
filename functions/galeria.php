<?php 
function get_home_gallery(){

    $resolve = array();

    $posts = get_posts(array(
        "post_type"     =>      "galeria_imagenes",
        "numberposts"   =>      4,
        "post_status"   =>      "publish"
    ));

    foreach ($posts as $key => $value) {

        $images = array();
        // $image = get_post_meta( $value->ID, "images_home", false )[0];

        foreach (get_post_meta( $value->ID, "images_home", false ) as $key => $image) {
            
            array_push($images, wp_get_attachment_metadata($image));

            break;

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