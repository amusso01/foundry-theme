<?php
/**
 * Template Name: Parent-pages
 *
 * This template shows the all the parent pages of the site the highest in hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12">

				<main class="site-main" id="main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/page', 'work' ); ?>

						<!-- todo make the if is_page loop here -->

					<?php endwhile; // end of the loop. ?>
				

				</main><!-- #main -->

			</div><!-- .col-md-12 -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
