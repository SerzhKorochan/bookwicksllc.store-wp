<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bookwickllc_store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<)tt=ng[,J2@:^WdJu1h]7LvI:9q<xO_)M.WW{^XH+7A|Hr[Oez+Bfm9C`qcC)-A' );
define( 'SECURE_AUTH_KEY',  'cHqH{<[cdkT1(esL4v5+AiUR2&b>Mr74-Z;~_MW[!A/6xn8KXd$50!>|F-P^|21*' );
define( 'LOGGED_IN_KEY',    'Hf jj=`4[wk%>1]K*2zqdlOB#;$$wh#[sSJ*F7XT-^UI!O(D%g*rq}stM9l$F=9T' );
define( 'NONCE_KEY',        'T06Qb^rW%x+eDRo~sg3UW/es.V/cjYciKEkmGQfA1piuyC?B%UTa0(@hV.6ba9wZ' );
define( 'AUTH_SALT',        'd77aht=>IKV5fIJz [S|-x)S3nr_7^.}{KMk;|y.,Ark(1O0N9r](>xl^4!=9P;b' );
define( 'SECURE_AUTH_SALT', '~1u*[sn&Ew-dBMUpArWiFa+(c~UJu]aNiajb2LbB|;QejuRw`W6+!O@bl1[<5!za' );
define( 'LOGGED_IN_SALT',   'k2Q~_@&B,bB:H>1)[&nWk.~]p`X={<wrFL^6ZlulTegiiu!Vq)h$GH>Two1Tzue<' );
define( 'NONCE_SALT',       '%JqW><qDp?f)=IeN2V]YE.)37;&:9)1j$N WG=7w3Cp(W)^Uaw1{<t,RSzmhs>IK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bw_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'FS_METHOD', 'direct');
