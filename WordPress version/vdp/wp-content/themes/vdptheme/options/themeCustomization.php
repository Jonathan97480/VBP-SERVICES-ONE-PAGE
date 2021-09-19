<?php
/* 

    @Author : Jonathan Gauvin 
    @Date : 19/09/2021
    @email : jonathanfrt97480@hotmail.fr
    Page created for the company VBP DEPOT SERVICES to be integrated into a Wordpresse


*/
add_action('customize_register', function (WP_Customize_Manager $manager) {

    /* Define section */

    $manager->add_section('VBP_theme_hero_home', [
        'title' => 'Personnalisation Hero Home',
        'panel' => '',
    ]);

    /* title_hero_home  */
    $manager->add_setting('title_hero_home', [
        'default' => 'Depuis 2019 VBP DÉPOT\'SERVICES fournit des services de qualité à ses clients',
        'transport' => 'postMessage'

    ]);

    $manager->add_control('title_hero_home', [
        'section' => 'VBP_theme_hero_home',
        'seting' => 'title_hero_home',
        'label' => 'Tire Hero home',
        'type' => 'textarea',


    ]);
    $manager->selective_refresh->add_partial('title_hero_home', array(
        'selector' => '#title_hero_home',
        'render_callback' => "titel_hero_home",
    ));

    /* Présentation texte  */
    $manager->add_section('VBP_theme_presentation', [
        'title' => 'Personnalisation du Texte de présentation',
    ]);
    $manager->add_setting('texte_presentation', [
        'default' => 'Depuis 2019, VBP DÉPOT\'SERVICES fournit des services de qualité à ses clients en leur proposant les prestations professionnelles qu’ils méritent. Nous mettons à votre disposition du personnel qualifié dans le dépotage, l’empotage de marchandises et le tri de fruits et légumes. N\'hésitez pas à nous contacter en suivant ce lien.',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('texte_presentation', [
        'section' => 'VBP_theme_presentation',
        'seting' => 'texte_presentation',
        'label' => 'Présentation texte',
        'type' => 'textarea',

    ]);

    $manager->selective_refresh->add_partial('texte_presentation', array(
        'selector' => '#texte_presentation',
        'render_callback' => "texte_presentation",
    ));
    /* Les services */
    $manager->add_section('VBP_theme_services', [
        'title' => 'Personnalisation des services',
    ]);
    /* Présentation texte  */
    /* Nos prestation*/
    $manager->add_setting('texte_prestation', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed ipsum diam quis blandit platea tellus aliquet. Nunc id turpis morbi at at vel. Pellentesque facilisis et turpis non diam convallis. Nulla odio at laoreet non amet sit a. Gravida leo tempor turpis ultrices ultrices in. Adipiscing aenean tellus in adipiscing enim, ullamcorper. Nam lorem felis, euismod facilisi gravida. Ut quis tempor nisi neque etiam. Cras nisl suspendisse nec habitant et porttitor. Lorem arcu mi condimentum rhoncus. Pharetra iaculis faucibus lectus purus urna vel in purus. Ac adipiscing massa nullam elit senectus. Adipiscing venenatis.',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('texte_prestation', [
        'section' => 'VBP_theme_services',
        'seting' => 'texte_prestation',
        'label' => 'prestation texte',
        'type' => 'textarea',

    ]);

    $manager->selective_refresh->add_partial('texte_prestation', array(
        'selector' => '#texte_prestation',
        'render_callback' => "texte_prestation",
    ));
    /* Nos prestation*/
    $manager->add_setting('texte_disposition', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed ipsum diam quis blandit platea tellus aliquet. Nunc id turpis morbi at at vel. Pellentesque facilisis et turpis non diam convallis. Nulla odio at laoreet non amet sit a. Gravida leo tempor turpis ultrices ultrices in. Adipiscing aenean tellus in adipiscing enim, ullamcorper. Nam lorem felis, euismod facilisi gravida. Ut quis tempor nisi neque etiam. Cras nisl suspendisse nec habitant et porttitor. Lorem arcu mi condimentum rhoncus. Pharetra iaculis faucibus lectus purus urna vel in purus. Ac adipiscing massa nullam elit senectus. Adipiscing venenatis.',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('texte_disposition', [
        'section' => 'VBP_theme_services',
        'seting' => 'texte_disposition',
        'label' => 'disposition texte',
        'type' => 'textarea',

    ]);
    $manager->selective_refresh->add_partial('texte_disposition', array(
        'selector' => '#texte_disposition',
        'render_callback' => "texte_disposition",
    ));
    /* Nos garanties*/
    $manager->add_setting('texte_garanties', [
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed ipsum diam quis blandit platea tellus aliquet. Nunc id turpis morbi at at vel. Pellentesque facilisis et turpis non diam convallis. Nulla odio at laoreet non amet sit a. Gravida leo tempor turpis ultrices ultrices in. Adipiscing aenean tellus in adipiscing enim, ullamcorper. Nam lorem felis, euismod facilisi gravida. Ut quis tempor nisi neque etiam. Cras nisl suspendisse nec habitant et porttitor. Lorem arcu mi condimentum rhoncus. Pharetra iaculis faucibus lectus purus urna vel in purus. Ac adipiscing massa nullam elit senectus. Adipiscing venenatis.',
        'transport' => 'postMessage'
    ]);

    $manager->add_control('texte_garanties', [
        'section' => 'VBP_theme_services',
        'seting' => 'texte_garanties',
        'label' => 'garanties texte',
        'type' => 'textarea',

    ]);

    $manager->selective_refresh->add_partial('texte_garanties', array(
        'selector' => '#texte_garanties',
        'render_callback' => "texte_garanties",
    ));

    /* Réseaux sociaux  */
    $manager->add_section('Reseaux_sociaux', [
        'title' => 'Réseaux sociaux
',
    ]);

    /* Facebook  */
    $manager->add_setting('Reseaux_facebook', [
        'default' => '#',
        'transport' => 'postMessage'
    ]);
    $manager->add_control('Reseaux_facebook', [
        'section' => 'Reseaux_sociaux',
        'seting' => 'Reseaux_facebook',
        'label' => "l'adresse de votre facebook",


    ]);

    $manager->selective_refresh->add_partial('Reseaux_facebook', array(
        'selector' => '#Reseaux_facebook',
        'render_callback' => "Reseaux_facebook",
    ));

    /* Linkedin */
    $manager->add_setting('Reseaux_linkedin', [
        'default' => '#',
        'transport' => 'postMessage'
    ]);
    $manager->add_control('Reseaux_linkedin', [
        'section' => 'Reseaux_sociaux',
        'seting' => 'Reseaux_linkedin',
        'label' => "l'adresse de votre linkedin",

    ]);

    $manager->selective_refresh->add_partial('Reseaux_linkedin', array(
        'selector' => '#Reseaux_linkedin',
        'render_callback' => "Reseaux_linkedin",
    ));
});



/* add js  */
add_action('customize_preview_init', function () {
    wp_enqueue_script('montheme_apparence', get_template_directory_uri() . '/assets/js/themeCustomization.js', ['jquery', 'customize-preview'], '', true);
});



/*Function to call in the html */
function titel_hero_home()
{
    echo get_theme_mod('title_hero_home');
}
function texte_presentation()
{
    echo get_theme_mod('texte_presentation');
}
function texte_disposition()
{
    echo get_theme_mod('texte_disposition');
}
function texte_garanties()
{
    echo get_theme_mod('texte_garanties');
}
function texte_prestation()
{
    echo get_theme_mod('texte_prestation');
}
function url_facebook()
{
    echo get_theme_mod('Reseaux_facebook');
}
function url_linkedin()
{
    echo get_theme_mod('Reseaux_linkedin');
}
