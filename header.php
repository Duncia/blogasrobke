<?php
/*
Website HEADER part.

- Includes <head> section
- Top header section with logo and menus
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5KKS5TW');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KKS5TW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="container header">
        <div class="container__inner">
            <nav class="header__menu" id="header__menu">
                <?php $args = array(
                'theme_location' => 'header-meniu');
                wp_nav_menu($args); ?>
            </nav>
            <div class="header__burger" id="burger">
                <div class="header__burger__middle" id="burger__middle"></div>
            </div>
        </div>
        <div class="main-menu main-menu--close" id="main-menu">
            <nav>
                <?php $argsMain = array(
                'theme_location' => 'main-meniu');
                wp_nav_menu($argsMain); ?>
            </nav>
        </div>
    </header>