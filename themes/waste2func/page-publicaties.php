<?php 
/*
  Template Name: Publicaties
*/
get_header(); 
$thisID = get_the_ID();
$title = get_field('custom_page_title', $thisID);
$page_title = !empty($title) ? $title : get_the_title($thisID);
?>
<section class="breadcrumb-sec hide-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-cntlr">
          <ul class="reset-list clearfix">
            <li class="home">
              <a href="#">
                <span class="item">Home</span>
              </a>
            </li>
            <li>
              <a href="#"><span>Binnenpagina</span></a>
            </li>
            <li class="active">
              <span>Binnenpagina</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="page-entry-hdr-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-entry-hdr">
          <h2 class="page-entry-hdr-title fl-h2"><?php echo $page_title; ?></h2>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
$terms = get_terms( array(
    'taxonomy' => 'publicatie_cat',
    'hide_empty' => true
) );
?>
<div class="publicaties-page-cntnt-cntlr">
  <section class="publicaties-page-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="publicaties-grid-cntlr">
            <?php if( !empty($terms) && ! is_wp_error( $terms ) ): ?>
            <?php foreach ( $terms as $term ): ?>
            <div class="publicaties-grid-col">
              <div class="cat-grd-item-cntlr">
                <div class="cat-grd-hdr">
                  <h2 class="fl-h4 cat-grd-hdr-title"><?php echo $term->name; ?></h2>
                </div>
                <?php 
                  $query = new WP_Query(array(
                    'post_type' => 'publicatie',
                    'posts_per_page'=> -1,
                    'orderby' => 'date',
                    'order'=> 'asc',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'publicatie_cat',
                        'terms' => $term->slug,
                        'field' => 'slug',
                      )
                    ),

                  ));
                  if( $query->have_posts() ):
                ?>
                <div class="cat-grd-list">
                  <ul class="reset-list">
                    <?php 
                      while($query->have_posts()): $query->the_post(); 
                      global $post;
                      $pdf_knop = get_field('upload_file', get_the_ID()); 
                    ?>  
                    <li>
                      <div class="cat-grid-list-item">
                        <?php if( !empty($pdf_knop) ) printf('<a href="%s" download class="overlay-link"></a>', $pdf_knop); ?>
                        <i><img src="<?php echo THEME_URI; ?>/assets/images/Vector.svg"></i>
                        <?php the_title(); ?>
                      </div>
                    </li>
                    <?php endwhile; ?>
                  </ul>
                </div>
                <?php endif; wp_reset_postdata(); ?>
              </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php
$showhide_cta = get_field('showhide_cta', HOMEID);
if($showhide_cta): 
$homecta = get_field('homecta', HOMEID);
if($homecta):
?>
<section class="wf-cta-sec">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="wf-cta-sec-inr">
        <div class="cta-module-ctlr">
          <span class="cta-module-border"></span>
          <div class="cta-module">
            <div class="cta-module-inr">
              <div class="cta-module-lft">
                <?php if( !empty($homecta['titel']) ) printf( '<h2 class="cta-module-title fl-h2">%s</h2>', $homecta['titel']); ?>
              </div>
              <div class="cta-module-mid">
                <?php if( !empty($homecta['beschrijving']) ) echo wpautop($homecta['beschrijving']); ?>
              </div>
              <?php 
                $contknop = $homecta['knop'];
                if( is_array( $contknop ) &&  !empty( $contknop['url'] ) ){
                  printf('<div class="cta-module-rgt"><div class="cta-module-btn"><a class="fl-green-btn" href="%s" target="%s">%s</a></div></div>', $contknop['url'], $contknop['target'], $contknop['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>