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
define( 'DB_NAME', 'alivio-bd' );

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
define( 'AUTH_KEY',         'LtU*y^2=mY4y+])2R~8XMr^A(+)h=>:_BD5];8*=b.(^Hn!8x*J|?2qN8Fy90i`G' );
define( 'SECURE_AUTH_KEY',  '}UPY^E}vsgFMisfNvVqmz<%3`MB X_d`M1*IX=Y[y)S7$0_Xbv!{DHDvjd`}aVD~' );
define( 'LOGGED_IN_KEY',    '<g NnVVl904fQRvlJ<l3/</|;wQF*9Ap,t|yf6(61ODrc%|i!`5(iRg-*wD81l9+' );
define( 'NONCE_KEY',        'P!U,f)=8`4uSVJ^4Qlk);`ilq=r6[t/v;DF!:b%sh#.:$|nBzrL8,RYoM{OYWB2E' );
define( 'AUTH_SALT',        'Y[EXo1:2^~^QuSUk~)A~?5py6SD/WVe.zo}{Ua>E^OfJS12x,Y:oaU;VYu<A1N@L' );
define( 'SECURE_AUTH_SALT', 'Xs( ;L_8y)J+&;NdO%Am),/KlQg1Z>.j]Hz-o{Z4@+1T;DWlmisAf,JQ#hsR^P}S' );
define( 'LOGGED_IN_SALT',   'fG[n)MGN4-w{)LyG @YaWcJ{;6|,<~=P]*MukhHC4ppl]iMQ[<.kQp$>Kl5<}:#+' );
define( 'NONCE_SALT',       '0ul56nI&<gw$ZVufDj5LJo&uG_rjja~|o{}=,Z:0,OWJm??.KoS-+DRZh]ZSu: d' );

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
