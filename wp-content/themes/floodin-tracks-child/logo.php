<?php

$image_viewport_large = get_theme_mod( 'logo_upload' );
$image_viewport_small = get_theme_mod( 'small_logo_upload' );

if ( $image_viewport_large ) {
	$image_alt = get_post_meta( attachment_url_to_postid( $image ), '_wp_attachment_image_alt', true);
	if ( empty( $image_alt ) ) {
		$image_alt = get_bloginfo( 'name' );
	}
	$logo = "<span class='screen-reader-text'>" . esc_html( get_bloginfo( 'name' ) ) . "</span><img class='logo' src='" . esc_url( get_theme_mod( 'logo_upload' ) ) . "' alt='" . esc_attr( $image_alt ) . "' />";
	if($image_viewport_small) {
		$logo = "<span class='screen-reader-text'>" . esc_html( get_bloginfo( 'name' ) ) . "</span>
		<img class='logo' src='" . esc_url( get_theme_mod( 'logo_upload' ) ) . "' alt='" . esc_attr( $image_alt ) . "' />
		<img class='small-logo' src='" . esc_url( get_theme_mod( 'small_logo_upload' ) ) . "' alt='" . esc_attr( $image_alt ) . "' />";
	}
} else {
	$logo = esc_html( get_bloginfo( 'name' ) );
}

$output = "<div id='site-title' class='site-title'>";
$output .= "<a href='" . esc_url( home_url() ) . "'>";
$output .= $logo;
$output .= "</a>";
$output .= "</div>";

echo $output;