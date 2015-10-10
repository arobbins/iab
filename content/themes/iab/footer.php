
			<footer class="footer" role="contentinfo">
				<div id="inner-footer" class="wrap clearfix">
					<!-- <nav role="navigation">
    					<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
	                </nav> -->

					<p class="attribution">&copy; ALL DESIGN AND CONTENT ROBERT CRAWFORD McGRAW <?php echo date('Y'); ?></p>

					<nav class="social clearfix">
						<ul class="clearfix">
					       <!--Facebook -->
					       <?php $fac_user_name="#" ?><?php if (get_settings('pov_facebook_user_name')) { $fac_user_name = get_settings('pov_facebook_user_name') ; } ?>
					       <li class="nobullet">
					       <i class="icon-facebook-sign"></i>
					       <a href="https://www.facebook.com/pages/Isolate-Bloom/1592846431001376"> Facebook</a>
					       </li>

					       <!--Twitter -->
					       <?php $twit_user_name="#" ?><?php if (get_settings('pov_twitter_user_name')) { $twit_user_name = get_settings('pov_twitter_user_name') ; } ?>
					       <li class="nobullet">
					       <i class="icon-twitter-sign"></i>
					       <a href="https://twitter.com/isolateandbloom"> Twitter</a>
					       </li>

					       <!--LinkedIn -->
					       <?php $fac_user_name="#" ?><?php if (get_settings('pov_facebook_user_name')) { $fac_user_name = get_settings('pov_facebook_user_name') ; } ?>
					       <li class="nobullet">
					       <i class="icon-linkedin-sign"></i>
					       <a href="http://www.linkedin.com/pub/robert-mcgraw/62/60a/321?_mSplash=1"> Linkedin</a>
					       </li>

							 <!-- Instagram -->
					       <li class="nobullet">
					       	<i class="icon-instagram"></i>
					       		<a href="https://instagram.com/isolate_and_bloom"> Instagram</a>
					       </li>
					  	</ul>
					</nav>
				</div> <!-- end #inner-footer -->
			</footer> <!-- end footer -->
		</div> <!-- end #container -->
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>
</html> <!-- end page. what a ride! -->
