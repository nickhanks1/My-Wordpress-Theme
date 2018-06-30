<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<main>
<?php $title = get_the_title(); ?>
<?php the_content(); ?>
</main>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>

<?php $title ?>
<?php wp_footer(); ?>

</body>
</html>
