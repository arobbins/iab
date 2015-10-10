<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="col940 first clearfix" role="main">

						<h1 class="archive-title"><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

									<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>

								</header> <!-- end article header -->

								<section class="post-content">
								    <?php the_excerpt('<span class="read-more">Read more &raquo;</span>'); ?>

								</section> <!-- end article section -->
							</article> <!-- end article -->

						<?php endwhile; ?>

						    <?php if (function_exists('bones_page_navi')) { // if expirimental feature is active ?>

						        <?php bones_page_navi(); // use the page navi function ?>

					        <?php } else { // if it is disabled, display regular wp prev & next links ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							        </ul>
						        </nav>
					        <?php } ?>

					    <?php else : ?>

    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Sorry, No Results.", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="post-content">
    					    		<p><?php _e("Try your search again.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the search.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>

					    <?php endif; ?>

				    </div> <!-- end #main -->

    			    <?php get_sidebar(); // sidebar 1 ?>

    			</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>