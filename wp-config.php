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
define( 'DB_NAME', 'testingr' );

/** MySQL database username */
define( 'DB_USER', 'testingr' );

/** MySQL database password */
define( 'DB_PASSWORD', '1DCHPJa70fjfqhZ' );

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
define( 'AUTH_KEY',          'hHs7XD]X7eMd055Bx%[6Lb}SQ^?!Di;#@.#~H)1>>1K!#C~JmFOnb BD(^6FF(5u' );
define( 'SECURE_AUTH_KEY',   '=(;IZ9DE~MI4:[;.Mqm/.1Htn&6b}Mo{Tzc3&8Us_N2IzJY;g3Y*;g~kOl#3D_{%' );
define( 'LOGGED_IN_KEY',     '%`X.0/q]RCL4$^ mzjI}Ow0cF4z{$9n}nS~8/(]?ET$yoJq0UxwTXh_.Eah+|i<5' );
define( 'NONCE_KEY',         'OS{Ge:-vhA=fCsCO+:D,yWUx|6R@83xilGZCe*fo={ZN%cBIY50i,j_BG!nHB~r@' );
define( 'AUTH_SALT',         'FKWlC(?&Tly,)/qRoLa:1m(|:y-lC/T1Dd$>NfI[d(peM2(L@}arYh=ykmG<q<!l' );
define( 'SECURE_AUTH_SALT',  '6jXUDp<5lv{gB2p}?lv@S*<Aa*(KyI|sxPhj =(A>u2[T7`$quI[j1wmG{Dq1:[W' );
define( 'LOGGED_IN_SALT',    '[]q=WA6XG}FgwCFkU#}dPgECSdNc9 [(rTVum,(RxAQ,XMMU|-CnzPg:8zIP@(S ' );
define( 'NONCE_SALT',        'mHG:Q9N!cJ0k|h]l+HEL+*~nWLHIBu(s$`$ ?z9PRP`p(Hkc[ab{w%#8I1 ywtom' );
define( 'WP_CACHE_KEY_SALT', 'Y*_+Ox3)iy%OYmYgI)#I*ad/<r7JL:0B}C%gKa,{rrkAPsz@=?h)uSt`zNF5h?H7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
