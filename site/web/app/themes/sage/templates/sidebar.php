<a href="">
<div class="sidebar-card">
  <a class="author-bio" href="/about">
    <div class="author-image">
      <?php echo get_avatar(1, 200); ?>
    </div>
    <div>
      <div class="author-header">
        <h3>MEET <span>STEFANIE</span></h3>
      </div>
      <div class="author-description">
        <?php the_author_meta('description',2);?> 
      </div>
    </div>
  </a>
  <?php dynamic_sidebar('sidebar-primary'); ?>
  <?php
    //for each category, show 5 posts
    $cat_args=array(
      'orderby' => 'name',
      'order' => 'ASC'
      );
    $categories=get_categories($cat_args); ?> 
    <ul class="category-list">
      <?php foreach($categories as $category) { ?>
        <li>
          <a href="<?php echo get_category_link(get_cat_id($category->cat_name)); ?>" class="center-block">
            <img class="img-circle" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($category->term_id); ?>">
            <h3><?php echo $category->name; ?></h3>
          </a>
        </li>
      <?php } ?>
    </ul>
</div>
<?php if(!is_front_page()) { ?>
  <div class="sidebar-card card-no-pad">
    <?php dynamic_sidebar('sidebar-secondary'); ?>
  </div>

  <?php if(is_single()) { ?>
  <?php
    wp_reset_postdata();
    $orig_post = $post;
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
      $category_ids = array();
      foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
      $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 3, // Number of related posts that will be displayed.
        'ignore_sticky_posts'=>1,
        'orderby'=>'rand' // Randomize the posts
      );
    };
    $relatedPosts = new WP_Query( $args );
  ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <div class="row">
    <h1 style="text-align: center;">Related Posts</h1>
    <hr class="thick">
    <?php while ($relatedPosts->have_posts()) : $relatedPosts->the_post(); ?>
      <?php get_template_part('templates/tile-12'); ?>
    <?php endwhile; ?>
  </div>
  <?php }; ?>

  <div class="sidebar-card">
    <?php dynamic_sidebar('sidebar-last'); ?>
  </div>
  <?php } ?>

