
define( 'DB_NAME', getenv('database1') );
define( 'DB_USER', getenv('user1') );
define( 'DB_PASSWORD', getenv('abc') );
define( 'DB_HOST', getenv('mariadb') );
define( 'WP_HOME', getenv('https://diogmart.42.fr') );
define( 'WP_SITEURL', getenv('https://diogmart.42.fr') );


//define( 'DB_NAME', getenv('DB_NAME') );
//define( 'DB_USER', getenv('DB_USER') );
//define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
//define( 'DB_HOST', getenv('DB_HOST') );
//define( 'WP_HOME', getenv('WP_FULL_URL') );
//define( 'WP_SITEURL', getenv('WP_FULL_URL') );
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',         '' );
define( 'SECURE_AUTH_KEY',  '' );
define( 'LOGGED_IN_KEY',    '' );
define( 'NONCE_KEY',        '' );
define( 'AUTH_SALT',        '' );
define( 'SECURE_AUTH_SALT', '' );
define( 'LOGGED_IN_SALT',   '' );
define( 'NONCE_SALT',       '' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
