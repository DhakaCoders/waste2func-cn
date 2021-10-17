<?php get_header(); ?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="innerpage-con-wrap">
  <article class="default-page-con"> 

    <?php 
      if(have_rows('inhoud')):
      while ( have_rows('inhoud') ) : the_row();  
    ?>
    <?php 
      if( get_row_layout() == 'introductietekst' ){ 
      $fctitle = get_sub_field('titel');
      $fc_tekst = get_sub_field('fc_tekst');
      $fcafbeelding = get_sub_field('fc_afbeelding');
      $affbeelding_tag = !empty($fcafbeelding)?cbv_get_image_tag($fcafbeelding):'';
    ?>
    <div class="block">
      <div class="dfp-promo-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-promo-module-des">
                  
                  <?php 
                    if( !empty($fctitle) ) printf('<strong class="dfp-promo-module-title fl-h2">%s</strong>', $fctitle); 
                    if( !empty($fc_tekst) ) echo wpautop($fc_tekst); 
                  ?>
                </div>
              </div>
              <?php if(!empty($fcafbeelding)): ?>
              <div class="dfp-plate-one-img-bx">
                <?php echo cbv_get_image_tag($fcafbeelding); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  
      }elseif( get_row_layout() == 'teksteditor' ){ 
      $fc_tekst = get_sub_field('fc_teksteditor');
    ?>
    <div class="block">
      <div class="dfp-text-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <?php if( !empty($fc_tekst) ) echo wpautop($fc_tekst); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'galerij' ){ 
      $fc_titel = get_sub_field('titel');
      $galleries = get_sub_field('fc_afbeeldingen');
      $inline_image = get_sub_field('show_inline_afbeelding');
      $lightbox = get_sub_field('lightbox');
      $kolom = get_sub_field('kolom'); 
      $hasinline_class = ($inline_image)?'has-inline-bg ':'';
      if($galleries):
    ?>
    <div class="block">
      <div class="dfp-gallery-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="<?php echo $hasinline_class; ?>gallery-wrap clearfix">
                  <?php if( !empty($fc_titel) ) printf('<h3>%s</h3>', $fc_titel); ?>
                  <div class="gallery gallery-columns-<?php echo $kolom; ?> gallerySlider">
                    <?php foreach( $galleries as $image ): ?>
                    <figure class="gallery-item">
                      <div class="gallery-icon portrait">
                        <?php 
                          if( $lightbox ){
                            echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                            echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image).');"></div>';
                            echo cbv_get_image_tag( $image);
                            echo "</a>";
                          }else{
                            echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image).');"></div>';
                            echo cbv_get_image_tag( $image);
                          }
                        ?>
                      </div>
                    </figure>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php }elseif( get_row_layout() == 'afbeelding' ){ 
    $afbeeldingen = get_sub_field('fc_afbeelding');
  ?>
    <div class="block">
      <div class="dfp-full-img-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <?php if( !empty($afbeeldingen) ) echo cbv_get_image_tag($afbeeldingen); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'cta' ){ 
      $fc_titel = get_sub_field('fc_titel');
      $fc_tekst = get_sub_field('fc_tekst');
      $fc_knop = get_sub_field('fc_knop');
    ?>
    <div class="block">
      <div class="dfp-cta-module-cntlr">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="cta-module-ctlr">
                <span class="cta-module-border"></span>
                <div class="cta-module">
                  <div class="cta-module-inr">
                    <div class="cta-module-lft">
                    <?php if( !empty($fc_titel) ) printf('<h2 class="cta-module-title fl-h2">%s</h2>', $fc_titel); ?>
                    </div>
                    <div class="cta-module-mid">
                      <?php if( !empty($fc_tekst) ) echo wpautop( $fc_tekst ); ?>
                    </div>
                    <?php 
                      if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                        printf('<div class="cta-module-rgt"><div class="cta-module-btn"><a class="fl-green-btn" href="%s" target="%s">%s</a></div></div>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'poster' ){     
    $poster = get_sub_field('fc_afbeeldingen');
    $video_url = get_sub_field('video_url');
    $postersrc = !empty($poster)? cbv_get_image_src($poster): '';
    ?> 
    <div class="block">
      <div class="dfp-fancy-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="fl-fancy-module" >
                  <div class="fl-fancy-img inline-bg" style="background-image: url(<?php echo $postersrc; ?>);"></div>
                  <?php if( $video_url ): ?>
                  <a class="overlay-link" data-fancybox href="<?php echo $video_url; ?>"></a>
                  <span class="fl-video-play-cntlr">
                    <i>
                      <svg class="play-icon-svg" width="80" height="80" viewBox="0 0 80 80" fill="#fff">
                        <use xlink:href="#play-icon-svg"></use> 
                      </svg>
                    </i>
                  </span>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php 
  }elseif( get_row_layout() == 'afbeelding_tekst' ){ 
  $fc_afbeelding = get_sub_field('fc_afbeelding');
  $imgsrc = cbv_get_image_src($fc_afbeelding);
  $imgtag = cbv_get_image_tag($fc_afbeelding);
  $fc_tekst = get_sub_field('fc_tekst');
  $positie_afbeelding = get_sub_field('positie_afbeelding');
  $imgposcls = ( $positie_afbeelding == 'right' ) ? ' fl-dft-rgtimg-lftdes' : '';
  ?>
    <div class="block">
      <div class="fl-dft-overflow-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="fl-dft-lftimg-rgtdes clearfix<?php echo $imgposcls; ?>">
                <div class="fl-dft-lftimg-rgtdes-lft">
                  <div class="inline-bg" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
                  <?php echo $imgtag; ?>
                </div>
                <div class="fl-dft-lftimg-rgtdes-rgt">
                  <?php echo wpautop($fc_tekst); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
    }elseif( get_row_layout() == 'blockquote' ){ 
    $blockquote = get_sub_field('fc_tekst');
    $fc_naam = get_sub_field('fc_naam');
    ?>
    <div class="block">
      <div class="dfp-blockqoute-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="dfp-blockqoute-ctlr">
                <span class="dfp-blockqoute-border"></span>
                <div class="dfp-blockqoute">
                  <blockquote>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/blockquote-icon.png"></i>
                    <div class="dfp-blockqoute-des">
                      <?php 
                        if( !empty( $blockquote ) ) echo wpautop($blockquote); 
                        if( !empty( $fc_naam ) ) printf('<strong>%s</strong>', $fc_naam);
                      ?>
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'partners' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $fc_tekst = get_sub_field('fc_tekst');
        $partobj = get_sub_field('selectpartners');
        if( empty($partobj) ){
            $partobj = get_posts( array(
              'post_type' => 'partners',
              'posts_per_page'=> 12,
              'orderby' => 'date',
              'order'=> 'desc',

            ) );
            
        }

    ?>
    <div class="block">
      <div class="dfp-partners-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="dfp-partners-module-ctlr">
                <div class="wf-sec-entry-hdr">
                  <?php 
                    if( !empty($fc_titel) ) printf( '<h2 class="wf-sec-entry-hdr-title fl-h2">%s</h2>', $fc_titel);
                    if( !empty($fc_tekst) ) echo wpautop($fc_tekst);
                  ?>
                </div>
                <?php if( $partobj ): ?>
                <div class="wf-client-grds">
                  <ul class="reset-list">
                    <?php 
                      foreach( $partobj as $part ): 
                      $partID = get_post_thumbnail_id($part->ID);
                      $part_tag = !empty($partID)? cbv_get_image_tag($partID): '';
                    ?>
                    <li>
                      <div class="wf-client-grd-item">
                        <a href="#" target="_blank">
                          <?php echo $part_tag; ?>
                        </a>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'nieuws' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $fc_tekst = get_sub_field('fc_tekst');
        $newsobj = get_sub_field('fc_nieuws');
        if( empty($newsobj) ){
            $newsobj = get_posts( array(
              'post_type' => 'post',
              'posts_per_page'=> 2,
              'orderby' => 'date',
              'order'=> 'desc',

            ) );  
        }
    ?>
    <div class="block">
      <div class="dfp-nieuws-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="dfp-nieuws-module-ctlr">
                <div class="wf-recente-update-hdr-ctlr">
                  <div class="wf-recente-update-hdr-lft">
                  <?php 
                    if( !empty($fc_titel) ) printf( '<h2 class="wf-recente-hdr-title fl-h3">%s</h2>', $fc_titel);
                    if( !empty($fc_tekst) ) echo wpautop($fc_tekst);
                  ?>
                  </div>
                </div>
                <?php if($newsobj): ?>
                <div class="dfp-grd-module-ctlr dfpGrdSlider">
                  <?php
                    foreach( $newsobj as $news ) {
                    global $post;
                    $imgID = get_post_thumbnail_id($news->ID);
                    $thumb = !empty($imgID)? cbv_get_image_src($imgID): blog_placeholder();
                    $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): blog_placeholder('tag');
                  ?>
                  <div class="dfp-grd-item">
                    <div class="wf-nieuws-grd-item">
                      <div class="wf-nieuws-grd-item-lft">
                        <div class="wf-nieuws-grd-item-lft-inr">
                          <div class="wf-nieuws-grd-item-img-ctlr">
                            <a href="<?php echo get_the_permalink($news->ID); ?>" class="overlay-link"></a>
                            <div class="wf-nieuws-grd-item-img inline-bg" style="background:url(<?php echo $thumb; ?>)">
                              
                            </div>
                            <?php echo $imgtag; ?>
                          </div>
                          <div class="niuews-date">
                            <span><?php echo get_the_date( 'j M', $news->ID); ?></span>
                          </div>
                        </div>
                      </div>
                      <div class="wf-nieuws-grd-item-rgt">
                        <div class="wf-nieuws-grd-item-des text-btn-hover">
                          <h3 class="wf-niuews-grd-item-title fl-h3"><a href="<?php echo get_the_permalink($news->ID); ?>"><?php echo get_the_title($news->ID); ?></a></h3>
                          <?php echo wpautop($news->post_excerpt); ?>
                          <a class="fl-btn" href="<?php echo get_the_permalink($news->ID); ?>"><?php _e('Lees Meer', 'waste2func'); ?></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'table' ){
    $fc_table = get_sub_field('fc_tafel');
    $fc_titel = !empty(get_sub_field('fc_titel'))?get_sub_field('fc_titel'):'';
    ?>
    <div class="block">
      <div class="dfp-table-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <?php  
                  cbv_table($fc_table, $fc_titel);
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php }elseif( get_row_layout() == 'fcknop' ){
      $oranje_kleur = get_sub_field('oranje_kleur');
      $groente_kleur = get_sub_field('groente_kleur');
      $alignment = get_sub_field('alignment');
      ?> 
    <div class="block">
      <div class="dfp-btn-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-btn-module-ctlr">
                  <ul class="reset-list">
                    <?php 
                      if( is_array( $groente_kleur ) &&  !empty( $groente_kleur['url'] ) ){
                        printf('<li><a class="fl-green-btn" href="%s" target="%s">%s</a></li>', $groente_kleur['url'], $groente_kleur['target'], $groente_kleur['title']); 
                      }
                      if( is_array( $oranje_kleur ) &&  !empty( $oranje_kleur['url'] ) ){
                        printf('<li><a class="fl-coffee-btn" href="%s" target="%s">%s</a></li>', $oranje_kleur['url'], $oranje_kleur['target'], $oranje_kleur['title']); 
                      }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'gap' ){
      $fc_gap = get_sub_field('fc_gap');
      $hide_mobile = get_sub_field('hide_mobile');
      $hide_class = $hide_mobile?' hide-sm':'';
    ?>
      <div class="gap-<?php echo $fc_gap; echo $hide_class; ?>"></div>
    <?php 
      }elseif( get_row_layout() == 'horizontal_line' ){ 
      $border_positie = get_sub_field('border_positie');
      echo ($border_positie == 'left')?'<div class="dfp-lft-hr-border"></div>':'<div class="dfp-rgt-hr-border"></div>';
     } 
     ?>
    <?php 
      endwhile; 
      else:
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </article>
</section>
<?php get_footer(); ?>