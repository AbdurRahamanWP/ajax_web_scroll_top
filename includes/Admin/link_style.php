<?php 
  $settings = json_decode(get_option('scroll_to_top'),true);

  $buttom  = isset( $settings['padding_buttom']) ? $settings['padding_buttom'] : '';
  $right  = isset( $settings['right']) ? $settings['right'] : '';
  $font_size  = isset( $settings['font_size']) ? $settings['font_size'] : '';
  $text_color  = isset( $settings['text_color']) ? $settings['text_color'] : '';
?>
<style>

#scrollUp {
    bottom: <?php echo esc_html($buttom); ?>;
    right: <?php echo esc_html($right); ?>;
    font-size: <?php echo esc_html($font_size); ?>;
    color: <?php echo esc_html($text_color); ?>;
}
</style>