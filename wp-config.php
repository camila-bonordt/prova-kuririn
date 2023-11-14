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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '2021_projetokuririn.oxigenweb.com.br' );

/** Database username */
define( 'DB_USER', 'o2web' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '10.0.0.84' );

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
define( 'AUTH_KEY',         '?0L{Vm$4{OIVG& ]8<)_NP7eH@si|Cq9n[PWp9#p?0&2;#-.=S*rp,2#/zt{&LVg' );
define( 'SECURE_AUTH_KEY',  '9r0}[T##N7:EST&7@^XdyJi2_jh6}-:NU}X.Xd>|H&)Vc)5t8KaX-9 #2:&dyjOZ' );
define( 'LOGGED_IN_KEY',    'Hz+o8mEB9&f:V;2_E23^~<D?-MDfduE1UAcC4D~/&[HOhPE!Nn8.&}Cd}/ hwF#4' );
define( 'NONCE_KEY',        'mE;e@:evz5uy<{2d8>?rK^DPwVau^3-iY+soW=VTw7K@NZ_r{R}0[cTi2>pD9,-C' );
define( 'AUTH_SALT',        'Vje^2N.P$-p>v Nt;fB$^IWE-{wcV0!JJ$RLP~Arm4(n2Q+F3mt{/vzD%Ws_O8lo' );
define( 'SECURE_AUTH_SALT', ')Qud/Bu@@Y0~([+q*Z8x*;oMC!V74Gl&chZbZ_ }L;FsQm&L!bz*5Y*DYr*Y}9,j' );
define( 'LOGGED_IN_SALT',   'rkayoM4{{zG9S5:q6{fp.d,{$FE`+*4?EJS6%(jbL:Ps)`A~wf77%`Ua$nRh+R36' );
define( 'NONCE_SALT',       'U3Mux3$Kp5)N=u8kow{P:z|1^WTGj m}_BVM]R]7LG`zoI;Ss/KU8c](_%Fu3aO=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kurin_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
