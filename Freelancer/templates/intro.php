<?php

$profileImage = get_field('profile_image', get_option('page_on_front'));
$starterProject = get_field('starter');
$programmingKnowledge = get_field('programming');

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
        <?php foreach ($programmingKnowledge as $programming) : ?>

                <div class="col-12 col-lg-4 mt-4 text-center">
                    <h1 class="title">
                        <?php echo $programming['name']; ?>
                    </h1>
                    <p class="experience">
                        <?php echo $programming['experience']; ?>
                    </p>
                </div>

        <?php endforeach; ?>
        </div>


            <div class="startup-body">
                <h2 class="display-4 text-center mb-5">Startup Projects</h2>
                <div class="container">
                    <div class="row">
                        <?php foreach ($starterProject as $project) : ?>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-5">
                                <div class="card text-light shadow-lg">
                                    <img src="<?php echo $project['project_image'] ?>"
                                         class="card-img-top p-2 rounded-top" alt="Icon">

                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $project['project_title']?>
                                        </h5>
                                        <p class="card-text" style="color: #777777 !important">
                                            <?php echo $project['project_description']?>
                                        </p>
                                        <a href="<?php echo $project['project_url'] ?>" class="btn btn-danger w-100 mt-3">Project</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>


    </div>