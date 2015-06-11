<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/front-page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php
  $recentPosts = new WP_Query( array( 'posts_per_page' => 5 ) );
?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="row">
  <?php $i = 0; ?>
  <?php while ($recentPosts->have_posts()) : $recentPosts->the_post();
    if ($i == 0) { ?>
      <div class="reverse-row">
        <?php get_template_part('templates/page', 'header'); ?>
        <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div>
      </div>
    <?php } else { ?>
      <?php get_template_part('templates/tile-6'); ?>
    <?php }; ?>
    <?php $i++ ?>
  <?php endwhile; ?>
</div>

