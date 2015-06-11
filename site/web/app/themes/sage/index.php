<?php use Roots\Sage\Titles; ?>

<?php
  $cat_id = get_cat_id( single_cat_title("",false) );
  $cat_data = get_option("category_".$cat_id);
?>

<div class="index-header" style="background-color: <?php echo $cat_data['catBG'];?>">
  <h1><?= Titles\title(); ?></h1>
</div>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="row">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'index'); ?>
  <?php endwhile; ?>
</div>

<?php the_posts_navigation(); ?>
