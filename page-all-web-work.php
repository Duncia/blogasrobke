<?php 
/* Template Name: Web & Work all */

/*
wEB AND WORK all articles template
- Posibility to select as template in Gutenberg page builder
- Used to displau web and work custom posts
 */
?>

<?php get_header(); ?>

<main class="all-articles">
    <?php get_template_part('template-parts/banner-articles');?> 

    <section class="container">
        <div class="container__inner pt-lr">
            <?php 
            $allPosts = new WP_Query(
                array(
                    'post_type'=> array('web'), 
                    'post_status'=>'publish',
                    'posts_per_page'=>-1
                )); 
            ?>
            <?php if ( $allPosts->have_posts() ) : ?>
                <?php while ( $allPosts->have_posts() ) : $allPosts->the_post(); ?>
                    <article class="all-articles__single pb-md">
                        <figure class="txt-center">
                            <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
                        </figure>
                        <div class="content">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>"><button class="btn btn--red"><?php _e('Read more', 'blogasrobke'); ?></button></a>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <h4 class="pt-md pb-md txt-center"><?php _e('Unfortunately no articles yet...', 'blogasrobke'); ?></h4>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>