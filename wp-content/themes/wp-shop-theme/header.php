<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<div class="dark_layout"></div>
<header class="header">
    <div class="nav-bar">
        <div class="content-container">
            <div class="nav-bar-wrap">
                <div class="nav-bar__logo"><a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/header/logo.png' ?>" alt="logo"></a></div>
                <div class="nav-bar__menu">
                    <?php
                    wp_nav_menu( [
                    'theme_location'  => 'primary',
                    'menu'            => '',
                    'container'       =>  null,
                    'menu_class'      => 'nav-bar__menu-container'

                    ] );
                    ?>
                    <div class="nav-bar__menu-basket"><img src="<?php echo get_template_directory_uri() . '/assets/img/header/basket.svg' ?>" alt=""></div>
                   <div class="burger">
                       <span></span>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero">
        <h1 class="hero__header">Our clothing , your comfort</h1>
        <p class="hero__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci debitis dolor eius excepturi itaque odit quia recusandae repudiandae temporibus totam!</p>
    </div>
    <div class="arrow">
        <img src="<?php echo get_template_directory_uri() . "/assets/img/header/arrow.svg" ?>" alt="arrow" class="arrow__img">
    </div>
</header>

