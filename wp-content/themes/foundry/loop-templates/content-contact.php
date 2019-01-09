<?php
/**
 * Partial template for Contact page
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
	<div class="grey-line"></div>
	<div class="row hidden-animate">
		<div class="col-md-6 gMap">
			<p class="city">London</p>
			<p class="address">88 Peterborough Road, London, SW6 3HH London</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19879.12123532147!2d-0.20811153751221!3d51.478530547037536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760f7bf73b8c6d%3A0xa92eb5fe1386d13b!2sSouthpark+Studios%2C+88+Peterborough+Rd%2C+Fulham%2C+London+SW6+3HH!5e0!3m2!1sen!2suk!4v1546857934761" width="100%" height="340px" frameborder="0" style="border:0"></iframe>
		</div>
		<div class="col-md-6 gMap">
			<p class="city">Knockholt</p>
			<p class="address">The Stables, Baston, Burlings Lane, Kent, TN14 7PE</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9016.565954638001!2d0.08098258474375092!3d51.30868949520857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df54817cbc8737%3A0x170e4cfefc688f7f!2sKnockholt%2C+Sevenoaks+TN14+7PE!5e0!3m2!1sen!2suk!4v1546858176162" width="100%" height="340px;" frameborder="0" style="border:0"></iframe>
		</div>
	</div>