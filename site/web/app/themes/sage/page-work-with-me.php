<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="card content-body">
    <div class="row">
      <div class="col-sm-4">
        <?php the_field('recent_projects'); ?>
      </div>
      <div class="col-sm-4">
        <h2>About Me</h2>
        <?php the_author_meta('description',2);?> 
      </div>
      <div class="col-sm-4">
        <?php the_field('work_with_me'); ?>
      </div>
    </div>
  </div>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
