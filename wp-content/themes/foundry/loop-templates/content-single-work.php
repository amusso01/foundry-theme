<?php
/**
 * Partial template for Work post.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$thumbnail_id  = get_post_thumbnail_id($works->ID);
$thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
$image = wp_get_attachment_image_src( $thumbnail_id,'full' ); 
?>

	<main <?php post_class(); ?> id="work-main post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="parent-title">', '</h1>' ); ?>

		<div class="line-gradient"></div>

		<div class="work-single-intro">

			<?php the_content(); ?>

		</div><!-- .work-single-intro -->
		<div class="row no-gutters">
			<div class="col-6 ">
				<div class="box-gray">
					<?php the_field('the_brand');?>
				</div>
			</div>
			<div class="col-6">
				<div class="box-black">
				<?php $svgImg = get_field('brand_logo', $term, 'option'); ?>
				<?php echo file_get_contents( $svgImg ); ?>
				</div>
			</div>
		</div>

	</header><!-- .entry-header -->
	
	<footer class="entry-footer">
	
	
	</footer><!-- .entry-footer -->
		
	</main><!-- main#work-main -->



	

	



