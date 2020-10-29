<?php

wp_deregister_script('admin-bar');
wp_deregister_style('admin-bar');
remove_action('wp_footer','wp_admin_bar_render',1000);

function reg_mymenu()
{
  register_nav_menu('header-menu',_('Menu główne'));
}
function cloudyblog_setup()
{
  add_theme_support( 'custom-logo', array(
      'height'      => 80, // wysokość logo
      'width'       => 150, // szerokość logo
      'flex-height' => false, // czy wysokość ma być elastyczna
      'flex-width'  => true, // czy szerokość ma być elastyczna
    ) );
}
add_action('init', 'reg_mymenu');
add_action('after_setup_theme', 'cloudyblog_setup');
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');
 ?>
