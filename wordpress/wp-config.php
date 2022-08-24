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
define( 'DB_NAME', 'mkzz' );

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
define( 'AUTH_KEY',         'vEMn<&=/+AFD4HXnCVQ?b&:z|n-7u3>t-(&!dex#?wy)>`saS6]}&:%g%UgJOu?r' );
define( 'SECURE_AUTH_KEY',  'u~tgJHu=Uo0TH7X|I2Jx;8(:w7_iJb,R$xT}iRG~:!3+WD~c .Myi+J@dVT904*N' );
define( 'LOGGED_IN_KEY',    '.T? n>=e,^FUiL=$!RLMHJBT.}?+<[P0143JX&o0FM_ugMjNC8lj.[HKh+2a-(~J' );
define( 'NONCE_KEY',        '5E%%~kthxIHw0?2mf7n$Tr<X}opHZzo9 pZBrT=HsI3W$39>4%$v-t93x`[gLF]I' );
define( 'AUTH_SALT',        'e`|88;2*^43[H`gZ@jn=t~%)+gbj4-I[iwx|YxV3*FttRSs~]Lwk&ryUQ)Wi `,4' );
define( 'SECURE_AUTH_SALT', '(BS(HUX-3wg_aZr%/^;gb)KJ6fY~rt63P|p^HNXXUL0C6SG+0hWKk*qD@TQ9VTB?' );
define( 'LOGGED_IN_SALT',   '}/T>IFW_2FHl922+cIdN3*6[CjT0KI!-~LH*Jxi_@*xx1)PP?*qHg?@oosbi#(F8' );
define( 'NONCE_SALT',       '($yQL~XfgNe>gV~3QoULt!}G7&Tc=9E=5z|R[guaJ~_1~FiS770JCAGg+&;rL# w' );

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
