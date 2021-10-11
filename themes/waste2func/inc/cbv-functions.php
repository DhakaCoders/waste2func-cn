<?php 
/**
* Get the image tag with alt/title tag
*/
function cbv_get_image_tag( $id, $size = 'full', $title = false ){
  if( isset( $id ) ){
    $output = '';
    $image_title = get_the_title($id);
    $image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
    if( empty( $image_alt ) ){
      $image_alt = $image_title;
    }
    $image_src = wp_get_attachment_image_src( $id, $size, false );

    if( $title ){
      $output = '<img src="'.$image_src[0].'" alt="'.$image_alt.'" title="'.$image_title.'">';
    }else{
      $output = '<img src="'.$image_src[0].'" alt="'.$image_alt.'">';
    }

    return $output;
  }
  return false;
}

/**
* Get the image src url by attachement it
*/
function cbv_get_image_src( $id, $size = 'full' ){
  if( isset( $id ) ){
    $afbeelding = wp_get_attachment_image_src($id, $size, false );
    if( is_array( $afbeelding ) && isset( $afbeelding[0] ) ){
      return $afbeelding[0];
    }
  }
  return false;
}
/**
* Get the image tag with alt/title tag
*/
function cbv_get_image_alt( $url ){
  if( isset( $url ) ){
    $output = '';
    $id = attachment_url_to_postid($url);
    $image_title = get_the_title($id);
    $image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
    if( empty( $image_alt ) ){
      $image_alt = $image_title;
    }
    $image_alt = str_replace('-', ' ', $image_alt);
    $output = $image_alt;

    return $output;
  }
  return false;
}

function cbv_imagegrid( $image, $desc, $position = 'left' ){
  $output = '';
  if( !empty( $image ) && !empty( $desc ) ){
    $output = ( $position == 'left' ) ? 
      "<div class='df-text-rgt-img-grd-2 clearfix'>" : 
      "<div class='df-text-lft-img-grd-2 clearfix'>";
    $output .= '<div>' .cbv_get_image_tag( $image ). '</div>';
    $output .= '<div>' .wpautop( $desc ). '</div>';
    $output .= "</div>";
  }
  return $output;
}
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function phone_preg( $show_telefoon ){
  $replaceArray = '';
  $spacialArry = array(".", "/", "+", " ", ")", "(");
  $show_telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  return $show_telefoon;
}

function array_insert(&$array, $position, $insert_arr)
{
    if (is_int($position)) {
        return array_merge(array_slice($array, 0, $position), $insert_arr, array_slice($array, $position));
    }
    return false;
}


function wpmu_role_based_style() {
  
    if( isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'product_cat' ){
    ?>
    <style>
      .taxonomy-product_cat .form-field.term-description-wrap{display:none;}
    </style>
    <?php 
    }
}

// for back-end; comment out if you don't want to hide in back-end
add_action( 'admin_footer', 'wpmu_role_based_style', 99 );
function cbv_table( $table, $title =''){
  if ( ! empty ( $table ) ) {
    echo '<div class="dfp-tbl-wrap">';
    if( !empty($title) ) printf('<h6 class="fl-h6">%s</h6>', $title);
    echo '<div class="table-dsc" data-aos="fade-up" data-aos-delay="200">
    <table>';
    if ( ! empty( $table['caption'] ) ) {
      echo '<caption>' . $table['caption'] . '</caption>';
    }
    if ( ! empty( $table['header'] ) ) {
      echo "<thead class='dfp-thead'>";
      echo '<tr>';
      echo '<th><span>#</span></th>';
      foreach ( $table['header'] as $th ) {
        echo '<th><span>';
        echo $th['c'];
        echo '</span></th>';
      }
      echo '</tr>';
      echo '</thead>';
    }
    echo '<tbody>';
    $i = 1;
    foreach ( $table['body'] as $tr ) {
      echo '<tr>';
      echo '<td><span class="mHc">'.$i.'</span></td>';
      foreach ( $tr as $td ) {
        echo '<td>';
        if(!empty($td['c'])){
          echo $td['c'];
        }else{
          echo '-';
        }
        echo '</td>';
      }
      echo '</tr>';
      $i++;
    }
    echo '</tbody>';
    echo '</table></div>';
    echo '</div>';
  }  
}
function get_link_by_page_template( $pagetemplate ){
    $pagelink = '#';
    if( !empty($pagetemplate) ){
      $page_details = get_pages( array(
       'post_type' => 'page',
       'meta_key' => '_wp_page_template',
       'hierarchical' => 0,
       'meta_value' => $pagetemplate
      ));
      if($page_details){
        foreach($page_details as $page_detail){
          $pagelink = get_permalink($page_detail->ID);
        }
      }
    }
  return $pagelink;
}
function get_id_by_page_template( $pagetemplate ){
    $pageID = '';
    if( !empty($pagetemplate) ){
      $page_details = get_pages( array(
       'post_type' => 'page',
       'meta_key' => '_wp_page_template',
       'hierarchical' => 0,
       'meta_value' => $pagetemplate
      ));
      if($page_details){
        foreach($page_details as $page_detail){
          $pageID = $page_detail->ID;
        }
      }
    }
  return $pageID;
}
function get_title_by_page_template( $pagetemplate ){
    $post_title = '';
    if( !empty($pagetemplate) ){
      $page_details = get_pages( array(
       'post_type' => 'page',
       'meta_key' => '_wp_page_template',
       'hierarchical' => 0,
       'meta_value' => $pagetemplate
      ));
      if($page_details){
        foreach($page_details as $page_detail){
          $post_title = $page_detail->post_title;
        }
      }
    }
  return $post_title;
}

function banner_placeholder($format = 'src'){
  $placehoder = get_field('placeholder', 'options');
  if( !empty($placehoder) ){
      if( $format == 'src' ){
        $placeholder = !empty($placehoder['default_banner'])? cbv_get_image_src($placehoder['default_banner']):'';
      }else{
        $placeholder = !empty($placehoder['default_banner'])? cbv_get_image_tag($placehoder['default_banner']):'';
      }
      return $placeholder;
  }
  return '';

}
function blog_placeholder($format = 'src'){
  $placehoder = get_field('placeholder', 'options');
  if( !empty($placehoder) ){
      if( $format == 'src' ){
        $placeholder = !empty($placehoder['nieuws'])? cbv_get_image_src($placehoder['nieuws']):'';
      }else{
        $placeholder = !empty($placehoder['nieuws'])? cbv_get_image_tag($placehoder['nieuws']):'';
      }
      return $placeholder;
  }
  return '';

}
function bv_get_current_year(){
    return date('Y');
}
add_shortcode( 'cyear', 'bv_get_current_year' );

function cbv_get_excerpt(){
  global $post;
  $link = '<a href="'. get_permalink($post->ID) . '">'.__(' ....more', 'landshuys').'</a>';
  $excerpt = explode(' ', get_the_excerpt());
  //array_pop($excerpt);
  $excerpt = implode(" ",$excerpt);
  $excerpt .= $link;
  return wpautop($excerpt);
}