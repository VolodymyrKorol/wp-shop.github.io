<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>

<header class="header header-page">
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
                </div>
            </div>
        </div>
    </div>

</header>
