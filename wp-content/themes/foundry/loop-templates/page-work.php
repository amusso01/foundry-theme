<?php
/**
 * Partial template for work page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$args = array(
	'post_type'	=> 'works_post'
);
?>

<section <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<?php 
$works = new WP_Query($args);
if ($work->have_posts()){
	while($works->have_posts()){
		$works->the_post();
		$post_cats = get_the_category();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'work-inner', $post_cats );?> >

		</article>
		<?php
	}
}
	?>
	
}

	<header>

	</header><!-- .entry-header -->
   

	<div class="parent-content">


	</div><!-- .parent-content -->

	<footer class="entry-footer">


	</footer><!-- .entry-footer -->

</section><!-- #post-## -->
