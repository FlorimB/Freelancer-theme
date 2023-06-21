<?php

$name = get_field('name', get_option('page_on_front'));
$email = get_field('email', get_option('page_on_front'));
$message = get_field('message', get_option('page_on_front'));

?>


</div>

<footer class="site-footer" id="footer">
    <div class="container">
        <div class="main-side pt-5 row">
            <div class="left-side col-12 col-md-6 col-lg-6 mb-5">
                <h2 class="display-4 mt-5">
                    Contact
                </h2>
                <p class="w-75 mb-5 mt-3">
                    I would love to hear about your project and how I could help. Please fill in
                    the form, and I'll get back to you as soon as possible.
                </p>
            </div>

            <div class="right-side col-12 col-md-6 col-lg-6">
                <form action="<?php home_url(); ?>" method="POST" id="contactForm">
                    <div class="input-group d-flex flex-column">
                        <label for="name" class="mb-2">Name:</label>
                        <input type="text" class="form-control w-100 mb-3" required name="name" id="name" placeholder="<?php echo esc_attr($name); ?>">
                    </div>
                    <div class="input-group d-flex flex-column">
                        <label for="email" class="mb-2">Email:</label>
                        <input type="email" class="form-control w-100 mb-3" required name="email" id="email" placeholder="<?php echo esc_attr($email); ?>">
                    </div>
                    <div class="input-group d-flex flex-column">
                        <label for="message" class="mb-2">Message:</label>
                        <input type="text" class="form-control w-100 mb-3" required name="message" placeholder="<?php echo esc_attr($message) ?>" id="message">
                    </div>
                    <button class="btn btn-outline-light mt-4 w-100" type="submit">
                        Sent Message
                    </button>
                </form>
            </div>
        </div>

        <header class="site-header mt-5 d-flex justify-content-between align-items-center pb-4">
            <div class="top-site h-100 d-flex align-items-center">
                <h2 class="slogan">
                    <a href="<?php home_url(); ?>" class="text-light text-decoration-none border-bottom">
                        <?php bloginfo('name'); ?>
                    </a>
                </h2>
            </div>
            <div class="bottom-side">
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
        </header>
    </div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>