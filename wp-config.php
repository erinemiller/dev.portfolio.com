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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'm&W8azdwXLr6C-GM~7(&8i(N#OCV!0w}4VbREf]V>uQDnnDeaJF#t%OfColYh^yT');
define('SECURE_AUTH_KEY',  'UT*SH?3.qAW3P-N.-u%i=l|.7a@W`5c|xxG88 d*0O1nU`7J2n!A%YG,16 L2xO0');
define('LOGGED_IN_KEY',    'Z9VuPEsqEJQ,Ygg2X%YbDa~RN8y^>%XxdBs`WznTg-s Rtx_,-@/0lT;OF{BvCHr');
define('NONCE_KEY',        '*?X7Qb5fi-D?34&+2PBvQ0,)7i9(#0)HOR|iM5k+xeOBV=~%2oHa/^+WGkd73Bb$');
define('AUTH_SALT',        'u|n-[Q[o?#;IX/|O8qttn8=v*<2%,GB;Yq95f?H;2W7E3fg1_GW-t*OicALrE_#a');
define('SECURE_AUTH_SALT', '&$Zb6p+3Ab.<M`=Og<Lw2;g%4GNI9Gz#fA-edi6nW3D!L7KntM)Bsv13;L7?A,um');
define('LOGGED_IN_SALT',   '0hMKjBHDu!yocW@TQ;@)<NO6N#[[@R{H&2A,u;|7wvbjJYv,E;M%7-)]~^^A/i<^');
define('NONCE_SALT',       'ES;!Wq{rjh+i?<M_F_iQOeA`x?X~k;>dM$M0:-6}UZN}uit~<&`|Zz-k>dSuM%_a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'portfolio';

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
