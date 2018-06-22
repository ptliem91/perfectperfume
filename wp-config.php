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
define('DB_NAME', 'perfectperfume');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'RfE~9A.#&)ZVYZH47jjRI(~j--U+8%!D4B?d%cI.5r%u|plM9E Y.w>Gl-73;W`6');
define('SECURE_AUTH_KEY',  '.l9C2yVmb[`i]:M?27K#9pm%bTL*i/d!#~ipo6@t~UcIdH H:Tq;~/YY7IN?uW1_');
define('LOGGED_IN_KEY',    'Dye88IRkqS`A-goMW/}2i Xk4Qo(BnpPbS_y|XmRTwjD<I_qz^DNN(ug{B{_tB;z');
define('NONCE_KEY',        '<:{&~KGy11RRSGU?[yF*_f8H!uK0x&iM6Dr^weaSrgg4#*skBgf%,Bpx8/Y;tY]q');
define('AUTH_SALT',        '}+}05CCs4GmvS6o:m-72^/LX[W6,v]9DM*_n$8Uwc8k%)6|:y9ukR#$]Fs::a,[}');
define('SECURE_AUTH_SALT', 'V6&xo2@2x%4E^h,w6h@6qCxF8wR0U4}_mb|!J94IMB(h3QD%[:ZgT}EF:U+jy@`n');
define('LOGGED_IN_SALT',   'C)UOAz=3~zy7$@~HNk[(<{Ob.kDl)9aOL7qF*1o|8&IG1f^FSloTQq;57SGXuEky');
define('NONCE_SALT',       ':u3uGDQu`}7OSw=+ADX=K^DEB]i1P:05F2J`_%6:la[UTt9(yZ=BNDWW!c U)|B)');

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
