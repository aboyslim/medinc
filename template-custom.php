<?php
/**
 * Template Name: Custom Template
 */
?>

<div class="row text-center mb-4">
	<div class="col-lg-12">
    <h2><?php if(get_field('subhead')){echo the_field('subhead');} ?></h2>
    <?php while (have_posts()) : the_post(); ?>
      <!-- <?php get_template_part('templates/page', 'header'); ?> -->
      <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>
  </div>
</div>
