<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wikisoft' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Language Support */
define ( 'WPLANG', 'en_US' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wmxvuI53NYIfO#>r>a<^<n%w_c51#3P1oAgU=kbS_?Q/a!$Nwclua[n$%SzMQrev' );
define( 'SECURE_AUTH_KEY',  'wY,$/,QX-]+r?tj<l,g+B&*eq]n@}$g1bNz}+MGON40;UVTV>(#QZ*v~5;LN(CL(' );
define( 'LOGGED_IN_KEY',    '?i41P!uf_?.R@~F{#KAPnk/{%Cs]O!kEN_GOf3@41Q<4@*aLu6/A2bYOlVoRY6z|' );
define( 'NONCE_KEY',        ':-<K=_/H&RS&gKIA}~7a[uG A~I-Ug5T9Y3X6ZJmud0{kEhgZQ0n~;eL-eQx<z_<' );
define( 'AUTH_SALT',        'T<KA0Pll;a~S7h(!,_4I0A5Tkr;NPFD59s&r+xu3rY1ceBkET:_/H~6(=$05=XV`' );
define( 'SECURE_AUTH_SALT', 'kPw9QXVS5pQ!8>E,CEzo=*XQiS[W1UEl*4oY(K;(~vvL%E[Q rbX>z<^{8bmfH*D' );
define( 'LOGGED_IN_SALT',   't;.:B?+rqH]bV&6ox}/:9Pl#64g?kx+ZfOt1+V7F38[b&o_Sqf&i0Lo=YGE@Lr3u' );
define( 'NONCE_SALT',       '>&!k;0Z>gDk0M/|^,kS;r(55$7 |+463(O`{qUE9RT^:I{i@oYkI(-[uT4E^|?st' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// For FTP Support - have to fix later
define( 'FS_METHOD', 'direct' );
