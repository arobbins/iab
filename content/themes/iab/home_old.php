<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="inner-header" class="wrap clearfix">
	<div class="gallery">
		<?php echo do_shortcode("[nggallery id=1]"); ?>
	</div>
	<nav role="navigation" class="clearfix">
		<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
	</nav>
	<p><strong>&copy; ROBERT CRAWFORD McGRAW</strong> <span>|</span> <em>Personal photographs revealing what I find to be gorgeous throughout each day of my existence.</em></p>
	<nav class="social">
		<ul class="clearfix">

	       <!--Facebook -->
	       <?php $fac_user_name="#" ?><?php if (get_settings('pov_facebook_user_name')) { $fac_user_name = get_settings('pov_facebook_user_name') ; } ?>
	       <li class="nobullet">
	       <i class="icon-facebook-sign"></i>
	       <a href="http://facebook.com/<?php echo $twit_user_name;?>">  Facebook</a>
	       </li>

	       <!--Twitter -->
	       <?php $twit_user_name="#" ?><?php if (get_settings('pov_twitter_user_name')) { $twit_user_name = get_settings('pov_twitter_user_name') ; } ?>
	       <li class="nobullet">
	       <i class="icon-twitter-sign"></i>
	       <a href="http://twitter.com/<?php echo $twit_user_name;  ?>">  Twitter</a>
	       </li>

	       <!--LinkedIn -->
	       <?php $fac_user_name="#" ?><?php if (get_settings('pov_facebook_user_name')) { $fac_user_name = get_settings('pov_facebook_user_name') ; } ?>
	       <li class="nobullet">
	       <i class="icon-linkedin-sign"></i>
	       <a href="http://www.linkedin.com/pub/robert-mcgraw/62/60a/321?_mSplash=1"> LinkedIn</a>
	       </li>
	  	</ul>
	</nav>
</div>

<div id="masonry" class="isotope clearfix" style="position: relative;overflow:hidden;">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" class='clearfix post'>

			<?php if ( $post->post_status == 'publish' ) {
					$attachments = get_posts( array(
						'post_type' => 'attachment',
						'posts_per_page' => -1,
						'post_parent' => $post->ID,
						'exclude'     => get_post_thumbnail_id()

					));
					if ( $attachments ) {
						foreach ( $attachments as $attachment ) {
							$class = "brick";
							$thumbimg = wp_get_attachment_link( $attachment->ID, 'full', false );
							echo '<div class="' . $class . '">' . $thumbimg . '</div>';
						}
					}
				}
			?>

		</div>

	<?php endwhile; ?>

		<?php if (function_exists('bones_page_navi')) { ?>
		    <?php bones_page_navi(); ?>
		<?php } else { ?>
		    <nav class="wp-prev-next">
		        <ul class="clearfix">
			        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
			        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
		        </ul>
		    </nav>
		<?php } ?>

	<?php endif; ?>

</div>

<?php wp_footer(); // js scripts are inserted using this function ?>