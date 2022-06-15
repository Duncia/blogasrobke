<?php
/*
Basic 404 page template

- Few strings ready for translations
*/
?>

<?php get_header(); ?>

    <section class="container">
        <div class="container__inner">
            <h1 class="heading heading--1"><?php _e('Ooops error occured... Nothing to display', 'blogasrobke'); ?></h1>
        </div>
    </section>
    
<?php get_footer(); ?>