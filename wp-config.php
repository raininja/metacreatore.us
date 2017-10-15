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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'metac' );

/** MySQL database username */
define( 'DB_USER', 'devadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cl0sur3##1' );

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
define('AUTH_KEY',         '4UIOae5-9a,<3d:-8vA/)Nag+hp2} !++@r+{L9C1Qc+M3dH$MQ3n?yR$ug.6e,l');
define('SECURE_AUTH_KEY',  'i{1/G$TR+{qrPy[/Q[,abh1EW_N31{m_b,C&LVuKdm5#cY8JM$+vwud];+5L#4S+');
define('LOGGED_IN_KEY',    'VZMLI>r}%^n}KI!Bn8F_Z]Vw^rF $Qwz-t?O#)gBP}cm::F[MmvA*Ur_7o3 T`nE');
define('NONCE_KEY',        ',7RasF;},Ce+L-WAa]1%0@+w$+!9Qvc_w4)/`-DZMf(.Ml3`NlS4#(endX@IAA(f');
define('AUTH_SALT',        'Id[5)$@3r-]$`=|Kbk,c+W61voA:E%-0_+e|4_T a3!<bsGbp*=nL+f_0uNs}];2');
define('SECURE_AUTH_SALT', 'DU n>_Hf!@{j)=_Eo-CG08N|o;G3oXnhN,|T.KBa+LEX`2y7f88`zEwcxc)Ru,B(');
define('LOGGED_IN_SALT',   '2LbMMM(daC46!/?{$G|RFO}{,f+S2B?r>+E8% 9@E@#E.uc..[BziqHM>=EP)E5j');
define('NONCE_SALT',       ';8u 8r||).u}h_GpIcqq-Un:-OdM^|/U()bFDWzJIwm:/7A Nkw-+j>u |,h% w^');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://metacreatore.us/wp-content' );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
