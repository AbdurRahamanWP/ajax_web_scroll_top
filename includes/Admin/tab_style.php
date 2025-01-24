<?php 
  $settings = json_decode(get_option('scroll_to_top'),true);
  
  $padding_right       = isset( $settings['padding_right']) ? $settings['padding_right'] : '';
  $padding_buttom      = isset( $settings['padding_buttom']) ? $settings['padding_buttom'] : '';
  $button_width        = isset( $settings['button_width']) ? $settings['button_width'] : '';
  $height              = isset( $settings['height']) ? $settings['height'] : '';
  $padding_all         = isset( $settings['padding_all']) ? $settings['padding_all'] : '';
  $font_size           = isset( $settings['font_size']) ? $settings['font_size'] : '';
  $border_Radius       = isset( $settings['border_Radius']) ? $settings['border_Radius'] : '';
  $text_color          = isset( $settings['text_color']) ? $settings['text_color'] : '';
  $background_color    = isset( $settings['background_color']) ? $settings['background_color'] : '';
?>
<style>

#scrollUp {
    right: <?php echo esc_html($padding_right); ?>;
    bottom: <?php echo esc_html($padding_buttom); ?>;
    width: <?php echo esc_html($button_width); ?>;
    height: <?php echo esc_html($height); ?>;
    padding: <?php echo esc_html($padding_all); ?>;
    font: <?php echo esc_html($font_size); ?>/20px sans-serif;
    text-align: center;
    border-radius:<?php echo esc_html($border_Radius); ?>;
    text-decoration: none;
    text-shadow: 0 1px 0 #fff;
    color: <?php echo esc_html($text_color); ?>;
    -webkit-box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
    background-color: <?php echo esc_html($background_color); ?> !important;   
    background-repeat: repeat-x;
    -webkit-transition: margin-bottom 150ms linear;
    -moz-transition: margin-bottom 150ms linear;
    -o-transition: margin-bottom 150ms linear;
    transition: margin-bottom 150ms linear;
}

#scrollUp:hover {
    margin-bottom: 0;
}

</style>