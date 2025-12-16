<?php
/**
 * The base configuration for ClassicPress
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
 * @link https://docs.classicpress.net/user-guides/editing-wp-config-php/
 *
 * @package ClassicPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for ClassicPress */
define( 'DB_NAME', '__DB_NAME__' );

/** Database username */
define( 'DB_USER', '__DB_USER__' );

/** Database password */
define( 'DB_PASSWORD', '__DB_PWD__' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.classicpress.net/secret-key/1.0/salt/ ClassicPress.net secret-key service}
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KEY1' );
define( 'SECURE_AUTH_KEY',  'KEY2' );
define( 'LOGGED_IN_KEY',    'KEY3' );
define( 'NONCE_KEY',        'KEY4' );
define( 'AUTH_SALT',        'KEY5' );
define( 'SECURE_AUTH_SALT', 'KEY6' );
define( 'LOGGED_IN_SALT',   'KEY7' );
define( 'NONCE_SALT',       'KEY8' );

/**#@-*/

/**
 * ClassicPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cp_';

/**
 * ClassicPress File Editor
 * 
 * The File Editor for plugins and themes is disabled in new installations.
 * If you want to enable the File Editor, simply remove the line below or
 * set it to "false".
 * 
 * @link https://docs.classicpress.net/user-guides/using-classicpress/editing-files/
 * 
 * @since CP-2.0.0
 */
define( 'DISALLOW_FILE_EDIT', true );

/**
 * For developers: ClassicPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://docs.classicpress.net/user-guides/debugging-in-classicpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the ClassicPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up ClassicPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';