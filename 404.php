<?php
/*
Basic 404 page template

- Page not found text ready for translations
*/
?>

<?php get_header(); ?>

    <section class="container">
        <div class="container__inner">
            <h1 class="txt-center pt-lr pb-lr"><?php _e('Ooops error occured... <br><br><br>Nothing to display', 'blogasrobke'); ?></h1>
        </div>
    </section>
    
<?php get_footer(); ?>