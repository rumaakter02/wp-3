<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assests/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assests/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
   'height' => 480,
   'width'  => 720,
 ) );
add_theme_support( 'post-thumbnails' );


/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'BD logo', 'themepadma' ),
		'id'            => 'bdlogo',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Hero Title', 'themepadma' ),
		'id'            => 'herotitle',
		'before_widget' => '',
		'after_widget'  => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Hero card-1', 'themepadma' ),
		'id'            => 'herocard1',
		'before_widget' => '',
		'after_widget'  => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Hero card-2', 'themepadma' ),
		'id'            => 'herocard2',
		'before_widget' => '',
		'after_widget'  => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Hero card-3', 'themepadma' ),
		'id'            => 'herocard3',
		'before_widget' => '',
		'after_widget'  => '',
	) );
	register_sidebar([
		'name'=>'Line Left',
		'id'=>'lineleft',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Photo Title',
		'id'=>'phototitle',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Line Right',
		'id'=>'lineright',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Photo Card 1',
		'id'=>'photocard1',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Photo Card 2',
		'id'=>'photocard2',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Photo Card 3',
		'id'=>'photocard3',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Photo Card 4',
		'id'=>'photocard4',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'News Title',
		'id'=>'newstitle',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Footer Top left',
		'id'=>'ftleft',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Footer Top Right',
		'id'=>'ftright',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Footer Bottom left',
		'id'=>'fbleft',
		'before_widget' => '',
		'after_widget'  => '',
	]);
	register_sidebar([
		'name'=>'Footer Bottom Right',
		'id'=>'fbright',
		'before_widget' => '',
		'after_widget'  => '',
	]);

	
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

register_nav_menus( array(
	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
) );