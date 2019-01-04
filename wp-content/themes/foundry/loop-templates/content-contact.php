<?php
/**
 * Partial template for post/insight page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="container contact-page">
	<div class="row">
		<div class="col-md-3 contact-info">
			<h3>Telephone</h3>
			<?php

			// check if the repeater field has rows of data
			if( have_rows('telephone') ):

				// loop through the rows of data
				while ( have_rows('telephone') ) : the_row();

					?>
						<p><?php the_sub_field('phone_number') ?></p>
					<?php

				endwhile;

			else :

				// no rows found

			endif;

			?>
		</div>
		<div class="col-md-3 contact-info">
			<h3>Email</h3>
			<p><a href="mailto:<?php the_field('email') ?>" target="_blank" rel="noopener noreferrer"><?php the_field('email') ?></a></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 gMap">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="480" height="NaN" id="gmap_canvas" src="https://maps.google.com/maps?q=88%20Peterborough%20Road%2C%20London%2C%20SW6%203HH%20London&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:NaNpx;width:480px;}.gmap_canvas {overflow:hidden;background:none!important;height:NaNpx;width:480px;}</style></div>	
		</div>
	</div>
</div>