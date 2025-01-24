<?php 

add_action('admin_menu', 'target_ajax_admin_menu');

function target_ajax_admin_menu(){

    $capabilty = 'manage_options';
    add_menu_page(
        'Web Scroll Top',
        'Web Scroll Top',
        'manage_options',
        'web_scroll_to_top_form',
        'web_scroll_to_top_form',
        'dashicons-menu-alt',
        9
    );
}

function web_scroll_to_top_form(){
    ob_start();
    require_once plugin_dir_path( __FILE__ ). "/new_project.php"; 
    $template = ob_get_contents();
    ob_end_clean();
    echo $template;
}

?>