<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<?php while ( have_posts() ) : the_post(); ?>


				<?php if (get_post_type()=='works_post') {
					
					get_template_part( 'loop-templates/content', 'single-work' );
					
				}
				?>


			<?php endwhile; // end of the loop. ?>

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
