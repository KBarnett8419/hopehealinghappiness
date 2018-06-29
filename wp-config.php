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
define('DB_NAME', 'hopehea8_hopehealinghappiness');

/** MySQL database username */
define('DB_USER', 'hopehea8_hap');

/** MySQL database password */
define('DB_PASSWORD', 'B!V$TqtrI_,R');

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
define('AUTH_KEY',         '@>w-3U&,k!eCIrDFkGVIp;4eI6Un/1,rt`fU4kX1@q{p$fsB-{.dKBm{O!Py0mK/');
define('SECURE_AUTH_KEY',  'CW=D0eFR3cA&Yct:3wV4.A2!_(@p(GOk k=WfFQDQNEQz,K?XB4HJqer_57+|R1 ');
define('LOGGED_IN_KEY',    'KZyM4D6l..gYGKsjV;0~|X^Idw|ynQIsDfc.AG/ROpQ?:CuC%b~.Mu*J;& B<$pC');
define('NONCE_KEY',        '?UW7%p=Z Qr0..Zuv~mRy=h^+>M@KM~J2NX74|_q.8i[wKUz!}OB>!_aE?4_zKgr');
define('AUTH_SALT',        'S/4|LUvdv2 dJ&|D~(sNC:M!#!F4,&7W=^X%aT{|FfaY.@`DN3+N[TSci8!E,+2)');
define('SECURE_AUTH_SALT', '{>_lccx^?[:%ZF`ZJ7nZHxLUv9SphbyRYlY!(Dd+*^@e.Dz`/Wf({gx+.1VRZf<g');
define('LOGGED_IN_SALT',   '(;1:a*+j)3mF4wV|D5W;dt2R+hbAyVp];En=^.C9!fX.;AlXp,`UJK:Pmrc/8qCK');
define('NONCE_SALT',       '+t#sLxaFwC!6}l;`e<mK0&{Zv|oK2.9$1jCs(kH4BAFZVoV+-V`.e+=F%-:#N^Y4');

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
