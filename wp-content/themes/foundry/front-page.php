<?php
/**
 * The template for displaying Front-page AKA homepage of the website.
 *
 * This is the template that displays the HOME of the website by default.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<section id="full-screen-video">

	<header class="jumbo-video">
		<div class="container-video">
			<div id="video_overlays"></div>
			<video class="lozad" playsinline="playsinline" autoplay="autoplay" poster="<?php echo site_url('/video/foundry2016.jpg');?>" loop="loop" muted="muted">
				<source type="video/webm" dat-src="<?php echo site_url('/video/foundry2016.webm');?>">
				<source type="video/mp4" data-src="<?php echo site_url('/video/foundry2016.mp4');?>">
				<!--fallback image -->
			</video>
			<!-- <img class="mobile-banner lozad" data-src="<?php echo site_url('/video/foundry2016.jpg');?>" alt="mobile banner image" > -->
		</div>
		<div class="container video-text">
			
			<div class="video-text-content">
				<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content() ?>
				<?php endwhile; // end of the loop. ?>
				<a href="<?php echo site_url( '/work/');?>" class="btn work-btn">VIEW WORK</a>
				<a href="<?php echo site_url( '/service/');?>" class="btn">VIEW SERVICES</a>
			</div>
			
		</div>
	</header>

</section>

<div class="wrapper" id="home-wrapper">

	<main class="site-main" id="main">

		<?php get_template_part( 'loop-templates/content', 'home' ); ?>

	</main><!-- #main -->


</div><!-- Wrapper end #home-wrapper -->

<?php get_footer(); ?>
