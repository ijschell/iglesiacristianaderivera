<?php 
function get_eventos($more, $cant){

    if($more == true){
        $more = ">=";
    }else{
        $more = "<";
    }

    $resolve = array();

    $posts = get_posts(array(
        "post_type"     =>      "eventos",
        "numberposts"   =>      $cant,
        "post_status"   =>      "publish",
        "meta_query"    =>      array(
            array(
                "key"       =>      "datetime",
                "value"     =>      date("Y-m-d H:i"),
                "compare"   =>      $more,
                "type"      =>      "date"
            )
        )
    ));

    foreach ($posts as $key => $value) {
        
        array_push($resolve, array(
            "ID"                =>      $value->ID,
            "url"               =>      get_site_url() . "/" . $value->post_type . "/" . $value->post_name,
            "title"             =>      $value->post_title,
            "description"       =>      $value->post_content,
            "image"             =>      get_the_post_thumbnail_url( $value, "full" ),
            "datetime"          =>      get_post_meta( $value->ID, "datetime", true ),
        ));

    }

    return $resolve;

}
?>