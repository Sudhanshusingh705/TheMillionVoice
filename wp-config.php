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
define( 'DB_NAME', 'the_million_voice' );

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
define( 'AUTH_KEY',         'I~8=9=-0_XgpM -jxvYsiEUb/wZawlL,l+Dj_:^1SR6mi/4mB:nc4~Wd9(:T,uXb' );
define( 'SECURE_AUTH_KEY',  ':+utglB]:cb^UG}IujnR8C:TxD;T,(/OX4V]W^cN0;/u`5rv/%xtPJv@)k<OX]$x' );
define( 'LOGGED_IN_KEY',    'qs+[c#wf,N6mB,>/H-Hyp-^}DvB uj!|0$(9!Z.e{|.u@pq-p1AN8dY M!)*RiiI' );
define( 'NONCE_KEY',        '(}<!^j``GAgt2u0.UvphsDJ{oQaoO,}H]H6j(!g2|K}SLeml2)X?9K4NQ7L5]:4e' );
define( 'AUTH_SALT',        'CRq05VTw:?.%(d6T=|Huu=BKXz!L1%mVp0/7ph[QGB&bni@$_7o_nz`-AP({d,)X' );
define( 'SECURE_AUTH_SALT', '[bG9zl8>/lUrad8z5&_);NQD>xHt~%ety^BBX&`nkQtjk*N)>6R+m%<YEQvr%Y1h' );
define( 'LOGGED_IN_SALT',   '9Q1e2VC]0D}H/}QuWs +3n~M?F_,-paMm4HI>SL20No8Q?H_@AB$qa_GSSEE)*z8' );
define( 'NONCE_SALT',       '[&oHJ[F=dZYw2cTWBLM2An9L8?MG,lQxMR;A44NQz$yoS;4w/Bk_DpT^HtZ/fgrx' );

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
