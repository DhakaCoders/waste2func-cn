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

  <link rel="stylesheet" href="<?php echo THEME_URI; ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/font-awesome/font-awesome.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/flatpickr/flatpickr.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/fonts/custom-fonts.css">

  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/responsive.css">

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

</head>
<body <?php body_class(); ?>>
  <div class="page-body-cntlr">
    <section class="home-messege">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="home-messege-inr">
            <p>Wij zijn gesloten van 08/06/2021 tot en met 22/06/2021</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    <div class="bdoverlay"></div>

    <div class="hm-hdr-bnr-cntlr">
      <span class="left-angle">
        <i>
          <svg class="top-left-angle-icon" width="263" height="323" viewBox="0 0 263 323" fill="#FFF2D4">
            <use xlink:href="#top-left-angle-icon"></use> 
          </svg>
        </i>
      </span>
      <!--  -->
      <div class="right-sqr hide-sm"></div>
      <div class="right-angle">

      </div>
      <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="header-inr clearfix">
                <div class="hdr-lft">
                  <div class="logo">
                    <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/logo.svg"></a>
                  </div>
                </div>
                <div class="hdr-rgt">
                  <div class="hdr-menu hide-sm">
                    <nav class="main-nav">
                      <ul class="clearfix reset-list">
                        <li class="current-menu-item"><a href="#">Projecten</a></li>
                        <li class="menu-item-has-children">
                          <a href="#">Nieuws</a>
                          <ul class="sub-menu">
                            <li><a href="#">submenu 1</a></li>
                            <li><a href="#">submenu 2</a></li>
                            <li><a href="#">submenu 3</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Registratie App</a></li>
                        <li class="hdr-menu-btn"><a href="#">Contact</a></li>
                      </ul>
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
      <section class="hm-banner has-vdo">
  <div class="bnr-vdo">
    <video id="bt-vdo" autoplay="" muted="">
      <source src="<?php echo THEME_URI; ?>/assets/images/videos/placeholder-video-2.mp4" type="video/mp4">
      </video>
    </div> 

    <div class="hm-banner-bg-black"></div>
    <div class="hm-bnr-bg inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/hm-banner-bg.jpg');"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-bnr-cntlr">
            <div class="hm-bnr-desc-cntlr">
              <h1 class="fl-h1 hm-bnr-title">Nibh id praesent aliquet sit est.</h1>
              <div class="hm-bnr-desc">
                <p>Proin nunc magna purus, eu neque amet quam. Ac nam tristique ipsum proin dui nunc, lectus quis sed. Sed urna, est tellus felis.</p>
                <p>Lacus bibendum urna, velit justo pellentesque consequat pellentesque faucibus hac. Sit enim vitae nullam eget interdum eget. Malesuada erat consectetur ultrices consequat condimentum id augue.</p>
              </div>
              <div class="hm-bnr-btn">
                <a class="fl-green-btn" href="#">Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

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
    <div class="logo">
      <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/logo.svg"></a>
    </div>
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
      <li class="current-menu-item"><a href="#">Home</a></li>
      <li class="menu-item-has-children">
        <a href="#">Project</a>
        <ul class="sub-menu">
          <li><a href="#">submenu 1</a></li>
          <li><a href="#">submenu 2</a></li>
          <li><a href="#">submenu 3</a></li>
        </ul>
      </li>
      <li><a href="#">News</a></li>
      <li><a href="#">Registratie App</a></li>
    </ul>
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