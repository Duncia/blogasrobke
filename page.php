<?php
/*
PAGE template.

- Used when not page template is selected
*/
?>

<?php get_header(); ?>

<main class="container">
    <section class="container__inner">
        
        <?php if (have_posts()) :
            while (have_posts()) : the_post();?>

            <?php the_content(); ?>
        <?php endwhile;
        else :
            _e('Nothing to display...', 'blogasrobke');
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>