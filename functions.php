<?php
//Theme setup
function blogasrobke_setup(){
    //Title in the tab of every page
    add_theme_support('title-tag');
    //Enabling thumbnails
    add_theme_support('post-thumbnails');
    //Load translations in languages folder
    load_theme_textdomain( 'blogasrobke', get_template_directory() . '/languages' );
    //Register menu
    register_nav_menu('header-meniu', 'Header');
    register_nav_menu('main-meniu', 'Main');
    register_nav_menu('footer-meniu', 'Footer');
}
add_action('after_setup_theme', 'blogasrobke_setup');

//Add JS/CSS files
function blogasrobke_js_css_files() {
    wp_enqueue_style('blogasrobke_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_script('index', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0.0', true);
  }
add_action('wp_enqueue_scripts', 'blogasrobke_js_css_files');

//Remove dash from page title
add_filter( 'document_title_separator', 'document_title_separator' );
function document_title_separator( $sep ) {
    $sep = "|";
    return $sep;
}

//Upload SVG
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');

//Custom posts
function blogasrobke_post_types() {
	register_post_type('web', array(
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Web & work',
            'add_new_item' => 'Add new web article',
            'edit_item' => 'Edit web article',
            'all_items' => 'All web articles',
            'singular_name' => 'Web article'
		),
		'menu_icon' => 'dashicons-media-code',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('experiences', array(
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Experiences and life',
            'add_new_item' => 'Add new experiences article',
            'edit_item' => 'Edit experiences article',
            'all_items' => 'All experiences articles',
            'singular_name' => 'Experiences article'
		),
		'menu_icon' => 'dashicons-palmtree',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
}
add_action('init', 'blogasrobke_post_types');