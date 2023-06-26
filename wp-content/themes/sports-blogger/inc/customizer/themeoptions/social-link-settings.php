<?php
Kirki::add_section( 'sports_blogger_theme_social_settings', array(
    'title'          => esc_html__( 'Social Media Settings', 'sports-blogger' ),
    'panel'          => 'sports_blogger_global_panel',
) );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'text',
    'settings'    => 'social_facebook',
    'label'       => esc_html__( 'Facebook Link', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_social_settings',
    'default'     => esc_html__( 'https://facebook.com/', 'sports-blogger' ),
    'transport'   => 'refresh',
] );
Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'text',
    'settings'    => 'social_instagram',
    'label'       => esc_html__( 'Instagram Link', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_social_settings',
    'default'     => esc_html__( 'https://instagram.com/', 'sports-blogger' ),
    'transport'   => 'refresh',
] );
Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'text',
    'settings'    => 'social_linkedin',
    'label'       => esc_html__( 'LinkedIn Link', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_social_settings',
    'default'     => esc_html__( 'https://linkedin.com/', 'sports-blogger' ),
    'transport'   => 'refresh',
] );
Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'text',
    'settings'    => 'social_twitter',
    'label'       => esc_html__( 'Twitter Link', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_social_settings',
    'default'     => esc_html__( 'https://twitter.com/', 'sports-blogger' ),
    'transport'   => 'refresh',
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'color',
    'settings'    => 'social_link_color',
    'label'       => esc_html__( 'Social Media Link Color', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_social_settings',
    'default'     => '#ffffff',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => '.top-social #cssmenu ul.social-links li a',
            'property' => 'color',
        ),
    ),
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'color',
    'settings'    => 'social_link_color_hover',
    'label'       => esc_html__( 'Social Media Link Color Hover', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_social_settings',
    'default'     => '#484848',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => '.top-social #cssmenu ul.social-links li a:hover',
            'property' => 'color',
        ),
    ),
] );
?>