
(function ($) {

    wp.customize('title_hero_home', (value) => {
        value.bind((newVal) => {
            $('#title_hero_home').text(newVal);
        });
    });

    wp.customize('texte_presentation', (value) => {
        value.bind((newVal) => {
            $('#texte_presentation').text(newVal);
        });
    });
    wp.customize('texte_prestation', (value) => {
        value.bind((newVal) => {
            $('#texte_prestation').text(newVal);
        });
    });
    wp.customize('texte_disposition', (value) => {
        value.bind((newVal) => {
            $('#texte_disposition').text(newVal);
        });
    });
    wp.customize('texte_garanties', (value) => {
        value.bind((newVal) => {
            $('#texte_garanties').text(newVal);
        });
    });

    wp.customize('Reseaux_facebook', (value) => {
        value.bind((newVal) => {
            $('#Reseaux_facebook_pc').attr('href', newVal);
            $('#Reseaux_facebook_mobile').attr('href', newVal);
            $('#Reseaux_facebook_footer').attr('href', newVal);

        });

    });


    wp.customize('Reseaux_instagram', (value) => {
        value.bind((newVal) => {
            $('#Reseaux_instagram_pc').attr('href', newVal);
            $('#Reseaux_instagram_mobile').attr('href', newVal);
            $('#Reseaux_instagram_footer').attr('href', newVal);

        });
    });


})(jQuery)