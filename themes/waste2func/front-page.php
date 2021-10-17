<?php get_header('home'); ?>
<?php
$showhideintro = get_field('showhideintro', HOMEID);
if($showhideintro): 
$intro = get_field('intro_text', HOMEID);
if($intro):
  $introknop = $intro['knop'];
  $start_urltag = $end_urltag = '';
  if( is_array( $introknop ) &&  !empty( $introknop['url'] ) ){
    $start_urltag = '<a href="'.$introknop['url'].'">';
    $end_urltag = '</a>';
  }
?>
<section class="wf-bio-plant-sec">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="wf-bio-plant-sec-inr">
        <div class="wf-bio-plant-lft">
          <div class="wf-bio-plant-lft-img-ctlr">
            <div class="wf-bio-plant-lft-img">
              <?php 
                echo $start_urltag;
                if( !empty($intro['afbeelding']) ) echo cbv_get_image_tag($intro['afbeelding']); 
                echo $end_urltag;
              ?>
            </div>
          </div>
        </div>
        <div class="wf-bio-plant-rgt">
          <div class="wf-bio-plant-rgt-des text-btn-hover">
            <?php 
            if( !empty($intro['titel']) ) printf( '<h2 class="wf-bio-plant-des-title fl-h2">%s%s%s</h2>', $intro['titel'], $start_urltag, $end_urltag);
            if( !empty($intro['beschrijving']) ) echo wpautop($intro['beschrijving']);
            
            if( is_array( $introknop ) &&  !empty( $introknop['url'] ) ){
              printf('<a class="fl-btn" href="%s" target="%s">%s</a>', $introknop['url'], $introknop['target'], $introknop['title']); 
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_nieuws = get_field('showhide_nieuws', HOMEID);
if($showhide_nieuws): 
$newssec = get_field('homenieuws', HOMEID);
$newsID = $newssec['select_nieuws'];

if( empty($newsID) ){
  $newsobj = get_posts( array(
    'post_type' => 'post',
    'posts_per_page'=> 1,
    'orderby' => 'date',
    'order'=> 'desc'

  ) );
}else{
  $newsobj = get_posts( array(
    'post_type' => 'post',
    'posts_per_page'=> 1,
    'post_in' => array($newsID),
    'orderby' => 'date',
    'order'=> 'desc'

  ) );
}
if($newsobj):
  $newsID = get_option( 'page_for_posts' );
?>
<section class="wf-recente-update-sec">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="wf-recente-update-sec-inr">
        <div class="wf-recente-update-hdr-ctlr">
          <div class="wf-recente-update-hdr-lft">
          <?php if( !empty($newssec['titel']) ) printf( '<h2 class="wf-recente-hdr-title fl-h2">%s</h2>', $newssec['titel']); ?>
          </div>
          <div class="wf-recente-update-hdr-rgt">
            <div class="wf-recente-update-btn hide-sm">
              <a href="<?php echo esc_url(home_url($newsID)); ?>" class="fl-coffee-btn"><?php _e('Bekijk al het nieuws', 'waste2func'); ?></a>
            </div>
          </div>
        </div>
        <div class="wf-nieuws-grds">
          <ul class="reset-list">
            <?php
              foreach( $newsobj as $news ) {
              global $post;
              $imgID = get_post_thumbnail_id($news->ID);
              $thumb = !empty($imgID)? cbv_get_image_src($imgID): blog_placeholder();
              $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): blog_placeholder('tag');
            ?>
            <li>
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
            </li>
            <?php } ?>
          </ul>
          <div class="wf-recente-update-btn show-sm">
              <a href="<?php echo esc_url(home_url($newsID)); ?>" class="fl-coffee-btn"><?php _e('Bekijk al het nieuws', 'waste2func'); ?></a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php endif; ?>
<?php endif; ?>
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
<?php
$showhide_partner = get_field('showhide_partner', HOMEID);
if($showhide_partner): 
$partner = get_field('partnersec', HOMEID);
$partobj = $partner['select_partners'];
if( empty($partobj) ){
  $partobj = get_posts( array(
    'post_type' => 'partner',
    'posts_per_page'=> -1,
    'orderby' => 'date',
    'order'=> 'desc'

  ) ); 
}
?>
<section class="wf-client-sec">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="wf-client-sec-inr">
        <div class="wf-sec-entry-hdr">
          <?php 
            if( !empty($partner['titel']) ) printf( '<h2 class="wf-sec-entry-hdr-title fl-h2">%s</h2>', $partner['titel']);
            if( !empty($partner['beschrijving']) ) echo wpautop($partner['beschrijving']);
          ?>
        </div>
        <?php if($partobj): ?>
        <div class="wf-client-grds">
          <ul class="reset-list">
            <?php 
              foreach( $partobj as $part ): 
              $partID = get_post_thumbnail_id($part->ID);
              $part_tag = !empty($partID)? cbv_get_image_tag($partID): '';
              $prtknop = get_field('knop', $partID);
            ?>
            <li>
              <div class="wf-client-grd-item">
                <?php 
                if( !empty($prtknop) ) printf('<a href="%s" target="_blank">', $prtknop);
                echo $part_tag; 
                if( !empty($prtknop) ) printf('</a>');
                ?>
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
</section>
<?php endif; ?>
<?php get_footer(); ?>