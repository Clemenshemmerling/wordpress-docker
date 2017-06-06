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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'ksRfj(laxEv)ia*Kb95/-_IpPjN^&6-~=In5J{`{d~4R6^1eJ_D<__)tfn13G@{_');
define('SECURE_AUTH_KEY',  'PHAbOv[.t3|WO RKR3&mrP5y19P7rtsmU;@$o(&K7;6y=]],`)%^ .35w{/Y}9$1');
define('LOGGED_IN_KEY',    '|.qkK,3jlI2Esky^dp49__NN?HVb>rrJSXz3=Y%$%g7k6ht,robN:w(}SMVjd&Wu');
define('NONCE_KEY',        'ty?=}cO-cE{%h#q7?l>SX3QU[dCyTsn% H1!tk&hR(J!5;8S}:$sRh0?| aNbK3?');
define('AUTH_SALT',        '72FusEEgH.9btt?c.X~>F|Wc|6-=Le}FogVa/@2%!S_$C7,[{IE!~gQS<G8,KQ.J');
define('SECURE_AUTH_SALT', 'kzaSAXrr$/Yqp|Wctq?85pBM>/{;0KxP-&Z8)IZ_pW!zOZrtYOkUR%N48X+Y>bno');
define('LOGGED_IN_SALT',   'y:l+^xT_,]|qn>uC`A/;eP~lpEe&hWC;!mrpMYIKPWd9FlwO+so5Q>)B^{gKX%<_');
define('NONCE_SALT',       '4;M[m|0u.nX%u$K8;K6s; VOivCk`7n.Ld{g7Kt^BM];PxYCiY%$)~.JC`nYrbiM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress';

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
