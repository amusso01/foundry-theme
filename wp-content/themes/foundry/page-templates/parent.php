<?php
/**
 * Template Name: Parent-pages
 * 
 * Template Post Type: post, page
 *
 * This template shows the all the parent pages of the site the highest in hierarchy
 * 
 *
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

				<header class="site-main" id="parent" role="main">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_title( '<h1 class="parent-title">', '</h1>' ); ?>

						 <div class="line-gradient"></div>


						<div class="parent-content">

							<?php the_content(); ?>

						</div><!-- .entry-content -->

						<?php endwhile; // end of the loop. ?>

				</header><!-- #header -->

			</div><!-- .col-md-12 -->

		</div><!-- .row -->

	</div><!-- Container end -->

						<?php if(is_page("work")){

								get_template_part( 'loop-templates/content', 'work' ); 
							
							}elseif(is_page("service")){

								get_template_part( 'loop-templates/content', 'service' ); 

							}elseif(is_page("about")){

								get_template_part( 'loop-templates/content', 'about' ); 

							}elseif(is_page("contact")){

								get_template_part( 'loop-templates/content', 'contact' ); 

							}elseif(is_page("insights")){

								get_template_part( 'loop-templates/content', 'insight' ); 

							}
						?>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
