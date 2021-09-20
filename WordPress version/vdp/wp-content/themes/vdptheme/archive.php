<?php

/* 

    @Author : Jonathan Gauvin 
    @Date : 19/09/2021
    @email : jonathanfrt97480@hotmail.fr
    Page created for the company VBP DEPOT SERVICES to be integrated into a Wordpresse


*/
get_header();

$description = get_the_archive_description();
?>

<?php if (have_posts()) : ?>

	<header class="page-header alignwide">
		<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
		<?php if ($description) : ?>
			<div class="archive-description"><?php echo wp_kses_post(wpautop($description)); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

	<?php while (have_posts()) : ?>
		<?php the_post(); ?>
		<?php get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt')); ?>
	<?php endwhile; ?>

	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part('template-parts/content/content-none'); ?>
<?php endif; ?>

<?php get_footer(); ?>