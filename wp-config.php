<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-shop' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S +:vKs/QfMvjLxXNTuQDG69^zjf{-i,YB~Lv$&U}ki7{pL/T1I!r14?^iwh#(E+' );
define( 'SECURE_AUTH_KEY',  '$Igt+x|0BUw*QU]_t_us#57j_&PcS:>91Sn7.&cV:8]6$S74hKGM<]e2k*L7VXJ0' );
define( 'LOGGED_IN_KEY',    '3K1!Y3TM~20ZKg3)y],QgzbV&!N<Uz@S;9hlPaV0g$U BeK@8fSv`@]V5G0bN7:;' );
define( 'NONCE_KEY',        'IUGO;t`)f|FC=F?IGjSn^x8!n$6=8LMp_BO;J7tkHC6X;ziQk-fvY^+yRI6`h3C<' );
define( 'AUTH_SALT',        'm-68=qy^+WEn)*+FYVv%[Ogn}q/}r^zb|6j)MHvWX5cYCL5]5n<~cZHI1{tbETUH' );
define( 'SECURE_AUTH_SALT', 'q&np@1ih^!A4gNmwEIyfE@26o.ADayW<;I:QEj2g_-Qn7%6@>jk>=whOOl+~2V1*' );
define( 'LOGGED_IN_SALT',   'pE(j|{ZLd)z2uJ^[ID!bx|e~R9bon#s&?n-[d]o~c/R@9/gCjw1Fu<1wXl$Kq%;~' );
define( 'NONCE_SALT',       'njtxx~i$Ip)ENTW-M6 =+,B=_QJ)r;&vQlfzcnaUk?.@1HhT,Bc?RNQ.0YLp,}{d' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
