<?php
/* 

    @Author : Jonathan Gauvin 
    @Date : 19/09/2021
    @email : jonathanfrt97480@hotmail.fr
    Page created for the company VBP DEPOT SERVICES to be integrated into a Wordpresse


*/
get_header();
?>


<!-- Posts -->
<div class="content texte-primary post-block">


    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post();   ?>
            <article>
                <div>
                    <span class="date"><?php the_date() ?></span>
                    <h2><a href="#"><?php the_title() ?></a></h2>
                </div>
                <a href="#" class="image fit"><img src="<?php get_the_post_thumbnail_url() ?>" alt="" /></a>
                <p><?php the_excerpt()  ?></p>
                <ul class="actions special">
                    <li><a href="<?php the_permalink() ?>" class="button">Full Story</a></li>
                </ul>
            </article>
        <?php endwhile ?>

    <?php else : ?>
        <h1>Pas d'article</h1>
    <?php endif ?>

</div>

<!-- Footer -->
<footer>

</footer>

</div>

<?php
get_footer();
?>