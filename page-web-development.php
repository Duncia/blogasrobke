<?php 
/* Template Name: Web dev page */

/*
WEB DEV page template
- Page template with Advanced Custom Fields
- Posibility to select as template in Gutenberg page builder
 */
?>

<?php get_header(); ?>

<section class="container about">
    <div class="container__inner d-flex-2 txt-center">
        <div class="flex-2-child-50">
            <h1 class="pb-sm">Web development</h1>
        </div>
        <figure class="flex-2-child-50">
            <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/web-dev.webp'; ?>" alt="Web development"/>
        </figure>
    </div>
</section>

<main class="container about-content">
    <section class="container__inner container__inner--page">
        <?php the_content(); ?>
    </section>
</main>

<?php get_footer(); ?>