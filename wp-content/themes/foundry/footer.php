<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<h1>H1 title</h1>
						<h2>H2 title</h2>
						<h3>H3 title</h3>

						<a href="#">LINK link</a>
						
						<p>TEST test paragraph </p>	

						<a href="#" class="btn btn-first">JUST LINK</a>
						<br>
						<a href="#" class="btn btn-second">JUST LINK</a>
						<br>
						<a href="#" class="see-more">DISCOVER MORE <i class="fa fa-lg fa-angle-right"></i></a>
						

						<div class="line-gradient"></div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

