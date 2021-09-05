<?php get_header(); ?>
<nav class="padding left">
    <?php wp_list_pages('title_li='); ?>
    </nav>
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <main>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
        
    </main>
    <?php
        endwhile;
        endif;
        ?>
<?php wp_pagenavi(); ?>
<?php get_footer(); ?>