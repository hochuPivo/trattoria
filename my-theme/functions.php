<?php
function trattoria_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus([
        'primary' => 'Главное меню'
    ]);
}
add_action('after_setup_theme', 'trattoria_setup');

function trattoria_scripts() {
    wp_enqueue_style(
        'trattoria-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400&family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Inter:wght@400&family=Marck+Script&family=Roboto:wght@300;400&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'trattoria-style',
        get_stylesheet_uri(),
        ['trattoria-google-fonts'],
        filemtime(get_template_directory() . '/style.css')
    );

    wp_enqueue_script(
        'trattoria-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        filemtime(get_template_directory() . '/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'trattoria_scripts');

function trattoria_customize_register($wp_customize) {
    $wp_customize->add_section('trattoria_contacts_section', [
        'title'    => 'Контакты рестобара',
        'priority' => 30,
    ]);

    $wp_customize->add_setting('trattoria_phone', [
        'default'           => '+7 (999) 99-99-99',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('trattoria_phone', [
        'label'    => 'Номер телефона',
        'section'  => 'trattoria_contacts_section',
        'type'     => 'text',
    ]);

    $wp_customize->add_setting('trattoria_address', [
        'default'           => 'г. Москва, ул. Большая Дмитровка, 67',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('trattoria_address', [
        'label'    => 'Адрес заведения',
        'section'  => 'trattoria_contacts_section',
        'type'     => 'text',
    ]);
}
add_action('customize_register', 'trattoria_customize_register');
