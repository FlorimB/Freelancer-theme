<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <article class="article">
            <?php if (!has_category('exclude-category')) : ?>
                <?php the_content(); ?>
            <?php endif; ?>
        </article>

    <?php endwhile; ?>
<?php else: echo "No Post Found." ?>

<?php endif; ?>

<?php get_footer(); ?>
