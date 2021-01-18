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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4uTS~fMH[_X8?kclMm@m~7F8`DQ9|map~QNVcH<UoWEpN[DO8]d%$KuCzV($_WCq' );
define( 'SECURE_AUTH_KEY',  'rGOA17)?TmZex=Ea:dAZ_L;ltAt#d%RA1bE}<OH1*-^NO>x-El7jok?}RG_w;YH+' );
define( 'LOGGED_IN_KEY',    'xx]zdVUL=Dnc1u-u`Y&JCx#20OX`XX,A(+F~GMgDMR>(fac_{64dCElD:fz`nS>D' );
define( 'NONCE_KEY',        'TsZm<lm]-.ECU|o;A_@2}F3{/$GlHy?<EIb6{mD[3Piw8iI9*M6B(F*Kls;jXd#R' );
define( 'AUTH_SALT',        '3Iaq7-?<kZ;~@H^`+8R#M*yE|yrx<.[b|onx&^Qv0|g@ATWnxQB1^GGA-F.tR9U{' );
define( 'SECURE_AUTH_SALT', 'L!sO<=86],B%)Uq?c^x2Gvp%ZwNp2 Yo^MX.gAnrqmPc#7wJ][iq]3&KIeY?,wX?' );
define( 'LOGGED_IN_SALT',   'nsYjzH:b-QjjZs{7HX*3ao(2*Of+VWA8*5$kdWg>?SiWqW#6d0S3VTb,Kv.1rI:u' );
define( 'NONCE_SALT',       'Q3,>-rTk]tIL8uiU;Oi[r1ulj^mN?}q0eQB#jQ>E:_Y7N$?caEokSdLSmH #;#?b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
