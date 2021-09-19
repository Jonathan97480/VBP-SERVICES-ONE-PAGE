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
define( 'DB_NAME', 'vdp_service' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'AZsQ?F;V.lmOP.b)X+;BOI(^xr#13+AC$dWr)9,2wRs-rP=p[<b-3b(FSP# ]J@m' );
define( 'SECURE_AUTH_KEY',  '5tXM}QY}O>mJBUNr9a-p_>z =^/o)oc$*<cuMWWH_lv1Z5(o_cz8x7UfoX3*NH8N' );
define( 'LOGGED_IN_KEY',    'PPJb#h>ij&G y.RVNSxW[KSdUW(P e(jqi! ~8%JuPbziD^o-QI>?6eGSgdZOve+' );
define( 'NONCE_KEY',        'a`i[Ir)a]pYubPj9ENbj  X>Cq5%A#wUz9pso(6+%=Y]k7q<L0r<y;tfqh4NWd1n' );
define( 'AUTH_SALT',        'o{z:!aZ9fngypkYH_fxP.RAw *5hc#$<*@f9w^#,{UR2Q!-8t-5G]@U}u84Bx#1(' );
define( 'SECURE_AUTH_SALT', 'irn~CTbd5 $Mr05jvH] qx&dDC-_i?5^<xUBJU{~!)O190h%_l~r):/O!|+V]{5d' );
define( 'LOGGED_IN_SALT',   '3[ gqg+d=eNs2z!XDMa6XsP@g):qYF5M^.9((Bzp{Bo(;KuU%^Bqb&Wd,Dv?%h$T' );
define( 'NONCE_SALT',       't7)j,;fUAjDVmqwAvrpAv;3%_k@E#C(RRLo<X9Bl:dgzMVscZ,RuML8*]_P6-xWK' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
