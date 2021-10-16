<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#36D56B">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
  <svg style="display: none;">
    <!-- <svg class="id-name" width="16" height="16" viewBox="0 0 16 16" fill="#FF5C26">
      <use xlink:href="#id-name"></use> </svg> -->
      <!-- start of Noyon -->
      <symbol id="top-left-angle-icon" width="263" height="323" viewBox="0 0 263 323" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 322.5V173L0.5 0H263L0 322.5Z"/>
      </symbol>
      <symbol id="ftr-right-angle-icon" width="128" height="323" viewBox="0 0 128 323" xmlns="http://www.w3.org/2000/svg">
        <path d="M128 0V149.5L127.5 322.5H0L128 0Z" />
      </symbol>
    <!-- start of Kashob -->
    <!-- start of Shariful -->
  </svg>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $topbartekst = get_field('topbartekst', 'options');
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?>  
<div class="page-body-cntlr">
  <?php if( is_front_page() && $topbartekst ): ?>
  <section class="home-messege">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="home-messege-inr">
            <?php if( !empty($topbartekst) ) echo wpautop( $topbartekst  ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- start of home header -->
  <div class="bdoverlay"></div>
  <div class="hm-hdr-bnr-cntlr">
    <span class="left-angle">
      <i>
        <svg class="top-left-angle-icon" width="263" height="323" viewBox="0 0 263 323" fill="#FFF2D4">
          <use xlink:href="#top-left-angle-icon"></use> 
        </svg>
      </i>
    </span>
    <div class="right-sqr hide-sm"></div>
    <div class="right-angle"></div>
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header-inr clearfix">
              <div class="hdr-lft">
              <?php if( !empty($logo_tag) ): ?>
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
              </div>
              <div class="hdr-rgt">
                <div class="hdr-menu hide-sm">
                  <nav class="main-nav">
                    <?php 
                      $menuOptions = array( 
                          'theme_location' => 'cbv_main_menu', 
                          'menu_class' => 'reset-list clearfix',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $menuOptions ); 
                    ?>
                  </nav>
                </div>
                <div class="hdr-lang-cntlr hide-sm">
                  <div class="hdr-lang">
                    <ul class="reset-list">
                      <li class="active"><a href="#">NL</a></li>
                      <li><a href="#">EN</a></li>
                    </ul>
                  </div>
                </div>
                <div class="hamburger-cntlr show-sm">
                  <div class="hamburger-icon-wrap">
                    <div class="hamburger-icon">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="xs-mobile-menu">
      <div class="xs-mbl-hdr">
        <span class="left-angle">
          <i>
            <svg class="top-left-angle-icon" width="263" height="323" viewBox="0 0 263 323" fill="#FFF2D4">
              <use xlink:href="#top-left-angle-icon"></use> 
            </svg>
          </i>
        </span>
        <div class="hdr-lft">
          <?php if( !empty($logo_tag) ): ?>
          <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php echo $logo_tag; ?>
            </a>
          </div>
          <?php endif; ?>
        </div>
        <div class="hdr-rgt">
          <div class="hamburger-cntlr show-sm">
            <div class="hamburger-icon-wrap">
              <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="xs-menu">
        <nav class="main-nav">
          <ul class="clearfix reset-list">
          <?php 
            $mmenuOptions = array( 
                'theme_location' => 'cbv_mobile_menu', 
                'menu_class' => 'reset-list clearfix',
                'container' => '',
                'container_class' => ''
              );
            wp_nav_menu( $mmenuOptions ); 
          ?>
        </nav>
      </div>
      <div class="xs-mbl-btm">
        <div class="hdr-lang-cntlr">
          <div class="hdr-lang">
            <ul class="reset-list">
              <li class="active"><a href="#">NL</a></li>
              <li><a href="#">EN</a></li>
            </ul>
          </div>
        </div>
        <div class="xs-mbl-btn">
          <a class="fl-green-btn" href="#">Contact</a>
        </div>
      </div>
    </div>

    <div class="header-sticky sticky-header-cntlr">
      <div class="header-sticky-inr">
    <div class="page-left-sqr-fixed hide-sm"></div>
    <div class="page-left-angle-fixed hide-sm"></div>

    <div class="page-right-sqr-fixed hide-sm"></div>
    <div class="page-right-angle-fixed hide-sm"></div>
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header-inr clearfix">
              <div class="hdr-lft">
              <?php if( !empty($logo_tag) ): ?>
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
              </div>
              <div class="hdr-rgt">
                <div class="hdr-menu hide-sm">
                  <nav class="main-nav">
                    <?php 
                      $menuOptions = array( 
                          'theme_location' => 'cbv_main_menu', 
                          'menu_class' => 'reset-list clearfix',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $menuOptions ); 
                    ?>
                  </nav>
                </div>
                <div class="hdr-lang-cntlr hide-sm">
                  <div class="hdr-lang">
                    <ul class="reset-list">
                      <li class="active"><a href="#">NL</a></li>
                      <li><a href="#">EN</a></li>
                    </ul>
                  </div>
                </div>
                <div class="hamburger-cntlr show-sm">
                  <div class="hamburger-icon-wrap">
                    <div class="hamburger-icon">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
      </div>
    </div>
<?php  
  $hbanner = get_field('home_banner', HOMEID);
  if($hbanner):
    $banner = !empty($hbanner['afbeelding'])? cbv_get_image_src( $hbanner['afbeelding'] ): '';
?>
<section class="hm-banner<?php echo !empty($hbanner['upload_video'])?' has-vdo':''; ?>">
  <?php if( !empty($hbanner['upload_video']) ): ?>
  <div class="bnr-vdo">
    <video id="bt-vdo" autoplay="" muted="">
      <source src="<?php echo $hbanner['upload_video']; ?>" type="video/mp4">
    </video>
  </div> 
  <?php endif; ?>
  <div class="hm-banner-bg-black"></div>
  <div class="hm-bnr-bg inline-bg" style="background-image: url('<?php echo $banner; ?>');"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-bnr-cntlr">
          <div class="hm-bnr-desc-cntlr">
            <?php if( !empty($hbanner['titel']) ) printf( '<h1 class="fl-h1 hm-bnr-title">%s</h1>', $hbanner['titel'] ); ?>
            <div class="hm-bnr-desc">
              <?php if( !empty($hbanner['beschrijving']) ) echo wpautop($hbanner['beschrijving']); ?>
            </div>
            <?php 
              $hbannerknop = $hbanner['knop'];
              if( is_array( $hbannerknop ) &&  !empty( $hbannerknop['url'] ) ){
                printf('<div class="hm-bnr-btn"><a class="fl-green-btn" href="%s" target="%s">%s</a></div>', $hbannerknop['url'], $hbannerknop['target'], $hbannerknop['title']); 
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
</div>
<!-- end of home header -->