<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'vos-site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ed:G2$3QLVhp$]{!ZET`65BQec{n5QDTryjz]fOT*!2H.e,EHJ}naHmd(;~=8*44' );
define( 'SECURE_AUTH_KEY',  'lC~BN7}_.*}o`Yd6j`I5a%oLH8J|b9&4Ml>[}*e868vtnyzjyCVbC3>U{k!w*G5W' );
define( 'LOGGED_IN_KEY',    'P6=q$N_bcHP1KwNWBRUWX`s750%.CujP$bywOt%&7Xo!H$1=~@ `9zXph|Lt!0{p' );
define( 'NONCE_KEY',        '].,{7|t4UL{t=trhVw{lfmxv.0z1zb1FALeHmlia-%~)y<r!FnxP[cz{X^um T&?' );
define( 'AUTH_SALT',        'E2ekpFKsglEObsM:o~y/jYM[5ZXBlBOA>Q9g&0|U^zq&@$~:q*tps3~zu9z_?#,3' );
define( 'SECURE_AUTH_SALT', '2/Z/<7tS0P6>_JZ27tU;)KLEGg,qt5<bBOf%N 4_rB^(17BTl!H}z~_6y$LY>qg+' );
define( 'LOGGED_IN_SALT',   'GpU.]X)8$l9d7cTyVdI@H:>9k04j_[AOOfx_.5Jl3;r9Eqs0%A/.vbRk,srrFmB;' );
define( 'NONCE_SALT',       'J4#qKvZVY|QMx+wl74;3zP)Yb0+ o<[[d4b!/MM{),.y2+.ufhPTj@bFzcMr4$ZP' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
