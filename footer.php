<?php

$name = get_field('name', get_option('page_on_front'));
$email = get_field('email', get_option('page_on_front'));
$message = get_field('message', get_option('page_on_front'));

?>


</div>

<footer class="site-footer" id="footer">
    <div class="container">
        <div class="main-side">
            <div class="left-side">
                <h2>
                    Contact
                </h2>
                <p>
                    I would love to hear about your project and how I could help. Please fill in
                    the form, and I'll get back to you as soon as possible.
                </p>
            </div>

            <div class="right-side">
<!--                <form action="--><?php //echo esc_url(home_url('/')); ?><!--" method="POST" id="contactForm">-->
<!--                    <div class="field-group">-->
<!--                        <label for="name">Name:</label>-->
<!--                        <input type="text" name="name" id="name" placeholder="Enter your name">-->
<!--                    </div>-->
<!--                    <div class="field-group">-->
<!--                        <label for="email">Email:</label>-->
<!--                        <input type="email" name="email" id="email" placeholder="Enter your email">-->
<!--                    </div>-->
<!--                    <div class="field-group">-->
<!--                        <label for="message">Message:</label>-->
<!--                        <textarea name="message" id="message" placeholder="Enter your message"></textarea>-->
<!--                    </div>-->
<!--                    <button class="btn" type="submit">Send Message</button>-->
<!--                </form>-->
                <form action="<?php home_url(); ?>" method="POST" id="contactForm">
                    <div class="field-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="<?php echo esc_attr($name); ?>">
                    </div>
                    <div class="field-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="<?php echo esc_attr($email); ?>">
                    </div>
                    <div class="field-group">
                        <label for="message">Message:</label>
                        <input type="text" name="message" placeholder="<?php echo esc_attr($message) ?>" id="message">
                    </div>
                    <button class="btn" type="submit">
                        Sent Message
                    </button>
                </form>
            </div>
        </div>
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
                </div>
            </div>
        </header>
    </div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>