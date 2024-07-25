<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'UZL+*k6TqSUz*~>)DrQc<Kz7^3In#Be07{T4KCAq~?(,ull,h{i5BhP*-]`zi%v7' );
define( 'SECURE_AUTH_KEY',   'BNKKLUVe~IjiCse0DOYG:3:%%.w4IdOMB6u&b/~S#e~1ER:|$%v??;9hd$cxqRu*' );
define( 'LOGGED_IN_KEY',     ' L3W*unF+GBC^.b68a+&{:O2..=+,JS1KBq=t74n0`xO>uQKmhgG-t EUtF;&e}E' );
define( 'NONCE_KEY',         ',oR.:Q.:z.sy??7hO%-gc&pzN/ Y(,/j{(AA$S5HWH6EMW}@D$I&)X3Ks*bbXzHP' );
define( 'AUTH_SALT',         '&MP]D@b[~5~qo&Pr8mU!U=~ vBB$TLmR*ab{XPHaXenAM?]pYR1JFA~jE8:l!b=v' );
define( 'SECURE_AUTH_SALT',  ' eaogb3pjwKY!(Ao~fCYmH9l5W9(_x >JxFZ7UFA^C6Qtz7BIVq?jpj4hdzU,m6c' );
define( 'LOGGED_IN_SALT',    'VTGj&;dWlo.iJ9<;jz.dBVv*d60G&0%/Qp6cRfj<K_sPSecf(ie)Fh`6`y8Bk,c>' );
define( 'NONCE_SALT',        '9b(ju}:9wYj{LvR :}3nSXCF8d(EcqRFV#E6(zzwq R;`.%<U+707?0%#raV&CF~' );
define( 'WP_CACHE_KEY_SALT', 'SJeQc|M^dkRo0MCav^0q+fY_1k6z#gTTS`ef`;XTZBWbIA767[;/-S85TEOO f*=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
