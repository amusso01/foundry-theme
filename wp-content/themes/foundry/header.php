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

        <svg id="main-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 262 79"><path d="M54.6 24.3V11.9H10.1v50.2h5.6V64h-5.6v4.6h16.1V49.2h25V36.8h-25V24.3zm119.9 26.5c3.6-1.7 6.3-4.1 8.2-7.2 1.9-3.1 2.9-6.6 2.9-10.7 0-4.3-1-8-3.1-11.1-2.1-3.2-5-5.6-8.8-7.3-3.8-1.7-8.2-2.6-13.4-2.6h-1.2v12.6h.2c3.3 0 5.8.7 7.5 2.2 1.7 1.5 2.5 3.5 2.5 6.2 0 2.6-.8 4.7-2.5 6.1-1.7 1.4-4.2 2.1-7.5 2.1h-8.9V24.6h6.9V11.9h-22.9v56.7h16v-15h8.8l10.3 15.1h17.2l-12.2-17.9zM81.4 24.7h10.1c2.7 0 5.2.4 7.3 1.3l8.9-11.1c-4.6-2-9.8-3.1-15.6-3.1H65.4v55.5l16-19.8V24.7zm38.5.6c-2.5-4-6-7.2-10.4-9.5l-8.9 11.1c1 .6 1.9 1.2 2.7 2 2.9 2.8 4.4 6.6 4.4 11.4 0 4.9-1.5 8.7-4.4 11.4-2.9 2.8-6.8 4.1-11.7 4.1H81.4v-5.3L66.8 68.6h25.4c6.2 0 11.7-1.2 16.5-3.5 4.8-2.3 8.5-5.6 11.2-9.9 2.6-4.3 4-9.3 4-15 0-5.7-1.3-10.6-4-14.9zm115.7-13.4l-13.5 22.5-13.4-22.5h-16.9l11.5 19.4 28.9 12.3L255 11.9zm-22.2 36.2v20.5h16V48.3l1.9-3.1-26.4-11.3z" fill="#1c1e26"/><image width="176" height="136" xlink:href="9E51512DB5F7EEE8.png" transform="translate(760 -254.5)" overflow="visible"/></svg>


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