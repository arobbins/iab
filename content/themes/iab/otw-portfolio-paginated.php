<?php

/* Template Name: Portfolio Paginated */

get_header();

otw_pfl_scripts_styles(); /* include the necessary srctips and styles */
?>

<?php $style_width = '';
  if( get_option( 'otw_pfl_content_width' ) ) {
      $style_width = 'style="width:'.get_option('otw_pfl_content_width').'px;"';
  }
?>


<div id="content">
    <div id="inner-content" class="wrap clearfix">
        <div id="main" class="col940 first clearfix" role="main">

          <section class="post-content clearfix" itemprop="articleBody">

        <div class="otw-row otw-sc-portfolio" <?php echo $style_width; ?>>
              <div class="otw-twentyfour otw-columns">

                <?php get_template_part('portfolio-categories'); ?>

                <?php get_template_part('portfolio-images'); ?>

                <ul class="otw-portfolio block-grid three-up mobile">
                <?php if (is_page()) { $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('post_type=otw-portfolio&paged='.$paged); } ?>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <li data-type="<?php foreach(get_the_terms($post->ID, 'otw-portfolio-category') as $term) echo $term->slug.' ' ?>" data-id="id-<?php echo($post->post_name) ?>">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('otw-portfolio-item'); ?>>
                          	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="otw-portfolio-item-link">
                              		<?php if ( has_post_thumbnail()) { ?>
                              		    <?php the_post_thumbnail('otw-portfolio-large'); ?>
                              		<?php } else { ?>
                                          <div style="background:url(<?php echo plugins_url( '/otw-portfolio-light/images/pattern-1.png' ) ?>);width:<?php echo get_option('otw_pfl_thumb_size_w', '303'); ?>px;height:<?php echo get_option('otw_pfl_thumb_size_h', '210'); ?>px" title="<?php _e( 'No Image', 'otw_pfl' ); ?>"></div>
                                      <?php } ?>
                              <span class="title-related"><?php the_title(); ?></span>
                            </a>
                        </article>
                    </li>

                <?php endwhile; ?>
                </ul>

<?php else: ?>



    <article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="title-inset"><?php _e( 'Nothing Found', 'otw_pfl' ); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'otw_pfl' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; ?>

    <?php otw_pagination_pfl(); ?>

            </div>
          </div>


          </section> <!-- end article section -->

        </div> <!-- end #main -->
    </div> <!-- end #inner-content -->
  </div> <!-- end #content -->



<?php get_footer(); ?>
