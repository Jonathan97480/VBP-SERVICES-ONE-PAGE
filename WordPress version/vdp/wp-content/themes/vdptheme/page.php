<?php
/* 

    @Author : Jonathan Gauvin 
    @Date : 19/09/2021
    @email : jonathanfrt97480@hotmail.fr
    Page created for the company VBP DEPOT SERVICES to be integrated into a Wordpresse


*/
get_header();
?>


<!-- Featured Post -->
<article class="post featured">
    <header class="major">
        <span class="date">Aout 17 2021</span>
        <h2><a href="#">Philipe photographe</a></h2>
        <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
            facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
            amet nullam sed etiam veroeros.</p>
    </header>
    <a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
    <ul class="actions special">
        <li><a href="#" class="button large">Full Story</a></li>
    </ul>
</article>

<!-- Posts -->
<section class="posts">


    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post();   ?>
            <article>
                <header>
                    <span class="date"><?php the_date() ?></span>
                    <h2><a href="#"><?php the_title() ?></a></h2>
                </header>
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

</section>

<!-- Footer -->
<footer>

</footer>

</div>

<?php
get_footer();
?>