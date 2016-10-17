<?php

// Remove from Blox theme
add_action( 'blox_setup_child_theme', 'cblox_remove_theme_support' );
function cblox_remove_theme_support() {

	//remove_theme_support( 'blox-block-basics-css' );
	remove_theme_support( 'blox-content-styling-css' );
	remove_theme_support( 'blox-design-editor' );
	remove_theme_support( 'blox-dynamic-block-css' );
	remove_theme_support( 'blox-structure-css' );
	remove_theme_support( 'blox-live-css' );

}

// Remove SEO support
add_filter( 'blox_seo_disabled', '__return_true' );

// Remove "View full site" link
add_filter( 'blox_responsive_disable_link', 'cblox_view_full_site' );
function cblox_view_full_site() {
	return false;
}