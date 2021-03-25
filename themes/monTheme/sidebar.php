<?php
/*
Template Name: Sidebar
*/
?>

<div class="sidebar">
    <p class='big_title'>Recherche</p>
    <?php get_sidebar('sidebar-1'); ?>

    <div class="search">
        <?php get_search_form(); ?>
    </div>

    <div class="preview_article">

        <p class='big_title'>Elections Récentes</p>
        <!-- Début de la Boucle. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <div class="article">
            <!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
            <h2><a href="<?php the_permalink(); ?>" class="semibold"><?php the_title(); ?></a></h2>

            <!-- Affiche la Date. -->
            <span class="date regular italic"> Publié le <?php the_time('j F Y'); ?></span>
        </div>

        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

        </div>
</div>