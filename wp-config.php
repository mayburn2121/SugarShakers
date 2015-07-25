<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Premier@22');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6NE9+hz@b+uG;k|~&`$8QNLBu=m>Q^?_Y2W+6jyEpxQ /-K]iQr{Ok(&z:l/++}y');
define('SECURE_AUTH_KEY',  '9,SXmMF%)=%q9n&_$Z&=/WHt];+%}.g3%}|diU+fO%R0C#WaxLYh}o?;>(;Ap>$f');
define('LOGGED_IN_KEY',    'vLCI!h`xl @7)h6}y@7)R1rn4{Pt::JCpPO2Q`%pdIX#Ss|Pmo/VplTScQ{~Emw!');
define('NONCE_KEY',        'O%RO9a91{r]3(e#8SjxeAY<:m%P&-?>-&ajQ077~HB(+>eM/*D@0yYfWwuJ<_5T%');
define('AUTH_SALT',        'TCDDg+F.`5z_A=zy>-|,^}NJk5?GLlM{.X=[m&n4qs0N$>dyrO%d..2m$R#+J E~');
define('SECURE_AUTH_SALT', ' n{=Q-HhLoO.*RY|H-1bW9o}|6h-|=ZTJf*()Nzf!B |24%8t{_rxr3104xmA%N)');
define('LOGGED_IN_SALT',   'D/X`KokxSWAde@iyWN=S)@lv8Ms3v!jmcDW*R]X32nY,@]bgIPz=_G9HhH9.3~2.');
define('NONCE_SALT',       '%<`^kidCB&zjNw2)Bb+WG%0L0;@JOzac7rwJ+rbt=DTcMQ+<x+|CmpUYwxJ }vs9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
