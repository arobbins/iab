<?php
/* Template Name: Portfolio Filterable */
get_header();
otw_pfl_scripts_styles(); /* include the necessary srctips and styles */
otw_pfl_filter_scripts_styles();
?>

<?php $style_width = '';
  if( get_option( 'otw_pfl_content_width' ) ) {
    $style_width = 'style="width:'.get_option('otw_pfl_content_width').'px;"';
  }
?>

<div id="content">
    <div class="wrap clearfix" id="inner-content">
        <div class="col940 first clearfix" id="main">
            <section class="post-content clearfix">
                <div class="otw-row otw-sc-portfolio">
                    <div class="otw-twentyfour otw-columns">
                      <?php get_template_part('portfolio-splash'); ?>
                    </div>
                </div>
            </section>
        </div><!-- end #main -->
    </div><!-- end #inner-content -->
</div><!-- end #content -->

<?php get_footer(); ?>