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
define('DB_NAME', 'b22_17534697_WordpressDB');

/** MySQL database username */
define('DB_USER', 'b22_17534697');

/** MySQL database password */
define('DB_PASSWORD', 'oki4ever');

/** MySQL hostname */
define('DB_HOST', 'sql206.byethost22.com');

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
define('AUTH_KEY',         'Q8%+)n ~F9~uP8nX(x s+tzI( #NZ>0m6Dnz:f0Q>s)bZ*QJ=zjRUure`}0|wi;}');
define('SECURE_AUTH_KEY',  '{w7]<&:4[>9OQt5sfd=0JJ+[^U$Of2RhD:ycbqL.f>XHT(A3U?*fUK[rw,f||0jj');
define('LOGGED_IN_KEY',    '|/M/E-ZKY^e{m?l/q5~ZgS8/`$t+dMqWwPv;pq_8Z!pAyqZaR=OV>)2;cIB|R~R(');
define('NONCE_KEY',        'rA[#MUrn;w).y4+s4ZhE&57osG?XXDuGl{)Q<e|-ISN%umkCny!(ZM^>e!ox4o_|');
define('AUTH_SALT',        '555j)ui4yq@I98cS7sVxzm?IXAo>c08?/1w-~U2,s@Lpg-Q9aN_%P?Sk%6/+5]W]');
define('SECURE_AUTH_SALT', '3y|<W^crn5suZD;L*/n>(wbH@X-i6+1ranjPy)Bxk>Z4H-VhuuDr:&<1*{z@0-S:');
define('LOGGED_IN_SALT',   '1CR4W7xLP0x-C6,CWES xIZqIG,BT8|Qa,_:G~6W@kRK|_U1[c^|bI[^p#x|@Q7e');
define('NONCE_SALT',       '$H.Jt0qS-!HV9}}}HPLjHd`A?.^O-$tllGK-%)JD<|CGT9FBYy{Dc)-|HaFLy!m:');

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
