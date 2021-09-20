<?php
get_header();
?>

<div class="content texte-primary post-block">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post();   ?>
            <section class="post">
                <div class="major">
                    <span class="date"><?php the_date() ?></span>
                    <h1><?php the_title()  ?></h1>
                </div>
                <div class="image main"><img src="<?php the_post_thumbnail_url() ?>" alt="" /></div>
                <?php the_content() ?>
            </section>
        <?php endwhile ?>

    <?php else : ?>
        <h1>Pas d'article</h1>
    <?php endif ?>
    <!-- Post -->
</div>
<?php
get_footer();
?>