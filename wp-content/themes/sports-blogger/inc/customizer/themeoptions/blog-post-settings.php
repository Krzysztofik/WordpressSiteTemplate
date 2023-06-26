<?php
/*Blog Page Settings*/

Kirki::add_section( 'post_loop_settings_section', array(
    'title'          => esc_html__( 'Post Loop Settings', 'sports-blogger' ),
    'panel'          => 'sports_blogger_global_panel',
) );

Kirki::add_field( 'sports_blogger_config', [
	'type'        => 'select',
	'settings'    => 'post_column',
	'label'       => esc_html__( 'Post Column', 'sports-blogger' ),
	'section'     => 'post_loop_settings_section',
	'default'    => '1',
	'priority'    => 10,
	'choices' => [
			'4' => __( '4 Colmun', 'sports-blogger' ),
			'3' => __( '3 Column', 'sports-blogger' ),
			'2' => __( '2 Column', 'sports-blogger' ),
			'1' => __( 'Grid', 'sports-blogger' ),
		],
] );

Kirki::add_field( 'rs_personal_blog_config', array(
    'type'        => 'custom',
    'settings'    => 'sep_after_post_column',
    'label'       => '',
    'section'     => 'post_loop_settings_section',
    'default'     => '<hr>',
) );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_category',
    'label'       => esc_html__( 'Show Post Category', 'sports-blogger' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_title',
    'label'       => esc_html__( 'Show Post Title', 'sports-blogger' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_author',
    'label'       => esc_html__( 'Show Post Author', 'sports-blogger' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_thumbnail',
    'label'       => esc_html__( 'Thumbnail  On/Off', 'sports-blogger' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );
Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_excerpt',
    'label'       => esc_html__( 'Show Post Excerpt', 'sports-blogger' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_date',
    'label'       => esc_html__( 'Show Post Date', 'sports-blogger' ),
    'section'     => 'post_loop_settings_section',
    'default'     => true,
] );