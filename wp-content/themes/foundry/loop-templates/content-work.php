<?php
/**
 * Partial template for work page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php 
	$works = new WP_Query( array ('post_type' => 'works_post'));
?>

<div class="container work-navigation">
	<div class="row">

		<nav class="col-md-12">
	
				<?php 

					$args= array( 
						'exclude_tree'=> 1
					);
					
					$categories = get_categories($args); ?>

					<ul id="category-menu">
						
					<li class="cat-item selected"><a href="#all" class="category-all active" data-category="category-all">Featured</a></li>
						<?php
						foreach($categories as $term){?>
							<li class="cat-item"><a href="#<?php echo $term->name; ?>" class="category-<?php echo $term->name; ?>" data-category="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></li>
					<?php	}

						//  echo '<pre>'; print_r($categories); echo '</pre>';
						?>

					</ul>
					
				
		</nav><!-- col-md-12 -->
	</div><!-- row -->
</div><!-- container -->


<section <?php post_class('container-fluid'); ?> id="post-<?php the_ID(); ?>">


	<div class="work-grid">
		<?php
		if ($works-> have_posts() ) {
			while ($works-> have_posts() ) {
				$works->the_post(); 

				$cat = get_the_category(); // array of object of WP_Term
				$postCat = $cat[0]; // object WP_Term for the current post
				$thumbnail_id  = get_post_thumbnail_id($works->ID);
				$thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
				$image = wp_get_attachment_image_src( $thumbnail_id,'large' ); 
		?>
				<a href="<?php echo get_permalink(); ?>" class="ajax-call <?php echo $postCat->cat_name ?>"><article class="work-box " <?php echo $postCat->slug; ?>"  >

					<div class="hovereffect">
						<img src="<?php echo $image[0]; ?>" alt="<?php echo $thumbnail_alt ?>" class="img-fluid" >
						<div class="overlay">
							<p class="work-cat"><?php echo $postCat->slug ?></p>
							<h2 class="work-title" ><?php the_title(); ?></h2>
							<p class="work-description info"><?php echo get_field('description')?></p>
						</div>
					</div>
		
				</article></a><!-- article.work-box -->
		<?php }
			// Restore original Post Data
		wp_reset_postdata();
		}	
		?>
	</div><!-- work-grid -->

</section><!-- section -->
