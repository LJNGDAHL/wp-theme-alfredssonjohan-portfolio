<?php
/**
* The template for displaying all single posts
* @package Johan_Alfredsson_Photography
*/
	get_header();
?>

<?php

if(have_posts()) {
	while(have_posts()) {
		the_post();

		if( has_post_thumbnail() ) {
			the_post_thumbnail();
		}

		// Check if custom page type for the gallery is used.
		if ( is_singular( 'wpaj_cpt_gallery' ) ) {

			get_template_part( 'content', 'gallery' );
		}
	}
}

get_footer(); ?>