<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',su|^I&enO6a@?|D%->Y9MfZH<cPu{yw+leNo9KDkWLO}hj}lOEQfE3zxV~jBRZ1' );
define( 'SECURE_AUTH_KEY',  '4@e?GTX;:l*#|N1TaY ]_6%isnLqYqWIY-N58#=WGv4!n>f~1A]@:%{Z<O(lYanY' );
define( 'LOGGED_IN_KEY',    '{^amt1H#|wrRv+pYy1LM.@+S;#@qC*hh&dJ^/_L5|c>`y4j3KbS(LGyJ.%97/I[{' );
define( 'NONCE_KEY',        'c6!vKKj;^jw}R<W.D]e7HZPc.V|zVr.[oDD--p;|3mbI9y?i@~F`*=#WE,J )sy)' );
define( 'AUTH_SALT',        ';|B.d7fJ?)S65s1YdfC&tzq`k)hqlC{$rhmfPx/xBcB!(yw_|MBak]eZcJwfsR(m' );
define( 'SECURE_AUTH_SALT', 'tEyX)@)!5!f:/W+%{^b-+xmji;keb3(-g:!p6`l_RIX+lDo?1G{+usfNq 5c30%]' );
define( 'LOGGED_IN_SALT',   'gvf&n5XKAC$1`Ir+k/_nb/D=<kS@YeQex>tAEbaH/V&u;2 IwHYe2B-!OzW8-)wz' );
define( 'NONCE_SALT',       '3(;H(8mPSbEo@C_K&7~6)F p(xy[,G<)?cs#1&+Vo%pL,~[q;hA-L6#<sn]lVV8`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
