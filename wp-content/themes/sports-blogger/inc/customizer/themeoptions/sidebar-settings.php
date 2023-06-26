<?php
/*Blog Page Settings*/

Kirki::add_section( 'sidebar_settings_section', array(
    'title'          => esc_html__( 'Sidebar Settings', 'sports-blogger' ),
    'description'    => esc_html__( 'Control Sidebar Of Your Website', 'sports-blogger' ),
    'panel'          => 'sports_blogger_global_panel',
) );

Kirki::add_field( 'sports_blogger_config', [
	'type'        => 'select',
	'settings'    => 'blog_page_sidebar',
	'label'       => esc_html__( 'Blog Page Sidebar', 'sports-blogger' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'sports-blogger' ),
		'right' => esc_html__( 'Right Sidebar', 'sports-blogger' ),
		'no' => esc_html__( 'No Sidebar', 'sports-blogger' ),
	],
] );

Kirki::add_field( 'sports_blogger_config', [
	'type'        => 'select',
	'settings'    => 'archive_page_sidebar',
	'label'       => esc_html__( 'Archive Page Sidebar', 'sports-blogger' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'sports-blogger' ),
		'right' => esc_html__( 'Right Sidebar', 'sports-blogger' ),
		'no' => esc_html__( 'No Sidebar', 'sports-blogger' ),
	],
] );

Kirki::add_field( 'sports_blogger_config', [
	'type'        => 'select',
	'settings'    => 'page_sidebar',
	'label'       => esc_html__( 'Page Sidebar', 'sports-blogger' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'sports-blogger' ),
		'right' => esc_html__( 'Right Sidebar', 'sports-blogger' ),
		'no' => esc_html__( 'No Sidebar', 'sports-blogger' ),
	],
] );

Kirki::add_field( 'sports_blogger_config', [
	'type'        => 'select',
	'settings'    => 'post_sidebar',
	'label'       => esc_html__( 'Post Sidebar', 'sports-blogger' ),
	'section'     => 'sidebar_settings_section',
	'default'     => 'no',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'left' => esc_html__( 'left Sidebar', 'sports-blogger' ),
		'right' => esc_html__( 'Right Sidebar', 'sports-blogger' ),
		'no' => esc_html__( 'No Sidebar', 'sports-blogger' ),
	],
] );
