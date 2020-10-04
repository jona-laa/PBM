<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta property="og:image" content="<?php echo header_image(); ?>" />
    <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
    <div class="header-container">
        <nav class="main-menu">
            <a href="" onClick=event.preventDefault() id="main-menu-toggle">
                <svg viewBox="0 0 100 80" width="40" height="40">
                    <rect width="80" height="10"></rect>
                    <rect y="25" width="80" height="10"></rect>
                    <rect y="50" width="80" height="10"></rect>
                </svg>
            </a>
            <?php wp_nav_menu();?>
        </nav>

        <div class="brand">
            <?php
                echo '<a href="' . home_url() . '" class="brand-name">' . get_bloginfo('name') . '</a>';
            ?>
            <div class="header-social-media">
            <?php get_social_media() ?>
            </div>
        </div>
    </div>

    </header>
    <main>