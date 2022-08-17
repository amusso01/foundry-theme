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
<script src="path/to/jquery.fitvids.js"></script>
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#thing-with-videos").fitVids();
  });
</script>

<section id="full-screen-video">

	<!-- <div id="loading-animation"  style="min-height: 100%!important; height: 100%!important;">
		<div id="loader">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="lading"></div>
		</div>						
	</div> -->

	<header class="jumbo-video" style="">
		<div class="container-video">
			<div id="video_overlays"></div>
			<!-- <div id="iframe" style="padding:56.25% 0 0 0;position:relative;">
				<iframe src="https://player.vimeo.com/video/424760744?amp;loop=1&amp;muted=1&amp;autoplay=1&amp;title=0&byline=0&portrait=0&sidedock=0"  style="position:absolute;top:0;left:0;width:100%;height:100%;" allow="autoplay; webkitallowfullscreen mozallowfullscreen fullscreen" allowfullscreen="" frameborder="0">
				</iframe>
				
			</div>
			<script src="https://player.vimeo.com/api/player.js"></script> -->
<!-- 
			<div id="iframe" style="padding:56.25% 0 0 0;position:relative; top: 87px;">
				<iframe src="https://player.vimeo.com/video/571712192?amp;loop=1&quality=540p&amp;muted=1&amp;autoplay=1&amp;title=0&byline=0&portrait=0&sidedock=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
			</div> -->

			<video muted="" id="iframe"  autoplay="" playsinline="" loop="" style=" width:100%;
			 margin: auto;"><source src="https://www.fdry.com/video/showreel.mp4" type="video/mp4"></video>
		
			<img class="mobile-banner lozad" data-src="<?php echo site_url('/video/mobile-still.jpg');?>" alt="Showcase of Projects" >
		</div>
		<!-- <div class="container video-text" style="position:static;">
			
			<div data-aos="fade-up"  data-aos-easing="ease-out-cubic"  data-aos-duration="4000" class="video-text-content">
				<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content() ?>
				<?php endwhile; // end of the loop. ?>
			</div>
			
		</div> -->
	</header>



</section>







<div class="wrapper" id="home-wrapper">

	<main class="site-main" id="main">

		<?php get_template_part( 'loop-templates/content', 'home' ); ?>

	</main><!-- #main -->


</div><!-- Wrapper end #home-wrapper -->

<?php get_footer(); ?>