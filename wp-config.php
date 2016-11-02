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
define('DB_NAME', 'vor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '(d:r_-APkkc+LDHl=2R+]R-v[[P|:Q22dzr=]fb.}]G` :zFF!jI3Ee4opn@cT8(');
define('SECURE_AUTH_KEY',  'X.)L!|2IOd{kmYu.fNS+3)K-Nk<7d# XG;zAmVOQE:kEsb^ VZbsJ@c)JvRhza<;');
define('LOGGED_IN_KEY',    '3Nj6 g)4{} N;rOpf}//W%/_w^n&y/nyW!Yg0R55+H/V YN 06oNQ{yUY%iE-$#[');
define('NONCE_KEY',        'VuRaRJtK|fGS]Lb3/! SXuyA;$xx#ekz*ESfq<XdG:Vf9[</>eZp>@6GNKI<o<2s');
define('AUTH_SALT',        'b$Yi8dWrF<a)SPo1d)n:lFN!d3u2+t0R6dVW3!#qCC=H4:9BZ%NmaKhAh!QuGKzQ');
define('SECURE_AUTH_SALT', 'fnNW{2R&V{lo5tDkE+j44.B83++|IA(3+6q|Gv#C%]cQ4lO:}u){TI0Nvd}^^+VU');
define('LOGGED_IN_SALT',   'cAE#{@K#Oy8y?dQ]t|5$%$mwaI~Qx{0K8XdT.2&,Fc3Vqb>Y`$eZK8o<G8@d}]1m');
define('NONCE_SALT',       '8pTaw,IjY~mSgD(!02*#6%>&vK^Hv#2T@p;;rM2uO]kM>u-VV9z?O4`6Dr7awyZo');

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
