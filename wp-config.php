<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Accessories' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lzkAOs&7-w/@tgubX-q*;xwv3|vHHv`Pid$I/luZ;In:ghD(&q*I+QI2]W^@b@8L' );
define( 'SECURE_AUTH_KEY',  ';j__ (Td->2*$F)4^Osbx]0oWWk7EzQR=#KjH#OF:9x~3LnCfF?L`f|zkTP)>$(s' );
define( 'LOGGED_IN_KEY',    'HJ@?UCttn `FQ!/:d/nP0?JH<]VKi(vuIqm3DEs6187~L<;e:pXNu(Cny)!_IdI&' );
define( 'NONCE_KEY',        'Tbz3o9#zT]Zfe;@@KN4-8u]TH+r,VNNwqY})90LXVS0rJoU;Yp|VNw)|H0T}VQ;n' );
define( 'AUTH_SALT',        './%=oIkRyU4HtIy%nVOTcGYp0nft1izYM@@Krt[[P9@:;Hbq>fKCIt,_oZ%}1>sF' );
define( 'SECURE_AUTH_SALT', '`[6TA4 *!c.*[0gALVM6RstHs?~+_s?wnho3RwE^E=cVd(8@{|^1I b0b]%54QrQ' );
define( 'LOGGED_IN_SALT',   '>~b]rHgv7`}/WUN:!5c!^?Ee fdKE!OSA2>]{31xDOF,sm~EAaI:GK9:!3uK(5X[' );
define( 'NONCE_SALT',       'gI]h{uuB{KidT{gTh{:I.9B6={E)Ic+@OK5M3HiS*grw75%k7<)4>{$,2>r pS~v' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
