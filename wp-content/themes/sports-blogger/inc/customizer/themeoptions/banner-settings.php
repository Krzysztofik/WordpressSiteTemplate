<?php

Kirki::add_section( 'banner_section', array(
    'title'          => esc_html__( 'Banner Settings', 'sports-blogger' ),
    'description'    => esc_html__( 'Customize Banner section', 'sports-blogger' ),
    'panel'          => 'sports_blogger_global_panel',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'switch',
    'settings'    => 'banner_section_on_off',
    'label'       => esc_html__( 'Show/Hide Banner Section', 'sports-blogger' ),
    'section'     => 'banner_section',
    'default'     => 0,
    'choices'     => [
        'on'  => esc_html__( 'Show', 'sports-blogger' ),
        'off' => esc_html__( 'Hide', 'sports-blogger' ),
    ],
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'     => 'textarea',
    'settings' => 'banner_title',
    'label'    => esc_html__( 'Banner Title', 'sports-blogger' ),
    'section'  => 'banner_section',
    'default'  => esc_html__( 'Welcome to the Sports Blog!', 'sports-blogger' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.hero-content .banner-title',
            'function' => 'html',
        ]
    ],

] );

Kirki::add_field( 'sports_blogger_config', [
    'type'     => 'text',
    'settings' => 'banner_button_text',
    'label'    => esc_html__( 'Button Text', 'sports-blogger' ),
    'section'  => 'banner_section',
    'default'  => esc_html__( 'Discover', 'sports-blogger' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.discover-me-button a',
            'function' => 'html',
        ]
    ],
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'     => 'link',
    'settings' => 'banner_button_link',
    'label'    => esc_html__( 'Button Link', 'sports-blogger' ),
    'section'  => 'banner_section',
    'default'  => '#',
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'multicolor',
    'settings'    => 'banner_bg_overlay_settings',
    'label'       => esc_html__( 'Banner Background Overlay', 'sports-blogger' ),
    'section'     => 'banner_section',
    'choices'     => [
        'banner_overlay'    => esc_html__( 'Background Color', 'sports-blogger' ),
    ],
    'transport' => 'auto',
    'default'     => [
        'banner_overlay'    => '#000000',
    ],
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'background',
    'settings'    => 'banner_bg_settings',
    'label'       => esc_html__( 'Banner Background', 'sports-blogger' ),
    'description' => esc_html__( 'Define The Background Of Banner Section', 'sports-blogger' ),
    'section'     => 'banner_section',
    'default'     => [
        'background-color'      => '#b1c0c8',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center bottom',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'section.banner-section',
        ],
    ],
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'typography',
    'settings'    => 'banner_title_typography',
    'label'       => esc_html__( 'Banner Title Typography', 'sports-blogger' ),
    'section'     => 'banner_section',
    'default'     => [
        'font-family'    => 'Bebas Neue',
        'variant'        => '400',
        'font-size'      => '6.75rem',
        'line-height'    => '6.25rem',
        'letter-spacing' => '4px',
        'color'          => '#ffffff',
        'text-transform' => 'none',
        'text-align'     => 'center',
    ],

    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.banner-title',
        ],
    ],
] );

Kirki::add_field( 'sports_blogger_config', [
    'type'        => 'multicolor',
    'settings'    => 'banner_button_colors',
    'label'       => esc_html__( 'Button Color', 'sports-blogger' ),
    'section'     => 'banner_section',
    'choices'     => [
        'btn_bg'    => esc_html__( 'Background Color', 'sports-blogger' ),
        'btn_text'   => esc_html__( 'Text Color', 'sports-blogger' ),
        'btn_hover_bg'   => esc_html__( 'Background Hover Color', 'sports-blogger' ),
        'btn_hover_text'   => esc_html__( 'Text Hover Color', 'sports-blogger' ),
    ],
    'transport' => 'auto',
    'default'     => [
        'btn_bg'    => '#f00000',
        'btn_text'   => '#ffffff',
        'btn_hover_bg'   => '#000000',
        'btn_hover_text'   => '#ffffff',
    ],
] );

