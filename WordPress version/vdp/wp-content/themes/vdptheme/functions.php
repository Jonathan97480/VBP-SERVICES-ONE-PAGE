<?php
/* 

    @Author : Jonathan Gauvin 
    @Date : 19/09/2021
    @email : jonathanfrt97480@hotmail.fr
    Page created for the company VBP DEPOT SERVICES to be integrated into a Wordpresse


*/
require_once('options/themeCustomization.php');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    /* Ajout du menu */
    add_theme_support('menus');
    register_nav_menu('header-menu', 'En tête du menu');
});




add_action('wp_enqueue_scripts', function () {

    /* Css */
    wp_register_style('vdp-main',  get_template_directory_uri() . '/Assets/css/style.css');
    wp_enqueue_style('vdp-main');

    /* Scripts */

    wp_register_script('vdp-reveal',  get_template_directory_uri() . '/Assets/js/scrollReveal.js"', [], false, true);
    wp_register_script('vdp-site',  get_template_directory_uri() . '/Assets/js/app.js"', [], false, true);

    wp_enqueue_script('vdp-reveal');
    wp_enqueue_script('vdp-site');
});
