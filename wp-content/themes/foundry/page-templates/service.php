<?php
/**
 * Template Name: Service-pages
 * 
 * Template Post Type: page
 *
 * This template shows the three services of the website
 * 
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

if(is_page('build')){
	$page= 'build';
	$mainSvg = '<svg id="build" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60">
					<defs>
						<linearGradient id="linear-gradient-3" x1="0.146" y1="0.854" x2="0.853" y2="0.147" gradientUnits="objectBoundingBox">
						<stop offset="0.004" stop-color="#00caff"/>
						<stop offset="0.684" stop-color="#00f0a7"/>
						<stop offset="1" stop-color="#00ff83"/>
						</linearGradient>
						<linearGradient id="linear-gradient-4" x1="0.144" y1="0.851" x2="0.853" y2="0.142" xlink:href="#linear-gradient-3"/>
					</defs>
					<g id="Group_413" data-name="Group 413" transform="translate(0)">
					<g id="Group_411" data-name="Group 411">
					<path id="Path_3126" data-name="Path 3126" class="cls-1" d="M30,60h0a8.971,8.971,0,0,1-8.619-6.716,1.009,1.009,0,0,0-.672-.672c-.336-.112-.784-.224-1.007,0a8.789,8.789,0,0,1-9.067,0A8.313,8.313,0,0,1,6.269,45.56h0A8.636,8.636,0,0,1,7.5,40.522c.224-.336.224-.448,0-.9a1.314,1.314,0,0,0-1.119-1.007,8.93,8.93,0,0,1,.448-17.239c.112,0,.336-.224.448-.336a1.911,1.911,0,0,0,0-1.9A8.675,8.675,0,0,1,8.955,8.619,8.955,8.955,0,0,1,19.589,7.388a1.543,1.543,0,0,0,1.007,0,1.208,1.208,0,0,0,.784-.672A9,9,0,0,1,30.111,0h0a8.941,8.941,0,0,1,8.507,6.716A1.339,1.339,0,0,0,39.4,7.5a1.543,1.543,0,0,0,1.007,0A9.121,9.121,0,0,1,51.266,8.843,9.122,9.122,0,0,1,52.609,19.7a1.543,1.543,0,0,0,0,1.007c.112.336.448.672.672.672a8.889,8.889,0,0,1,0,17.239,1.306,1.306,0,0,0-.672.672c-.112.336-.224.784,0,1.007a8.824,8.824,0,0,1-1.343,10.858,8.979,8.979,0,0,1-10.858,1.455,1.543,1.543,0,0,0-1.007,0,1.352,1.352,0,0,0-.784.784A8.871,8.871,0,0,1,30,60Zm-9.962-8.4a3.268,3.268,0,0,1,1.007.224,1.846,1.846,0,0,1,1.231,1.343A8.129,8.129,0,0,0,30,59.216h0a7.906,7.906,0,0,0,7.723-6.045,2.091,2.091,0,0,1,1.231-1.343,1.972,1.972,0,0,1,1.791.112A7.946,7.946,0,0,0,51.6,40.97a1.706,1.706,0,0,1,0-1.791,1.911,1.911,0,0,1,1.231-1.231,7.957,7.957,0,0,0,0-15.448A1.709,1.709,0,0,1,51.6,21.269a2.453,2.453,0,0,1,0-1.791,7.983,7.983,0,0,0-10.97-10.97,1.706,1.706,0,0,1-1.791,0A1.846,1.846,0,0,1,37.61,7.164,8.1,8.1,0,0,0,30,1.119h0a8.16,8.16,0,0,0-7.835,6.045,1.846,1.846,0,0,1-1.231,1.343,2.775,2.775,0,0,1-1.9,0A7.958,7.958,0,0,0,7.836,18.918a2.54,2.54,0,0,1,0,2.8,1.786,1.786,0,0,1-1.007.784A8.213,8.213,0,0,0,.672,30a7.747,7.747,0,0,0,5.709,7.836A2.178,2.178,0,0,1,8.06,39.4a1.81,1.81,0,0,1-.112,1.679,7.971,7.971,0,0,0-1.119,4.59,8.314,8.314,0,0,0,12.313,6.045A2.464,2.464,0,0,1,20.037,51.6ZM30,55.746a4.707,4.707,0,0,1-4.7-4.59,1.676,1.676,0,0,0-1.119-1.679l-1.231-.56A25.6,25.6,0,0,1,20.372,47.8a2.092,2.092,0,0,0-2.239.336,4.821,4.821,0,0,1-4.7,1.007,4.692,4.692,0,0,1-3.134-3.47,4.848,4.848,0,0,0-.112-.56v-.224a4.671,4.671,0,0,1,1.231-3.246,1.712,1.712,0,0,0,.336-2.239c-.448-1.007-.9-2.015-1.231-3.022v-.56A1.676,1.676,0,0,0,8.843,34.7a4.647,4.647,0,0,1-.112-9.291,1.816,1.816,0,0,0,1.791-1.231c.56-1.231,1.007-2.575,1.567-3.806a1.711,1.711,0,0,0-.336-2.015,4.671,4.671,0,0,1,6.6-6.6,1.882,1.882,0,0,0,2.127.336c1.231-.56,2.463-1.007,3.806-1.567a1.943,1.943,0,0,0,1.231-1.679,4.647,4.647,0,0,1,9.291.112,1.833,1.833,0,0,0,1.119,1.679l.9.336c1.007.448,2.015.784,3.022,1.231a1.711,1.711,0,0,0,2.015-.336,4.727,4.727,0,0,1,6.6.112,4.594,4.594,0,0,1,0,6.493,1.711,1.711,0,0,0-.336,2.015l1.007,2.351.672,1.567a1.591,1.591,0,0,0,1.679,1.119,4.707,4.707,0,0,1,4.589,4.7,4.782,4.782,0,0,1-4.589,4.7,1.723,1.723,0,0,0-1.679,1.119c-.56,1.343-1.119,2.575-1.567,3.918a1.524,1.524,0,0,0,.336,1.9,4.67,4.67,0,0,1-6.6,6.6,1.573,1.573,0,0,0-1.9-.336l-2.015.448c-.784.336-1.567.672-2.239,1.007A1.861,1.861,0,0,0,34.7,51.157a4.707,4.707,0,0,1-4.7,4.59ZM19.589,46.9a2.551,2.551,0,0,1,1.231.336c.784.336,1.679.672,2.574,1.007l1.231.56A2.726,2.726,0,0,1,26.3,51.269a3.75,3.75,0,0,0,3.806,3.694h0a3.773,3.773,0,0,0,3.806-3.806A2.525,2.525,0,0,1,35.6,48.806L37.946,47.8l1.679-.672a2.608,2.608,0,0,1,2.91.56,3.8,3.8,0,1,0,5.373-5.373,2.609,2.609,0,0,1-.56-2.91c.56-1.343,1.119-2.575,1.567-3.918a2.423,2.423,0,0,1,2.463-1.679,3.808,3.808,0,0,0,0-7.612,2.673,2.673,0,0,1-2.463-1.679l-.672-1.567L47.237,20.6a2.574,2.574,0,0,1,.56-2.91,3.715,3.715,0,0,0,0-5.261,3.85,3.85,0,0,0-5.373,0,2.54,2.54,0,0,1-3.022.448c-1.007-.448-2.015-.784-2.91-1.231l-.9-.336a2.424,2.424,0,0,1-1.679-2.463,3.75,3.75,0,0,0-7.5,0,2.656,2.656,0,0,1-1.791,2.575c-1.231.56-2.463,1.007-3.806,1.567a2.722,2.722,0,0,1-3.022-.448,3.851,3.851,0,0,0-5.373,0,3.715,3.715,0,0,0,0,5.261,2.609,2.609,0,0,1,.56,2.91c-.56,1.231-1.119,2.575-1.567,3.806a2.811,2.811,0,0,1-2.574,1.791A3.655,3.655,0,0,0,5.149,30a3.727,3.727,0,0,0,3.694,3.694,2.563,2.563,0,0,1,2.463,1.679l.224.672c.448,1.007.784,2.015,1.231,3.022a2.733,2.733,0,0,1-.56,3.246A3.631,3.631,0,0,0,11.194,45v.112a.673.673,0,0,0,.112.448,3.71,3.71,0,0,0,2.463,2.8,3.953,3.953,0,0,0,3.806-.784A3.611,3.611,0,0,1,19.589,46.9Z" transform="translate(0.003)"/>
					</g>
					<g id="Group_412" data-name="Group 412" transform="translate(19.013 19.03)">
					<path id="Path_3127" data-name="Path 3127" class="cls-2" d="M27.748,38.94h0A11.057,11.057,0,0,1,17,28.642a10.941,10.941,0,0,1,9.4-11.53c.336,0,.672-.112,1.007-.112h.448a10.861,10.861,0,0,1,9.626,5.821A10.44,10.44,0,0,1,37.15,33.9a2.761,2.761,0,0,1-2.015,1.343,2.344,2.344,0,0,1-2.127-.9,2.664,2.664,0,0,1-.224-3.246,5.569,5.569,0,0,0-.112-6.269A5.688,5.688,0,0,0,25.621,22.6a5.913,5.913,0,0,0,2.015,11.418,2.866,2.866,0,0,1,2.127.9,2.542,2.542,0,0,1,.672,1.791A2.445,2.445,0,0,1,27.748,38.94Zm.224-21.157h-.448c-.336,0-.672.112-1.007.112a10.123,10.123,0,0,0,1.119,20.149h0a1.766,1.766,0,0,0,1.9-1.567,1.3,1.3,0,0,0-.448-1.119,2.128,2.128,0,0,0-1.455-.56,6.808,6.808,0,0,1-6.492-5.821A6.727,6.727,0,0,1,25.4,21.7a6.81,6.81,0,0,1,8.283,9.851c-.448.9-.448,1.567.112,2.127a1.362,1.362,0,0,0,1.343.56,1.841,1.841,0,0,0,1.343-.9A9.569,9.569,0,0,0,36.7,23.157C35.023,19.8,32,18.007,27.972,17.784Z" transform="translate(-16.983 -17)"/>
					</g>
					</g>
				</svg>';
	$btnClass = 'btn-build';
	$backgroundImage = 'background: linear-gradient(rgba(0, 202, 255, .5),rgba(0, 240, 167, .5),rgba(0, 255, 131, .5))';
	$backgroundGradient = 'background: linear-gradient(297deg, #00caff, #00ff83);';
}elseif (is_page('create')) {
	$page = 'create';
	$mainSvg = '<svg id="create" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 59.967">
					<defs>
						<linearGradient id="linear-gradient" x1="0.147" y1="0.854" x2="0.853" y2="0.148" gradientUnits="objectBoundingBox">
							<stop offset="0" stop-color="#ff9500"/>
							<stop offset="0.265" stop-color="#ff7100"/>
							<stop offset="0.852" stop-color="#ff1700"/>
							<stop offset="0.992" stop-color="red"/>
						</linearGradient>
						<linearGradient id="linear-gradient-2" x1="0.225" y1="0.771" x2="0.764" y2="0.228" xlink:href="#linear-gradient"/>
					</defs>
					<g id="Group_410" data-name="Group 410" transform="translate(0 0)">
						<g id="Group_408" data-name="Group 408">
							<path id="Path_3124" data-name="Path 3124" class="cls-1" d="M29.949,59.905A29.611,29.611,0,0,1,.891,36.748c-.223-1-.334-1.781-.445-2.561a25.331,25.331,0,0,1-.223-2.895L0,29.956A32.835,32.835,0,0,1,3.229,16.485a2.827,2.827,0,0,1,1.559-1.447,2.52,2.52,0,0,1,2,.111,2.546,2.546,0,0,1,1,3.674,26.454,26.454,0,0,0-2.672,11.69,24.913,24.913,0,1,0,29.17-25.05,24.318,24.318,0,0,0-21.6,6.68,3.212,3.212,0,0,1-2.449.891,2.525,2.525,0,0,1-1.781-1.225A2.459,2.459,0,0,1,9.018,8.58,29.383,29.383,0,0,1,22.935.786,30.145,30.145,0,0,1,59.119,22.719a30.048,30.048,0,0,1-23.6,36.629A32.522,32.522,0,0,1,29.949,59.905ZM.891,29.956,1,31.181c.111.891.111,1.893.223,2.783.111.668.223,1.447.445,2.449A29.007,29.007,0,0,0,35.4,58.458a28.652,28.652,0,0,0,19.038-12.8,28.787,28.787,0,0,0,3.785-22.712A29.252,29.252,0,0,0,23.158,1.677,28.114,28.114,0,0,0,9.686,9.248a1.788,1.788,0,0,0-.445,2.115,1.341,1.341,0,0,0,1.113.779,1.749,1.749,0,0,0,1.67-.668,25.8,25.8,0,0,1,39.3,4.008A25.712,25.712,0,0,1,24.16,54.9,25.464,25.464,0,0,1,4.342,30.4,26.479,26.479,0,0,1,7.125,18.377a1.68,1.68,0,0,0-.668-2.449,1.862,1.862,0,0,0-1.336-.111,2.185,2.185,0,0,0-1,1A29.734,29.734,0,0,0,.891,29.956Z" transform="translate(0 0.062)"/>
						</g>
						<g id="Group_409" data-name="Group 409" transform="translate(17.034 16.992)">
							<path id="Path_3125" data-name="Path 3125" class="cls-2" d="M28.326,41.252h0a2.547,2.547,0,0,1-2.561-2.672V30.787h-7.9a2.532,2.532,0,0,1-2.227-1.336,2.511,2.511,0,0,1,2.338-3.785h7.9V17.983A2.519,2.519,0,0,1,28.438,15.2h0a2.528,2.528,0,0,1,1.781.668A2.772,2.772,0,0,1,31,17.983v7.793h7.793a2.577,2.577,0,0,1,2.783,2.561,2.528,2.528,0,0,1-.668,1.781,2.772,2.772,0,0,1-2.115.779H31v7.793a3.2,3.2,0,0,1-.779,2A4.1,4.1,0,0,1,28.326,41.252ZM26.211,29.9h.445V38.58a1.669,1.669,0,0,0,1.67,1.781h0a1.291,1.291,0,0,0,1.113-.445A1.844,1.844,0,0,0,30,38.58V29.9H38.68a2.116,2.116,0,0,0,1.447-.557,1.429,1.429,0,0,0,.445-1.113,1.7,1.7,0,0,0-1.893-1.67H30V17.872a2.117,2.117,0,0,0-.557-1.447,1.429,1.429,0,0,0-1.113-.445h0a1.7,1.7,0,0,0-1.67,1.893v8.573h-8.8a1.685,1.685,0,0,0-1.559.779,1.517,1.517,0,0,0,0,1.67,1.777,1.777,0,0,0,1.559.891H23.65Z" transform="translate(-15.3 -15.2)"/>
						</g>
					</g>
				</svg>';
	$btnClass = 'btn-create';
	$backgroundImage = "background: linear-gradient(rgba(255, 149, 0, .5),rgba(255, 113, 0, .5),rgba(255, 23, 0, .5),rgba(255, 0, 0, .5))";
	$backgroundGradient = 'background:linear-gradient(297deg, #ff9d00, #ff0000);';
}elseif (is_page('promote')) {
	$page = 'promote';
	$mainSvg = '<svg id="promote" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 55.824">
					<defs>
						<linearGradient id="linear-gradient-5" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
						<stop offset="0.013" stop-color="#d70042"/>
						<stop offset="0.523" stop-color="#b40066"/>
						<stop offset="0.992" stop-color="#91008a"/>
						</linearGradient>
						<linearGradient id="linear-gradient-6" x1="-0.001" y1="0.504" x2="0.999" y2="0.504" xlink:href="#linear-gradient-5"/>
						<linearGradient id="linear-gradient-7" x1="0.006" y1="0.504" x2="1.002" y2="0.504" xlink:href="#linear-gradient-5"/>
					</defs>
					<g id="oQhOiA_1_" transform="translate(0)">
						<g id="Group_415" data-name="Group 415">
						<g id="Group_414" data-name="Group 414">
							<path id="Path_3128" data-name="Path 3128" class="cls-1" d="M10.936,55.824A3.1,3.1,0,0,1,9.374,55.3a2.622,2.622,0,0,1-.937-2.083v-10.1H2.708A2.516,2.516,0,0,1,0,40.41V11.04A2.648,2.648,0,0,1,2.5,8.332a2.284,2.284,0,0,1,1.771.729A2.749,2.749,0,0,1,5,11.04V37.91h5.728a2.547,2.547,0,0,1,2.708,2.812v7.395l3.645-2.708,8.749-6.561a4.279,4.279,0,0,1,2.708-.937h26.35V5.1H2.917A5.071,5.071,0,0,1,1.667,5,2.736,2.736,0,0,1,0,2.291,2.553,2.553,0,0,1,2.292,0H56.97c1.979,0,3.02.937,3.02,3.02V40.1c0,2.083-.937,3.02-3.02,3.02H29.162a1.68,1.68,0,0,0-.937.312C25.517,45.513,22.7,47.492,20,49.575,17.5,51.45,15.1,53.22,12.6,55.1a3.8,3.8,0,0,1-1.458.729ZM8.228,42.285H9.27V53.116a1.679,1.679,0,0,0,.625,1.354,1.369,1.369,0,0,0,1.25.312,3.589,3.589,0,0,0,1.146-.521c2.5-1.875,4.9-3.645,7.395-5.52,2.708-2.083,5.52-4.062,8.228-6.145a2.291,2.291,0,0,1,1.354-.417H57.074c1.562,0,2.187-.625,2.187-2.187V3.02c0-1.562-.625-2.187-2.187-2.187H2.5A1.788,1.788,0,0,0,.834,2.291,1.822,1.822,0,0,0,1.979,4.166a3.211,3.211,0,0,0,1.041.1h52.8V38.952H28.642a3.269,3.269,0,0,0-2.187.729l-8.749,6.561L14.061,48.95c-.1.1-.312.208-.417.312l-.833.625V40.827a1.733,1.733,0,0,0-1.875-1.979H4.375v-27.7A1.98,1.98,0,0,0,3.854,9.79,2.452,2.452,0,0,0,2.5,9.269,1.7,1.7,0,0,0,.834,11.144v29.37a1.75,1.75,0,0,0,1.875,1.875H6.041Z" transform="translate(0.01)"/>
						</g>
						</g>
					</g>
					<g id="Group_417" data-name="Group 417" transform="translate(11.675 26.558)">
						<g id="Group_416" data-name="Group 416">
						<path id="Path_3129" data-name="Path 3129" class="cls-2" d="M45.049,31.749H14.012a3.142,3.142,0,0,1,0-6.249H45.049a3.142,3.142,0,0,1,0,6.249ZM14.012,26.541a2.111,2.111,0,0,0,0,4.166H45.049a2.111,2.111,0,0,0,0-4.166Z" transform="translate(-11.2 -25.5)"/>
						</g>
					</g>
					<g id="Group_419" data-name="Group 419" transform="translate(34.379 16.143)">
						<g id="Group_418" data-name="Group 418">
						<path id="Path_3130" data-name="Path 3130" class="cls-3" d="M44.977,21.749H35.812a3.142,3.142,0,0,1,0-6.249h9.165a3.157,3.157,0,0,1,2.812,3.124A3.075,3.075,0,0,1,44.977,21.749Zm-9.061-5.207a2.111,2.111,0,0,0,0,4.166h9.165a2.111,2.111,0,0,0,0-4.166Z" transform="translate(-33 -15.5)"/>
						</g>
					</g>
				</svg>';
	$btnClass = 'btn-promote';
	$backgroundGradient = ' background: linear-gradient(297deg, #d70042, #91008a);';
	$backgroundImage="background: linear-gradient(rgba(215, 0, 66, .5),rgba(180, 0, 102, .5),rgba(145, 0, 138, .5))";
}

?>

<main class="service-inside">
	<div style="background-image: url(<?php echo the_field('jumbo_image');?>); " class="jumbotrone" >
		<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-1"  style="z-index:10">
				<h2><?php the_field('subtitle-tag')?> </h2>
				<h1><?php the_title() ?></h1>
				<?php 
					global $post;
					$content = $post->post_content;
					echo '<p>'.$content.'</p>';
				?>
				<a href="<?php echo site_url( '/contact/');?>" class="btn <?php echo $btnClass ?>">GET IN TOUCH</a>

			</div>
			<div class="col-lg-4 offset-lg-1" style="z-index:10">
				<?php echo $mainSvg ?>
			</div>
		</div>
		</div>
		<div class="service-overlay" style=" <?php echo $backgroundGradient ?>;background-size: 400% 400%;"></div>
	</div>
	<div class="container grid-section">
		<div class="row no-gutters">
			<div class="service-box-grid">
				<?php
					// check if the flexible content field has rows of data
					if( have_rows('service_boxes') ):
						// loop through the rows of data
						$class = array('#brand', '#graphic', '#promotional', '#design');
						while ( have_rows('service_boxes') ) : the_row();
							?>
							<a href="<?php the_sub_field('box-link-to');?>"> <!-- use this code to output the anchor link after the box-link-to <?php echo $class[$i]; ?> -->
								<div class="sevice-gird-element container hidden-animate">
									<div class="box-wrapper">
										<?php $svgImg = get_sub_field('icon');?>
										<div class="icon row justify-content-center">
										<div class="icon-service">
											<!-- <?php echo file_get_contents($svgImg); ?> -->
											<img src="<?php echo $svgImg ?>" alt="services icon">
										</div>

										</div>
										<div class="box-title row justify-content-center">
											<h3><?php the_sub_field('box-title'); ?></h3>
										</div>
										<div class="box-description row justify-content-center">
											<p><?php the_sub_field('box-description') ?></p>
										</div>
									</div><!-- box-wrapper -->
								</div><!-- sevice-gird-element -->
							</a>
							<?php
						$i++;
						endwhile;
	
					else :
	
						// no layouts found
	
					endif;
				?>	
			</div><!-- service-box-grid -->
		</div><!-- row .no-gutters -->
	</div><!-- container -->
	<div class="container-fluid our-process">
		<div class="container hidden-animate">
			<div class="icon row justify-content-center">
				<?php echo $mainSvg; ?>
				<p>Our process</p>
			</div><!-- title -->
			<div class="title row justify-content-center">
				<h3>How we<?php echo ' '.$page; ?></h3>
			</div><!-- title -->
			<div class="description row justify-content-center">
				<div class="col-md-6">
					<p><?php the_field('process_description') ?></p>
				</div>
			</div><!-- description -->
			<div class="row image-service justify-content-center" style="<?php echo $backgroundImage; ?>, url('<?php the_field('our_process_image') ?>') no-repeat;">
				
			<?php

			// check if the repeater field has rows of data
			if( have_rows('process_section') ):
				$counter = 1 ;
				// loop through the rows of data
				while ( have_rows('process_section') ) : the_row(); ?>

				<div class="image-service-element col-md-6 col-lg-3">
					<div class="element-visible">
						<p class="nth-element">0<?php echo $counter?></p>
						<h3><?php the_sub_field('title'); ?></h3>
					</div>
					<div class="element-hidden">
						<div class="text-hidden">
							<p><?php the_sub_field('paragraph'); ?></p>
						</div>
					</div>
				</div>
			<?php
					$counter ++;
				endwhile;
			endif;

			?>
			</div><!-- .image-service <= this the container of the background image --> 
		</div><!-- container -->
	</div><!-- our-process .container-fluid -->
</main><!-- main .service-inside -->
	
	
	
	<?php get_footer(); ?>
	