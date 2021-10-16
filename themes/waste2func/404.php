<?php 
get_header(); 
$desc = get_field('page_404', 'options');
?>
<!-- end of page header -->
<section class="page-bedankt-cntent-cntlr page-404-cntent-cntlr">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="page-bedankt-box">
                <span class="page-bedankt-box-border"></span>
                <div class="page-bedankt-box-bg">
                    <div class="page-bedankt-box-bg-inr">
                      <?php 
                        if( !empty($desc['titel']) ) printf('<h1 class="fl-h1 page-bedankt-box-title">%s</h1>', $desc['titel']); 
                        if( !empty($desc['beschrijving']) ) echo wpautop($desc['beschrijving']); 
                      ?>
                      <div class="page-bedankt-box-btn">
                          <a href="<?php echo esc_url(home_url()); ?>" class="fl-green-btn"><?php esc_html_e( 'Home', 'waste2func'  ); ?></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>