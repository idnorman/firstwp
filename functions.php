<?php

    if(!function_exists('firstwp_setup')){
        function firstwp_setup(){
            load_theme_textdomain('fistwp',get_template_directory() . '/languages' );
            add_theme_support('automatic-feed-links' );
            add_theme_support('title-tag' );
            add_theme_support( 'post-thumbnails' );
            add_theme_support('custom-background', apply_filters('firstwp_custom_background_args', array(
                'default-color' => '#ffffff',
                'default-image' => '',
            )) );
            add_theme_support('html5', array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ) );
            add_theme_support('customize-selective-refresh-widgets' );
            add_theme_support('custom-logo',array(
                'height'    => 250,
                'width'     => 250,
                'flex-width'    => true,
                'flex-height'   => true,
            ) );
            add_theme_support('custom-header',array(
                'flex-width'    => true,
                'width'         => 1600,
                'flex-height'   => true,
                'height'        => 450,
                'default-image' => '',
            ) );
            add_theme_support('post-formats',array('aside','gallery','link','image','quote','video','audio') );

            register_nav_menus(array(
                'primary'   => esc_html__('Primary', 'firstwp'),
                'footer'    => esc_html__('Footer Menu', 'firstwp')
            ));

        }
    }

    add_action('after_setup_theme','firstwp_setup');

    function firstwp_content_width(){
        $GLOBALS['content_width'] = apply_filters('firstwp_content_width',1170 );
    }

    add_action('after_setup_theme','firstwp_content_width', 0 );

    function firstwp_sidebar_widgets_init(){
        register_sidebar(array(
            'name'          => esc_html__('Sidebar','firstwp' ),
            'id'            => 'default-sidebar',
            'description'   => esc_html__('Add widgets here.','firstwp' ),
            'before_widget' => '<section id="%1$s" class="%1$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ) );
    }

    add_action('widgets_init','firstwp_sidebar_widgets_init' );

    function firstwp_public_scripts(){

    }
    add_action('wp_enqueue_scripts','firstwp_public_scripts' );

    function firstwp_admin_scripts(){

    }
    add_action('wp_enqueue_scripts','firstwp_admin_scripts' );