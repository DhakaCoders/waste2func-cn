<?php 
get_header(); 
$thisID = get_option( 'page_for_posts' );
$customtitle = get_field('custom_page_title', $thisID);
$post_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
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
<?php 
$terms = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false
) );
?>
<section class="page-entry-hdr-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-entry-hdr">
          <h2 class="page-entry-hdr-title fl-h2"><?php echo $post_title; ?></h2>
          <?php if( !empty($terms) && ! is_wp_error( $terms ) ): ?>
          <div class="page-entry-hdr-grds hide-sm">
            <ul class="reset-list">
              <li class="active"><a href="#"><?php _e('Alle', 'waste2func'); ?></a></li>
              <?php foreach ( $terms as $term ): ?>
              <li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="page-entry-hdr-select show-sm">
            <div class="wf-select hm-select-down-icon">
              <select class="wf-custom-select select-2-cntlr">
                <option selected><?php _e('Alle', 'waste2func'); ?></option>
                <?php foreach ( $terms as $term ): ?>
                <option value="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="nieuws-grd-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="nieuws-grd-sec-inr">
          <div class="wf-nieuws-grds">
            <?php if(  have_posts() ): ?>
            <ul class="reset-list">
              <?php 
                  while(have_posts()): the_post(); 
                  global $post;
                  $imgID = get_post_thumbnail_id(get_the_ID());
                  $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): blog_placeholder();
                  $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): blog_placeholder('tag');
              ?>
              <li>
                <div class="wf-nieuws-grd-item">
                  <div class="wf-nieuws-grd-item-lft">
                    <div class="wf-nieuws-grd-item-lft-inr">
                      <div class="wf-nieuws-grd-item-img-ctlr">
                        <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                        <div class="wf-nieuws-grd-item-img inline-bg" style="background:url(<?php echo $imgsrc; ?>)">
                        </div>
                        <?php echo $imgtag; ?>
                      </div>
                      <div class="niuews-date">
                        <span><?php echo get_the_date('d M'); ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="wf-nieuws-grd-item-rgt">
                    <div class="wf-nieuws-grd-item-des text-btn-hover">
                      <h3 class="wf-niuews-grd-item-title fl-h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php the_excerpt(); ?>
                      <a class="fl-btn" href="<?php the_permalink(); ?>"><?php _e('Lees Meer', 'waste2func'); ?></a>
                    </div>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
          <?php else: ?>
              <?php $no_results = get_field('no_results', 'options'); ?>
              <div class="notfound">
                <?php echo !empty($no_results)? $no_results: __('Geen resultaat', 'waste2func'); ?>
              </div>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
global $wp_query;
if( $wp_query->max_num_pages > 1 ): 
?>
<section class="pagination-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagination-sec-inr">
          <div class="fl-pagination-ctlr hide-sm">
            <ul class="page-numbers">
            <?php
              $big = 999999999; // need an unlikely integer
              $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

              echo paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'type'      => 'list',
                'prev_text' => __('Terug', 'waste2func').'<i><svg class="pagi-lft-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500"><use xlink:href="#pagi-lft-arrow-svg"></use> </svg></i>',
                'next_text' => __('Volgende', 'waste2func').'<i><svg class="pagi-rgt-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500"><use xlink:href="#pagi-rgt-arrow-svg"></use> </svg></i>',
                'format'    => '?paged=%#%',
                'current'   => $current,
                'total'     => $wp_query->max_num_pages
              ) );
            ?>
          </div>
          <div class="fl-pagination-ctlr show-sm">
            <?php
              $big = 999999999; // need an unlikely integer
              $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

              echo paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'type'      => 'list',
                'prev_text' => __('<i><svg class="pagi-lft-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500"><use xlink:href="#pagi-lft-arrow-svg"></use> </svg></i>'),
                'next_text' => __('<i><svg class="pagi-rgt-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500"><use xlink:href="#pagi-rgt-arrow-svg"></use> </svg></i>'),
                'format'    => '?paged=%#%',
                'current'   => $current,
                'total'     => $wp_query->max_num_pages
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