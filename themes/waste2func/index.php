<?php 
get_header(); 
$thisID = get_option( 'page_for_posts' );
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
          <h2 class="page-entry-hdr-title fl-h2">Nieuws</h2>
          <div class="page-entry-hdr-grds hide-sm">
            <ul class="reset-list">
              <li class="active"><a href="#">Alle</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Category</a></li>
            </ul>
          </div>
          <div class="page-entry-hdr-select show-sm">
            <div class="wf-select hm-select-down-icon">
              <select class="wf-custom-select select-2-cntlr">
                <option selected>Alle</option>
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <option value="category3">Category 3</option>
                <option value="category4">Category 4</option>
                <option value="category5">Category 5</option>
              </select>
            </div>
          </div>
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
              <li>
                <a class="prev page-numbers" href="#">
                  Terug<i><svg class="pagi-lft-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500"><use xlink:href="#pagi-lft-arrow-svg"></use> </svg></i>
                </a>
              </li>
              <li><a class="page-numbers" href="#">1</a></li>
              <li><a class="page-numbers" href="#">2</a></li>
              <li><span class="page-numbers dots">…</span></li>
              <li><a class="page-numbers" href="#3">6</a></li>
              <li><span class="page-numbers current">7</span></li>
              <li><a class="page-numbers" href="#3">8</a></li>
              <li><a class="page-numbers" href="#3">9</a></li>
              <li><span class="page-numbers dots">…</span></li>
              <li><a class="page-numbers" href="#">20</a></li>
              <li>
                <a class="next page-numbers" href="#">Volgende<i><svg class="pagi-rgt-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500"><use xlink:href="#pagi-rgt-arrow-svg"></use> </svg></i>
                </a>
              </li>
            </ul>
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
            <ul class="page-numbers">
              <li>
                <a class="prev page-numbers" href="#">
                  <i>
                    <svg class="pagi-lft-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500">
                    <use xlink:href="#pagi-lft-arrow-svg"></use> </svg>
                  </i>
                </a>
              </li>
              <li><a class="page-numbers" href="#">1</a></li>
              <li><a class="page-numbers" href="#">2</a></li>
              <li><span class="page-numbers dots">…</span></li>
              <li><a class="page-numbers" href="#3">6</a></li>
              <li><span class="page-numbers current">7</span></li>
              <li><a class="page-numbers" href="#3">8</a></li>
              <li>
                <a class="next page-numbers" href="#">
                  <i>
                    <svg class="pagi-rgt-arrow-svg" width="10" height="7" viewBox="0 0 10 7" fill="#D29500">
                    <use xlink:href="#pagi-rgt-arrow-svg"></use> </svg>
                  </i>
                </a>
              </li>
            </ul>
            <?php
              $big = 999999999; // need an unlikely integer
              $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

              echo paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'type'      => 'list',
                'prev_text' => __('<i><svg class="pagi-left-arrow" width="18" height="30" viewBox="0 0 18 30" fill="#2DAB52"><use xlink:href="#pagi-left-arrow"></use></svg></i>'),
                'next_text' => __('<i><svg class="pagi-right-arrow" width="18" height="30" viewBox="0 0 18 30" fill="#2DAB52"><use xlink:href="#pagi-right-arrow"></use></svg></i>'),
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