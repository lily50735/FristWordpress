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
define('AUTH_KEY',         'Z!D^=#@?&gO;z)gb[Rl5HR:]YH+!~ P&]+J>jY&,Qn tRE;Vd/yi{^?={u_F37b+');
define('SECURE_AUTH_KEY',  '*)mD1p$z9s[Yr96R9f3l6ui Mj}z(2WpU%IkM7|R=rwlSyS{{7 7>qZ&OwDh,: K');
define('LOGGED_IN_KEY',    'N28qPT}(!SA# * v@k1w$K5S3LAbq=PUoww`JSD1BcBo2nXdV.tf64RtJoQ$:=f*');
define('NONCE_KEY',        '8ByXEncHaKnFIq3CL>wRr [2T7lwdN8!),I)JdQDcOD7:w=s7#C.m>b3a~*bi6!Z');
define('AUTH_SALT',        'RN 0giW%?$G,u~?e|id?hNie{sys:ET(6>N)`Yd:0]qlw<4,=CqR)X|xl2etn*hm');
define('SECURE_AUTH_SALT', 'qL#)?p;Vshi*ac{UxBM+][PD^O9}7l`C_WD ??w4D^CYx}U7R,k.Wfcon:igG.4h');
define('LOGGED_IN_SALT',   ')wb3%)!FSVW.c,*a! K8]yIOEiyCZ!YQ5Q|tZ`TA:tR*|?hjf#dGl yDr{n#h5wH');
define('NONCE_SALT',       'E;B~PB$xK*R>h*{33$&q)-#SS9%YGmSdQGI>w?f(~vV,$sNiKoekX(zjy2q!R~Z;');

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
