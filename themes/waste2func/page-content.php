<?php 
/*
  Template Name: Contact
*/
get_header(); 
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title($thisID);
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="contact-form-sec-wrp">
  <div class="cnt-boder hide-sm"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-block clearfix">
          <div class="contact-form-lft">
            <div class="xs-cnt-bdr"></div>
            <div class="contact-forn-con-cntlr">
              <div class="contact-form-dsc-wrp">
                <div class="contact-entry-header">
                  <?php 
                    if( !empty($page_title) ) printf( '<h1 class="cnt-sec-entry-hdr-title fl-h2">%s</h1>', $page_title);
                    if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                  ?>
                </div>
              </div>
              <div class="contact-form-wrp clearfix">
                <div class="wpforms-container">
                  <?php if( !empty($intro['shortcode']) ) echo do_shortcode($intro['shortcode']); ?>
                </div>
              </div>
            </div>   
          </div>
          <?php
            $adres = get_field('adres', 'options');
            $gurl = get_field('gurl', 'options');
            $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
            $telefoon = get_field('telefoon', 'options');
            $emailadres = get_field('emailadres', 'options');
            $btw = get_field('btw', 'options');
          ?>
          <div class="contact-form-rgt">
            <div class="contact-form-info-cntlr">
              <div class="contact-form-info">
                <span class="cnt-info-bdr"></span>
                <div class="contact-info-details-cntlr">
                  <div class="cnt-info-details-inr">
                    <h2 class="contact-form-info-title fl-h5"><?php _e('Contact Info', 'waste2func')?></h2>
                    <div class="contact-details">
                      <?php 
                        if( !empty($adres) )  printf('<div class="cnt-addrs cnt-details-col"><a href="%s">%s</a></div>',$gmaplink, $adres );
                        if( !empty($emailadres) ) printf('<div class="cnt-mail cnt-details-col"><a href="tel:%s">%s</a></div>',$emailadres, $emailadres );
                        if( !empty($telefoon) ) printf('<div class="cnt-tel cnt-details-col"><a href="tel:%s">%s</a></div>',phone_preg($telefoon), $telefoon );
                        if( !empty($telefoon) ) printf('<div class="cnt-code cnt-details-col"><span>%s: %s</span></div>',__('BTW', 'waste2func'), $btw );
                      ?>
                      <div class="cnt-social cnt-details-col">
                        <a href="#">
                          <i>
                            <svg class="cnt-linkedin-icon" width="32" height="32" viewBox="0 0 32 32" fill="#4C5D5B">
                              <use xlink:href="#cnt-linkedin-icon"></use> 
                            </svg>
                          </i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>