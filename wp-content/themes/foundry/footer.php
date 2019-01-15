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
	<div class="container-fluid brief-footer">
		<div class="row">
			<div class="col-md-6 offset-md-2">
				<p>Let’s talk</p>
				<p>Send us your brief</p>
				<p>and calculate your budget and timescale</p>
			</div>
			<div class="col-md-3">
				<a href="" class="btn brief">START</a>
			</div>
		</div>
	</div>

	<footer class="footer-main">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row footer-info">

			<div class="col-md-4 text-center text-md-left contact">
				<div class="social social-footer">
					<ul>
						<li>
							<a href="">
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
							<a href="">
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
							<a href="">
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
				<h2>NEW BUSINESS</h2>
				<p><a href="mailto:studio@foundrydigital.co.uk">studio@foundrydigital.co.uk</a></p>
				<p><a href="tel:+44 (0)20 7736 7959">+44 (0)20 7736 7959</a></p>
			</div><!-- contact -->
			
			<div class="col-md-2 text-center text-md-left footer-push-down">
				<h2>CREATE</h2>
				<a href="#">Brand Identity</a>
				<a href="#">Creative Design</a>
				<a href="#">Promote Artwork</a>
				<a href="#">UX Design</a>
			</div><!-- col-md-2 footer-push-down -->

			<div class="col-md-2 text-center text-md-left footer-push-down">
				<h2>BUILD</h2>
				<a href="#">Website Design & Build</a>
				<a href="#">Ecommerce Website</a>
				<a href="#">Mobile App Development</a>
				<a href="#">SAAS & CRM </a>
			</div><!-- col-md-2 footer-push-down -->

			<div class="col-md-2 text-center text-md-left footer-push-down">
				<h2>PROMOTE</h2>
				<a href="#">Strategy & Planning</a>
				<a href="#">Marketing Activation</a>
				<a href="#">Data Analytics</a>
				<a href="#">Marketing Packages </a>
			</div><!-- col-md-2  footer-push-down -->

			<div class="col-md-2 text-center text-md-left footer-push-down">
				<h2>COMPANY</h2>
				<a href="#">Home</a>
				<a href="#">Work</a>
				<a href="#">Services</a>
				<a href="#">About</a>
				<a href="#">Insights</a>
				<a href="#">Contact</a>
			</div><!-- col-md-2 footer-push-down -->
			

		</div><!-- row end footer-info -->
		</div>	<!-- container -->



		<div class="line-gradient"></div>


		<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row copyright ">

			<div class="col-6 my-auto">

						<p>COPYRIGHT 2018 FOUNDRY DIGITAL</p>
				
			</div><!--col end -->

			<div class="col-6 my-auto">

					<div class="footer-logo">
						<svg id="footer-logo" data-name="Group 882" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 43.204">
							<defs>
								<style>
								.cls-1 {
									fill: #f8f8f8;
								}
								</style>
							</defs>
							<g id="Group_1" data-name="Group 1" transform="translate(0 4.217)">
								<path id="Path_1" data-name="Path 1" class="cls-1" d="M0,28.309V4.9H12.479V7.826H3.356v6.627h9.123v2.926H3.356V28.223H0Z" transform="translate(0 -4.9)"/>
								<path id="Path_2" data-name="Path 2" class="cls-1" d="M77.239,19.373a8.323,8.323,0,0,1-2.754,6.455,10.571,10.571,0,0,1-7.315,2.41,10.719,10.719,0,0,1-7.315-2.41A8.322,8.322,0,0,1,57.1,19.373V5h3.356V18.77a6.3,6.3,0,0,0,1.807,4.82,6.582,6.582,0,0,0,4.906,1.721,6.946,6.946,0,0,0,4.906-1.721,6.425,6.425,0,0,0,1.807-4.82V5h3.27V19.373Z" transform="translate(-7.958 -4.914)"/>
								<path id="Path_3" data-name="Path 3" class="cls-1" d="M89,28.323V5h2.84l15.577,17.557V5H110.6V28.237H108.02L92.184,10.422v17.9" transform="translate(-12.403 -4.914)"/>
								<path id="Path_4" data-name="Path 4" class="cls-1" d="M123.3,5h9.123a12.517,12.517,0,0,1,8.865,3.27A10.97,10.97,0,0,1,144.73,16.7a10.633,10.633,0,0,1-3.615,8.348,13.681,13.681,0,0,1-9.381,3.27H123.3V5Zm3.356,20.225h5.078a10.032,10.032,0,0,0,6.971-2.324,7.99,7.99,0,0,0,2.582-6.283,8.445,8.445,0,0,0-2.324-6.283,8.724,8.724,0,0,0-6.455-2.324h-5.852Z" transform="translate(-17.184 -4.914)"/>
								<path id="Path_5" data-name="Path 5" class="cls-1" d="M156.3,5h5.938a8.1,8.1,0,0,1,5.508,1.635,5.855,5.855,0,0,1,1.979,4.647,5.855,5.855,0,0,1-1.979,4.647,6.216,6.216,0,0,1-2.238,1.2l.516.344a12.22,12.22,0,0,1,3.529,3.7l4.647,7.057h-3.787l-3.873-6.024a12.372,12.372,0,0,0-2.754-3.27A5.023,5.023,0,0,0,160.775,18h-1.119V28.237h-3.27V5Zm3.357,9.983h2.668a4.345,4.345,0,0,0,3.012-.861,3.247,3.247,0,0,0,1.033-2.582,3.021,3.021,0,0,0-1.033-2.582,4.345,4.345,0,0,0-3.012-.861h-2.668Z" transform="translate(-21.783 -4.914)"/>
								<path id="Path_6" data-name="Path 6" class="cls-1" d="M189.192,16.274,180.5,5h4.475l5.938,8.262h0L196.852,5h4.3l-8.692,11.188V28.237h-3.27Z" transform="translate(-25.155 -4.914)"/>
							</g>
							<g id="Group_2" data-name="Group 2" transform="translate(18.159)">
								<rect id="Rectangle_1" data-name="Rectangle 1" class="cls-1" width="3.529" height="3.443" transform="translate(9.983)"/>
								<path id="Path_7" data-name="Path 7" class="cls-1" d="M36.85,5V8.529a9.92,9.92,0,0,1,2.238,1.635,8.433,8.433,0,0,1,2.5,6.2,8.718,8.718,0,0,1-2.5,6.2,8.376,8.376,0,0,1-6.111,2.5,8.078,8.078,0,0,1-5.852-2.5,8.241,8.241,0,0,1-2.582-6.283,8.376,8.376,0,0,1,2.5-6.111A8.641,8.641,0,0,1,28.76,8.787V5.172a10.9,10.9,0,0,0-4.131,2.754A11.064,11.064,0,0,0,21.1,16.274a11.292,11.292,0,0,0,3.873,8.951,12.189,12.189,0,0,0,16.61-.344,11.436,11.436,0,0,0,3.529-8.434,11.575,11.575,0,0,0-3.529-8.434A12.284,12.284,0,0,0,36.85,5Z" transform="translate(-21.1 -0.697)"/>
							</g>
							<g id="Group_3" data-name="Group 3" transform="translate(76.597 34.856)">
								<path id="Path_8" data-name="Path 8" class="cls-1" d="M89,40.5h2.754a6.825,6.825,0,0,1,1.463.172,2.667,2.667,0,0,1,1.119.516,1.689,1.689,0,0,1,.775.775c.172.258.344.6.516.861.086.258.172.6.258.861a2.655,2.655,0,0,1,.086.775,4.02,4.02,0,0,1-.258,1.463,3.1,3.1,0,0,1-.861,1.291,3.748,3.748,0,0,1-1.377.861,4.378,4.378,0,0,1-1.893.344H89Zm1.119,6.971H91.5a6.643,6.643,0,0,0,1.291-.172,2.9,2.9,0,0,0,1.033-.516,2.627,2.627,0,0,0,1.033-2.238,3.229,3.229,0,0,0-.086-.861,3.181,3.181,0,0,0-.43-.947,2.1,2.1,0,0,0-.947-.775,4.111,4.111,0,0,0-1.549-.344H90.2v5.852Z" transform="translate(-89 -40.5)"/>
								<path id="Path_9" data-name="Path 9" class="cls-1" d="M108.6,40.5h1.119v8H108.6Z" transform="translate(-91.732 -40.5)"/>
								<path id="Path_10" data-name="Path 10" class="cls-1" d="M128.615,44.029v3.959a5.111,5.111,0,0,1-.688.344l-.775.258c-.258.086-.516.086-.775.172-.258,0-.516.086-.775.086A3.992,3.992,0,0,1,123.8,48.5a4.919,4.919,0,0,1-1.377-.947,6.744,6.744,0,0,1-.861-1.291,5.011,5.011,0,0,1-.258-1.635A3.493,3.493,0,0,1,121.644,43a3.956,3.956,0,0,1,2.152-2.152,5.032,5.032,0,0,1,1.635-.344,5.361,5.361,0,0,1,1.807.258,3.61,3.61,0,0,1,1.2.775l-.775.861a3.6,3.6,0,0,0-1.033-.689,5.036,5.036,0,0,0-1.119-.172,2.749,2.749,0,0,0-1.2.258,3.822,3.822,0,0,0-.947.689,2.976,2.976,0,0,0-.6,1.033,2.735,2.735,0,0,0-.172,1.2,3.453,3.453,0,0,0,.258,1.291,3.6,3.6,0,0,0,.689,1.033,3.821,3.821,0,0,0,.947.689,2.749,2.749,0,0,0,1.2.258,4.907,4.907,0,0,0,1.119-.086,2.577,2.577,0,0,0,.861-.344V45.32h-1.807V44.287h2.754Z" transform="translate(-93.501 -40.5)"/>
								<path id="Path_11" data-name="Path 11" class="cls-1" d="M141.7,40.5h1.119v8H141.7Z" transform="translate(-96.344 -40.5)"/>
								<path id="Path_12" data-name="Path 12" class="cls-1" d="M156.582,41.533H154V40.5h6.2v1.033h-2.582V48.5h-1.033Z" transform="translate(-98.059 -40.5)"/>
								<path id="Path_13" data-name="Path 13" class="cls-1" d="M173.329,40.5h.947l3.443,8h-1.291l-.775-1.979h-3.787l-.775,1.979H169.8Zm1.893,5.078-1.463-3.615h0l-1.549,3.615Z" transform="translate(-100.261 -40.5)"/>
								<path id="Path_14" data-name="Path 14" class="cls-1" d="M189.9,40.5h1.119v6.971h2.754V48.5h-3.787v-8Z" transform="translate(-103.062 -40.5)"/>
							</g>
						</svg>
					</div>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
	
	</footer>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

