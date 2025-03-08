<?php
// Charger les styles du parent et du thème enfant
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'twentytwentyfive-style', // Style du parent
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'lyrasportstheme-style', // Style du thème enfant
        get_stylesheet_uri(),
        ['twentytwentyfive-style'] // Dépendance (le parent doit se charger avant)
    );
});

// Charger Tailwind CSS
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'tailwindcss',
        'https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css',
        [],
        null
    );
});
