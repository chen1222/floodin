<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>

	<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post(); ?>
				<div class="floodin-bg-image"
					<?php if ( has_post_thumbnail() ) : ?> 
						style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
					<?php endif; ?>>
					
					<div class="entry">
						<div class="row">
							<!-- Contact From -->
							<div class="two columns contact">
							<?php
							echo '<h2 class="contact-form-title">Let\'s talk!</h2><div class="contact-form">' ;
							echo do_shortcode('[contact-form-7 id="179" title="Contact Form"]').'</div>'; ?>
							<br></div>
							<div class="two columns info"><?php the_content(); ?></div>
						</div>
					</div>
				</div>
			<?php 
			endwhile;
		endif;
	?>

<?php get_footer(); ?>