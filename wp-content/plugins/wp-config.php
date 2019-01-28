<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cl26-a-wordp-xba');

/** MySQL database username */
define('DB_USER', 'cl26-a-wordp-xba');

/** MySQL database password */
define('DB_PASSWORD', 'WECkVhV!e');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '(Emkfo0WSpAgaFc(AqTUno88hcrdJoxx3H=hSgznpooook)cid7s0AGP0l(HX!BL');
define('SECURE_AUTH_KEY',  'XYEYpTG5H5mmEq=hX2av!mBxdguNvxJE_)Rt^_)THr/Nt/vy1f)mSF1NDFAzC2sF');
define('LOGGED_IN_KEY',    '+HALQh(jAb0wE^(x/ifNJr9tTOqe)RInhshRCrDZagjGxA8F2#B+eeTt^ZOhLZ(D');
define('NONCE_KEY',        'A)/yOfBKYey-3=evJ88_PtfosHpbtiMcKl5ADIbpk!PKIT9S3E!oDpcNH5QG=K5c');
define('AUTH_SALT',        'VbtIlkUaNRh+PJGeDoVt_K4HkJ=8nawAAR-4vX0W0KzHj(KTde7vtedyAA4ni5T8');
define('SECURE_AUTH_SALT', 'AM1noWERWDs!L00#XxRydu8CZP(S+iD_U+8NmgAl5wTR^cr0^QjRL)W_Q8X+l=U4');
define('LOGGED_IN_SALT',   'ryAsS4=-#m=jBcrt9QgyLkX1i6_kplvXyNzK9s6rLgdlQKD^i6WWPx/2mwmJwxdj');
define('NONCE_SALT',       'maO9=L!NHPqWYoBMrn4fl+fziUhaZ_BGdhLTjyQpwtzi2_sA_xY3!FD6T^8RSP4K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fd_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

