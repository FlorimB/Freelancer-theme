<?php

$profileImage = get_field('profile_image', get_option('page_on_front'));


?>

<div class="row">
    <div class="col d-flex flex-column align-items-center">


        <h1 id="introText" class="display-4 text-center w-75 mb-5">

        </h1>

        <p class="intro-paragraph w-50 text-center mb-5">
            Based in the US, I'm web developer passionate about building accessible web apps that users love.
        </p>

        <a href="#name" class="contact-link border-bottom text-decoration-none ">
            Contact me
        </a>

        <div class="profile-photo">

            <img src="<?php echo $profileImage; ?>" alt="Profile Image" class="w-100 h-100 rounded">


        </div>

        <div class="knowledge row row-gap-5 my-5 border-top w-100">
            <div class="col-12 col-lg-4 mt-4 text-center">
                <h1 class="title">
                    HTML
                </h1>
                <p class="experience">
                    4 Years of experience.
                </p>
            </div>
            <div class="col-12 col-lg-4 mt-4 text-center">
                <h1 class="title">
                    CSS
                </h1>
                <p class="experience">
                    4 Years of experience.
                </p>
            </div>
            <div class="col-12 col-lg-4 mt-4 text-center">
                <h1 class="title">
                    JavaScript
                </h1>
                <p class="experience">
                    4 Years of experience.
                </p>
            </div>
        </div>

        <div class="knowledge row row-gap-5 mb-5 w-100">
            <div class="col-12 col-lg-4 mt-4 text-center">
                <h1 class="title">
                    PHP
                </h1>
                <p class="experience">
                    2 Years of experience.
                </p>
            </div>
            <div class="col-12 col-lg-4 mt-4 text-center ">
                <h1 class="title">
                    MySQL
                </h1>
                <p class="experience">
                    3 Years of experience.
                </p>
            </div>
            <div class="col-12 col-lg-4 mt-4 text-center">
                <h1 class="title">
                    WordPress
                </h1>
                <p class="experience">
                    2 Years of experience.
                </p>
            </div>
        </div>

        <div class="knowledge row row-gap-5 mb-5 w-100">
            <div class="col-12 col-lg-4 mt-4 text-center">
                <h1 class="title">
                    React.JS
                </h1>
                <p class="experience">
                    2 Years of experience.
                </p>
            </div>
            <div class="col-12 col-lg-4 mt-4 text-center">
                <h1 class="title">
                    Swift
                </h1>
                <p class="experience">
                    1 Years of experience.
                </p>
            </div>
            <div class="col-12 col-lg-4 mt-4 text-center">
                <h1 class="title">
                    Java
                </h1>
                <p class="experience">
                    3 Years of experience.
                </p>
            </div>
        </div>

        <div class="startup-projects mt-5">
            <div class="startup-header text-center">
                <h2 class="display-4 startup-title">
                    My Startup Project
                </h2>
                <p class="my-5 startup-text text-center mx-auto">
                    I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in
                    different industries and verticals. Eventually, I decided that it would be a fun challenge to try
                    designing and building my own.
                </p>
            </div>

            <div class="startup-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-light shadow-lg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-project-1-large.webp"
                                     class="card-img-top p-2 rounded-top" alt="Icon">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Project title</h5>
                                    <p class="card-text">
                                        Put some text to describe the project.
                                    </p>
                                    <a href="<?php home_url(); ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-light shadow-lg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-project-1-large.webp"
                                     class="card-img-top p-2 rounded-top" alt="Icon">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Project title</h5>
                                    <p class="card-text">
                                        Put some text to describe the project.
                                    </p>
                                    <a href="<?php home_url(); ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-light shadow-lg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-project-1-large.webp"
                                     class="card-img-top p-2 rounded-top" alt="Icon">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Project title</h5>
                                    <p class="card-text">
                                        Put some text to describe the project.
                                    </p>
                                    <a href="<?php home_url(); ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-light shadow-lg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-project-1-large.webp"
                                     class="card-img-top p-2 rounded-top" alt="Icon">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Project title</h5>
                                    <p class="card-text">
                                        Put some text to describe the project.
                                    </p>
                                    <a href="<?php home_url(); ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-light shadow-lg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-project-1-large.webp"
                                     class="card-img-top p-2 rounded-top" alt="Icon">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Project title</h5>
                                    <p class="card-text">
                                        Put some text to describe the project.
                                    </p>
                                    <a href="<?php home_url(); ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-light shadow-lg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-project-1-large.webp"
                                     class="card-img-top p-2 rounded-top" alt="Icon">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Project title</h5>
                                    <p class="card-text">
                                        Put some text to describe the project.
                                    </p>
                                    <a href="<?php home_url(); ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-light shadow-lg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-project-1-large.webp"
                                     class="card-img-top p-2 rounded-top" alt="Icon">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Project title</h5>
                                    <p class="card-text">
                                        Put some text to describe the project.
                                    </p>
                                    <a href="<?php home_url(); ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-light shadow-lg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-project-1-large.webp"
                                     class="card-img-top p-2 rounded-top" alt="Icon">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Project title</h5>
                                    <p class="card-text">
                                        Put some text to describe the project.
                                    </p>
                                    <a href="<?php home_url(); ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="card text-light shadow-lg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-project-1-large.webp"
                                     class="card-img-top p-2 rounded-top" alt="Icon">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Project title</h5>
                                    <p class="card-text">
                                        Put some text to describe the project.
                                    </p>
                                    <a href="<?php home_url(); ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>