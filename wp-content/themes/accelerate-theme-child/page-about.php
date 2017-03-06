<?php
/**
 * The template for displaying the About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="home-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

	<?php while ( have_posts() ) : the_post();
			$service_1 = get_field('service_1');
			$service_2 = get_field('service_2');
			$service_3 = get_field('service_3');
			$service_4 = get_field('service_4');
			$summary_1 = get_field('summary_1');
			$summary_2 = get_field('summary_2');
			$summary_3 = get_field('summary_3');
			$summary_4 = get_field('summary_4');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$image_4 = get_field('image_4');
			$size = get_field('medium');
	?>

<div class="about-content">
	<article class="service-1">
		<aside class="service-sidebar">
				<h2><?php echo $service_1; ?></h2>
				<h6><?php echo $summary_1; ?></h6>
		</aside>

		<div class="service-image">
				<?php if($image_1) {
					echo wp_get_attachment_image( $image_1, $size );
				} ?>
		</div>
	</article>

	<article class="service-2">
		<aside class="service-sidebar">
				<h2><?php echo $service_2; ?></h2>
				<h6><?php echo $summary_2; ?></h6>
		</aside>

		<div class="service-image">
				<?php if($image_2) {
					echo wp_get_attachment_image( $image_2, $size );
				} ?>
		</div>
	</article>

	<article class="service-3">
		<aside class="service-sidebar">
				<h2><?php echo $service_3; ?></h2>
				<h6><?php echo $summary_3; ?></h6>
		</aside>

		<div class="service-image">
				<?php if($image_3) {
					echo wp_get_attachment_image( $image_3, $size );
				} ?>
		</div>
	</article>

	<article class="service-4">
		<aside class="service-sidebar">
				<h2><?php echo $service_4; ?></h2>
				<h6><?php echo $summary_4; ?></h6>
		</aside>

		<div class="service-image">
				<?php if($image_4) {
					echo wp_get_attachment_image( $image_4, $size );
				} ?>
		</div>
	</article>
	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
