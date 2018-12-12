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

	<header>

		<?php the_title( '<h1 class="parent-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->
    <div class="line-gradient"></div>

	<div class="parent-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">


	</footer><!-- .entry-footer -->

</section><!-- #post-## -->
