<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <article class="article">
            <?php
            if (is_front_page()) {
                include get_template_directory() . "/templates/intro.php";
                the_content();
            } elseif (is_page('services')) {
                include get_template_directory() . "/templates/services.php";
                the_content();
            } elseif (is_page('work')) {
                include get_template_directory() . "/templates/past-work.php";
                the_content();
            } else {
                the_content();
            }
            ?>
        </article>

    <?php endwhile; ?>
<?php else: echo "No Post Found." ?>

<?php endif; ?>

<?php get_footer(); ?>