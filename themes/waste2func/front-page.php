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

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/font-awesome.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/fancybox3/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="assets/slick.slider/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/slick.slider/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="assets/flatpickr/flatpickr.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/fonts/custom-fonts.css">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

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


    <section class="wf-bio-plant-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="wf-bio-plant-sec-inr">
            <div class="wf-bio-plant-lft">
              <div class="wf-bio-plant-lft-img-ctlr">
                <div class="wf-bio-plant-lft-img">
                  <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/wf-bio-plant-img.jpg"></a>
                </div>
              </div>
            </div>
            <div class="wf-bio-plant-rgt">
              <div class="wf-bio-plant-rgt-des text-btn-hover">
                <h2 class="wf-bio-plant-des-title fl-h2"><a href="#">Waste2func by BIO BASE EUROPE PILOT PLANT</a></h2>
                <p>Diam sed tempor posuere blandit feugiat eu lacus augue. Tincidunt consectetur elit platea a fames pretium turpis. Ipsum, id vitae aliquam pharetra consectetur tortor pulvinar lobortis in.</p>
                <a href="#">Meer Info</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="wf-recente-update-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="wf-recente-update-sec-inr">
            <div class="wf-recente-update-hdr-ctlr">
              <div class="wf-recente-update-hdr-lft">
                <h2 class="wf-recente-hdr-title fl-h2">Recente updates</h2>
              </div>
              <div class="wf-recente-update-hdr-rgt">
                <div class="wf-recente-update-btn hide-sm">
                  <a href="#" class="fl-coffee-btn">Bekijk al het nieuws</a>
                </div>
              </div>
            </div>
            <div class="wf-nieuws-grds">
              <ul class="reset-list">
                <li>
                  <div class="wf-nieuws-grd-item">
                    <div class="wf-nieuws-grd-item-lft">
                      <div class="wf-nieuws-grd-item-lft-inr">
                        <div class="wf-nieuws-grd-item-img-ctlr">
                          <a href="#" class="overlay-link"></a>
                          <div class="wf-nieuws-grd-item-img inline-bg" style="background:url(<?php echo THEME_URI; ?>/assets/images/nieuws-img-01.jpg)">
                            
                          </div>
                          <img src="<?php echo THEME_URI; ?>/assets/images/nieuws-img-01.jpg">
                        </div>
                        <div class="niuews-date">
                          <span>14 SEP</span>
                        </div>
                      </div>
                    </div>
                    <div class="wf-nieuws-grd-item-rgt">
                      <div class="wf-nieuws-grd-item-des text-btn-hover">
                        <h3 class="wf-niuews-grd-item-title fl-h3"><a href="#">Non, nulla purus, volutpat sit pretium volutpat.</a></h3>
                        <p>Diam sed tempor posuere blandit feugiat eu lacus augue. Tincidunt consectetur elit platea a fames pretium turpis. Ipsum, id vitae aliquam pharetra consectetur tortor pulvinar lobortis in.</p>
                        <a href="#">Lees Meer</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="wf-recente-update-btn show-sm">
                  <a href="#" class="fl-coffee-btn">Bekijk al het nieuws</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
                    <h2 class="cta-module-title fl-h2">Blandit euismod felis nunc.</h2>
                  </div>
                  <div class="cta-module-mid">
                    <p>Diam sed tempor posuere blandit feugiat eu lacus augue. Tincidunt consectetur elit platea a fames pretium turpis. Ipsum, id vitae aliquam pharetra consectetur tortor pulvinar lobortis in.</p>
                  </div>
                  <div class="cta-module-rgt">
                    <div class="cta-module-btn">
                      <a href="#" class="fl-green-btn">Contact</a>
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

  <section class="wf-client-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="wf-client-sec-inr">
            <div class="wf-sec-entry-hdr">
              <h2 class="wf-sec-entry-hdr-title fl-h2">Partners</h2>
              <p>Diam sed tempor posuere blandit feugiat eu lacus augue. Tincidunt consectetur elit platea a fames pretium turpis. Ipsum, id vitae aliquam pharetra consectetur tortor pulvinar lobortis in.</p>
            </div>
            <div class="wf-client-grds">
              <ul class="reset-list">
                <li>
                  <div class="wf-client-grd-item">
                    <a href="#" target="_blank">
                      <img src="<?php echo THEME_URI; ?>/assets/images/client-img-01.png">
                    </a>
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <a href="#" target="_blank"><img src="<?php echo THEME_URI; ?>/assets/images/client-img-02.png"></a>
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-03.png">
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-04.png">
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-05.png">
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-06.png">
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-07.png">
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-08.png">
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-09.png">
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-10.png">
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-11.png">
                  </div>
                </li>
                <li>
                  <div class="wf-client-grd-item">
                    <img src="<?php echo THEME_URI; ?>/assets/images/client-img-12.png">
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



    <footer class="footer-wrp">
      <div class="ftr-top">
        <span class="ftr-right-angle">
          <i>
            <svg class="ftr-right-angle-icon" width="128" height="323" viewBox="0 0 128 323" fill="#FFF2D4">
              <use xlink:href="#ftr-right-angle-icon"></use> 
            </svg>
          </i>
        </span>
        <div class="ftr-lft-bg">
          <span class="ftr-lft-bg-angle"></span>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="ftr-top-cntlr">
                <div class="ftr-col ftr-col-01">
                  <div class="ftr-logo">
                    <a href="#">
                      <img src="<?php echo THEME_URI; ?>/assets/images/ftr-logo.svg" alt="">
                    </a>
                  </div>
                </div>
                <div class="ftr-col ftr-col-02">
                  <h6 class="fl-h6 ftr-col-title color-yellow">Navigation</h6>
                  <div class="ftr-menu">
                    <ul class="reset-list">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Project</a></li>
                      <li><a href="#">News</a></li>
                      <li><a href="#">Partners</a></li>
                      <li><a href="#">Registratie App</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                  </div>
                </div>
                <div class="ftr-col ftr-col-03">
                  <h6 class="fl-h6 ftr-col-title color-green">Partners</h6>
                  <div class="ftr-menu ftr-menu-d2">
                    <ul class="reset-list">
                      <li><a href="#">BIO BASE EUROPE PILOT PLANT </a></li>
                      <li><a href="#">INNOVATIESTEUNPUNT VOOR LANDBOUW EN PLATTELAND </a></li>
                      <li><a href="#">UNIVERSITEIT GENT</a></li>
                      <li><a href="#">ORGANIC WASTE SYSTEMS</a></li>
                      <li><a href="#">ECOVER</a></li>
                      <li><a href="#">ARCHE</a></li>
                      <li><a href="#">GROUP OP DE BEECK</a></li>
                      <li><a href="#">TRIPLE W</a></li>
                      <li><a href="#">EVONIK</a></li>
                      <li><a href="#">CRODA</a></li>
                      <li><a href="#">NNFCC</a></li>
                      <li><a href="#">CITY UNIVERSITY HONG KONG</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ftr-btm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="ftr-btm-cntlr">
                <div class="ftr-copyright">
                  <p> &copy; 2021 Waste 2 Func. All Rights Reserved.</p>
                </div>
                <div class="ftr-btm-mdl">
                  <span class="ftr-btm-mdl-after"></span>
                  <span class="ftr-btm-mdl-before"></span>
                  <div class="ftr-btm-mdl-logo">
                    <a target="_blank" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/ftr-btm-mdl-logo.png" alt=""></a>
                  </div>
                  <div class="ftr-btm-mdl-rgt">
                    <div class="ftr-btm-mdl-rgt-hdr">
                      <ul class="reset-list">
                        <li><a target="_blank" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/ftr-btm-mdl-rgt-logo-01.png" alt=""></a></li>
                        <li><a target="_blank" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/ftr-btm-mdl-rgt-logo-02.png" alt=""></a></li>
                      </ul>
                    </div>
                    <div class="ftr-btm-mdl-rgt-desc">
                      <p>This project has received funding from the Bio Based Industries Joint Undertaking under the European Union’s Horizon2020 research and innovation programme under grant agreement No 101023664</p>
                    </div>
                  </div>
                </div>
                <div class="ftr-developed-by">
                  <p>Website ontwerp <a href="#">door Conversal</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="assets/fancybox3/dist/jquery.fancybox.min.js"></script>
<script src="assets/slick.slider/slick.js"></script>
<script src="assets/swiper/swiper-bundle.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaRQsAJCZyyD6MbCg0jB_0sdLGEOxt97Y"></script>
<script src="assets/js/jquery.matchHeight-min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/select2/select2.min.js"></script>
<script src="assets/flatpickr/flatpickr.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>