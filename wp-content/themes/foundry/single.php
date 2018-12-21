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

?>

<div class="wrapper" id="single-wrapper">


			<?php while ( have_posts() ) : the_post(); ?>


				<?php if (get_post_type()=='works_post') {
					
					get_template_part( 'loop-templates/content', 'single-work' );
					
				}
				?>


			<?php endwhile; // end of the loop. ?>


</div><!-- Wrapper end -->

<?php get_footer(); ?>
