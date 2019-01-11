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
<section id="full-screen-image">

	<header class="jumbotron jumbotron-fluid">
		<div id="image_overlay"></div>
		<img class="img-fluid" src="<?php echo site_url('/video/poster2016.png');?>" alt="fallback image" title="Your browser does not support the <video> tag" >
		<div class="container h-100">
			<div class="d-flex h-100 align-items-center">
				<div class="w-100">
					<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content() ?>
					<?php endwhile; // end of the loop. ?>
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
