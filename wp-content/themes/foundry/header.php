<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


		<!-- Global site tag (gtag.js) - Google Ads: 790752334 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-790752334"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-790752334');
</script>
<meta name="google-site-verification" content="x-inojAeKOVWg0Xf86aIGdX_z4RAZS2kvPrru0bfT7M" />
<!-- G Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9590086-32', 'auto');
  ga('send', 'pageview');

</script>

	<?php wp_head(); ?>
<?php if (is_front_page()) {
	?>
	<script>
	$(window).on('load', function(){
    	$('#loading-animation').fadeOut(500);
	})
	</script>
	<?php
}


?>

	
</head>

<body <?php body_class(); ?>>

<?php if (is_front_page()) {
	?>

<div id="loading-animation"  >
	<div id="loader">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="lading"></div>
	</div>						
</div>

	<?php
}
?>


	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar"  <?php if(is_front_page()){echo " class=\"navbar-home\""; }?>itemscope itemtype="http://schema.org/WebSite">
			
			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

			
			<nav class="navbar navbar-expand-md bg-primary"> 
			<?php if(!is_front_page()){
		?>
			<div class="line-gradient nav-gradient container-fluid"></div>

			<?php
			}
			?>

		<?php if ( 'container' == $container ) : ?>
			<div class="container-fluid" >
		<?php endif; ?>

				<!-- Your site title as branding in the menu -->
				
				<a class="navbar-brand custom-logo-link" rel="home" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<svg id="main-logo" data-name="Group 536" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 39.276">
					<defs>
						<style>
						.cls-1 {
							fill: #1a1a1a;
						}
						</style>
					</defs>
					<g id="Group_1" data-name="Group 1" transform="translate(0 3.834)">
						<path id="Path_1" data-name="Path 1" class="cls-1" d="M0,26.181V4.9H11.345V7.56H3.051v6.024h8.293v2.66H3.051V26.1H0Z" transform="translate(0 -4.9)"/>
						<path id="Path_2" data-name="Path 2" class="cls-1" d="M75.408,18.066a7.566,7.566,0,0,1-2.5,5.868,9.61,9.61,0,0,1-6.65,2.191,9.745,9.745,0,0,1-6.65-2.191,7.566,7.566,0,0,1-2.5-5.868V5h3.051V17.518A5.723,5.723,0,0,0,61.794,21.9a5.984,5.984,0,0,0,4.46,1.565,6.315,6.315,0,0,0,4.46-1.565,5.841,5.841,0,0,0,1.643-4.381V5H75.33V18.066Z" transform="translate(-12.425 -4.922)"/>
						<path id="Path_3" data-name="Path 3" class="cls-1" d="M89,26.2V5h2.582l14.161,15.961V5h2.895V26.125h-2.347l-14.4-16.2V26.2" transform="translate(-19.367 -4.922)"/>
						<path id="Path_4" data-name="Path 4" class="cls-1" d="M123.3,5h8.293a11.379,11.379,0,0,1,8.059,2.973,9.972,9.972,0,0,1,3.13,7.667A9.667,9.667,0,0,1,139.5,23.23a12.437,12.437,0,0,1-8.528,2.973H123.3V5Zm3.051,18.386h4.616a9.12,9.12,0,0,0,6.337-2.112,7.263,7.263,0,0,0,2.347-5.711,7.677,7.677,0,0,0-2.112-5.711,7.931,7.931,0,0,0-5.868-2.112h-5.32Z" transform="translate(-26.831 -4.922)"/>
						<path id="Path_5" data-name="Path 5" class="cls-1" d="M156.3,5h5.4a7.364,7.364,0,0,1,5.007,1.487,5.322,5.322,0,0,1,1.8,4.225,5.322,5.322,0,0,1-1.8,4.225,5.651,5.651,0,0,1-2.034,1.1l.469.313a11.109,11.109,0,0,1,3.208,3.364l4.225,6.416h-3.443l-3.521-5.477a11.247,11.247,0,0,0-2.5-2.973,4.567,4.567,0,0,0-2.738-.861h-1.017v9.311h-2.973V5Zm3.051,9.076h2.425a3.95,3.95,0,0,0,2.738-.782,2.952,2.952,0,0,0,.939-2.347,2.746,2.746,0,0,0-.939-2.347,3.95,3.95,0,0,0-2.738-.782h-2.425Z" transform="translate(-34.011 -4.922)"/>
						<path id="Path_6" data-name="Path 6" class="cls-1" d="M188.4,15.249,180.5,5h4.068l5.4,7.511h0L195.366,5h3.912l-7.9,10.171V26.125H188.4Z" transform="translate(-39.278 -4.922)"/>
					</g>
					<g id="Group_2" data-name="Group 2" transform="translate(16.509)">
						<rect id="Rectangle_1" data-name="Rectangle 1" class="cls-1" width="3.208" height="3.13" transform="translate(9.076)"/>
						<path id="Path_7" data-name="Path 7" class="cls-1" d="M35.418,5V8.208a9.018,9.018,0,0,1,2.034,1.487,7.667,7.667,0,0,1,2.269,5.633,7.925,7.925,0,0,1-2.269,5.633A7.615,7.615,0,0,1,31.9,23.23a7.344,7.344,0,0,1-5.32-2.269,7.492,7.492,0,0,1-2.347-5.711A7.615,7.615,0,0,1,26.5,9.694a7.855,7.855,0,0,1,1.565-1.252V5.156a9.908,9.908,0,0,0-3.756,2.5A10.058,10.058,0,0,0,21.1,15.249a10.266,10.266,0,0,0,3.521,8.137,11.081,11.081,0,0,0,15.1-.313,10.4,10.4,0,0,0,3.208-7.667,10.523,10.523,0,0,0-3.208-7.667A11.168,11.168,0,0,0,35.418,5Z" transform="translate(-21.1 -1.088)"/>
					</g>
					<g id="Group_3" data-name="Group 3" transform="translate(69.633 31.687)">
						<path id="Path_8" data-name="Path 8" class="cls-1" d="M89,40.5h2.5a6.2,6.2,0,0,1,1.33.156,2.425,2.425,0,0,1,1.017.469,1.535,1.535,0,0,1,.7.7c.156.235.313.548.469.782.078.235.156.548.235.782a2.414,2.414,0,0,1,.078.7,3.654,3.654,0,0,1-.235,1.33A2.82,2.82,0,0,1,94.32,46.6a3.407,3.407,0,0,1-1.252.782,3.98,3.98,0,0,1-1.721.313H89Zm1.017,6.337h1.252a6.039,6.039,0,0,0,1.174-.156,2.636,2.636,0,0,0,.939-.469,2.388,2.388,0,0,0,.939-2.034,2.935,2.935,0,0,0-.078-.782,2.892,2.892,0,0,0-.391-.861,1.913,1.913,0,0,0-.861-.7,3.737,3.737,0,0,0-1.408-.313H90.1v5.32Z" transform="translate(-89 -40.5)"/>
						<path id="Path_9" data-name="Path 9" class="cls-1" d="M108.6,40.5h1.017v7.276H108.6Z" transform="translate(-93.265 -40.5)"/>
						<path id="Path_10" data-name="Path 10" class="cls-1" d="M127.95,43.708v3.6a4.648,4.648,0,0,1-.626.313l-.7.235c-.235.078-.469.078-.7.156-.235,0-.469.078-.7.078a3.629,3.629,0,0,1-1.643-.313,4.472,4.472,0,0,1-1.252-.861,6.132,6.132,0,0,1-.782-1.174,4.555,4.555,0,0,1-.235-1.487,3.175,3.175,0,0,1,.313-1.487,3.6,3.6,0,0,1,1.956-1.956,4.575,4.575,0,0,1,1.487-.313,4.873,4.873,0,0,1,1.643.235,3.281,3.281,0,0,1,1.1.7l-.7.782a3.273,3.273,0,0,0-.939-.626,4.579,4.579,0,0,0-1.017-.156,2.5,2.5,0,0,0-1.1.235,3.474,3.474,0,0,0-.861.626,2.705,2.705,0,0,0-.548.939,2.487,2.487,0,0,0-.156,1.1,3.139,3.139,0,0,0,.235,1.174,3.273,3.273,0,0,0,.626.939,3.474,3.474,0,0,0,.861.626,2.5,2.5,0,0,0,1.1.235,4.461,4.461,0,0,0,1.017-.078,2.343,2.343,0,0,0,.782-.313V44.881h-1.643v-.939h2.5Z" transform="translate(-96.029 -40.5)"/>
						<path id="Path_11" data-name="Path 11" class="cls-1" d="M141.7,40.5h1.017v7.276H141.7Z" transform="translate(-100.468 -40.5)"/>
						<path id="Path_12" data-name="Path 12" class="cls-1" d="M156.347,41.439H154V40.5h5.633v.939h-2.347v6.337h-.939Z" transform="translate(-103.144 -40.5)"/>
						<path id="Path_13" data-name="Path 13" class="cls-1" d="M173.008,40.5h.861L177,47.776h-1.174l-.7-1.8h-3.443l-.7,1.8H169.8Zm1.721,4.616L173.4,41.83h0l-1.408,3.286Z" transform="translate(-106.582 -40.5)"/>
						<path id="Path_14" data-name="Path 14" class="cls-1" d="M189.9,40.5h1.017v6.337h2.5v.939h-3.443V40.5Z" transform="translate(-110.956 -40.5)"/>
					</g>
				</svg>

				</a>
				
				<!-- end custom logo -->

				<!-- custom toggle hamburger -->
				<button class=" burger" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<div class="cta navbar-toggler">
						<div class="toggle-btn type11"></div>
      				 </div>
				</button>
				

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->
	<?php if(is_front_page()){
		?>
	<div class="line-gradient"></div>
	<?php
	}
?>

</header><!-- #wrapper-navbar end -->
	<div class="site" id="page">