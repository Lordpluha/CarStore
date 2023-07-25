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
 * * Настройки MySQL
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
define( 'DB_NAME', 'CarStore' );

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
define( 'AUTH_KEY',         '!(0d%b9%lWpbe~Qpn}#3 (k>AF6)LKD:hlr95h7w9BvNgZeF;qpSRCk,s;|6[FuZ' );
define( 'SECURE_AUTH_KEY',  'O@a/mec/q(.B8ao=J,8fYR?r6fwR2Y#C8c(!YN!ZhyJX=k@xQWclkRo9T% ^~U@U' );
define( 'LOGGED_IN_KEY',    '?h$MhCrtAA(g_^@)K:OGjEqh`$cHzOp,B<H,_*6^Y&Rrik-j)#%N#5oozR`5kW*-' );
define( 'NONCE_KEY',        'l2tKyVa:_@NE-vUmjWBG)]c[hj|`p<Hp3`9O.aNmFrvItDX&i.M93h!ac[9BDX0Q' );
define( 'AUTH_SALT',        'bSo0^Z-fj|giL4}VwB?!e.yh|Gi0&=z31*0*Q`g3G1m,2QwO7 AWgWk#B+p[!gqc' );
define( 'SECURE_AUTH_SALT', ' 9~JZWiH?4*s(^J+z6#7l.VH51/#7!3~6!H@RzVkx=KAx9C,uX^=hgqtDl/H,}aG' );
define( 'LOGGED_IN_SALT',   ':utfV92t2l`@Tm]K:}J-w[&6{na.I?k*^yWuwt&KUs{%*&cC5O5#(} i[.s&W/|8' );
define( 'NONCE_SALT',       'F{d#g!/:GrVT![_JM~q@U0uv^pC?NT^G*5]rrf4?]0pGC<qEBL~, [k_e1>QA2N(' );

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
