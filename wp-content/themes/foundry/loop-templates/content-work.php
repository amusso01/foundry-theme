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

<section <?php post_class(); ?> id="post-<?php the_ID(); ?>">

   
	<article class="parent-content">


	<?php 
    query_posts(array( 
        'post_type' => 'works_post',
        'showposts' => 9
    ) );  
	?>
	<?php while (have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php get_the_post_thumbnail()?>
	<?php endwhile;
	wp_reset_postdata()
	?>


	</article><!-- .parent-content -->


</section><!-- #post-## -->
