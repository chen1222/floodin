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
define('DB_NAME', 'floodqkrfq_db1');

/** MySQL database username */
define('DB_USER', 'floodqkrfq_1');

/** MySQL database password */
define('DB_PASSWORD', 'uMzMRAaSWb8');

/** MySQL hostname */
define('DB_HOST', 'sql39.jnb2.host-h.net');

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
define('AUTH_KEY',         '+y}}3fV|TYc__~vn evngd9VtZyE_rY]A$jHPsE*8W]i2h?4Lx<Sez,MBU?Q3bMD');
define('SECURE_AUTH_KEY',  'v%z##-mp6[&U-Y$i m#z*0jhYi!Oy6Wzc)UC1{IohaOs?V^T{A}L~q~kO5Y?4Rw^');
define('LOGGED_IN_KEY',    '.}pL|L~]H$i2v#bU(+p.=bl?)k/DO/T[9losCV_vkL?g<y`}pe u9EXbQa*.Ko8%');
define('NONCE_KEY',        'F`kMI|pcr&IKXtQA:OP1@-FbYtq.L~yK26RGR7<yHG}jr1jg=u]}`;/Q/}WcjlJp');
define('AUTH_SALT',        '$VK:[Tq84nP*-7oEg-7M|J%1eDjZGw<G Oy{, 7)):fw+e0Pz_(_ j~ :[Nl2f#}');
define('SECURE_AUTH_SALT', 'O(+W_NGf7~( wHNOtJvY>/V>>09!Rm/^hAs)hVu-rgoE2bl5fUZ<#+1HD>tH?[;4');
define('LOGGED_IN_SALT',   'K9/E[bi`$r~I,k4p^$Yti2}Bky2|6jzG!pG`X`d_H4[g<ew*hK74Kjfx{ G~b!09');
define('NONCE_SALT',       ';=$4JkOq$SoT,X%PylauJUEUJ;yvD>jXNKXOE7iZw#-HFrXXx3[JG8{2IpH0~0(E');

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
