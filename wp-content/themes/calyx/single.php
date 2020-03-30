<?php
/**
 * Post template.
 */

get_header();

if ( have_posts() )
	while ( have_posts() ) {
		the_post();
		?>

		<main id="post-<?php the_ID() ?>" <?php post_class() ?>>
			
		</main>

		<?php
	}
	
get_footer()
?>