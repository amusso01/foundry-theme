<?php
/**
 * Template Name: Service-pages
 * 
 * Template Post Type: page
 *
 * This template shows the three services of the website
 * 
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main class="service-inside">

	<div class="container-fluid" id="service-inner">
		<div class="row jumbotrone">
			<img class="img-fluid" src="<?php the_field('jumbo_image') ?>" alt="color banner">
			
			
		</div>
		
	</div><!-- Container fluid end #service-inner-->

	<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php if (is_page('build')){
			get_template_part( 'loop-templates/content', 'service-build' ); 
		}elseif(is_page('create')){
			get_template_part( 'loop-templates/content', 'service-create' ); 
		}elseif(is_page('promote')){
			get_template_part( 'loop-templates/content', 'service-promote' ); 
		}
		?>
		
		<?php endwhile; // end of the loop. ?>
	</div>
</main><!-- main .service-inside -->
	
	
	
	<?php get_footer(); ?>
	