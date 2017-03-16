<?php
/**
 * The template for displaying the Contact Us Form Page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

	get_header(); ?>
		<div id="primary" class="contact-us" class="site-content">
			<div id="content" class="contact-us" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<h2 class="contact-us"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

	<?php get_footer(); ?>
