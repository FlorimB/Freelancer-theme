<?php
$projects_header = get_field('projects_header');
$portfolio_projects = get_field('portfolio_projects');
$testimonials = get_field('testimonials');

?>

<article class="projects my-5">
    <div class="projects-header">
        <h2 class="display-6 text-center mb-5">
            <?php echo $projects_header['title']?>
        </h2>
        <p class="p-text mb-5">
            <?php echo $projects_header['text']?>
        </p>
    </div>

    <div class="projects-body mt-5">
        <div class="row w-75 mx-auto">
            <?php foreach ($portfolio_projects as $portfolio) : ?>
                <div class="col-12 col-lg-6">
                    <div class="card rounded m-4 text-light">
                        <img class="rounded-top" src="<?php echo $portfolio['project_image'] ?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $portfolio['project_title'] ?>
                            </h5>
                            <p class="card-text description">
                                <?php echo $portfolio['project_description'] ?>
                            </p>
                            <a href="<?php $portfolio['project_link'] ?>" class="btn btn-outline-success">
                                Project's Link
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="testimonials mt-5">
        <h2 class="display-5 text-center">
            Testimonials
        </h2>
        <div class="row mt-5 w-100 mx-auto">
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="col-12 mt-4 mb-5">
                    <div class="card text-light">
                        <div class="row">
                            <div class="col-12 col-md-2 column-gap-2 m-3">
                                <img class="t-profile-pic m-auto rounded-pill" src="<?php echo $testimonial['testiminials_pic'] ?>" alt="Testimonial Profile Pic">
                            </div>
                            <div class="col-12 col-md-11">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <?php echo $testimonial['testimonial_fullname']; ?>
                                    </h4>
                                    <p class="card-text">
                                        <?php echo $testimonial['testimonial_text']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</article>
