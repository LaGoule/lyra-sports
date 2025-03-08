<?php

add_action( 'wp_enqueue_scripts', 'lyrasports_enqueue_styles' );

function lyrasports_enqueue_styles() {
	wp_enqueue_style( 
		'lyrasportstheme-style', 
		get_stylesheet_uri()
	);
}