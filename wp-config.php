<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'swapyoubdd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'swapyoubdd' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Swapiim92' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'swapyoubdd.mysql.db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WY#X5~IFDaP`-Wh)U.LU3>OjvMR@L=(QmcCjU(su%+j(zJGSKrmQ+@{^a<)9(Q%r' );
define( 'SECURE_AUTH_KEY',  ':@d0@l&Fqk2H@Jku<xmlE2qS=Exv)j<uU$J,K^ApR4nXu.9J>Gxo_eD%T%lY|UWt' );
define( 'LOGGED_IN_KEY',    ',D6]8p>b#c*h?z.!f#QIRQ~^=Nph>~#l$!C7*G[A&&8}#w+e5}]d@;gMUC_M?l]i' );
define( 'NONCE_KEY',        '?ms_MFlay)yU{oswdnzSOXs=qJ+`uW/VhuR7`seG/I,Z{1KT:^Nsz{{4uPb;? ?S' );
define( 'AUTH_SALT',        'MR&;pmkI{;s=-dH~!Dg[fTYdL!c``oy7;{s3{7M4#U_aK y*;L)PjQES,k1N5D;_' );
define( 'SECURE_AUTH_SALT', 'EN7B2b==nK_@*3@YNkxK#hNhGr@nY_0>Zv3D`PRMZsQ|m)rcL<*HXmxQR5C</UB_' );
define( 'LOGGED_IN_SALT',   'yQ}iPM`e345KnN>C!3S65jf=v$kP`tl^ust61<e:q;k4/e8./`v`%o]i+mDK>tCs' );
define( 'NONCE_SALT',       'Cmlr:{%?Cn#f</tNKFItbf*L8.bMwun>#wv1M;a23%6Z9g_-wF:wz+QkM:B+*A<k' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'swp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
