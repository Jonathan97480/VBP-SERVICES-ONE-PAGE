<?php

/* 

    @Author : Jonathan Gauvin 
    @Date : 19/09/2021
    @email : jonathanfrt97480@hotmail.fr
    Page created for the company VBP DEPOT SERVICES to be integrated into a Wordpresse


*/
?>


<footer>
    <span class="socials-icon-footer">
        <a href="<?= url_facebook() ?>"><span class="facebook-icon" id="Reseaux_facebook_footer"></span></a>
        <a href="<?= url_linkedin() ?>"><span class="linkedin-icon" id="Reseaux_linkedin_footer"></span></a>
    </span>
    <span class="compagny">©2021 VBP Compagny intégration : FHGjFH</span>
    <span class="logo header-logo"><img src="<?= get_template_directory_uri() . ' /Assets/svg/logo.svg' ?>" width="194px" height="64px" alt="logo footer"></span>
</footer>
<?php
wp_footer()
?>


</html>