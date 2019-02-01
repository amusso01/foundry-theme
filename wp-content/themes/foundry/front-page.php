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
		<div class="heigh-solving">
			<div id="video_overlays"></div>
			<video playsinline="playsinline" autoplay="autoplay" poster="<?php echo site_url('/video/poster.png');?>" loop="loop" muted="muted">
				<source type="video/webm" src="<?php echo site_url('/video/foundry2016.webm');?>">
				<source type="video/mp4" src="<?php echo site_url('/video/foundry2016.mp4');?>">
				<!--fallback image -->
				<img alt="video foundry" src="<?php echo site_url('/video/2200x1460.jpg');?>" alt="fallback image" title="Your browser does not support the <video> tag" >
			</video>
		</div>
		<img class="mobile-banner" src="<?php echo site_url('/video/780x1080.jpg');?>" alt="mobile banner image" >
		<div class="container h-100">
			<div class="d-flex h-100 align-items-center">
			<div class="w-100">
				<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content() ?>
				<?php endwhile; // end of the loop. ?>
				<a href="<?php echo site_url( '/work/');?>" class="btn work-btn">VIEW WORK</a>
				<a href="<?php echo site_url( '/service/');?>" class="btn">VIEW SERVICES</a>
			</div>
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
