<?php
class BBFW_Social_Widget2 extends WP_Widget {

  public function __construct() {
    parent::__construct(
      'bbfw_social_widget2',
      'Social Widget v2',
      array( 'description' => __( 'BBFW Social 2', 'bbfw' ) )
    );
  }

  public function widget( $args, $instance ) {
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title'] );
    $twitter = $instance['twitter'];
    $facebook = $instance['facebook'];
    $linkedin = $instance['linkedin'];
    $pinterest = $instance['pinterest'];
    $googleplus = $instance['googleplus'];
    $youtube = $instance['youtube'];
    $tripadvisor = $instance['tripadvisor'];
    $instagram = $instance['instagram'];
    $image_url = apply_filters('bbfw_social_icon_dir_uri', get_template_directory_uri().'/img');

    echo $before_widget;?>

    <div class="social-widget">
      <?php if($title):?><h3 class="widget-title"><?php echo $title;?></h3><?php endif;?>
      <ul class="unstyled inline">
        <?php if($facebook):?><li class="facebook"><a href="<?php echo $facebook;?>"><i class="fa fa-facebook-square"></i></a></li><?php endif;?>
        <?php if($twitter):?><li class="twitter"><a href="<?php echo $twitter;?>"><i class="fa fa-twitter-square"></i></a></li><?php endif;?>
        <?php if($googleplus):?><li class="googleplus"><a href="<?php echo $googleplus;?>"><i class="fa fa-google-plus-square"></i></a></li><?php endif;?>
    <?php if($linkedin):?><li class="linkedin"><a href="<?php echo $linkedin;?>"><i class="fa fa-linkedin-square"></i></a></li><?php endif;?>
    <?php if($youtube):?><li class="youtube"><a href="<?php echo $youtube;?>"><i class="fa fa-youtube-square"></i></a></li><?php endif;?>
        <?php if($pinterest):?><li class="pinterest"><a href="<?php echo $pinterest;?>"><i class="fa fa-pinterest-square"></i></a></li><?php endif;?>
        <?php if($instagram):?><li class="instagram"><a href="<?php echo $instagram;?>"><i class="fa fa-instagram"></i></a></li><?php endif;?>
    <?php if($tripadvisor):?><li class="tripadvisor"><a href="<?php echo $tripadvisor;?>"><img src="<?php echo $image_url;?>/tripadvisor.png" alt="TripAdvisor"></a></li><?php endif;?>
      </ul>
    </div>

    <?php echo $after_widget;
  }


  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['twitter'] = strip_tags($new_instance['twitter']);
    $instance['facebook'] = strip_tags($new_instance['facebook']);
    $instance['linkedin'] = strip_tags($new_instance['linkedin']);
    $instance['pinterest'] =  strip_tags($new_instance['pinterest']);
    $instance['instagram'] =  strip_tags($new_instance['instagram']);
    $instance['googleplus'] =  strip_tags($new_instance['googleplus']);
    $instance['youtube'] =  strip_tags($new_instance['youtube']);
    $instance['tripadvisor'] =  strip_tags($new_instance['tripadvisor']);
    return $instance;
  }

  public function form( $instance ) {
    if(isset($instance['title']))
      $title = $instance['title'];
    $facebook = isset($instance['facebook']) ? $instance['facebook'] : '';
    $twitter = isset($instance['twitter']) ? $instance['twitter'] : '';
    $linkedin = isset($instance['linkedin']) ? $instance['linkedin'] : '';
    $pinterest = isset($instance['pinterest']) ? $instance['pinterest'] : '';
    $pinterest = isset($instance['instagram']) ? $instance['instagram'] : '';
    $googleplus = isset($instance['googleplus']) ? $instance['googleplus'] : '';
    $youtube = isset($instance['youtube']) ? $instance['youtube'] : '';
    $tripadvisor = isset($instance['tripadvisor']) ? $instance['tripadvisor'] : '';
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook URL:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter URL:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e( 'Linkedin:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>" />
    </p>		
    <p>                                                                                                                                                                       
            <label for="<?php echo $this->get_field_id( 'googleplus' ); ?>"><?php _e( 'Google+:' ); ?></label>                                                                 
            <input class="widefat" id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" type="text" value="<?php echo esc_attr( $googleplus); ?>" />
        </p>
        <p>                                                                                                                                                                       
            <label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e( 'Pinterest:' ); ?></label>                                                                 
            <input class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" type="text" value="<?php echo esc_attr( $pinterest); ?>" />
        </p>
        <p>                                                                                                                                                                       
            <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'instagram:' ); ?></label>                                                                 
            <input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram); ?>" />
        </p>
        <p>                                                                                                                                                                       
            <label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e( 'YouTube:' ); ?></label>                                                                 
            <input class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" type="text" value="<?php echo esc_attr( $youtube); ?>" />
        </p> 
        <p>                                                                                                                                                                       
            <label for="<?php echo $this->get_field_id( 'tripadvisor' ); ?>"><?php _e( 'TripAdvisor:' ); ?></label>                                                                 
            <input class="widefat" id="<?php echo $this->get_field_id( 'tripadvisor' ); ?>" name="<?php echo $this->get_field_name( 'tripadvisor' ); ?>" type="text" value="<?php echo esc_attr( $tripadvisor); ?>" />
        </p> 
    <?php
  }

}
add_action( 'widgets_init', create_function( '', 'register_widget( "bbfw_social_widget2" );' ) );
