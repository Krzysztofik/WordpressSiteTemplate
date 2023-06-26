<?php
/**
 * Enqueue scripts and styles.
 */
function sports_blogger_scripts() {
	wp_enqueue_style( 'fontawesome', esc_url(get_theme_file_uri('assets/css/fontawesome.css')) );
	wp_enqueue_style( 'slick-theme', esc_url(get_theme_file_uri('assets/slick-1.8.1/slick/slick-theme.css')) );
	wp_enqueue_style( 'slick', esc_url(get_theme_file_uri('assets/slick-1.8.1/slick/slick.css')) );
	wp_enqueue_style( 'sports-blogger-style', get_stylesheet_uri() );
	$buttonDColors = array(
        'btn_bg'    => '#f00000',
        'btn_text'   => '#ffffff',
        'btn_hover_bg'   => '#000000',
        'btn_hover_text'   => '#ffffff',
    );
	$buttonColors = get_theme_mod('banner_button_colors', $buttonDColors);
	
	if(get_theme_mod('banner_bg_settings', 'transparent')){
		$banner_overlay_color = array(
			'banner_overlay'    => '#000000',
		);
		$banner_overlay = get_theme_mod('banner_bg_overlay_settings', $banner_overlay_color);
	}

	$inline_style_data = '
	.hero-content .discover-me-button a{
        background-color: '.$buttonColors['btn_bg'].';
        color: '.$buttonColors['btn_text'].';
    }
    .hero-content .discover-me-button a:hover{
        background-color: '.$buttonColors['btn_hover_bg'].';
        color: '.$buttonColors['btn_hover_text'].';
    }

	section.banner-section {
		position: relative;
	}

	section.banner-section:before {
		content: "";
		position: absolute;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
		background-color: '.$banner_overlay_color['banner_overlay'].';
		opacity: 0.4;
	}
	';

	wp_add_inline_style('sports-blogger-style', $inline_style_data);
	wp_enqueue_script( 'sports-blogger-slick-js', esc_url( get_template_directory_uri() ) . '/assets/slick-1.8.1/slick/slick.js', array( 'jquery' ), NULL, true );
	wp_enqueue_script( 'imagesloaded.pkgd', esc_url( get_template_directory_uri() ) . '/assets/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'masonry' );
	wp_enqueue_script( 'sports-blogger-menu', esc_url( get_template_directory_uri() ) . '/assets/js/menu.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'sports-blogger-active', esc_url( get_template_directory_uri() ) . '/assets/js/active.js', array( 'jquery' ), '1.0', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sports_blogger_scripts' );

add_action('customize_controls_enqueue_scripts', 'sports_blogger_customizer_scripts');
function sports_blogger_customizer_scripts(){
	wp_enqueue_style('customizer-style', esc_url(get_theme_file_uri('inc/customizer/customizer-style.css')), array(), '49879', 'all');
}
