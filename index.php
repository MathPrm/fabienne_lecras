<?php get_header() ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- The WordPress Loop -->
	<p>Output the post data. The functions for the loop work here, e.g., the_title() </p>
<?php endwhile; else : ?>
	<p>No posts.</p>
<?php endif; ?>
<?php get_footer() ?>
