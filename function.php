<?php

function my_woocommerce_loaded_function() {
global $woocommerce;
remove_action( 'wp_head', array( $woocommerce, 'generator' ) );
}
add_action( 'woocommerce_init', 'my_woocommerce_loaded_function' );

if (function_exists('add_theme_support')) 
{
	add_theme_support('menus');
	add_theme_support('widgets');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
}


/**
* Подключение меню
**/
register_nav_menus( array(
  'main-menu' => __( 'main-menu' )
));

/**
* Подключение сайдбара
**/
register_sidebar( array(
  'name' => __( 'Sidebar', 'mytheme' ),
  'id' => 'sidebar',
  'description' => 'Правая колонка сайта.',
  'before_widget' => '<aside class="widget">',
  'after_widget' => '</aside>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
));

/**
* Функции вывода анонса поста (цитаты) на главной
**/
function new_excerpt_length( $length ) {
  return 100;//количество выводимых символов анонса (по умолчанию 55)
}
add_filter( 'excerpt_length', 'new_excerpt_length' );

/**
* Функции заменяет «[…]» на «...» в конце цитаты
**/
function new_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>