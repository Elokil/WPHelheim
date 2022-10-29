<?php

function helheim_supports(){
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menu('header', 'En tête du menu');
}

function helheim_register_asset (){
  /*wp_register_style('google_font',"https://fonts.googleapis.com");
  wp_register_style('cross_origin',"https://fonts.gstatic.com");*/
  wp_register_style('mouse_memoir',"https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap");
  wp_register_style('style',"/wp-content/themes/Helheim/style.css");
  wp_register_script('animation',"/wp-content/themes/Helheim/js/animation.js");

  /*wp_enqueue_style('google_font');
  wp_enqueue_style('cross_origin');*/
  wp_enqueue_style('mouse_memoir');
  wp_enqueue_style('style');
  wp_enqueue_script('jquery');
  wp_enqueue_script('animation');
};
function get_tag_article_list(){
  $query = new WP_Query(array('category_name'=>'article', 'order'=>'DESC'));
  while ($query->have_posts()){
    $query->the_post();
    $post_tags = get_the_tags();
    if($post_tags){
      foreach($post_tags as $tag){
        $all_tags[]=$tag->name;
      }
    }
  }
  $all_tags_unique = array_unique($all_tags);
  return $all_tags_unique;
}
function helheim_title($title){
  return 'Salut ' . $title;
}

function helheim_menu_class($classes){
  $classes[] = 'nav-item';
  return $classes;
}
add_action('after_setup_theme', 'helheim_supports');
add_action('wp_enqueue_scripts', 'helheim_register_asset');
add_filter('wp_title', 'helheim_title');
add_filter('nav_menu_css_class', 'helheim_menu_class'); 