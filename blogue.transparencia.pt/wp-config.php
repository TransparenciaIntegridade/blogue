<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'tiac_blogue_fina');

/** MySQL database username */
define('DB_USER', 'admin_tiac');

/** MySQL database password */
define('DB_PASSWORD', 'Tiac_2013**');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^4c6CS04yhgpA@v2ED3@q)exZoZAWNejwZBs^CYXeGT!A#@8e14F0fRa6GVCuT9L');
define('SECURE_AUTH_KEY',  '542KE3xper^o8a^Q*#Y)ksnh4khffGQCUO1%o&M@wnzjNYTzGm8eqetaCOYQ8*38');
define('LOGGED_IN_KEY',    'qNa^NuMNYr&zdJ6WEn90#nq*gE%tnNNcX0WtJxY*hbW!(dhHVa^GN0*ToUp0QC^*');
define('NONCE_KEY',        '(vADl*0S6Qd@G)3d2AAgxz0YJgz%5erhqsuRYLNCLcfbq*c!V9tPF6Bl#^31K2%L');
define('AUTH_SALT',        '0JyX2meyr3psnKXq2F8($s9UDLnZvi#C@5j(WPGQBscfp0IF4y)D*QU4Qdn7RiG(');
define('SECURE_AUTH_SALT', '!xw(HnOt@^VpVKLCa&txrHVaWr&7NEABvZqibMrH4DXAFCRWiaoxDII#5h&naBiR');
define('LOGGED_IN_SALT',   'X)8L$p%Dm5!fa5ex@sJiVry9IpN$zLh$8F&FLrs@FxHJu3t%Dy^6yH!xT%EhH^Jq');
define('NONCE_SALT',       'n2uUgzvv&pmA$svsK6gos3P3QpJB&Uew0tMOip0eov)VVp1iwZwQZaUhus6ttF49');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'pt_PT');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
