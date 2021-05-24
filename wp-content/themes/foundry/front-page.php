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

	<header class="jumbo-video" style="min-height:100vh; background-color:#5472C6; display:flex;justify-content: center;
    align-items: center;">
		<!-- <div class="container-video">
			<div id="video_overlays"></div>
		
			<div id="iframe" style="padding:56.25% 0 0 0;position:relative;">
				<iframe src="https://player.vimeo.com/video/424760744?amp;loop=1&amp;muted=1&amp;autoplay=1&amp;title=0&byline=0&portrait=0&sidedock=0"  style="position:absolute;top:0;left:0;width:100%;height:100%;" allow="autoplay; webkitallowfullscreen mozallowfullscreen fullscreen" allowfullscreen="" frameborder="0">
				</iframe>
			</div>
			<script src="https://player.vimeo.com/api/player.js"></script>
			<img class="mobile-banner lozad" data-src="<?php echo site_url('/video/FD-still.jpg');?>" alt="mobile banner image" >
		</div> -->
		<div class="container video-text" style="position:static;">
			
			<div class="video-text-content">
				<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content() ?>
				<?php endwhile; // end of the loop. ?>
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
