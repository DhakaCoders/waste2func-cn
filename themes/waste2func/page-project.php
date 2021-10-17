<?php
/*Template Name: Projecten*/
get_header(); 
$thisID = get_the_ID();
$title = get_field('custom_page_title', $thisID);
$page_title = !empty($title) ? $title : get_the_title($thisID);
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<div class="page-project-overview-con">
<?php  
  $pbanner = get_field('banner', $thisID);
  if($pbanner):
    $bannertag = !empty($pbanner['afbeelding'])? cbv_get_image_tag( $pbanner['afbeelding'] ): '';
?>
  <section class="project-overview-fea-img">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="project-overview-fea-img-cntlr">
            <?php echo $bannertag; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>  
<?php
$intro = get_field('intro_text', $thisID);
?>
  <section class="project-overview-des-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pod-grds">
          	<?php if($intro): ?>
            <div class="pod-lft-des">
              <div class="dfp-text-module">
              	<?php  
					       if( !empty($intro['titel']) ) printf( '<h2>%s</h2>', $intro['titel']);
		            if( !empty($intro['beschrijving']) ) echo wpautop($intro['beschrijving']);
              	?>
              </div>
              <?php if( !empty($intro['galerij']) ): ?>
              <div class="gallery gallery-columns-2 xs-po-gallery-halfslider">
              	<?php foreach( $intro['galerij'] as $galID ): ?>
                <figure class="gallery-item">
                  <div class="gallery-icon portrait">
                    <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($galID); ?>');"></div>
                    <?php echo cbv_get_image_tag($galID); ?>
                  </div>
                </figure>
            	<?php endforeach; ?>
              </div>
          	  <?php endif; ?>
          	  <?php if( !empty($intro['bottom_blok']) ): ?>
              <div class="dfp-text-module">
                <?php if( !empty($intro['bottom_blok']) ) echo wpautop($intro['bottom_blok']); ?>
              </div>
              <?php endif; ?>
            </div>
            <?php endif; ?>
      			<?php
      			$showhide_cta = get_field('showhide_cta', $thisID);
      			if($showhide_cta): 
      			$cta = get_field('cta', $thisID);
      			if($cta):
      			?>
            <div class="pod-rgt-sidebar">
              <div class="cta-module-ctlr">
                <span class="cta-module-border"></span>
                <div class="cta-module">
                  <div class="cta-module-inr">
                    <div class="cta-module-lft">
                      <?php if( !empty($cta['titel']) ) printf( '<h2 class="cta-module-title fl-h3">%s</h2>', $cta['titel']); ?>
                    </div>
                    <div class="cta-module-mid">
                      <?php if( !empty($cta['beschrijving']) ) echo wpautop($cta['beschrijving']); ?>
                    </div>
          					<?php 
          						$contknop = $cta['knop'];
          						if( is_array( $contknop ) &&  !empty( $contknop['url'] ) ){
          						  printf('<div class="cta-module-rgt"><div class="cta-module-btn"><a class="fl-green-btn" href="%s" target="%s">%s</a></div></div>', $contknop['url'], $contknop['target'], $contknop['title']); 
          						}
          					?>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>  

 <?php
$showhide_partner = get_field('showhide_partner', $thisID);
if($showhide_partner): 
$partner = get_field('partnersec', $thisID);
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
    <div class="dfp-rgt-hr-border"></div>
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
  <?php 
	$clogos = get_field('ft_clientlogos', 'options');
	if( $clogos ):
  ?>
  <div class="dfp-lft-hr-border"></div>
  <section class="supported-by-section">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="supported-by-sec-inr">
              <h3 class="fl-h3 sbs-title"><?php _e('Supported by', 'waste2func'); ?>:</h3>
              <div class="sbs-grd-cntlr">
              	<?php if( $clogos['logo_1'] ): ?>
                <div class="sbs-grd-col-lft">
                  <div class="sbs-grd-col-lft-con">
                    <?php 
                    if( !empty($clogos['knop_1']) ) printf('<a target="_blank" href="%s">', $clogos['knop_1']);
                    echo cbv_get_image_tag($clogos['logo_1']);
                    if( !empty($clogos['knop_1']) ) printf('</a>');
                    ?>
                  </div>
                </div>
                <?php endif; ?>
                <div class="sbs-grd-col-rgt">
                  <div class="sbs-grd-col-rgt-hdr">
                    <ul class="reset-list">
                     <?php if( $clogos['logo_2'] ): ?>
                      <li>
						          <?php 
		                    if( !empty($clogos['knop_2']) ) printf('<a target="_blank" href="%s">', $clogos['knop_2']);
		                    echo cbv_get_image_tag($clogos['logo_2']);
		                    if( !empty($clogos['knop_2']) ) printf('</a>');
	                    ?>
                      </li>
                      <?php 
                  		endif; 
                  		if( $clogos['logo_3'] ):
                      ?>
                      <li>
						          <?php 
		                    if( !empty($clogos['knop_3']) ) printf('<a target="_blank" href="%s">', $clogos['knop_3']);
		                    echo cbv_get_image_tag($clogos['logo_3']);
		                    if( !empty($clogos['knop_3']) ) printf('</a>');
	                    ?>
                      </li>
                      <?php endif; ?>
                    </ul>
                    <?php if( $clogos['ft_tekst'] ): ?>
                    <div class="sbs-grd-col-rgt-des">
                      <?php echo wpautop($clogos['ft_tekst']); ?>
                    </div>
                	<?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>    
  </section>
  <?php endif; ?>
</div>
<?php get_footer(); ?>