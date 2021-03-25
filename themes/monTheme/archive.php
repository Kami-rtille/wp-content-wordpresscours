<?php
/*
Template Name: Page d'archives
*/
?>
<?php get_header(); ?>
<div class='archive'>
        <h2><a href="<?php the_permalink() ?>" class="big_title" title="<?php the_title(); ?>">
        <?php the_title() ?> </a>
        </h2>
        <?php

                $cats = get_categories();
                foreach ($cats as $cat) {

                // query_posts('showposts=1000&cat='.$cat->cat_ID);

        ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="post__meta"> 
                <p class="comment">
                Publié le <?php the_date(); ?>
                </p>
        </div> 
<?php endwhile; endif; ?>


        <h2><?php echo $cat->cat_name; ?></h2>

        <ul>
        <?php while (have_posts()) : the_post(); ?>
        <li style="font-weight:normal !important;">
        <a href="<?php the_permalink() ?>" class="small_title"><?php the_title(); ?></a> 
        <br/> <p class="comment">- Commentaires (<?php echo $post->comment_count ?>)</p>
        </li>
        <?php endwhile;  ?>
        </ul>

        <?php } ?>

</div>
</div>
<?php get_footer(); ?>