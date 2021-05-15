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
define( 'DB_NAME', 'swatishark_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sachin123@' );

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
define( 'AUTH_KEY',         'X$I|HjFB10,uM@[rV54aN(0FUopuL$mwFIj5O54ILNJ7U3k&zS^4nY06P:Ic#zh~' );
define( 'SECURE_AUTH_KEY',  '8>.PlkORpV28B-i^>IGGV#!j&X,EtGptZr`Pblp{c`#s&byru!5s )j=d`beYGDS' );
define( 'LOGGED_IN_KEY',    ' E;WV8(@v9eDrr+*Rc5+>:@;koVW{VKTRrMi;K1-`;#2kFLpWLeWED}(s;x]yzqh' );
define( 'NONCE_KEY',        'PF:VtL J(*<8T!?mEMr{gbxhkv$@G/8wpG1N2nkU39 E6D==W:()=DGsM2&UMVzO' );
define( 'AUTH_SALT',        ':kypyGA$4_|ofyzk(6D]e7e4SWF_w^rgV@oZTx^{40FZjCK@ye`/v{9fV1glep2t' );
define( 'SECURE_AUTH_SALT', '2Imuc]H7<xH]|ZubYw7(fCHVK~@[;29vUri@y`PM.I6&f|lV. )ofX(YIsfT9!^+' );
define( 'LOGGED_IN_SALT',   '!YqQW$o(9OZG qkp3n%-3Xx/<lXYFM$UF{5G#9V]/LiR73[!|</)JkJ/Z(Y{_.H;' );
define( 'NONCE_SALT',       '$,=_$VEVgs8VJ3cz?hmg5/<T,JR 6_Eau%cPDZ]zn7Wo[^;zP}/@x>ke2[dFX*Gx' );

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
