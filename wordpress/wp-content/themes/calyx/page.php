<?php
/**
 * Default page tmeplate.
 */

get_header();

	if ( have_posts() )
		while ( have_posts() ) {
			the_post();
			?>
			
			<main id="post-<?php the_ID() ?>" <?php post_class() ?>>
			
				<header>
					<h1><?php the_title() ?></h1>
				</header>
				
				<div class="entry">
					<?php the_content() ?>
				</div>
				
			</main>
			
			<?php
		}

get_footer()
?>