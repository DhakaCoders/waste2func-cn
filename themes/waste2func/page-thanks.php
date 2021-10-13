<?php 
/*
  Template Name: Thanks
*/
get_header(); 
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : '<strong>'.__('Bedankt', 'waste2func').'</strong>'.__('voor je<br> bericht!', 'waste2func');
?>
<section class="page-bedankt-cntent-cntlr">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="page-bedankt-box">
                <span class="page-bedankt-box-border"></span>
                <div class="page-bedankt-box-bg">
                    <div class="page-bedankt-box-bg-inr">
                        <h1 class="fl-h1 page-bedankt-box-title"><?php echo $page_title; ?></h1>
                        <?php if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] ); ?>
                        <div class="page-bedankt-box-btn">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="fl-green-btn"><?php _e( 'Home', 'waste2func' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>