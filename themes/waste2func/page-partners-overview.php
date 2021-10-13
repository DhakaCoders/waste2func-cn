<?php 
/*
  Template Name: Partners Overview
*/
get_header(); 
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title($thisID);
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


<section class="page-entry-hdr-sec  pp-page-entry-hdr-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-entry-hdr">
        <?php 
          if( !empty($page_title) ) printf( '<h2 class="page-entry-hdr-title fl-h2  pp-page-entry-hdr-title">%s</h2>', $page_title);
          if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
        ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="partners-page-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="partners-page-grids-cntlr">
            <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query = new WP_Query(array(
              'post_type' => 'partners',
              'posts_per_page'=> 9,
              'orderby' => 'date',
              'order'=> 'asc',
              'paged'=>$paged

            ));
            if( $query->have_posts() ):
            ?>  
            <ul class="reset-list">
              <?php 
                while($query->have_posts()): $query->the_post(); 
                global $post;
                $imgID = get_post_thumbnail_id(get_the_ID());
                $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): '';
              ?>  
              <li>
                <div class="pp-grd-item">
                  <div class="pp-grd-img">
                    <a href="#" class="overlay-link"></a>
                    <i>
                      <?php echo $imgtag; ?>
                    </i>
                  </div>
                  <div class="pp-grd-cont mHc">
                    <div class="pp-grd-cont-cntlr mHc1">
                      <h2 class="fl-h5 pp-grd-cont-hdng mHc2"><a href="#"><?php the_title(); ?></a> </h2>
                      <?php the_excerpt(); ?>
                      <div class="pp-grd-abs-btn  text-btn-hover"><a href="#" class="fl-btn"><?php _e('Meer Info', 'waste2func'); ?></a></div>
                    </div>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php else: ?>
            <?php $no_results = get_field('no_results', 'options'); ?>
            <div class="notfound"><?php echo !empty($no_results)? $no_results: __('Geen resultaat', 'waste2func'); ?></div>
          <?php endif; wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
  </div>    
</section>

<?php if( $query->max_num_pages > 1 ): ?>
<section class="pagination-sec hide-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagination-sec-inr">
          <div class="fl-pagination-ctlr">
            <?php
              $big = 999999999; // need an unlikely integer
              $query->query_vars['paged'] > 1 ? $current = $query->query_vars['paged'] : $current = 1;

              echo paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'type'      => 'list',
                'prev_next' => true,
                'prev_text' => '<i><svg class="pagi-lft-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500"><use xlink:href="#pagi-lft-arrow-svg"></use> </svg></i>',
                'next_text' => '<i><svg class="pagi-rgt-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500"><use xlink:href="#pagi-rgt-arrow-svg"></use> </svg></i>',
                'format'    => '?paged=%#%',
                'current'   => $current,
                'total'     => $query->max_num_pages
              ) );
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>