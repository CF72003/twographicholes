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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'twographicholes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',ip^q5t_g}1@!6H-3fJ]m!J.QFM3/EiERn!pO6(t5(z.L+(X_`%O*PS|dCUs_@XT' );
define( 'SECURE_AUTH_KEY',  '5px4Bgb[qKA$Kmv^1Z7@eoMiTPoZ}}H&<uDVIDhA NWfD*xLne${c|^4n31{OF W' );
define( 'LOGGED_IN_KEY',    'E!{Z+H>i~!LvdcJDfy;4u2};8IWjHY)U&k,@XuhN>G_Sc5qQ/TAd1%S+&oLayxHd' );
define( 'NONCE_KEY',        '!:Ih8RJ90l>a$`ly#4(lirTkO~W0C?QuLH1A1X&8bUZ+wvd]hxxVmdV7^/Q}<kX^' );
define( 'AUTH_SALT',        '~fEWM?:1e7))?z40Z4<Oav.0^lQY!Wi1G2Nm:$2wxxi,6vrv/A.YlrA?%t;}&YVn' );
define( 'SECURE_AUTH_SALT', '43lJna=/]j%=5*rT|]8N*C~GC36rrM%3qDX;qs#pphFbGcK8<#Q2zk*w<upbCa^f' );
define( 'LOGGED_IN_SALT',   '!5j&#i#{[C`)^)..qFMsQa/]1|9.#x1!.i;NPA1Nh@W<ER#k2bG%b)iD9glMCDHo' );
define( 'NONCE_SALT',       'Z~<zyD+@5mHc}~N/ih7;v.WG*i;A@<hTWfb9oX2mG@3N=OHs3w^Pe2^5%z8&ddV/' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
