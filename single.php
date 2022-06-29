<?php
/*
SINGLE POST template.

- Used as universal post template for standard and custom post types.
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) :
        while (have_posts()) : the_post();?>

<main class="single" id="post-<?php the_ID(); ?>">  
    <section class="container single__banner d-flex-2 pt-sm pb-sm">
        <div class="flex-2-child-50">
            <div class="text">
                <h4><?php the_title(); ?></h4>
                <?php the_excerpt(); ?>
            </div>
        </div>
        <figure class="flex-2-child-50 txt-center">
            <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
        </figure>
    </section>
    <section class="container__inner container__inner--page">
        <?php the_content(); ?>    
        <?php
            if(get_locale() === 'lt_LT'){
                echo '<h4 class="pt-sm pb-sm"><a href="https://blogasrobke.eu/lt/visi/">#Visi straipsniai</a></h4>';
            } else {
                echo '<h4 class="pt-sm pb-sm"><a href="https://blogasrobke.eu/all/">#All articles</a></h4>';
            };
        ?>
    </section>
</main>
<?php   endwhile;
    endif; ?>
    
<?php get_footer(); ?>