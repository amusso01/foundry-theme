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
	<div id="TopVideoContainer">
		<div class="background-dark">
			<div id="video_overlays"></div>
			<video class="StretchtoFit"  loop="" autoplay="" poster="<?php echo site_url('/video/poster2016.png');?>">
				<source type="video/mp4" src="<?php echo site_url('/video/foundry2016.mp4');?>">
				<source type="video/webm; codecs=&quot;vp8, vorbis&quot;" src="<?php echo site_url('/video/foundry2016.webm');?>">
				<!--fallback image -->
				<img src="<?php echo site_url('/video/poster2016.png');?>" alt="fallback image" title="Your browser does not support the <video> tag" >
			</video>
			<img class="img-fluid" src="<?php echo site_url('/video/poster2016.png');?>" alt="fallback image" title="Your browser does not support the <video> tag" >
		</div>
		<div class="video-text">
		<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content() ?>
		<?php endwhile; // end of the loop. ?>
		</div>

	</div>

</section>

<div class="wrapper" id="home-wrapper">

	<main class="site-main" id="main">

		<?php get_template_part( 'loop-templates/content', 'home' ); ?>

	</main><!-- #main -->


</div><!-- Wrapper end #home-wrapper -->

<?php get_footer(); ?>
