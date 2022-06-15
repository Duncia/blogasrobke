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
            <h1>I am Robkė</h1>
            <p>Sometimes I might be a rebellious badass, but in most cases I am friendly and hard working person. I have vast experience working with websites and content. Welcome to my blog!</p>
            <a href="http://localhost/blogasrobke/all/"><button class="btn btn--red">Read articles</button></a>
        </div>
        <figure class="flex-2-child-50 txt-center">
            <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/home-hero-image.png'; ?>" alt="Home hero image"/>
        </figure>
    </div>
</section>
<section class="container pt-lr pb-lr">
    <div class="container__inner">
        <div class="cs-boxes">
            <div class="cs-box cs-box--yellow">
                <a href="#">
                    <p class="box__text box__text--1">Take a break and read all articles by clicking here!</p>
                    <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/superman.webp'; ?>" alt="Man showing OK"/>
                </a>
            </div>
            <div class="cs-box cs-box--red">
                <a href="#">
                    <p class="box__text box__text--2">Check the newest article by clicking here or on the speech bubble!</p>
                    <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/woman-yellow-dress.webp'; ?>" alt="Woman"/>
                    <p class="text__bubble">Something fresh!</p>
                </a>
            </div>
            <div class="cs-box cs-box--purple">
                <a href="#">
                    <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/poof.webp'; ?>" alt="Poof"/>
                    <p class="box__text box__text--1">Got your attention? Click here to read more about me!</p>
                </a>
            </div>
            <div class="cs-box cs-box--blue">
                <a href="#">
                    <p class="box__text box__text--2">I am web, CMS, WordPress developer with content and CRM skills! </p>
                    <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/man-showing-ok.webp'; ?>" alt="Woman"/>
                    <p class="text__bubble">Let's work together?!</p>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>