<?php $taxo = get_object_taxonomies( 'otw-portfolio' );

	foreach ( $taxo as $tax_name ) {
	    $categories = get_categories('taxonomy='.$tax_name);
	    $i = 0; $len = count( $categories );
	    foreach ($categories as $category) {

	        if ($i == 0) { ?><ul class="portfolio-categories clearfix"><?php }
	        if ($i > 0) { $sep = ''; }
	          echo '<li class="'.$category->category_nicename.'"><a href="'.get_term_link($category->slug, 'otw-portfolio-category').'">'.$sep.$category->cat_name.'</a></li>';
	        if ($i == $len - 1) { echo '</ul>'; }
	        $i++;
	    }
	}
?>
