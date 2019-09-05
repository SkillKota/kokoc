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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'rSz X#uc(>h=j_I4j)O.q3/U7khl@><}Jvi!{m>C3&`F[[FaHM]jC|2oRE>M!;e ' );
define( 'SECURE_AUTH_KEY',  '&>0n0+_:-8l8EDR=zeg(6.D^;S+:geF;Y2kfIT.aFIYR[<1 xGrEkXtW^Jc_JXNV' );
define( 'LOGGED_IN_KEY',    '^DOo<I:`LzqGsV6P+URDWo^]&,hR].!yB5UO&g^Lk$fH,V#%pPc%9:,V!lg|)KL ' );
define( 'NONCE_KEY',        'U8oIJ;U[+o@;eqj&in08hqG_Y}b LIJ5e$r-Fw(yXo,`lD)|nIJ<<sr,tJqFxwm`' );
define( 'AUTH_SALT',        '+[#XA2<:ttKv`^&%mM[_g8k,OJA@GgILYkUK@j~(J#X~e&)Lh6i@+kBG$6/[>H]g' );
define( 'SECURE_AUTH_SALT', 'TKWD(m?Z22^3Vd|z2Bd-h2zR_N}fVl.0$q#3_d2qt2;@+=(hTznqudHGo_n8!u^O' );
define( 'LOGGED_IN_SALT',   'k>@SUzYHh|Fbg*@W[@+Ew0y Rbt>v$T|CTo@:DiR:$ 8+ c~i2Fe*s|j3o`ME[?&' );
define( 'NONCE_SALT',       'w@ouL{)JaBSn2JbsP#AZ|[m/)vG-XF*}L[8`z/0pq()IQ2Q#)<6FXp/kfY5,:g<4' );

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
