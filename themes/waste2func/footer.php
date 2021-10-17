  <?php 
    $logoObj = get_field('ftlogo', 'options');
    if( is_array($logoObj) ){
      $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
    }else{
      $logo_tag = '';
    }

    $telefoon = get_field('telefoon', 'options');
    $email = get_field('emailadres', 'options');
    $copyright_text = get_field('copyright_text', 'options');
  ?>
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
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo $logo_tag; ?>
                  </a>
                </div>
              </div>
              <div class="ftr-col ftr-col-02">
                <h6 class="fl-h6 ftr-col-title color-yellow arrow-rotate"><?php _e( 'Navigation', 'waste2func' ); ?></h6>
                <div class="ftr-menu">
                  <?php 
                    $fmenuOptions1 = array( 
                        'theme_location' => 'cbv_fta_menu', 
                        'menu_class' => 'reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $fmenuOptions1 );
                  ?>
                </div>
              </div>
              <div class="ftr-col ftr-col-03">
                <h6 class="fl-h6 ftr-col-title color-green"><?php _e( 'Partners', 'waste2func' ); ?></h6>
                <div class="ftr-menu ftr-menu-d2">
                  <?php 
                    $fmenuOptions2 = array( 
                        'theme_location' => 'cbv_ftb_menu', 
                        'menu_class' => 'reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $fmenuOptions2 );
                  ?>
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
                <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?> 
              </div>
              <div class="ftr-btm-mdl">
                <span class="ftr-btm-mdl-after hide-sm"></span>
                <span class="ftr-btm-mdl-before hide-sm"></span>
                <?php 
                  $clogos = get_field('ft_clientlogos', 'options');
                  if( $clogos ):
                  if( $clogos['logo_1'] ): 
                ?>
                <div class="ftr-btm-mdl-logo">
                  <?php 
                    if( !empty($clogos['knop_1']) ) printf('<a target="_blank" href="%s">', $clogos['knop_1']);
                      echo cbv_get_image_tag($clogos['logo_1']);
                    if( !empty($clogos['knop_1']) ) printf('</a>');
                  ?>
                </div>
                <?php endif; ?>
                <div class="ftr-btm-mdl-rgt">
                  <div class="ftr-btm-mdl-rgt-hdr">
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
                  </div>
                  <?php if( $clogos['ft_tekst'] ): ?>
                  <div class="ftr-btm-mdl-rgt-desc">
                    <?php echo wpautop($clogos['ft_tekst']); ?>
                  </div>
                  <?php endif; ?>
                </div>
                <?php endif; ?>
              </div>
              <div class="ftr-developed-by">
                <p><?php _e( 'Website ontwerp', 'waste2func' ); ?> <a href="https://www.conversal.be/website-laten-maken/"><?php _e( 'door Conversal', 'waste2func' ); ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>