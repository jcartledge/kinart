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
define('DB_NAME', 'kinart');

/** MySQL database username */
define('DB_USER', 'kinart');

/** MySQL database password */
define('DB_PASSWORD', 'kinart');

/** MySQL hostname */
define('DB_HOST', 'kianrt.db');

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
define('AUTH_KEY',         'KD_EU=|Z@-bOgfY*;T@O[K>l:*M^>kHK@6 ^<>9D5U+L{MqedU7K5-]<}86?g#-#');
define('SECURE_AUTH_KEY',  'WZ?lw&f=G>eRKEx6W{q|~x6?1POgI>w_|:WUCp&SlD=^WLJOf6my,+LR-M#_-uDR');
define('LOGGED_IN_KEY',    'E,n9FRrCbCUOPF#4X}LjeJ Xgv|%|.VZsdpVj?hpONz=jWj>9-<[8&-4u|{LKNk#');
define('NONCE_KEY',        'l*L!KVnr% ^2LK8Cu+QV!Vh9M0=LQVu-)pCnPjB]f>S%ymLa61)eWHN:[-<ETG%/');
define('AUTH_SALT',        '[mc>+w+HF]^XA^j<-/W*/yV+O?Xql0ss0`DE.?:3ookOby+N[WiAqgaR/}LJc+P|');
define('SECURE_AUTH_SALT', '_[#fQ$KEG17C]fK!~Dz1,&)1.Yg8bsQ/bPdRv,Zx![Q3,)`BE7/~9 $(%]_98[-M');
define('LOGGED_IN_SALT',   ',e<rl?JoH^juqtI3j&>uVjVVf$j({-%<u*S{HZ^<`yA}OZr-(<DCa3(E2_e,K$e_');
define('NONCE_SALT',       'N2U+}scyHO-,%+Uu+| nE~89uPX~nL}#.z.4uoQxt:MlnvJyzn}rs-hbwPXCZ+hR');

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
