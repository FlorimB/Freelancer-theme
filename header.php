<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<!-- Site Header -->
<div class="bg-img">
    <div class="container">
        <header class="site-header">
            <div class="top-header">
                <h2 class="slogan">
                    <a href="<?php home_url(); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h2>
                <div class="color-mode">
                    <div class="social">
                        <a href="https://github.com/" target="_blank">
                            <img src="
                        <?php echo get_template_directory_uri(); ?>/assets/images/icon-github.png" alt="Github Icon">
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank">
                            <img src="
                        <?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin.png"
                                 alt="Linkedin Icon">
                        </a>
                        <a href="https://twitter.com/" target="_blank">
                            <img src="
                        <?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter.png" alt="Twitter Icon">
                        </a>
                        <a href="https://www.frontendmentor.io/" target="_blank">
                            <img src="
                        <?php echo get_template_directory_uri(); ?>/assets/images/icon-frontend-mentor.png"
                                 alt="Frontend Mentor Icon">
                        </a>


                    </div>

                    <!--                    Remove this comments if you want to include the light mode -->
                    <!--                    <button class="btn light--mode" id="light-mode-btn">-->
                    <!--                        <img src="-->
                    <?php //echo get_template_directory_uri(); ?><!--/assets/images/icon-sun.png" alt="Sun Icon">-->
                    <!--                    </button>-->
                    <!--                    <button class="btn dark--mode" id="dark-mode-btn">-->
                    <!--                        <img src="-->
                    <?php //echo get_template_directory_uri(); ?><!--/assets/images/icon-moon.png" alt="Moon Icon">-->
                    <!--                    </button>-->
                    <!--                    Remove this comment if you want to include the light mode -->
                </div>
            </div>
            <div class="bottom-header">
                <nav class="site-nav">
                    <?php
                    $args = array(
                        'theme_location' => 'header'
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </nav>
            </div>
        </header>
        <!-- Site Header -->

