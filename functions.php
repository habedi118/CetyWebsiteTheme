<?php
//Include all variables that needed
require_once(get_template_directory() . '/inc/Config.php');


/* Actions */

//theme features support and defualts
add_action('after_setup_theme', function () {
    //custom logo setup
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        )
    );

    //nav bar menu
    register_nav_menus(
        array(
            HeaderNavigationMenuLocation => __('Header Navigation Menu', 'CetyWebsiteTheme'),
            HeaderSocialMediaMenuLocation => __('Header Social Menu', 'CetyWebsiteTheme'),
            FooterSocialMediaMenuLocation => __('Footer Social Menu', 'CetyWebsiteTheme'),
        )
    );

    //post image support(featured image)
    add_theme_support('post-thumbnails');
});


//register all styles and scripts
add_action('template_redirect', function () {
    require_once(get_template_directory() . '/inc/StylesAndScriptsRegistration.php');
});
