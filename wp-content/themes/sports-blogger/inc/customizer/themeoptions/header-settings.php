<?php
Kirki::add_section( 'sports_blogger_theme_header_settings', array(
    'title'          => esc_html__( 'Header Settings', 'sports-blogger' ),
    'panel'          => 'sports_blogger_global_panel',
) );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'switch',
    'settings'    => 'top_header_on_off',
    'label'       => esc_html__( 'Show/Hide Top Header Section', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_header_settings',
    'default'     => 1,
    'choices'     => [
        'on'  => esc_html__( 'Show', 'sports-blogger' ),
        'off' => esc_html__( 'Hide', 'sports-blogger' ),
    ],
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'color',
    'settings'    => 'top_header_bgc_color',
    'label'       => esc_html__( 'Top Header Background Color', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_header_settings',
    'default'     => '#081224',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => 'header#masthead .top-header',
            'property' => 'background',
        ),
    ),
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'text',
    'settings'    => 'top_header_address',
    'label'       => esc_html__( 'Top Header Address', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_header_settings',
    'default'     => esc_html__( '3486 Oakway Lane Pomona, CA 91766', 'sports-blogger' ),
    'transport'   => 'refresh',
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'text',
    'settings'    => 'top_header_phone',
    'label'       => esc_html__( 'Top Header Contact', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_header_settings',
    'default'     => esc_html__( '+1 763-227-5032', 'sports-blogger' ),
    'transport'   => 'refresh',
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'typography',
    'settings'    => 'top_header_title_typography',
    'label'       => esc_html__( 'Top Header Typography', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_header_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '16px',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#ffffff',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-branding .address-contact-info',
        ],
    ],
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'color',
    'settings'    => 'header_bgc_color',
    'label'       => __( 'Header Background Color', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_header_settings',
    'default'     => '#ffffff',
    'transport'   => 'auto',
    'output' => array(
        array(
            'element'  => 'header#masthead',
            'property' => 'background',
        ),
    ),
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'typography',
    'settings'    => 'header_title_typography',
    'label'       => esc_html__( 'Site Title Typography', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_header_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '1.25rem',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-branding .site-title a',
        ],
    ],
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'typography',
    'settings'    => 'header_desc_typography',
    'label'       => esc_html__( 'Site Description Typography', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_header_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '1rem',
        'line-height'    => '1.4',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-branding p.site-description',
        ],
    ],
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'typography',
    'settings'    => 'header_menu_typography',
    'label'       => esc_html__( 'Menu Typography', 'sports-blogger' ),
    'section'     => 'sports_blogger_theme_header_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '1rem',
        'line-height'    => '1.6',
        'letter-spacing' => '0px',
        'color'          => '#000000',
        'text-transform' => 'none',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#cssmenu>ul>li>a',
        ],
    ],
] );
