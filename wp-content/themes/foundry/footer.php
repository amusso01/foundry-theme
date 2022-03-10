<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

	

	
	<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
	
	<div class="wrapper" id="wrapper-footer">
	<?php if (!is_404()) {	?>
	<div class="container-fluid brief-footer footer__brief-bg" >
		<div class="container">
			<div class="row">
				<div class="col-md-6 ">
					<p>Let’s talk</p>
					<p>Send us your brief</p>
					<p>and calculate your budget and timescale</p>
				</div>
				<div class="col-md-3 offset-md-3">
					<a href="<?php echo site_url('/brief-1/'); ?>" id="box" class="btn brief"><p>START</p></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
	<footer class="footer-main">


	<div class="container">

<div align="center"><a href="https://www.unicef.org.uk/donate/donate-now-to-protect-children-in-ukraine/" target="blank"><img src="https://www.fdry.com/we-stand-with-ukraine--FDRY.png" /></a></div>

		<div class="row footer-info">

			<div class="col-md-4 text-left contact">
				<div class="social social-footer">
					<ul>
						<li>
							<a href="https://twitter.com/FDRY_digital" target="_blank" rel="noreferrer">
								<svg class="social-svg"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.598 27.599">
									<defs>
										<style>
										.cls-1 {
											fill: #fff;
											fill-rule: evenodd;
										}
										</style>
									</defs>
									<path id="Path_3058" data-name="Path 3058" class="cls-1" d="M107.9,0a13.8,13.8,0,1,0,13.8,13.8A13.764,13.764,0,0,0,107.9,0Zm8.2,8.832a4.347,4.347,0,0,1-1.34,1.341.434.434,0,0,0-.237.394,10.025,10.025,0,0,1-2.681,7.018,9.142,9.142,0,0,1-5.835,3A9.627,9.627,0,0,1,99.935,19.4c-.158-.079-.237-.158-.394-.237v-.079a7.089,7.089,0,0,0,4.968-1.419,3.494,3.494,0,0,1-3.154-2.366,7.65,7.65,0,0,0,1.34-.079.244.244,0,0,0,.158-.079,3.621,3.621,0,0,1-2.681-3.391,9.534,9.534,0,0,0,1.419.394.077.077,0,0,1,.079-.079,3.441,3.441,0,0,1-1.34-2.129,3.6,3.6,0,0,1,.394-2.523,9.927,9.927,0,0,0,7.018,3.627,11.765,11.765,0,0,1,.158-1.656,3.448,3.448,0,0,1,5.677-1.735.434.434,0,0,0,.394.158l1.892-.71a3.593,3.593,0,0,1-1.34,1.735V8.91c.552-.158,1.183-.315,1.735-.473C116.179,8.674,116.179,8.753,116.1,8.832Z" transform="translate(-94.1)"/>
								</svg>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/FDRY__digital/" target="_blank" rel="noreferrer">
								<svg class="social-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.599 27.599">
									<defs>
										<style>
										.cls-1 {
											fill: #fff;
										}
										</style>
									</defs>
									<g id="Group_366" data-name="Group 366" transform="translate(0)">
										<path id="Path_3061" data-name="Path 3061" class="cls-1" d="M162.77,11.535a5.3,5.3,0,0,0-.552-.867,2.349,2.349,0,0,0-.867-.552,3.657,3.657,0,0,0-1.341-.237c-.789,0-1.025-.079-2.918-.079a22.542,22.542,0,0,0-2.918.079,3.657,3.657,0,0,0-1.34.237,5.3,5.3,0,0,0-.867.552,2.349,2.349,0,0,0-.552.867,3.657,3.657,0,0,0-.237,1.341c0,.789-.079,1.025-.079,2.918a22.545,22.545,0,0,0,.079,2.918,3.657,3.657,0,0,0,.237,1.341,5.3,5.3,0,0,0,.552.867,2.349,2.349,0,0,0,.867.552,3.657,3.657,0,0,0,1.34.237c.789,0,1.025.079,2.918.079a22.541,22.541,0,0,0,2.918-.079,3.657,3.657,0,0,0,1.341-.237,5.3,5.3,0,0,0,.867-.552,2.349,2.349,0,0,0,.552-.867,3.658,3.658,0,0,0,.237-1.341c0-.789.079-1.025.079-2.918a22.54,22.54,0,0,0-.079-2.918A4.565,4.565,0,0,0,162.77,11.535Zm-5.677,8.122a3.785,3.785,0,1,1,3.785-3.785A3.892,3.892,0,0,1,157.093,19.657Zm3.864-6.781a.867.867,0,1,1,.867-.867A.875.875,0,0,1,160.957,12.875Z" transform="translate(-143.294 -2.072)"/>
										<path id="Path_3062" data-name="Path 3062" class="cls-1" d="M158.044,14.4a2.444,2.444,0,1,0,2.444,2.444A2.457,2.457,0,0,0,158.044,14.4Z" transform="translate(-144.245 -3.045)"/>
										<path id="Path_3063" data-name="Path 3063" class="cls-1" d="M155,0a13.8,13.8,0,1,0,13.8,13.8A13.764,13.764,0,0,0,155,0Zm7.254,16.8a4.529,4.529,0,0,1-.315,1.735,3.3,3.3,0,0,1-.867,1.262,4.506,4.506,0,0,1-1.262.867,5.246,5.246,0,0,1-1.735.315c-.789,0-1.025.079-3,.079a24.89,24.89,0,0,1-3-.079,4.529,4.529,0,0,1-1.735-.315,3.3,3.3,0,0,1-1.262-.867,4.507,4.507,0,0,1-.867-1.262A5.246,5.246,0,0,1,147.9,16.8c0-.789-.079-1.025-.079-3a24.888,24.888,0,0,1,.079-3,4.529,4.529,0,0,1,.315-1.735,3.3,3.3,0,0,1,.867-1.262,4.507,4.507,0,0,1,1.262-.867,5.246,5.246,0,0,1,1.735-.315c.789,0,1.025-.079,3-.079a24.89,24.89,0,0,1,3,.079,4.528,4.528,0,0,1,1.735.315,3.3,3.3,0,0,1,1.262.867,4.506,4.506,0,0,1,.867,1.262,5.246,5.246,0,0,1,.315,1.735c0,.789.079,1.025.079,3C162.254,15.771,162.254,16.007,162.254,16.8Z" transform="translate(-141.2)"/>
									</g>
								</svg>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/company/fdry" target="_blank" rel="noreferrer">
								<svg class="social-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.599 27.599">
									<defs>
										<style>
										.cls-1 {
											fill: #fff;
											fill-rule: evenodd;
										}
										</style>
									</defs>
									<path id="Path_3059" data-name="Path 3059" class="cls-1" d="M202,0a13.8,13.8,0,1,0,13.8,13.8A13.764,13.764,0,0,0,202,0Zm-4.1,18.688V20.66h-2.918V11.591h2.6c.237,0,.315.079.315.315Zm-1.419-8.28a1.735,1.735,0,1,1,1.735-1.735A1.75,1.75,0,0,1,196.48,10.409Zm12.774,8.043v2.208h-2.918V15.14a1.45,1.45,0,0,0-.946-1.341,2.391,2.391,0,0,0-2.366.631.832.832,0,0,0-.158.394v5.756h-2.918V11.513h2.918v1.262c.079-.079.079-.158.158-.158a3.043,3.043,0,0,1,3-1.5,3.267,3.267,0,0,1,2.839,2.05,7.75,7.75,0,0,1,.394,1.262A34.181,34.181,0,0,1,209.254,18.452Z" transform="translate(-188.2)"/>
								</svg>
							</a>
						</li>
					</ul>
				</div>
				<h2>NEW PROJECT BRIEFS</h2>
				<p><a href="mailto:studio@foundrydigital.co.uk">studio@foundrydigital.co.uk</a></p>
				<p><a href="tel:+44 (0)20 8123 4669">+44 (0) 20 8123 4669</a></p>
			</div><!-- contact -->
			
			<div class="col-md-4 col-lg-2 text-left footer-push-down">
				<h2>CREATE</h2>
				<a href="<?php echo site_url('/service/create/creative-services/'); ?>">Brand Identity</a>
				<a href="<?php echo site_url('/service/create/creative-services/'); ?>">Creative Design</a>
				<a href="<?php echo site_url('/service/create/creative-services/'); ?>">Promote Artwork</a>
				<a href="<?php echo site_url('/service/create/creative-services/'); ?>">UX Design</a>
			</div><!-- col-md-2 footer-push-down -->

			<div class="col-md-4 col-lg-2 text-left footer-push-down">
				<h2>BUILD</h2>
				<a href="<?php echo site_url('/service/build/web-design/'); ?>">Website Design & Build</a>
				<a href="<?php echo site_url('/service/build/ecommerce/'); ?>">Ecommerce Website</a>
				<a href="<?php echo site_url('/service/build/mobile-development/'); ?>">Mobile App Development</a>
				<a href="<?php echo site_url('/service/build/crm-saas/'); ?>">SAAS & CRM </a>
			</div><!-- col-md-2 footer-push-down -->

			<div class="col-md-4 show-md footer-push-down"></div>

			<div class="col-md-4 col-lg-2 text-left footer-push-down">
				<h2>PROMOTE</h2>
				<a href="<?php echo site_url('/service/promote/content-strategy/'); ?>">Strategy & Planning</a>
				<a href="<?php echo site_url('/service/promote/marketing-activation/'); ?>">Marketing Activation</a>
				<a href="<?php echo site_url('/service/promote/data-analytics/'); ?>">Data Analytics</a>
				<!-- <a href="<?php echo site_url('/service/promote/marketing-packages/'); ?>">Marketing Packages </a> -->
			</div><!-- col-md-2  footer-push-down -->

			<div class="col-md-4 col-lg-2 text-left footer-push-down">
				<h2>COMPANY</h2>
				<a href="<?php echo site_url(); ?>">Home</a>
				<a href="<?php echo site_url('/work/'); ?>">Work</a>
				<a href="<?php echo site_url('/service/'); ?>">Services</a>
				<a href="<?php echo site_url('/about'); ?>">About</a>
				<a href="<?php echo site_url('/insights/'); ?>">Insights</a>
				<a href="<?php echo site_url('/contact/'); ?>">Contact</a>
				<a href="<?php echo site_url('/privacy-policy/'); ?>">Privacy Policy</a>
			</div><!-- col-md-2 footer-push-down -->
			

		</div><!-- row end footer-info -->
		</div>	<!-- container -->



		<div class="line-gradient"></div>


		<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row copyright ">

			<div class="col-md-6 my-auto">

						<p>COPYRIGHT <?php echo date("Y");?> FOUNDRY DIGITAL</p>
<p>FDRY is a trading name of Foundry Digital Limited. Company Registration No. 07918842</p>

				
			</div><!--col end -->

			<div class="col-md-6 my-auto">

					<div class="footer-logo">
						<a href="<?php echo site_url() ?>">
							<svg id="footer-logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 262 79" style="enable-background:new 0 0 262 79;" xml:space="preserve">
								<style type="text/css">
									.st00{fill:#FFFFFF;}
								</style>
								<g>
									<polygon class="st00" points="54.6,24.3 54.6,11.9 10.1,11.9 10.1,62.1 15.7,62.1 15.7,64 10.1,64 10.1,68.6 26.2,68.6 26.2,49.2 
										51.2,49.2 51.2,36.8 26.2,36.8 26.2,24.3 	"/>
									<g>
										<path class="st00" d="M174.5,50.8c3.6-1.7,6.3-4.1,8.2-7.2c1.9-3.1,2.9-6.6,2.9-10.7c0-4.3-1-8-3.1-11.1c-2.1-3.2-5-5.6-8.8-7.3
											c-3.8-1.7-8.2-2.6-13.4-2.6h-1.2v12.6h0.2c3.3,0,5.8,0.7,7.5,2.2c1.7,1.5,2.5,3.5,2.5,6.2c0,2.6-0.8,4.7-2.5,6.1
											c-1.7,1.4-4.2,2.1-7.5,2.1h-8.9V24.6h6.9V11.9h-22.9v56.7h16V53.6h8.8l10.3,15.1h17.2L174.5,50.8z"/>
									</g>
									<g>
										<path class="st00" d="M81.4,24.7h10.1c2.7,0,5.2,0.4,7.3,1.3l8.9-11.1c-4.6-2-9.8-3.1-15.6-3.1H65.4v55.5l16-19.8V24.7z"/>
										<path class="st00" d="M119.9,25.3c-2.5-4-6-7.2-10.4-9.5l-8.9,11.1c1,0.6,1.9,1.2,2.7,2c2.9,2.8,4.4,6.6,4.4,11.4
											c0,4.9-1.5,8.7-4.4,11.4c-2.9,2.8-6.8,4.1-11.7,4.1H81.4v-5.3L66.8,68.6h25.4c6.2,0,11.7-1.2,16.5-3.5c4.8-2.3,8.5-5.6,11.2-9.9
											c2.6-4.3,4-9.3,4-15C123.9,34.5,122.6,29.6,119.9,25.3z"/>
									</g>
									<g>
										<polygon class="st00" points="235.6,11.9 222.1,34.4 208.7,11.9 191.8,11.9 203.3,31.3 232.2,43.6 255,11.9 		"/>
										<polygon class="st00" points="213.4,48.1 213.4,68.6 229.4,68.6 229.4,48.3 231.3,45.2 204.9,33.9 		"/>
									</g>
								</g>
								<g id="_x38_QNoX7_00000145044510982535038690000008263449638764630204_">
									
										<image style="overflow:visible;" width="176" height="136" id="_x38_QNoX7_00000037672235037512614540000015217409004719685511_" xlink:href="1D29735BF6639870.png"  transform="matrix(1 0 0 1 760 -254.5)">
									</image>
								</g>
								</svg>
						</a>
					</div>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
	
	</footer>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>



</body>

</html>

