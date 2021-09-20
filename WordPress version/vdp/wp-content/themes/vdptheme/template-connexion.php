<?php

/**
 * Template Name: Connexion
 */

?>
<?php
get_header();

?>
<div class="content">

    <div class="login-block">
        <h1>Connexion</h1>
        <?=

        do_shortcode('[forminator_form id="41"]');

        ?>
    </div>

</div>
<?php
get_footer();
?>