<?php
/*
* Template Name: Landing Page
*/
?>
<?php get_header(); ?>
<?php include_once('modules/nav.php'); ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<div class="jumbotron"></div>
<main class="col-xs-12 mb-15">
  <div class="container">
    <div class="row">
      <?php the_content(); ?>
    </div>
  </div>
</main>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>

<?php include_once('footer.php'); ?>

</body>
</html>
