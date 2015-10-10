<div class="portfolio-category">
<?php
   $url = $_SERVER["REQUEST_URI"];

   $designCat = strpos($url, 'design');
   $installationCat = strpos($url, 'installation');
   $photographyCat = strpos($url, 'photography');
   $printCat = strpos($url, 'print');

   if ($designCat!==false){
		?>
			<img src="<?php echo bloginfo('template_directory'); ?>/library/images/portfolio_section_design.jpg" />
			<span class="title-inset">Design Work Section</span>
		<?php
   }
   if ($installationCat!==false){
		?>
			<img src="<?php echo bloginfo('template_directory'); ?>/library/images/portfolio_section_installation.jpg" />
			<span class="title-inset">Installation Work Section</span>
		<?php
   }
   if ($photographyCat!==false){
		?>
			<img src="<?php echo bloginfo('template_directory'); ?>/library/images/portfolio_section_photography.jpg" />
			<span class="title-inset">Photography Work Section</span>
		<?php
   }
   if ($printCat!==false){
		?>
			<img src="<?php echo bloginfo('template_directory'); ?>/library/images/portfolio_section_print.jpg" />
			<span class="title-inset">Print Work Section</span>
		<?php
   }
 ?>
</div>