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
define('DB_NAME', 'alex_apostolides_portfolio');

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
define('AUTH_KEY',         'dD]%uj(8)Uo1SWk/32FQQ3b{f8~a.I}wDW`;=HLTOIHB:->}CfPXpD;[7uJ!CDrC');
define('SECURE_AUTH_KEY',  'F QY@xJSW#mlAL,TV7_8f5Z5x^0b7!pBq2/CC_-#:9(wure)(y>N-&t3NIG*n$Sm');
define('LOGGED_IN_KEY',    '-^7 l?JXK9+9DUdKumVgxHCMA25gs9pNwaR(x:+!-.)*G*ZTtsr+}M}kzV@`dz||');
define('NONCE_KEY',        'LAX?8JO)7zkjlY5Xx<Kt^{5D|73e8O+N8>AQz[vb*=GoFd^3uS>Er/P_Q?g>>veJ');
define('AUTH_SALT',        'fZ@<GEPTJ!1wbi_{{I+futGSK/v(NCg2SiqMVlf9nk#a,<vD{ir%|V&?ml~Uo>b2');
define('SECURE_AUTH_SALT', 'jSb**6V^HyS3U 8y5JPu7f8qBb3e7Icyh)%qCB[ut@zCuVY@R$;m~BWMgvrC$3a.');
define('LOGGED_IN_SALT',   'wFBgzT@+=c=V<nw$o@@DtwJ8,UFGIN*b#F2^oq[*D@H]tY{=Z*jdk2*D#8/nss1~');
define('NONCE_SALT',       '8!C@{x%:SXaP|Lwqgs4c`&Ps5i A$`Z!+gP/lCrtNY@yeWXV:jwZfO[jWfJ/i%09');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
