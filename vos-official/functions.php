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

    /* Авторизация */

    // Перенаправление при ошибке авторизации
    function custom_login_failed($username) {
        $referrer = $_SERVER['HTTP_REFERER']; // Получаем URL реферера
        $login_page = home_url('/авторизация/'); // URL страницы авторизации

        // Проверяем, если реферер не пустой и не является страницей авторизации по умолчанию
        if (!empty($referrer) && !strstr($referrer, 'wp-login') && !strstr($referrer, 'wp-admin')) {
            wp_redirect($login_page . '?login=failed');
            exit;
        }
    }
    add_action('wp_login_failed', 'custom_login_failed');

    // Проверка логина и пароля на пустоту
    function custom_verify_username_password($user, $username, $password) {
        $login_page = home_url('/авторизация/');
        if (empty($username) || empty($password)) {
            wp_redirect($login_page . '?login=empty');
            exit;
        }
        return $user;
    }
    add_filter('authenticate', 'custom_verify_username_password', 1, 3);

    // Перенаправление после выхода
    function custom_logout_redirect() {
        $login_page = home_url('/авторизация/');
        wp_redirect($login_page . '?logout=true');
        exit;
    }
    add_action('wp_logout', 'custom_logout_redirect');

    /* Футер кнопки */

    function enqueue_custom_scripts() {
        wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array(), null, true);
    
        // Передаем данные в JavaScript
        wp_localize_script('custom-scripts', 'loginData', array(
            'isUserLoggedIn' => is_user_logged_in(),
            'logoutUrl' => wp_logout_url(home_url()),
        ));
    }
    add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
    
?>