<?php 
  $settings = json_decode(get_option('scroll_to_top'),true);
  $images_banner = $settings['button_icon_img'];
?>
<style>

#scrollUp {
    background-image: url("<?php echo esc_url($images_banner); ?>");
    bottom: 20px;
    right: 20px;
    width: 38px;    /* Width of image */
    height: 38px; 
    background-color: black;  /* Height of image */
    text-indent: -999999px;
    display: block;
}
</style>