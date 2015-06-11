<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
?>
<a href="<?php the_permalink(); ?>">
  <div style="background-image: url(<?php echo $thumb_url[0]; ?>)">
    <div class="tile-content">
      <h2 class="entry-title"><?php the_title(); ?></h2>
    </div>
  </div>
</a>
