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
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
    <header class="container header">
        <div class="container__inner">
            <nav class="header__menu" id="header__menu">
                <ul>
                    <li><a href="#">LT</a></li>
                    <li><a href="#">All articles</a></li>
                    <li><a href="#">Home</a></li>
                </ul>
            </nav>
            <div class="header__burger" id="burger">
                <div class="header__burger__middle" id="burger__middle"></div>
            </div>
        </div>
        <div class="main-menu main-menu--close" id="main-menu">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All articles</a></li>
                    <li><a href="#">LT</a></li>
                </ul>
            </nav>
        </div>
    </header>