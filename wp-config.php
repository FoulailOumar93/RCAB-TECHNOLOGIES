<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rcab' );

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
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0t]?0f-zVqh15S7hNc07x?;B:bXWUn&h-*_MgsK`$J;0Y@q,58.E%jHE<zZQSlCf' );
define( 'SECURE_AUTH_KEY',  'jXG7}pbm*rPf.5HAa)u)vz,`+{$3sQjrJYn1>H4046$r$xqCd7) T2$UNL~?+yQQ' );
define( 'LOGGED_IN_KEY',    '1I}0kIC`vv.A,jMUH[k/ZVZftB[=qBQ?GhEH-&:t@?ou7hf+x2oBg+cJ6o1$d;i6' );
define( 'NONCE_KEY',        '-*HF40nx.-HRp[aX]x#{ttCn4_n:tm/(J$.^~DZtg5,j8.v=A7FIJ 0v#*ebW( F' );
define( 'AUTH_SALT',        'M@QuZbbt]P`(ov&@6m2Q_$Ni).Fitpvn~>anDd[L}LAm|e>Fg)*:>qZq:;xWB+sv' );
define( 'SECURE_AUTH_SALT', 'nRwcbIH**ZQb|pE4bD6yP0I BfZ^DKjsHa6(n$]-IBQ<L?gK3Vd>aUGHE_*q!X%T' );
define( 'LOGGED_IN_SALT',   '>xM&z}~LFv1hbRs,$y)tVp?vHT)5|@Cpw W1m+yJsy(~-BnBi,fJ-{1f%!=7ADX!' );
define( 'NONCE_SALT',       'qW$?;kBMNI3T4 3j!ojGw9NtDI#0N(4).H:}JXdwYt^-6;.-mV9ag[uMK*@9[<JO' );

/**#@-*/

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

// 🔹 Forcer l'URL du site en local
define( 'WP_HOME', 'http://rcab.test' );
define( 'WP_SITEURL', 'http://rcab.test' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
