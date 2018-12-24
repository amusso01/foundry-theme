<?php
/**
 * Partial template for post/insight page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php 
	$insight = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-6)); ?>

<section <?php post_class('container'); ?> id="post-<?php the_ID(); ?>">
	<div class="row grid-insight">

		<?php
		if ($insight-> have_posts() ) {
			while ($insight-> have_posts() ) {
				$insight->the_post(); 

				$cat = get_the_category(); // array of object of WP_Term
				$postCat = $cat[0]; // object WP_Term for the current post

				$thumbnail_id  = get_post_thumbnail_id($insight->ID);
				$thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
				$image = wp_get_attachment_image_src( $thumbnail_id,'full' ); 
		?>
		
			<article class="col-md-6 insight-grid">
				<a href="<?php echo get_permalink() ?>">
					<img src="<?php echo $image[0]; ?>" alt="<?php echo $thumbnail_alt ?>" class="img-fluid" >
				</a><!-- article.insight-box -->
				<div class="insight-info">
					<p class="insight-cat"><?php echo $postCat->slug ?></p>
					<p class="insight-date"><?php echo get_the_date('d F,Y') ?></p>
				</div>
				<div class="grey-line"></div>
				<div class="insight-title">
					<?php the_title( '<h4>', '</h4>' ); 
					the_field('description_insight')?>
				</div>
			</article><!-- insight-grid -->
		<?php }
			// Restore original Post Data
		wp_reset_postdata();
		}	
		?>
</div><!-- row grid-insight-->
</section><!-- section -->
