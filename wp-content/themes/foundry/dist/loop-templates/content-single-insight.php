<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="insight-hero container-fluid" id="insight-hero" style="background-image: url(<?php the_field('hero_image');?>">

	<header class="insight-title">
		<div class="inner-category-hero"><h4>INSIGHTS</h4></div>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>
	<div class="social-share-icon">
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink() ?>" class="option a1 color-facebook waves-effect waves-light"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com/home?status=<?php echo the_permalink() ?>" class="option a2 color-twitter waves-effect waves-light"><i class="fa fa-twitter"></i></a>
		<a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=<?php the_permalink() ?>" class="option a3 color-google-plus waves-effect waves-light"><i class="fa fa-linkedin"></i></a>
		<a href="javascript:;" class="option a color-facebook waves-effect waves-light"><i class="fa fa-share-alt"></i></a>
	</div>
</section><!-- insight-hero -->

<main class="container insight-content">

	<article <?php post_class('col-lg-8 offset-lg-2'); ?> id="post-<?php the_ID(); ?>">

		<header class="insight-info">

			<div class="entry-meta">
			<?php $cat=get_the_category();?>
				<p class="date"><?php the_date('D, j F H:s') ?></p>
				<p class="category"><?php echo $cat[0]->cat_name; ?></p>

			</div><!-- .entry-meta -->

		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php the_content(); ?>

		</div><!-- .entry-content -->

		<footer class="entry-footer">

			<div class="grey-box">
				<h3>Related Content</h3>
				<p><?php next_post_link('%link'); ?></p>
				<p><?php previous_post_link( '%link'); ?></p>
			</div>
			<a href="<?php echo site_url('insights') ?>" class="see-more go-left"><i class="fa fa-chevron-left left"></i>INSIGHTS</a>


		</footer><!-- .entry-footer -->

</article><!-- #post-## -->

</main><!-- .container .insight-content-->
