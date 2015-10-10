<?php
/**
 * The Template for displaying all single Portfolio posts.
 */

get_header();

/* Include the necessary scripts and styles */
otw_pfl_scripts_styles();
otw_pfl_filter_scripts_styles();

?>

<?php
	$style_width = '';
  if( get_option( 'otw_pfl_content_width' )) {
		$style_width = 'style="width:'.get_option('otw_pfl_content_width') . 'px;"';
  }
?>
  <div id="content">
    <div id="inner-content" class="wrap clearfix">
        <div id="main" class="col940 first clearfix" role="main">

          <section class="post-content clearfix" itemprop="articleBody">
					<?php get_template_part('portfolio-categories'); ?>

						<div id="featured">
  					<?php if ( has_post_thumbnail()) { ?>
      			<?php the_post_thumbnail('otw-portfolio-large'); ?>

  					<?php } else { ?>
    				<div style="background:url(<?php echo plugins_url( '/otw-portfolio-light/images/pattern-1.png' ) ?>);width:<?php echo get_option('otw_pfl_thumb_size_w', '303'); ?>px;height:<?php echo get_option('otw_pfl_thumb_size_h', '210'); ?>px" title="<?php _e( 'No Image', 'otw_pfl' ); ?>"></div>

  					<?php } ?>
					  <?php if ( get_post_meta( $post->ID, 'otw_head_title_setting_pfl', true) != 1 ) { ?>
							<h1 class="title-inset"><?php the_title(); ?></h1>
					  <?php } ?>
				</div>
				<div class="otw-row" <?php echo $style_width; ?>>

					<p class="project-description">
						<strong><?php the_field('project_size'); ?></strong>
							<?php the_field('project_description'); ?>
					</p>

					<ul class="available-stores">
						<?php if(have_rows('available')):
							while(have_rows('available')): the_row(); ?>
								<li>
									<strong><?php the_sub_field('label'); ?></strong>
				      		<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_copy'); ?></a>
								</li>
							<?php endwhile;
						endif; ?>
					</ul>

			<?php while ( have_posts() ) : the_post(); ?>

            <div class="otw-columns">

            <article id="post-<?php the_ID(); ?>" <?php post_class('otw-single-portfolio-item'); ?>>

                <?php the_content(); ?>
                  <!-- Portfolio Image Slider -->
                        <?php
                            $check_imgs = get_post_meta( $post->ID, 'custom_otw-portfolio-repeatable-image', true);
                            if( !empty( $check_imgs[0] ) ) {
                            //if(get_post_meta($post->ID, 'custom_otw-portfolio-repeatable-image', true) ){
                         ?>
                          <div class="portfolio-gallery-wrapper">
                            <ul>
                              <?php
                                $post_meta_data = get_post_custom($post->ID);
                                $custom_repeatable = unserialize($post_meta_data['custom_otw-portfolio-repeatable-image'][0]);
                                 foreach ($custom_repeatable as $custom_image) {
                                      $url = wp_get_attachment_image_src($custom_image, 'otw-porfolio-full');
                                      echo '<li><img alt="" src="'.$url[0].'"></li>';
                                 }
                              ?>
                              </ul>
                            </div>

                        <?php } ?>
                  <!-- END Portfolio Image Slider -->

      				<?php // comments_template( '', true ); ?>
              <?php if(function_exists('echo_ald_crp')) echo_ald_crp(); ?>

            </article><!-- #post -->

            </div>

			<?php endwhile; // end of the loop. ?>
						<div class="otw-six otw-columns">
					        <?php get_sidebar(); ?>
						</div>
					</div>
          </section> <!-- end article section -->
        </div> <!-- end #main -->
    </div> <!-- end #inner-content -->
  </div> <!-- end #content -->
<?php get_footer(); ?>
