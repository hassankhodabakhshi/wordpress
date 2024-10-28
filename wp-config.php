<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iso1' );

/** Database username */
define( 'DB_USER', 'iso1' );

/** Database password */
define( 'DB_PASSWORD', 'qweQAZ123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'GEjnX@Juc}&qyYN%3Nzs$ & s7GB2.=VZ9_(Qep`ATgK$ljcCnT@[H;ytJc%>5GS' );
define( 'SECURE_AUTH_KEY',  '%8/E{S$}N<^h0=<UQ$CnBcy%x4{;z)d+nd`*BO?,3~%kIUtBEJ5OK3rer$<)PSW:' );
define( 'LOGGED_IN_KEY',    '8Kn?d_~oUr4xRN/Bf]cmh5*^dLka1d]8-a7fw5EI8M$a[ kGb$y=3Lg/)~D`kN3F' );
define( 'NONCE_KEY',        'BYKolb!%.7jHZ{{SH[M{f >}[#Dc>HO$5]t:S$qefxJ}b#e`aB<6Vq*e4zg87{$O' );
define( 'AUTH_SALT',        '~ng(MmU9OB/{P{!VO<;E,6Hl@lj/~+4>(N=~Gd1]./%u&nxiv`J;.<KTDegX{^A~' );
define( 'SECURE_AUTH_SALT', 'Y5?{<P?y:}Fm=6d[BX4|lwf26Tc>hIB7CT#E`Z-,YQ7BX&k4.3z1&WJ?7HAuP_iw' );
define( 'LOGGED_IN_SALT',   'u|;[K_/t|n?z}KnNZt*x#FK68/,Q(G70^-[qA3a[XfAgLVcVix_`jp^^:%=<q%68' );
define( 'NONCE_SALT',       'jq^dObP;=;hT@H8U~!MhkP$-P@GkrNMS<1=Rr9A3Z6Kf?h$7|H,VFxD{w[DT7zv)' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
