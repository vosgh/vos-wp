<?php
    add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles'); 

    function add_scripts_and_styles() {
        /*wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', get_template_directory_uri() . 'path', false, null, true);
        wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'main', get_template_directory_uri() . 'path', array('jquery'), null, true); */
        wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/js/swiper-bundle.min.js', false, null, true);
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('swiper-script'), null, true);

        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }

    // Добавление пользовательского типа записи "Новости"
    function custom_post_type_typical_pages() {
        $labels = array(
            'name' => 'Новости',
            'singular_name' => 'Типовая страница',
            'menu_name' => 'Новости',
            'add_new' => 'Добавить новую',
            'add_new_item' => 'Добавить новую типовую страницу',
            'edit_item' => 'Редактировать типовую страницу',
            'new_item' => 'Новая типовая страница',
            'view_item' => 'Просмотреть типовую страницу',
            'search_items' => 'Искать типовую страницу',
            'not_found' => 'Типовые страницы не найдены',
            'not_found_in_trash' => 'В корзине нет типовых страниц',
            'parent_item_colon' => '',
        );
    
        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => false,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'rewrite' => false,
        );
    
        register_post_type('typical_page', $args);
    }
    add_action('init', 'custom_post_type_typical_pages');
 
?>