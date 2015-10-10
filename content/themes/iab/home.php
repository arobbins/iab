<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="inner-header" class="wrap clearfix">

</div>

<div id="house">
	<?php if (have_posts()) : while (have_posts()) : the_post();
		if ( $post->post_status == 'publish' ) {
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
		endwhile;
		endif;
	?>
</div>
<nav class="page-navigation">
<?php bones_page_navi(); ?>
</nav>
<script type="text/javascript">
	var container = document.querySelector('#house');
	var msnry;
	// initialize Masonry after all images have loaded
	imagesLoaded( container, function() {
		msnry = new Masonry( container, {
			itemSelector: '.brick',
			transitionDuration: '0.6s'
		});
	});

</script>

<?php wp_footer(); // js scripts are inserted using this function ?>
