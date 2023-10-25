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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'dWv3eJv#5%},aQ$%RNW`f&12?MVkTCX%r}];1(OcmvtM-qU`hZ-lEY%Rb?K5pcQp' );
define( 'SECURE_AUTH_KEY',  '4Nx]7yO_ng T.XYVB>-Oj%81miU2N7@oI%Y9Pk<!l#`rJ[B~12Ea|b`UQ|a$nQ>p' );
define( 'LOGGED_IN_KEY',    'q5Kn1_X|>.[2/^|]5u4n{Fzw/gIrAEc4+8ep6a=&zhW#$(s#C#>i4GH1;>1mF40F' );
define( 'NONCE_KEY',        'k!pp5k:O4 Y&{<zQ,X+477qD+J=p>5^NgkTQ=O14w]EwTT/*ohL+hDkDi<(F??jT' );
define( 'AUTH_SALT',        'm*rxGm <]/kUV7rX$Z$`L&A . nDF?.9D|p5BP2xCkqmiW7HFCaY1!yO?}_(1N1m' );
define( 'SECURE_AUTH_SALT', '#|ll*=r6<yMSR/>,fwu1fA]{TPD!5:Tm+%Pxq7x4t2^>#.i1EBY`iv:E,tP:BEqT' );
define( 'LOGGED_IN_SALT',   'j#BNMvdzs)ae F&9~vP,xi2%,h&nQgY0f6aZ7JpdgE&%pXpWU|`KZZZ-r=rI`~jX' );
define( 'NONCE_SALT',       'Dv;I~Ibij{Ab&_b@Y:DW6oQs9&T)A(2KM|Knw-L|?/@(Z>Hs$?>hm5finLC%=sar' );

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
