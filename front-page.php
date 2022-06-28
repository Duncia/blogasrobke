<?php 
/* Template Name: Home page */

/*
HOME PAGE template
- Static page with Advanced Custom Fields
- Posibility to select as template in Gutenberg page builder
 */
?>

<?php get_header(); ?>

<section class="container hero">
    <div class="container__inner d-flex-2 pt-sm pb-sm">
        <div class="hero__content flex-2-child-50">
            <h1><?php the_field('top_title');?></h1>
            <p><?php the_field('top_subtitle');?></p>
            <a href="<?php the_field('url_top_button');?>"><button class="btn btn--red"><?php the_field('text_top_button');?></button></a>
        </div>
        <figure class="flex-2-child-50 txt-center">
            <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/home-hero-image.png'; ?>" alt="<?php _e('Home page top image', 'blogasrobke'); ?>"/>
        </figure>
    </div>
</section>

<section class="container pt-lr pb-lr">
    <div class="container__inner">
        <div class="cs-boxes">
            <div class="cs-box cs-box--yellow">
                <a href="<?php the_field('url_yellow_box');?>">
                    <p class="box__text box__text--1"><?php the_field('text_yellow_box');?></p>
                    <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/superman.webp'; ?>" alt="<?php _e('Home page superman image', 'blogasrobke'); ?>"/>
                </a>
            </div>
            <div class="cs-box cs-box--red">

            <?php $newestPost = new WP_Query(array('post_type'=> array('post','web','experiences'), 'post_status'=>'publish', 'posts_per_page'=>1)); ?>
            <?php if ( $newestPost->have_posts() ) : ?>
                <?php while ( $newestPost->have_posts() ) : $newestPost->the_post(); ?>

                <a href="<?php the_permalink(); ?>">
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
                    <p class="box__text box__text--2"><?php the_field('text_red_box');?></p>
                    <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/woman-yellow-dress.webp'; ?>" alt="<?php _e('Home page woman image', 'blogasrobke'); ?>"/>
                    <p class="text__bubble"><?php the_field('bubble_text_red_box');?></p>
                </a>
            </div>
            <div class="cs-box cs-box--purple">
                <a href="<?php the_field('url_purple_box');?>">
                    <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/poof.webp'; ?>" alt="<?php _e('Home page poof image', 'blogasrobke'); ?>"/>
                    <p class="box__text box__text--1"><?php the_field('text_purple_box');?></p>
                </a>
            </div>
            <div class="cs-box cs-box--blue">
                <a href="<?php the_field('url_blue_box');?>">
                    <p class="box__text box__text--2"><?php the_field('text_blue_box');?></p>
                    <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/man-showing-ok.webp'; ?>" alt="<?php _e('Home page man image', 'blogasrobke'); ?>"/>
                    <p class="text__bubble"><?php the_field('bubble_text_blue_box');?></p>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>