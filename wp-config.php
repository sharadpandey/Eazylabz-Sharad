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
define('DB_NAME', 'eazylabz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'jaSs6mhHflHnYhsp');

/** MySQL hostname */
define('DB_HOST', '172.30.193.163');

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
define('AUTH_KEY',         'L_c8yp`nFXXO<jnO.5r%?.UDHVT7IfrF#| M0HeRXRPGJ3|Zfz>Q0D%&3&fi%5^k');
define('SECURE_AUTH_KEY',  '&EmoDXb;,urJ@|U`4Zz,]&eQo`pqUboo01mkiJ_n7B]3U#1c%=H~*uciy8fuvuZs');
define('LOGGED_IN_KEY',    'Yc*:ivkWjUNJ9iAX;%5/lhF^Y1$n^.31%$t)qU$@Ghh6=2<od*6y?*b.Gy1`!ZA(');
define('NONCE_KEY',        'Pq+)V2z>et42t*H8 X`d|5I}iA6!j8=91-78m#H^~6KBxz[#Uc mdw*pcvYIG9,V');
define('AUTH_SALT',        '6u0+k|v(R1^/OhC6Cr<QQSA)Aw{#QOb|oT=YVNk!@1^`k[oS9N^^Scaz4;Q{VGs&');
define('SECURE_AUTH_SALT', '8oAV)oDtd.uul5EEEnxY%JSM k]|MEu1nA_|pi^$!.v3F*$kd0$<yR7g=W5oZb$Y');
define('LOGGED_IN_SALT',   '_OugIj~!B&e0;o<}NaiHeA]I,w}{F}UKQV2z^iA,aLz`~}t/6:L}N;X4&ti MFHJ');
define('NONCE_SALT',       'HTN&_T6j.<$tGHKrWCDB{9JDz)Rj,;%ysOz1q..=CV<(_R?]l3Gt97pL3]YOV2i/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ezl_';

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
