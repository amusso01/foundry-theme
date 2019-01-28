<?php
/**
 * Partial template for content in About page
 *
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<section class="about">
	<article class="approach-about container">
		<div class="row">
			<div class="col-md-6 offset-md-3 text-center">
				<h3>Approach</h3>
				<p>Each project we undertake is backed by years of experience and technical skill and we love overcoming creative challenges and technical obstacles. You can trust that you have a dedicated team in Foundry Digital.</p>
			</div>
			<div class="col-md-10 offset-md-1">

			<?php if( have_rows('skills_list') ): ?>

				<ul class="skills-list">

				<?php while( have_rows('skills_list') ): the_row(); 

				// vars
				$skill = get_sub_field('skill');
				$description = get_sub_field('skill_description');

				?>

					<li class="hidden-animate list-unstyled"><span class="single-skill "><?php echo $skill ?></span> <span class="skill-description"><?php echo $description ?></span></li>

				<?php endwhile; ?>

				</ul>

			<?php endif; ?>
			</div>
		</div>
	</article><!-- approach -->
	<article class="container-fluid our-culture">
		<div class="background">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 offset-lg-1">
						<h2>Our Culture</h2>
					</div>
				</div>		
				<div class="row">
					<div class="col-lg-5 offset-lg-1">
						<p>When you work with Foundry Digital you don’t just get access to digital experts, you get access to our people and our values as a collaborative, supportive team of talented individuals who have been working together since 2012. We don’t just get on board with a project, we get invested in achieving our clients’ goals as if they were our own. </br> </br> We know who we are and we know what we’re good at, that’s why we don’t pretend to be digital giants. We’re your local agency, dedicated to bringing your project to life.</p>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<p>Fancy a cup of coffee or a quick bite to eat? We want to chat with you about your business so we can understand what it is you’re looking to achieve. Once we’ve nailed this, we pass on the particulars to our team of experts who make the magic happen, keeping you in the loop all the way.</br> </br> Our extensive experience in building interactive digital products has taught us that each project is different to the next, but whatever the unique requirements we tackle the challenge using our three-staged approach: Create, Build, Promote.</p>
						<a href="<?php echo site_url( '/agency-life/' ) ?>" class="btn">AGENCY LIFE</a>
					</div>
				</div>
			</div>
		</div><!-- background -->
	</article><!-- our-culture -->
	<aside class="info-box-about">
		<div class="container" id="counter">
			<div class="grid-about">
				<div class="grid-item-about">
					<div class="inner-box">
						<p class="number"><span class="counter-value" data-count="600">0</span>+</p>
						<p class="info-inner">Projects designed, built and promoted</p>
						<a href="<?php echo site_url('/work/') ?>">VIEW PORTFOLIO</a>
					</div>
				</div>
				<div class="grid-item-about">
					<div class="inner-box">
						<p class="counter-value" data-count="7">0</p>
						<p class="info-inner">Years delivering creative technology solutions</p>
						<a href="<?php echo site_url('/service/') ?>">VIEW SERVICES</a>
					</div>
				</div>
				<div class="grid-item-about">
					<div class="inner-box">
						<p class="counter-value" data-count="3">0</p>
						<p class="info-inner">We have offices in the UK and Argentina</p>
						<a href="<?php echo site_url('/contact/') ?>">GET IN TOUCH</a>
					</div>
				</div>
			</div> <!-- grid-about -->
		</div> <!-- container -->
	</aside><!-- info-box-about -->
	<article class="the-team ">
		<div class="container-fluid">
			<header class="team-intro col-md-6 offset-md-3 text-center">
				<h3>The Team</h3>
				<p>We’re a creative and production agency so as a team we’re anything but plain. Our designers radiate creativity, and our developers eat, sleep and breathe code. Not forgetting our project managers who are on the spectrum somewhere between organised and OCD and our digital marketing experts, the latest addition of whom is a pure genius.</p>
			</header>
			<div class="grid-team">
			<?php

			// check if the repeater field has rows of data
			if( have_rows('the_team') ):

				// loop through the rows of data
				while ( have_rows('the_team') ) : the_row();
?>
				<div class="card-team hidden-animate">
					<img class="img-fluid" src="<?php the_sub_field('picture') ?>" alt="Team member picture">
					<div class="overlay h-100 w-100">
						<p class="name"><?php the_sub_field('name_and_surname')?></p>
						<p class="role"><?php the_sub_field('member_role') ?></p>
					</div><!-- overlay -->
				</div><!-- card-team -->
				

<?php			endwhile;

			else :

				// no rows found

			endif;

			?>
			</div><!-- grid-team -->
			<div class="grid-info hidden-animate">
				<div class="info-card">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/img/images/640x1080.jpeg" alt="Our Team">
						<div class="overlay h-100 w-100">
							<p class="title">AGENCY LIFE</p>
							<p class="description">Alongside working on exciting projects we make sure we let off some steam</p>
							<a href="<?php echo site_url( '/agency-life/' ) ?>"><button class="learn-more">
								<div class="circle">
								<span class="icon arrow"></span>
								</div>
								<p class="button-text">Learn More</p>
							</button></a>
						</div><!-- overlay -->
				</div>
				<div class="info-card work">
					<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/img/images/960x750.jpeg" alt="Work with us">
					<div class="overlay darker h-100 w-100">
						<p class="title">WORK WITH US</p>
						<p class="description">If you are interested in a full time position, internship or work experience please get in touch at studio@foundrydigital.co.uk</p>
						<button class="learn-more">
							<div class="circle">
							<span class="icon arrow"></span>
							</div>
							<p class="button-text">Learn More</p>
						</button>
					</div><!-- overlay -->
				</div>
			</div>
		</div><!-- container-fluid -->
	</article><!-- the-team -->
</section><!-- .about -->


