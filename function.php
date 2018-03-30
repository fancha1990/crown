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

/*меню*/
/*
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
*/
/*(попытка) изменение классов <li> и <а> в меню*/
function wpdocs_add_menu_parent_class( $items ) {
    $parents = array();
 
    // Collect menu items with parents.
    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }
 
    // Add class.
    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            $item->classes[] = 'menu-parent-item';
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'wpdocs_add_menu_parent_class' );



?>