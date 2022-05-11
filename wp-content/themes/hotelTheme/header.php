<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>Document</title>
</head>
<header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#000" fill-opacity="1" d="M0,160L120,154.7C240,149,480,139,720,138.7C960,139,1200,149,1320,154.7L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>
    <nav class="header__nav">
        <div class="logo">
            <a href="<?php echo home_url() ?>">
                <img src="<?= get_theme_file_uri() . '/images/logo-hotel.png' ?>" alt="">
            </a>
        </div>
        <?php wp_nav_menu(array('theme_location' => 'headerMenu')); ?>
    </nav>
</header>

<body>