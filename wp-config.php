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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '*iB3M*B0/?M+X!R<-DR$NvW=;<+]T]s=fgoUst9ahM*uqF,Ivq{%>;)NP+Z</G0^' );
define( 'SECURE_AUTH_KEY',  'R?TBX:xXTh<.1[+,9TaRn3XNBd^I&6kSuN{u%ai/2jaxpWkD(na}@j?dsj2uXcrb' );
define( 'LOGGED_IN_KEY',    'XA$f&H.,2*RUS&XX,(%XCkXvcMEKt[TOdZips`t6Jw.x&Sv+-#g_-rU9i=p}-67V' );
define( 'NONCE_KEY',        ']P]nO]VvnkIvcdD!>3q6PwmCg6y5!iAZ1wT}mc[kv~Ms|NK^MHrs! :lqQ)K{!rl' );
define( 'AUTH_SALT',        '*^8K7>y/lz{$zGOqy4U?H/p}ob[CIiHf^!I/JYY4FZM5J#kyfA9|Ew?$-d RXs7;' );
define( 'SECURE_AUTH_SALT', '&L$ME;j>.I;U=@|#WVa0HSbPa`+gQUJx/XwTu< KYTUe03JX:1|%Gs|xG;A8N1~|' );
define( 'LOGGED_IN_SALT',   ' v#4vgP2goNcy5hgwLbra5<>Aif<;gS>MMsB!v?`]VmG^}ivNfGqn3YLrRdxV!PX' );
define( 'NONCE_SALT',       'ZXuw^0!bXI=RyD4p>8Q.AWU%hJg!Nzf@~[.%h#C}/N*H`T.Zeu82,8M_b7r){[5i' );

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
