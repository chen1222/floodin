<?php /* Template Name: Static Page */ ?>
<?php get_header(); ?>

	<?php
		$floodinPagename = $pagename;
		if ($floodinPagename == '') {
			$floodinPagename = 'home';
		}
		
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part('partials/'. $floodinPagename);
			endwhile;
		endif;
	?>

<?php get_footer(); ?>