<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorit</title>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.14/dist/js/uikit-icons.min.js"></script>
    <?php wp_head();?>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header__wrapper">
            <div class="header__logo uk-width-1-3">
                <a href="">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/logo_favorit.svg" alt="">
                </a>
            </div>
            <div class="header__info uk-width-2-3">
                <div class="header__support uk-width-1-1">
                    <a href="#">Support</a>
                    <a href="" class="register"><img src="<?php bloginfo('template_directory');?>/assets/img/reg.svg" alt="">Register</a>
                    <a href="#" class="lang"><img src="<?php bloginfo('template_directory');?>/assets/img/lg.svg" alt="">En</a>
                </div>
                <nav class="nav uk-width-1-1">
                    <ul class="main__menu">
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Casino games</a><img src="assets/img/arrow_1.svg" alt=""></li>
                        <li><a href="">News</a><img src="assets/img/arrow_1.svg" alt=""></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>