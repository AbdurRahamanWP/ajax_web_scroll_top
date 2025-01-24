<?php 
  $settings = json_decode(get_option('scroll_to_top'),true);

  $padding_buttom  = isset( $settings['padding_buttom']) ? $settings['padding_buttom'] : '';
  $padding_right  = isset( $settings['padding_right']) ? $settings['padding_right'] : '';
  $background_color  = isset( $settings['background_color']) ? $settings['background_color'] : '';
  $text_color  = isset( $settings['text_color']) ? $settings['text_color'] : '';
  $font_size  = isset( $settings['font_size']) ? $settings['font_size'] : '';
  $padding_all  = isset( $settings['padding_all']) ? $settings['padding_all'] : '';
  $border_Radius  = isset( $settings['border_Radius']) ? $settings['border_Radius'] : '';

?>
<style>
/* Pill style */
#scrollUp {
    bottom: <?php echo esc_html($padding_buttom); ?>;
    right: <?php echo esc_html($padding_right); ?>;
    background-color: <?php echo esc_html($background_color); ?>;
    color: <?php echo esc_html($text_color); ?>;
    font-size: <?php echo esc_html($font_size); ?>;
    font-family: sans-serif;
    text-decoration: none;
    opacity: .9;
    padding: <?php echo esc_html($padding_all); ?>;
    -webkit-border-radius: <?php echo esc_html($border_Radius); ?>;
    -moz-border-radius: <?php echo esc_html($border_Radius); ?>;
    border-radius: <?php echo esc_html($border_Radius); ?>;
    -webkit-transition: background 200ms linear;
    -moz-transition: background 200ms linear;
    -o-transition: background 200ms linear;
    transition: background 200ms linear;
    -webkit-backface-visibility: hidden;
}

#scrollUp:hover {
    background-color: <?php echo esc_html($background_color); ?>;
}

</style>