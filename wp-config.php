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
define( 'DB_NAME', 'wp-gavin' );

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
define( 'AUTH_KEY',         'sI?>&.nb}Li>-t$dC(j.ZWr !DcB>pFv{k:KoO j1_*yKnzl4Mu 3zPrnXC/roZ;' );
define( 'SECURE_AUTH_KEY',  '_qS5/g6dLt>}wY6]V   )/.8n@iUb@*Et- %Gr%W>0OH2QZ9B8]Z-Lx9L+kP-1,H' );
define( 'LOGGED_IN_KEY',    '_8)=|l{seOL9`r<!pOslvGHpyA-==?KR<Vkls]__C4En:-4[6:>a (L Jpy(^kyC' );
define( 'NONCE_KEY',        've4r*JO_1v6*D:vIZcVC>t#u#3L`$^[DB<u<Qh0[Gr>Wj~hbpRDv/Khz<fo`xwX|' );
define( 'AUTH_SALT',        '4eeoxS6<d&]-RS:6hokIUyn*8{GcBo<,0_S7)fI[p_z*V%[!FtAf~*K[@~i9@a5g' );
define( 'SECURE_AUTH_SALT', 'L+1h,&@f&N1$%y43%Ng^q.fAeAYd`u,*GrK&RH< Kla^1d=1~7t}$Ts6K}NE&bqq' );
define( 'LOGGED_IN_SALT',   '9fBZ}S<ite0AuN+*y^tDm&L$4(XR 2iF|loaPbo<WW[!N?zv!usKiLjr%T@TWylF' );
define( 'NONCE_SALT',       'm8Wk)G:pcsbjQN_3CaM=h#;lbp_i{1Z,q{R1RkM~3)B+Pi>?SYd9x7ul8`S#sf{<' );

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
