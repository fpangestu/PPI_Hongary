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
define( 'DB_NAME', 'wpnet' );

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
define( 'AUTH_KEY',         ';_7vppUG0UgQ(!T>vxKvnC.3otZ+}xr)tNyx$XE4;{>EiWRmkAPIKm9M`>=eyzO>' );
define( 'SECURE_AUTH_KEY',  '@mrS;EFL1^E((D95!vjHg)mW2|GR`0sWy^r,6By0g!D-0O/x<^CcgQ?thn~:y(YJ' );
define( 'LOGGED_IN_KEY',    '<!YDCvwL}(xl)ED.YSf|@J+W#v/Sz[XP;k[;B#7+eO5Qdc*l||yt$muF`z5{T>5-' );
define( 'NONCE_KEY',        'agzUaxrAx:HB}>at%,FomXt;cYf!F.=.pyx*#L_%^3qo0o;6Hu]2MQci(p[JVirQ' );
define( 'AUTH_SALT',        '+V2KkGlE4/P%/lh|UqhTP,KrpUU@3d[%]v*!?sD_15[Q%Ey$,smyA6ow~p@BWfo(' );
define( 'SECURE_AUTH_SALT', ')Il1e*,kZt.5bt##rS*/_0fJ@o{apsb_KQc0A_|nDj*FrYE:Mrk;@xc4@6{P#&j,' );
define( 'LOGGED_IN_SALT',   'w`}{h<Jd]LJxd0>8 Rf>_9=]!9NM>h.K `M`< PMcepxA1#8W,+=JK:k*5g:%Xi4' );
define( 'NONCE_SALT',       'C_xhCz@cV*1@~@ML&?RHv@B@QKPsy$P.6u/*gD*kPGfJkJJHQs3d=4$j.Uw8=U|<' );

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
