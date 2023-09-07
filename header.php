<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#000">
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
            <div class="container-fluid">
                <div class="row">
                    <?php get_template_part('templates-parts/header/header', 'contact'); ?>
                </div>
            </div>
        </div>
        <div id="header-bottom">
            <div id="navbar" class="js__navbar">
                <div class="container-fluid">
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
       <svg class="ornament" xmlns="http://www.w3.org/2000/svg" width="603.529" height="310.415" viewBox="0 0 603.529 310.415">
        <g id="Group_11582" data-name="Group 11582" transform="translate(1248.563 502)" opacity="0.4">
            <path id="Path_6982" data-name="Path 6982" d="M-1031.957-501.958h136.04L-1108.25-191.625l-140.313-.333Z" fill="#fff" opacity="0.102" style="isolation: isolate"/>
            <path id="Path_6983" data-name="Path 6983" d="M-896.02-502h115.034L-993.234-191.585H-1108.27Z" fill="#fff" opacity="0.2" style="isolation: isolate"/>
            <path id="Path_6984" data-name="Path 6984" d="M-781.079-501.646h136.045l-213.978,309.57H-992.951Z" fill="#fff" opacity="0.6" style="isolation: isolate"/>
        </g>
        </svg>

            <?php endif; ?>
        </div>
        <?php if(is_front_page()) : ?> 
        <?php else : ?>
       <?php  get_template_part('templates-parts/header/header', 'extra'); ?>
       <?php endif; ?>
    </header>
    <main id="main" >
        <div class="container">
            <div class="row">
