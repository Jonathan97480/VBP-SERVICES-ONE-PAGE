<?php

/**
 * Template Name: Organigramme
 */

?>

<?php
get_header();

?>

<div class="content">
    <?php


    echo do_shortcode('[easytimetable id=1 ]')

    /*   $pages = get_pages();
    foreach ($pages as $page) {
        $option = '<option value="' . get_page_link($page->ID) . '" class="textWhite">';
        $option .= $page->post_title;
        $option .= $page->post_content;
        $option .= '</option>';
        echo $option;
    } */
    ?>


</div>
<?php
get_footer();
?>