<?php get_header(); ?>
<div class="home">
    <div class="contents">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<article class="post">
<?php the_post_thumbnail(); ?>

<h1 class="big_title"><?php the_title(); ?></h1>

<div class="post__meta">
    <span id="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?></span>
    <p class="comment">
    Publié le <?php the_date(); ?>
    par <?php the_author(); ?>
    Dans la catégorie <?php the_category(); ?>
    Avec les étiquettes <?php the_tags(); ?>
    </p>
</div>

<div class="post__content">
<?php the_content(); ?>
</div>
</article>
</div></div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

