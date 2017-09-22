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

/*
 * cPanel & WHM® Site Software
 *
 * Core updates should be disabled entirely by the cPanel & WHM® Site Software
 * plugin, as Site Software will provide the updates.  The following line acts
 * as a safeguard, to avoid automatically updating if that plugin is disabled.
 *
 * Allowing updates outside of the Site Software interface in cPanel & WHM®
 * could lead to DATA LOSS.
 *
 * Re-enable automatic background updates at your own risk.
 */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/mooch/public_html/2016/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define( 'WP_AUTO_UPDATE_CORE', false );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mooch_wp');

/** MySQL database username */
define('DB_USER', 'mooch_wp');

/** MySQL database password */
define('DB_PASSWORD', 'H&~y.8RU');

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
define('AUTH_KEY',         'dZLjtHT6ziiC8ienfgZPPCP9hWsykF0h3xKojtEPq3P5Nwsm71gtLk1YM3DKB5VM');
define('SECURE_AUTH_KEY',  'MbeXJp2QUO1ExbCXWfc8SyQtVF_qrSGLBODHW1AiRf5xATWbkdi4sh9EPOPav0SF');
define('LOGGED_IN_KEY',    'R6KEjUQZnBotbhJhgYhAlRBkY9MRyoGEJT7ydMLdldjbmGU0bagNFpBFVllwXgrH');
define('NONCE_KEY',        'jrU3NitIbJXmvMPCPp1gCV1lfPfDCXw7D_qz531tTX1ougSl5ivpYRsQSnAUEG3u');
define('AUTH_SALT',        '9ygxW9IWl15fH1F3EYc2SEYNV5HgGWQcSYNkLspSV3gnshfpqOszcoZqef52rJH1');
define('SECURE_AUTH_SALT', 'ePibqtPlZUna1AWJcd0q7kaBnLe54e86tj_jHcAdj71sqotk6bfvSdTvAC4uxvJx');
define('LOGGED_IN_SALT',   'jPEL9UXpFJ1iGRE0FyDnAJJVA4cJ5pHCOBp4jdI2hcrsXUh10x2xgN7yZ_hcw3RW');
define('NONCE_SALT',       'ZnQa3AvRgQYqA64VHjDh0995vKMPr4cjyPAbtgolOpNsohCAIiiEHjzAMcrdtPUR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
