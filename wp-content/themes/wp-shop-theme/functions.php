<?php


add_action('wp_enqueue_scripts', 'styleConnect');
add_action('wp_footer', 'footerScriptsConnect');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'theme_register_sidebar');
add_action('customize_register', 'customizer_init' );

/*********************************************************
 * Подключение стилей
 *
 */
function styleConnect()
{
    wp_enqueue_style('wp-shop-normalize', get_template_directory_uri() . "/assets/css/normalize.css");
    wp_enqueue_style('wp-shop-style', get_stylesheet_uri());
    wp_enqueue_style('wp-shop-bootstrap-css', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
}

/*********************************************************
 * Регистрация нового сайдбара
 *
 */
function theme_register_sidebar()
{
    register_sidebar(array(
        'name' => 'Top sidebars',
        'id' => "top_sidebar",
        'description' => 'Top sidebars categories',
        'class' => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => "</h4>\n",
    ));
    register_sidebar(array(
        'name' => 'Footer sidebars',
        'id' => "footer_sidebar",
        'description' => 'Footer sidebars categories',
        'class' => '',
        'before_widget' => '',
        'after_widget' => "",
        'before_title' => '',
        'after_title' => "",
    ));
}


/*********************************************************
 * Подключение скриптов в футере*
 *
 */
function footerScriptsConnect()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('wp-shop-index', get_template_directory_uri() . "/assets/js/index.js");
    wp_enqueue_script('wp-shop-bootstrap-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js");
    wp_enqueue_script('wp-shop-bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js");
}

/*********************************************************
 * Регистрация меню*
 *
 */
function theme_register_nav_menu()
{
    register_nav_menu('primary', "Header menu");
}

/*********************************************************
 * Регистрация настроек темы
 * @param WP_Customize_Manager $wp_customize
 */
function customizer_init( WP_Customize_Manager $wp_customize )
{

    // как обновлять превью сайта:
    // 'refresh'     - перезагрузкой фрейма (можно полностью отказаться от JavaScript)
    // 'postMessage' - отправкой AJAX запроса
    $transport = 'postMessage';


    // Секция
    if ($section = 'display_options') {

        $wp_customize->add_section($section, [
            'title' => 'Slider',
            'priority' => 200,                   // приоритет расположения
            'description' => 'Внешний вид сайта', // описание не обязательное
        ]);

        // настройка
        $setting = 'display_header';

        $wp_customize->add_setting($setting, [
            'default' => '',
            'transport' => $transport
        ]);

        $wp_customize->add_control($setting, [
            'section' => $section,
            'label' => 'Отобразить заголовок?',
            'type' => 'checkbox',
        ]);

        // настройка
        $setting = 'color_scheme';

        $wp_customize->add_setting($setting, [
            'default' => 'normal',
            'transport' => $transport
        ]);

        $wp_customize->add_control($setting, [
            'section' => $section,
            'label' => 'Цветовая схема',
            'type' => 'radio',
            'choices' => [
                'normal' => 'Светлая',
                'inverse' => 'Темная',
            ]
        ]);

        //Настройка 1-го слайда
        $setting = 'bg_image_1';

        $wp_customize->add_setting($setting, [
                'default' => '', // по умолчанию - фоновое изображение не установлено
                'transport' => $transport
            ]
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, $setting, [
                'label' => 'Первый слайд',
                'settings' => $setting,
                'section' => $section
            ]));


        //Настройка 2-го слайда
        $setting = 'bg_image_2';

        $wp_customize->add_setting($setting, [
                'default' => '', // по умолчанию - фоновое изображение не установлено
                'transport' => $transport
            ]
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, $setting, [
                'label' => 'Второй слайд',
                'settings' => $setting,
                'section' => $section
            ]));

        //Настройка 3-го слайда
        $setting = 'bg_image_3';

        $wp_customize->add_setting($setting, [
                'default' => '', // по умолчанию - фоновое изображение не установлено
                'transport' => $transport
            ]
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, $setting, [
                'label' => 'Третий слайд',
                'settings' => $setting,
                'section' => $section
            ]));
    }


    //Секция футера

    if ($section = 'display_footer_options') {
        $wp_customize->add_section($section, [
            'title' => 'Footer',
            'priority' => 200,                   // приоритет расположения
            'description' => 'Внешний вид подвала', // описание не обязательное
        ]);

        // настройка
        $setting = 'display_footer_info_title';

        $wp_customize->add_setting($setting, [
            'default' => '',
            'transport' => $transport
        ]);

        $wp_customize->add_control($setting, [
            'section' => $section,
            'label' => 'Footer information title',
            'type' => 'text',
        ]);

        // настройка
        $setting = 'display_footer_textarea';

        $wp_customize->add_setting($setting, [
            'default' => '',
            'transport' => $transport
        ]);

        $wp_customize->add_control($setting, [
            'section' => $section,
            'label' => 'Footer information',
            'type' => 'textarea',
        ]);


    }
}




