<?php

/* 

    @Author : Jonathan Gauvin 
    @Date : 19/09/2021
    @email : jonathanfrt97480@hotmail.fr
    Page created for the company VBP DEPOT SERVICES to be integrated into a Wordpresse


*/
get_header();
?>

<div class="content-mobile-menu" id="res-block">
    <ul class="mobile-menu">
        <li><a href="#hero-home">Accueil</a> </li>
        <hr>
        <li><a href="#contact">Contact</a> </li>
        <hr>
        <li><a href="#organigramme">Organigramme</a> </li>
        <hr>
        <li><a href="#depotage">Demande de dépotage</a> </li>
        <hr>
        <li>Connexion</li>
    </ul>
</div>

<div class="content">
    <div class="hero-home" id="#hero-home">
        <h1 id="title_hero_home">
            <?= titel_hero_home() ?>
        </h1>
    </div>
    <section class="center-content">

        <div class="presentation">
            <h2>PRÉSENTATION</h2>
            <p id="texte_presentation"> <?= texte_presentation() ?></p>
        </div>
        <div class="block">
            <div class="info-block if3 left">
                <span>Nos prestation</span>
                <div>
                    <p id="texte_prestation">
                        <?= texte_prestation() ?>
                    </p>
                    <span>
                        <img src="<?= get_template_directory_uri() . '/Assets/img/prestations-img.webp'  ?>  " width="214px" height="214px" alt="persentation image">
                    </span>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="info-block if1 right">
                <span>Toujours à votre disposition</span>
                <div>
                    <p id="texte_disposition">
                        <?= texte_disposition() ?>
                    </p>
                    <span>
                        <img src="<?= get_template_directory_uri() . '/Assets/img/ecoute-img.webp' ?>" width="214px" height="214px" alt="ecoute image">
                    </span>
                </div>
            </div>
        </div>

        <div>
            <div class="info-block if2 left">
                <span>Nos garanties</span>
                <div>
                    <p id="texte_garanties">
                        <?= texte_garanties() ?>
                    </p>
                    <span>
                        <img src="<?= get_template_directory_uri() . '/Assets/img/garanti-img.webp' ?> " width="214px" height="214px" alt="garanti image">
                    </span>
                </div>
            </div>

    </section>

    <section class="contact" id="contact">

        <h3>Formulaire de contact</h3>
        <div class="contact-presentation">
            <?= do_shortcode('[forminator_form id="18"]') ?>

            <div class="form-back-pic">

            </div>
        </div>

    </section>

    <section class="organigramme" id="organigramme">

        <h4>Organigramme</h4>
        <div class="block-card">
            <div class="card c1">

                <span class="name-card">
                    Jaxson Levin
                </span>
                <div class="info-card">
                    <div><span class="avatar-card" style="background-image: url(<?= get_template_directory_uri() . '/Assets/svg/avatar.svg' ?>);"></span>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt viverra nibh mattis.
                    </p>

                </div>


            </div>
            <div class="card c2">

                <span class="name-card">
                    Jaxson Levin
                </span>
                <div class="info-card">

                    <div><span class="avatar-card" style="background-image: url(<?= get_template_directory_uri() . '/Assets/svg/avatar.svg' ?>);"></span>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt viverra nibh mattis.
                    </p>

                </div>


            </div>
            <div class="card c3">

                <span class="name-card">
                    Jaxson Levin
                </span>
                <div class="info-card">

                    <div>
                        <span class="avatar-card" style="background-image: url(<?= get_template_directory_uri() . '/Assets/svg/avatar.svg' ?>);"></span>
                    </div>
                    <p>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt viverra nibh mattis.
                    </p>

                </div>


            </div>
        </div>


    </section>

    <section class="depotage" id="depotage">

        <h5>Formulaire de demande de dépotage</h5>
        <?= do_shortcode('[forminator_form id="17"]'); ?>

    </section>
</div>

<?php
get_footer();
?>