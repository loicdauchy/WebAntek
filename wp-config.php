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
define( 'DB_NAME', 'webantek' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'ORy;Rwt+caJXv]P7iSD-(H:P62I_}&=oh_{05<J)hHWe]6p(Pht[4IP&[tU]vd}1' );
define( 'SECURE_AUTH_KEY',  '{EFYiwg[M:yM=)FpkaIJt<h|WTFUs)<RkbJ}g]!/jO%k7w6!IZ .[49HY62gUl}0' );
define( 'LOGGED_IN_KEY',    '6gJUk?j1@t=4>zew>|_()NX3(Q[8Pjo6$$:#^LfU~E+WmI,37OCB]oD<,w}Zkj}!' );
define( 'NONCE_KEY',        '3fR}3K~Y35H0xL3ZB=EY98)@3aT>d>p<,q-8Jc14?b=W&I+ev#Y0UxykskG}Io1I' );
define( 'AUTH_SALT',        'iLPc%^6H7o(]<~==PQA@fOTQ8N *n[JH]IaEi8J>LS^g.]%|M#FndEb~T5Ua4VHd' );
define( 'SECURE_AUTH_SALT', 'pc.@LYFV+l#|1}UENQcN1zF|MkwO0oRV@6Ci`0(d{i:]t`h4f$n]oWW4!+DT<e>k' );
define( 'LOGGED_IN_SALT',   'Dh2ohlU!=[{F<Rxj7I-0~GIlBTtM|(F+^,bWi*h <PBmgY6l;OZ_!-Xh+O{eD5Z|' );
define( 'NONCE_SALT',       'C!?alZ:i=wQS0jU0uL;sB!CDd|KLnsy hZ99~vi7GSq7};ZY5lNokpA_QMHdRJeD' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wb_';

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
