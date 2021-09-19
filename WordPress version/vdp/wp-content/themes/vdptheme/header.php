<?php
/* 

    @Author : Jonathan Gauvin 
    @Date : 19/09/2021
    @email : jonathanfrt97480@hotmail.fr
    Page created for the company VBP DEPOT SERVICES to be integrated into a Wordpresse


*/

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Description -->
    <meta name="description" content="
         Depuis 2019 VBP DEPOT'SERVICES fournit des services de qualité à ses clients
    ">
    <meta property="og:image" content="<?= get_template_directory_uri() . 'Assets/logo.svg' ?>">
    <!-- FAVICON  -->
    <link rel="icon" href="<?= get_template_directory_uri() . '/Assets/img/favicon/favicon.ico' ?>" type="image/x-icon">
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() . '/Assets/img/favicon/favicon-16x16.png' ?>" size="16x16">
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() . '/Assets/img/favicon/favicon-32x32.png' ?>" size="32x32">
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() . '/Assets/img/favicon/favicon-96x96.png' ?>" tailles="96x96">
    <!-- apple favicon -->
    <link rel="apple-touch-icon" tailles="72x72" href="<?= get_template_directory_uri() . '/Assets/img/favicon/apple-icon-72x72.png' ?>">
    <link rel="apple-touch-icon" tailles="114x114" href="<?= get_template_directory_uri() . '/Assets/img/favicon/apple-icon-114x114.png' ?>">
    <link rel="apple-touch-icon" tailles="152x152" href="<?= get_template_directory_uri() . '/Assets/img/favicon/apple-icon-152x152.png' ?>">
    <!-- -------------- -->
    <!-- Css load -->
    <?= wp_head() ?>
    <!--  <link rel="preload" href="Assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
    <!-- Title Site -->
    <title>VBP DÉPOT'SERVICES</title>
</head>


<body>
    <header>
        <nav class="header-pc">
            <span class="logo header-logo"><img src="<?= get_template_directory_uri() . ' /Assets/svg/logo.svg' ?>" width="194px" height="64px" alt="logo header"></span>
            <ul class="header-menu">
                <li><a href="/vdp/#hero-home">Accueil</a> </li>
                <li><a href="/vdp/#contact">Contact</a> </li>
                <li><a href="/vdp/#organigramme">Organigramme</a> </li>

                <li><a href="#depotage">Demande de dépotage</a> </li>

                <li> <a href="page-de-connexion/">Connexion</a> </li>
                <li class="menu2">Option <ul>
                        <li>Organigramme</li>
                        <li>blog</li>
                        <li>Promotionelle</li>
                    </ul>
                </li>
            </ul>
            <span class="socials-icon">
                <a href="<?= url_facebook() ?>"><span class="facebook-icon" id="Reseaux_facebook_pc"></span></a>
                <a href="<?= url_linkedin() ?>"><span class="linkedin-icon" id="Reseaux_linkedin_pc"></span></a>
            </span>
            <span class="tablette-icon-menu tablette" onclick="ToggleResponceMenu()"></span>
        </nav>

    </header>
    <nav class="header-mobile">
        <span class="icon-mobile">
            <span class="tablette-icon-menu mobile" onclick="ToggleResponceMenu()"></span>
            <span>
                <a href="<?= url_facebook() ?>"><span class="facebook-icon" id="Reseaux_facebook_mobile"></span></a>
                <a href="<?= url_linkedin() ?>"><span class="linkedin-icon" id="Reseaux_linkedin_mobile"></span></a>
            </span>
        </span>

    </nav>
    <div class="content-mobile-menu" id="res-block">
        <ul class="mobile-menu">
            <li><a href="/vdp/#hero-home">Accueil</a> </li>
            <hr>
            <li><a href="/vdp/#contact">Contact</a> </li>
            <hr>
            <li><a href="/vdp/#organigramme">Organigramme</a> </li>
            <hr>
            <li><a href="/vdp/#depotage">Demande de dépotage</a> </li>
            <hr>
            <li> <a href="page-de-connexion">Connexion</a></li>
            <span class="menu2">

                <hr>
                <li>Organigramme</li>
                <hr>
                <li>blog</li>
                <hr>
                <li>Promotionelle</li>
            </span>
        </ul>
    </div>