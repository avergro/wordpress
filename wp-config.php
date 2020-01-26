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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'OQo2e6#rMp$ptgJ,T$2Q#hl`I9dEA(:`2e6pPL.UO($eGD}iRh2-Ren/q><)L2AG' );
define( 'SECURE_AUTH_KEY',  '`gDM_e(ootA2#C0TcbdSU{7jqfkeY4/j0_5fSOvj!,0Sjvl~H?J-BN`n)Xb8u)3B' );
define( 'LOGGED_IN_KEY',    'b!4E?K:?<{-j,%-]}NXP(9]Ub@7BOl8*Zg#Mb$]D9Pr3G[o-GoT[mKLB.|=a~8K%' );
define( 'NONCE_KEY',        'HiG9xv7N87NjxqRf&N{]eW ^B/Yq2L{$SA)~70YsYy`]^]@.k#PDVPn<V;*VhlCQ' );
define( 'AUTH_SALT',        'h5j4@;20k_gd5L6w,iY1E3D8IXeoOYiobN$HEsuvu:%Br&9g1(>{,!uamPy]FLSo' );
define( 'SECURE_AUTH_SALT', 'N8Lmf_G7IVbbg0RH2=l+<gF6;|uvlN<A.JRyh4TQox7GO+RK?AIsz5}.<wS1)af^' );
define( 'LOGGED_IN_SALT',   'j@_jdg39*m^Sg?O/+@RLs]4@PAwuQQ`1dx^HI+5ofdsT!kY%2?vy$o6XM5IC4?i_' );
define( 'NONCE_SALT',       'D(/o~@`d>g*Q{rONx9!5{k6~tOK+.I,cNUZm;l6EksU:nZ3`t,_.b,PL3tkI8G4z' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
