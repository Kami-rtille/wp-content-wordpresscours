<?php get_header(); ?>

<div class="home">
    <div class="contents">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <article class="post">
            <div class="post__content">
            </div>
        </article>
        <div class="text-post">
            <h2 class="big_title"><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
     

            <!-- <div class="post__meta"> // post__meta non supprimer
                <p class="comment">
                    Publié le <?php the_date(); ?>
                </p>
            </div> -->
        

        <div class="comments-template"> 
            <?php comments_template(); ?> 
        </div>


        

        <?php endwhile; endif; ?>
    </div>


<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>

