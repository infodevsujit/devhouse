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
define( 'DB_NAME', 'frcontent' );

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
define( 'AUTH_KEY',         '^H2! R7|6-:fAe?&P;DOG-vq.A3MBgz5kKp%2m*JVg< NLXBtM7A(/nT?kYgEOjX' );
define( 'SECURE_AUTH_KEY',  'T]K+Df/0,#YUcG TmZn5U.r.R3T}MK:_7Zf[]p@Os~xtsmE|n*X|>:Cm}?dj](P^' );
define( 'LOGGED_IN_KEY',    'AqNuEb1c{*iR8#dQ^a&:^I,R,dPx}tX=GF}t>}?xM?&wIICZv+AOre?s>uZ+v0L%' );
define( 'NONCE_KEY',        'V99z%mF|iY<kW({l>nLO.A68Tk:[-nwxbFYIF[Gs5[v8ZXRRXtb>H+6.PTiCeLt3' );
define( 'AUTH_SALT',        '/`}ege.yu&L-ro$E[+g}yOWA`$e_Xa$3/lA8PrOqO}zP~$k0U|)-c_Roz(N{W0B$' );
define( 'SECURE_AUTH_SALT', 'T#M~UXPydV2agPIby7j R0$]t?7HtJ/ShvUx]si$%}gUY<a})Em/LM-cckY$- oM' );
define( 'LOGGED_IN_SALT',   'Zc00e<6rl;Y@r|!L6L+C!=BsQ_Z R4+PFap<m<px3?EYsTevs|&|ww<qEamD%%C6' );
define( 'NONCE_SALT',       ':~<uTP0_3?./^LdSp,lbMe~)on$hCOxD7$.%>|xfhX-x%c|DSLM l#)pt4KRnvw(' );

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


define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}



/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
