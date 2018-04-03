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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vietcola_nhadat');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'abcd1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EwnIx_4HTBqaE*b)b^@Lu#J<<^-L}U+&5(_4FBYPSgR-dOXid|4#Mz1CuGO9k; z');
define('SECURE_AUTH_KEY',  '|2#,shxcg)&I^8q<xKHD^>oD xNn3r-07:8A x93aDAN_lS<vDln*HH8T*FA/ei!');
define('LOGGED_IN_KEY',    'Cj)-;iU&]Be],4<8uHY0H%Q9azY6HD=?JH7e#j~XFdBiC?sr.WVQE*BElmN$yfxR');
define('NONCE_KEY',        'G+sI?!Pa&Lh|lBK,fg,!I]>c7vA?nEyGSP/E{cRc<Ji]We&B Y#kZ8t,VXKkHsu-');
define('AUTH_SALT',        'hn:z-Z7?H6H)CP3_)Xc(ibxxfd7KUA8`q.zP%a[r,-DtbkcP#flh(J2$N<f,eW^D');
define('SECURE_AUTH_SALT', 'M2:8mAl(T{q<rn*o}IyUg0T$GVgd|,i=Blm4O;B6jSI1hJ&~5SUqx(M)Ir[Ah$J<');
define('LOGGED_IN_SALT',   ',m;.#Gfiat{quIhOD]LiL: YvbI{3D!VTMrv^Q~y3Is_f`(GuHr9JzJyHTW.$uE=');
define('NONCE_SALT',       'C-enE3Lg|Q8!%$(~yEtkrjKy2%{-xO2!RN~0cNWz7mKhu}b`5E.ob]`[4y2%z~/^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
