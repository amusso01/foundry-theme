<?php
/**
 * Partial template for Work post.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container   = get_theme_mod( 'understrap_container_type' );
?>
<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
	<main <?php post_class(); ?> id="work-main post-<?php the_ID(); ?>">

		<header class="entry-header">

			<?php the_title( '<h1 class="parent-title">', '</h1>' ); ?>

			<div class="line-gradient"></div>

			<div class="work-single-intro">

				<?php the_content(); ?>

			</div><!-- .work-single-intro -->
		</header><!-- .entry-header -->

		<section class="brand">
			<div class="row no-gutters">
				<div class="col-md-6">
					<div class="box-gray h-100">
						<div class="brand-content">
							<?php the_field('the_brand');?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box-black h-100">
						<div class="svg-brand">
							<?php $svgImg = get_field('brand_logo'); ?>
							<img src="<?php echo $svgImg ?>" alt="brand logo">
						</div>
					</div>
				</div>
				<div class="col-md-8 offset-md-2">
					<article class="approach">
						<?php the_field('approach') ?>
					</article>
				</div>				
			</div><!-- row no-gutters -->
		</section><!-- .brand -->
	</main><!-- main#work-main -->
</div><!-- Container end -->


	<section class="carousell box-gray">
		<div class="container-fluid ">
			<div class="row">
				<div class="col-12 p-0">
						<?php $images = get_field('carousel'); //get the image for the carousell
							if($images){
						?>
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="4000">
						<div class="carousel-inner" role="listbox">
						<?php
								foreach ($images as $key => $image) {
									if($key === 0){
						?>
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
							</div>
						<?php
									}else{
						?>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
							</div>
						<?php
									}
								}
						?>
						</div>
						<?php if (count($images)>1) {
							?>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
							<?php
						}
						?>
					</div>
						<?php
							}
						?>	
				</div>
			</div>
		</div><!-- container-fluid -->
	</section><!-- carousell -->
	<section class="products">
		<div class="container">
			<div class="row design">
				<div class="col-md-8 offset-md-2">
					<?php the_field('design') ?>
				</div>
			</div><!-- row.design -->
		</div><!-- container -->
<?php
		$images = get_field('mobile_images');
		$size = 'large'; // (thumbnail, medium, large, full or custom size)
		$i=1;
		if ($images) {
	?>
		<div class="container-fluid">
			<div class="row mobile">
	<?php
			foreach ($images as $image) {
	?>
				<div class="col-6 p-0 <?php echo "mobile-background-".$i;?>">
					<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
				</div>
	<?php	
				$i++;
			}
	?>
			</div><!-- row.mobile -->
		</div><!-- container-fluid -->
	<?php
		}
?>		
	</section><!-- products -->

	<div class="container final-box-work">
		<div class="row">
			<div class="col-md-6 result">
				<div class="inner-result">
					<?php the_field('result') ?>
				</div>
			</div>
			<div class="col-md-6 quote">
				<div class="inner-quote">
					<p><?php the_field('quote') ?></p>
				</div>
			</div>
		</div>
		<div class="grey-line"></div>
			<a href="#" class="see-more go-left"><i class="fa fa-chevron-left left"></i>BACK TO WORKS</a>
	</div>
		




	

	



