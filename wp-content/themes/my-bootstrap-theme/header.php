<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- نوار ناوبری -->
<nav class="navbar">
        <a href="#" class="logo">لوگو</a>
        <button class="menu-toggle" id="menuToggle">☰</button>
        <ul class="menu" id="menu">
            <li><a href="#home">خانه</a></li>
            <li><a href="#about">درباره ما</a></li>
            <li><a href="#services">خدمات</a></li>
            <li><a href="#contact">تماس با ما</a></li>
        </ul>
    </nav>

