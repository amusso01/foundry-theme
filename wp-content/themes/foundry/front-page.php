<?php
/**
 * The template for displaying Front-page.
 *
 * This is the template that displays the HOME of the website by default.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="home-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">


			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'home' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->


	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
