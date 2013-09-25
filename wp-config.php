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
define('DB_NAME', 'brunofelicio.trii.com.br');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'OwGGUZyE}r<&tq*CTe| jS<xDz~5CWitR]!wknO`^3S#eW[n*[pYlX#Asr92Q[WI');
define('SECURE_AUTH_KEY',  'P9KhX*>#`~5sp&VrB#C+cW/e2*$]mjBuc4[bW2i5>X$*ey-IK+Wpa9EpGywm=9>`');
define('LOGGED_IN_KEY',    ')31m#{hK[7o50k1A*1)au!WEB5aCiW?K wZ$)dq1|<@5w;t^N  HMRZl<B tpPI`');
define('NONCE_KEY',        'FV` r3)<_CR~m9.)n{1dE;.+Zn@*C;suRO7:9YGoyH6&Ow k8ml@D Fff!@m#`&o');
define('AUTH_SALT',        'Qqoeq%Fg0O`-M8>YS/)y/&b{8IL!N15^6gTc74TzU*Mgray(oN9ZWNRxH6zX!1ds');
define('SECURE_AUTH_SALT', '/8LU[+{&T%#0dfwz9%pUfSl=w&`WUFvw~l:M&8moXVsuOEm*6)a0x)KW:Xzw[5Wo');
define('LOGGED_IN_SALT',   'B<>;@(.m6:p4H$`iwF)6~/naI>78F-~).[zsnc_? DG.y#v/>&M{Nd(z9OM^,]g~');
define('NONCE_SALT',       'hJ5$W=d t5r8G*,n!tz(i`0k3Pa tSM{(am$ bKsyi/9{yKzV`5$R.sd!avrtVnr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'pt_BR');

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
