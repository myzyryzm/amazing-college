<?php
function university_files()
{
    // final true tells js to load at bottom of page rather than top (b/c that is better for performance)
    wp_enqueue_script('main-univiersity-js', get_theme_file_uri('/js/scripts-bundled.js', null, microtime(), true));
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), null, microtime());
}
// tells wordpress wat 2 do; first is telling wp to add scripts
//hey wp before u output your code we want u to run our function
add_action('wp_enqueue_scripts', 'university_files');

function university_features()
{
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // register_nav_menu('footerLocationOne', 'Footer Location One');
    // register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');
