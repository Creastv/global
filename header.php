<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#575289">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php get_template_part('templates-parts/header/header', 'cookies-bar'); ?>

    <header  id="header" class="js-header" itemscope itemtype="http://schema.org/WPHeader">
        <div id="header-top" >
            <div class="container">
                <div class="row">
                    <?php get_template_part('templates-parts/header/header', 'contact'); ?>
                </div>
            </div>
        </div>
        <div id="header-bottom">
            <div id="navbar" class="js__navbar">
                <div class="container">
                    <div class="row">
                        <?php get_template_part('templates-parts/header/header', 'brand'); ?>
                        <?php get_template_part('templates-parts/header/header', 'nav'); ?>
                        <?php get_template_part('templates-parts/header/header', 'cta'); ?>
                        <?php get_template_part('templates-parts/header/header', 'burger'); ?>
                    </div>
                </div>
            </div>
            <?php if(is_front_page()) : ?> 
            <?php else : ?>
            <div class="container">
                <div class="row">
                    <?php get_template_part('templates-parts/header/header', 'title'); ?>
                </div>
            </div>
            <svg class="ornament" xmlns="http://www.w3.org/2000/svg" width="602.675" height="310.415" viewBox="0 0 602.675 310.415">
            <g transform="translate(-3338.334 -95)" opacity="0.4">
                <path  d="M3553.274,95h136.04l-214.94,307.88h-136.04Z" fill="#fff" opacity="0.102"/>
                <path  d="M3688.314,95h115.034L3591.1,405.415H3476.064Z" fill="#fff" opacity="0.2"/>
                <path d="M3804.963,95h136.046L3727.03,404.57H3593.091Z" fill="#fff" opacity="0.6"/>
            </g>
            </svg>
            <?php endif; ?>
        </div>
        <?php if(is_front_page()) : ?> 
        <?php else : ?>
       <?php  get_template_part('templates-parts/header/header', 'extra'); ?>
       <?php endif; ?>
    </header>
    <main id="main" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="row">
