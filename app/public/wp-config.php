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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7VytbYgmBNCGL22InpQ7xZBSlbHwZ9QVFW0bMH+F4sWlFxAmWWSbQxraDOg2pMEq977W0OqZIgCIotiY4hnDHQ==');
define('SECURE_AUTH_KEY',  'KVqXfSc3yx7L2ph9B4vdAxFNRzvwKm991jtVNkmqc4Fyi3wsXd1bstoEuBIUpv0K9UVAc8HfXpig3CFNyjxfFg==');
define('LOGGED_IN_KEY',    'O+anRuc0XXBK2g+B2tgIwvdpUStlBQBQ1/OSXH0nuzAEmHV38PoQ3V+uBPM+SWzPUxw6klviBwhw0jf7ys29qg==');
define('NONCE_KEY',        'cCpQEsQ5iZWFXwTP5eeVyMQML4X++TRafAacGN4canhTYGV0g7978KNWciTSJsrOqCoHF9F0x0RnPdA1d5r4LA==');
define('AUTH_SALT',        'dmMtFxcxV49Y/lgFsBnGhYKFZ2OK21iGe4FztrKgzDrBKwNo6XLOmG5FOJj4incdUNTuenGtom2YRwEjAbDGxg==');
define('SECURE_AUTH_SALT', 'ew/pAJuBwG5Y8Yalkf2yrF7Z3uB4hCBviGJDVw1+4+C7H7bwCwsxjPRF73X+SPt1xTlx1+vMRubb25yikbgWtA==');
define('LOGGED_IN_SALT',   '7GP1OFTwk3IfDyPbR2vquAxn9ikVuR8MTDAt/PTdzNyEUqUu9OAri6Az8D3j4vFjPIvXn1qv0M6V/3/nu8rjMw==');
define('NONCE_SALT',       'uve1+uaPWPR/152qLRXcPjLhQc27bOm6O9WvB25IRZtDQLCGwvf4I0MQwgQo2Sl0GQjNhYJ7ribGkSk9DjXK5A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
