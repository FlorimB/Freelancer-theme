<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<!-- Site Header -->
<div class="bg-img">
    <div class="container">
        <header class="site-header mt-5 d-flex flex-column mb-5">
            <div class="top-site h-100 d-flex justify-content-between align-items-center">
                <h2 class="slogan">
                    <a href="<?php home_url(); ?>" class="text-light text-decoration-none border-bottom">
                        <?php bloginfo('name'); ?>
                    </a>
                </h2>

                <div class="social">
                    <a href="https://github.com/" class="mx-1 text-decoration-none" target="_blank">
                        <img src="
                        <?php echo get_template_directory_uri(); ?>/assets/images/icon-github.png" alt="Github Icon">
                    </a>
                    <a href="https://www.linkedin.com/" class="mx-1 text-decoration-none" target="_blank">
                        <img src="
                        <?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin.png"
                             alt="Linkedin Icon">
                    </a>
                    <a href="https://twitter.com/" class="mx-1 text-decoration-none" target="_blank">
                        <img src="
                        <?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter.png" alt="Twitter Icon">
                    </a>
                    <a href="https://www.frontendmentor.io/" class="mx-1 text-decoration-none" target="_blank">
                        <img src="
                        <?php echo get_template_directory_uri(); ?>/assets/images/icon-frontend-mentor.png"
                             alt="Frontend Mentor Icon">
                    </a>
                </div>
            </div>
            <div class="bottom-side mt-5">
                <?php wp_nav_menu() ?>
            </div>

        </header>
        <!-- Site Header -->

