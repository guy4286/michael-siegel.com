<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'michael_siegel_com');

/** MySQL database username */
define('DB_USER', 'michaelsiegelcom');

/** MySQL database password */
define('DB_PASSWORD', '2hx8cEPs');

/** MySQL hostname */
define('DB_HOST', 'mysql.michael-siegel.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '%C%?J4mI6m$EtluD1`($_(O~fAYwq~Wfed`uSn`Yt)#ecqUUc4&1^:9:1$8+(hMx');
define('SECURE_AUTH_KEY',  'B*#KpZj6#NiosIM6Km+HdyTMdUX|yBnF&2(r#?e"~2%u)5wIUvo$l)~jG(wse6F+');
define('LOGGED_IN_KEY',    '44p5~xI*/yCMtp"pJGKKUJypnMnT(69Z`qLF%ZTv6s%LzNjf3$hpiqQs8lYGbl:h');
define('NONCE_KEY',        'U"^T&xI|U(5vb?SN/y%asYwl`0oGcz62M2Vp13GzAu*CA|4)okz#kx@Oa7c@7HQz');
define('AUTH_SALT',        '$4x"("$*dNM))D5Vn7nnUgaH)%)ji_y2DLx6cZGq!HXqMRm77G;/ckJYHRzwBjTA');
define('SECURE_AUTH_SALT', 'j!oTu/YCq_2BXL?^Sk7NDUYJ2q*VbCYB8qT#3;vZoG?XgH$PLum:RdJZ9Pyav1TP');
define('LOGGED_IN_SALT',   'DqmXxlU2gOy~OYLq(PYg2:c|)@PAq41n:xp2TQ9)!A_rhqUS:W5pdWeNPM"e5&z9');
define('NONCE_SALT',       'mgHgUO%$mNrR"!q;Dkr/0a;pb*9`zD_!jcaH/_(AFQp7VV^JEE2B@~2:gKH9Jmuz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_afx5bc_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

