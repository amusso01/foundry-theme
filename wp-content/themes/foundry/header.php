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
	<meta name="theme-color" content="#5472C6"/>
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



	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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

<!-- Hotjar Tracking Code for https://www.foundrydigital.co.uk -->
	<!-- <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1228907,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> -->

	
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

			
			<nav class="navbar navbar-expand-md bg-primary rounded"> 
			<!-- <?php if(!is_front_page()){
		?>
			<div class="line-gradient nav-gradient container-fluid"></div>

			<?php
			}
			?> -->

		<?php if ( 'container' == $container ) : ?>
			<div class="container-fluid" >
		<?php endif; ?>

				<!-- Your site title as branding in the menu -->
				
				<a class="navbar-brand custom-logo-link" rel="home" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>">



<svg id="main-logo" data-name="Group 536" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 39.276">

<defs>
<style>
.cls-1 {fill: #1a1a1a;}
</style>
</defs>

<g id="Group_2140" transform="translate(1.279 338.408)">
	<path id="Path_6677" class="st0" d="M-1.3-314.2H3v-8.7h8.3v-3.4H3v-4.8h8.3v-3.4H-1.3V-314.2z"/>
	<path id="Path_6678" class="st0" d="M53.5-323c0,1-0.1,2.1-0.6,3c-0.4,0.7-1,1.3-1.7,1.7c-0.9,0.4-1.9,0.7-2.9,0.6
		c-1,0-1.9-0.2-2.7-0.7c-0.7-0.4-1.3-1-1.7-1.7c-0.4-0.9-0.6-1.8-0.5-2.8v-11.8h-4.3v12.2c0,1.6,0.3,3.1,1.1,4.5
		c0.7,1.3,1.9,2.3,3.2,2.9c1.5,0.7,3.2,1,4.9,1c2.5,0.2,5-0.6,7-2.2c1.7-1.6,2.6-4,2.5-6.3v-12.1h-4.3L53.5-323z"/>
	<path id="Path_6679" class="st0" d="M76.9-320.9l-11.6-13.6h-3.7v20.4h4.2V-328l11.6,13.8l0.1,0.1H81v-20.4h-4.2L76.9-320.9z"/>
	<path id="Path_6680" class="st0" d="M99.2-333.2c-1.7-0.9-3.7-1.3-5.6-1.3H85v20.4h8.3c2,0,4-0.4,5.8-1.3c1.6-0.8,3-2,3.9-3.6
		c0.9-1.6,1.4-3.4,1.4-5.3c0-1.8-0.4-3.7-1.4-5.3C102.2-331.2,100.8-332.4,99.2-333.2z M98.2-319.5c-1.3,1.3-3.1,1.9-5,1.9h-3.9
		v-13.5h3.8c1.9-0.1,3.7,0.6,5.1,1.8c1.3,1.3,2,3.1,1.9,5C100.2-322.5,99.5-320.8,98.2-319.5L98.2-319.5z"/>
	<path id="Path_6681" class="st0" d="M121.7-319.5c-0.5-1.1-1.1-2.1-1.9-3c-0.4-0.5-0.9-0.9-1.4-1.3c0.9-0.4,1.7-1.1,2.3-1.9
		c0.6-0.9,0.9-2,0.9-3.1c0-1.6-0.6-3.2-1.8-4.2c-1.3-1.1-3-1.7-4.7-1.6h-7.4v20.4h4.3v-8.4h1.2c0.5,0,1.1,0.1,1.5,0.4
		c0.6,0.4,1.1,0.9,1.4,1.5c0.9,1.4,1.7,2.8,2.4,4.3c0.5,1,0.9,1.7,1.2,2.1l0.1,0.1h4.8l-0.2-0.3
		C123.8-315.4,122.9-317.1,121.7-319.5z M116.4-326.7c-0.6,0.5-1.4,0.8-2.2,0.7h-2.3v-5.2h2.2c0.8-0.1,1.6,0.2,2.3,0.6
		c0.6,0.5,0.8,1.2,0.8,1.9C117.3-327.9,117-327.2,116.4-326.7z"/>
	<path id="Path_6682" class="st0" d="M137.2-334.5l-4.8,6.5l-4.7-6.5h-5.2l7.8,10.3v10.1h4.3v-10l7.7-10.3H137.2z"/>
	<path id="Path_6683" class="st0" d="M64.1-309.5c-0.7-0.3-1.4-0.4-2.2-0.4h-2.3v6.8h2.1c0.4,0,0.8,0,1.2-0.1c0.2,0,0.5-0.1,0.7-0.2
		c0.4-0.2,0.8-0.4,1.2-0.7c0.3-0.3,0.6-0.7,0.7-1.1c0.2-0.4,0.3-0.9,0.3-1.3c0-0.6-0.2-1.2-0.5-1.8C65-308.8,64.6-309.2,64.1-309.5z
		 M64.1-304.7c-0.1,0.1-0.3,0.3-0.5,0.4c-0.2,0.1-0.4,0.2-0.7,0.3c-0.4,0.1-0.8,0.1-1.1,0.1h-1.2v-5h1.2c0.3,0,0.7,0,1,0.1
		c0.2,0,0.5,0.1,0.7,0.2c0.2,0.1,0.4,0.2,0.6,0.4c0.5,0.5,0.8,1.1,0.7,1.8C64.8-305.8,64.6-305.2,64.1-304.7z"/>
	<rect id="Rectangle_2494" x="73.6" y="-309.9" class="st0" width="1" height="6.8"/>
	<path id="Path_6684" class="st0" d="M86.3-305.6h1.3v1.4l-0.1,0c-0.4,0.2-0.9,0.3-1.4,0.3c-0.7,0-1.4-0.2-2-0.7
		c-0.5-0.5-0.8-1.2-0.8-1.9c0-0.7,0.3-1.4,0.8-1.9c0.5-0.5,1.2-0.8,1.9-0.8c0.9,0,1.7,0.3,2.4,0.7v-1c-0.4-0.2-0.9-0.3-1.3-0.5
		c-0.4-0.1-0.7-0.1-1.1-0.1c-1,0-1.9,0.3-2.6,1c-0.7,0.7-1.1,1.6-1,2.5c0,0.9,0.3,1.8,1,2.4c0.7,0.7,1.7,1,2.7,1
		c0.9,0,1.7-0.2,2.5-0.5v-2.9h-2.3L86.3-305.6z"/>
	<rect id="Rectangle_2495" x="96.6" y="-309.9" class="st0" width="1" height="6.8"/>
	<path id="Path_6685" class="st0" d="M105.1-309h2.3v5.9h1v-5.9h2.4v-0.9h-5.7L105.1-309z"/>
	<path id="Path_6686" class="st0" d="M119.4-309.9l-2.9,6.8h1l0.8-2h2.9l0.9,2h1l-3-6.8H119.4z M118.7-306l1-2.5l1.1,2.5H118.7z"/>
	<path id="Path_6687" class="st0" d="M131.4-309.9h-1v6.8h4v-0.9h-3.1L131.4-309.9z"/>
	<rect id="Rectangle_2496" x="22.9" y="-338.4" class="st0" width="4" height="3.9"/>
	<path id="Path_6688" class="st0" d="M28.4-334.7l-0.7-0.2v4l0.3,0.1c0.7,0.3,1.3,0.8,1.8,1.3c1.3,1.3,2,3.1,2,4.9
		c0,1.8-0.7,3.6-2,4.9c-1.3,1.3-3,2-4.9,2c-1.8,0-3.4-0.7-4.6-2c-1.4-1.3-2.1-3.1-2.1-5c0-1.8,0.7-3.6,2-4.9
		c0.4-0.4,0.9-0.8,1.4-1.1l0.2-0.1v-4.1l-0.7,0.2c-1.4,0.5-2.7,1.4-3.7,2.4c-2.1,1.9-3.2,4.6-3.2,7.5c-0.1,3.1,1.2,6,3.5,8
		c2,1.8,4.6,2.8,7.2,2.8c2.8,0,5.6-1.1,7.6-3.1c2.1-2,3.2-4.7,3.2-7.5c0-2.8-1.1-5.6-3.2-7.5C31.5-333.2,30-334.2,28.4-334.7z"/>
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
				<!-- <?php wp_nav_menu(
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
				); ?> -->

        <style>
          #navbarNavDropdown #main-menu .menu-item__btn .btn:hover{
            background-color:#364F95;
            border-color:#364F95;
          }
          #navbarNavDropdown #main-menu li.menu-item > .nav-link {
            font-weight: bold!important;
          }
        </style>

    <div id="navbarNavDropdown" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto" id="main-menu">
            <li itemscope="itemscope" class="menu-item nav-item">
                <a href="<?php echo site_url( '/work/' ) ?>" class="nav-link">WORK</a>
            </li>
            <li itemscope="itemscope"  class="menu-item nav-item dropdown megamenu-li">
              <a class="nav-link dropdown-toggle" href="<?php echo site_url( '/service/' ) ?>"  aria-haspopup="true" aria-expanded="false">SERVICES</a>
              <div class="dropdown-menu megamenu" aria-labelledby="dropdown01" data-dropdown-out="fadeOut" role="menu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3 megamenu-dynamic">
                      <p id="static"></p>
                      <p id="dynamic"></p>
                    </div>
                    <div id="mega-create" class="col-md-3 megamenu-section">
                      <h5><a class="category" href="<?php echo site_url('/create/') ?>">CREATE</a></h5>
                      <a class="dropdown-item" href="<?php echo site_url( '/creative-services/#brand/' ) ?>">Branding & Visual Identity</a>
                      <a class="dropdown-item" href="<?php echo site_url( '/creative-services/#graphic/' ) ?>">Graphic Design</a>
                      <a class="dropdown-item" href="<?php echo site_url( '/creative-services/#design/' ) ?>">UX/UI and Motion Design</a>
                      <a class="dropdown-item" href="<?php echo site_url( '/creative-services/#promotional/' ) ?>">Promotional Artwork</a>
                    </div>
                    <div id="mega-build" class="col-md-3 megamenu-section">
                      <h5>
                        <a class="category" href="<?php echo site_url('/build/') ?>">BUILD</a>
                      </h5>
                      <a class="dropdown-item" href="<?php echo site_url( '/web-design/' ) ?>">Website Build</a>
                      <a class="dropdown-item" href="<?php echo site_url( '/ecommerce/' ) ?>">Ecommerce Website</a>
                      <a class="dropdown-item" href="<?php echo site_url( '/mobile-development/' ) ?>">Mobile & Web Apps</a>
                      <a class="dropdown-item" href="<?php echo site_url( '/crm-saas/' ) ?>">SAAS / CRM / CMS</a>
                    </div>
                    <div id="mega-promote" class="col-md-3 megamenu-section">
                      <h5>
                        <a class="category" href="<?php echo site_url('/promote/') ?>">PROMOTE</a>
                      </h5>
                      <a class="dropdown-item" href="<?php echo site_url( '/service/promote/strategy/' ) ?>">Strategy and Planning</a>
                      <a class="dropdown-item" href="<?php echo site_url( '/service/promote/marketing-activation/' ) ?>">Marketing Activation</a>
                      <a class="dropdown-item" href="<?php echo site_url( '/service/promote/data-analytics/' ) ?>">Data Analytics</a>
                      <!-- <a class="dropdown-item" href="#">SAAS & CRM</a>  -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li itemscope="itemscope" class="menu-item nav-item">
              <a href="<?php echo site_url( '/about/' ) ?>" class="nav-link">ABOUT</a>
            </li>		
            <li itemscope="itemscope" class="menu-item nav-item dropdown megamenu-li">
              <a class="nav-link " href="<?php echo site_url( '/insights/' ) ?>">INSIGHTS</a>
              <!-- <div class="dropdown-menu" aria-labelledby="dropdown01" data-dropdown-out="fadeOut" role="menu">
                <div class="row">
                  <div class="col-md-4">
                    <h5>
                      <a class="category" href="<?php echo site_url('/agency-life/') ?>">AGENCY LIFE</a>
                    </h5>
                  </div>
                </div>
              </div> -->
            </li>		
            <li itemscope="itemscope" class="menu-item nav-item">
              <a href="<?php echo site_url( '/contact/' ) ?>" class="nav-link">CONTACT</a>
            </li>	
            <li itemscope="itemscope" class="menu-item menu-item__btn nav-item " style="    display: flex;
            align-items: center;">
              <a style="color:#fff" href="<?php echo site_url('/brief-1');  ?>" class="btn">SEND A BRIEF</a>
            </li>
        </ul>
    </div>



			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->
	<?php if(is_front_page()){
		?>
	<!-- <div class="line-gradient"></div> -->
	<?php
	}
?>



</header><!-- #wrapper-navbar end -->


	<div class="site" id="page">

<div class="line-gradient"></div>