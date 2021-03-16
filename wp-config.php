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
define( 'DB_NAME', 'cerrajeria' );

/** MySQL database username */
define( 'DB_USER', 'cerrajeria' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cerrajeria' );

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
define( 'AUTH_KEY',          'O|1V5ifA[&8k@fitC&(P_A>J[A[9YEk^<^vys;l5^ze5Ht_Q:D9yqf)k96cd[c3s' );
define( 'SECURE_AUTH_KEY',   'A@4@fO%E(.~O-$@nkQ-]ladl:{GIf)_)7j~^~k@b$abwI^(q{N4OdkC~5N*|672n' );
define( 'LOGGED_IN_KEY',     '<w9$/zg>d}xwUv@y3+s]NBoZqmXSu#oQ(!ycYpa`h}RC6epFJ$m%O+2[jUC5vV#Y' );
define( 'NONCE_KEY',         'O2RA1st4XgLD1tyD^>o~[zY;M$x{/3@Bdsgh9_DS|C;dOWIdK`1#>->Fl5l%%;|h' );
define( 'AUTH_SALT',         'ZzF<|Wo{w&EU_<j~R(Yz/78/A%@}<5??_LML73Ivt9{5V/T~ `J+35`2/:=K/cBS' );
define( 'SECURE_AUTH_SALT',  'yKg].AGDZMfBbMvNMDI#6jNH{4rek}4sV}{yy4Thui1J{e:Gm2`zKM=}1K7b~2#m' );
define( 'LOGGED_IN_SALT',    '4)-nQz..;,?i8I.=+.,c9cDddCaz(9+)2_OB3!t}SnS<04yX6-6Wf;ayx!~o_1{,' );
define( 'NONCE_SALT',        'Id=+.GfB,yqa+VSmf#yD,lp)d/= bn=M@5&|p_4TC/v}eg,EM2xL?;k#xi<?B|Fc' );
define( 'WP_CACHE_KEY_SALT', 'vW$1 CZrm27VwG#Uej1f-Qr|}G5]AWu+V([{*Z#zJs%JZ~W7ltuDcoMAyIJImaq)' );

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
