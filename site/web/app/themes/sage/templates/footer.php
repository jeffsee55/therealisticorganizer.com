<footer class="content-info" role="contentinfo">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img class="footer-logo" src="<?php header_image(); ?>" alt="" />
    </a>
    <hr class="thick">
    <div class="row">
      <div class="col-sm-4">
        <?php dynamic_sidebar('footer-left');?>
      </div>
      <div class="col-sm-4">
        <?php dynamic_sidebar('footer-center');?>
      </div>
      <div class="col-sm-4">
        <?php dynamic_sidebar('footer-right');?>
      </div>
    </div>
  </div>
</footer>
