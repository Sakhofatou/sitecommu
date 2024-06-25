<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'sitecommu' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'd*IS_=}vzp$f=El1q9(:_KzUv:d;#e>]i^EQ!CwG7ovVN^kQTh>iR72-UlGqqK5 ' );
define( 'SECURE_AUTH_KEY',  'gSGM4]Oe>wuj;n-;kfCO>%%/C6L9[.kq)`Mn19:l-*h@qnG#$H^cDa:AhN{y!D`2' );
define( 'LOGGED_IN_KEY',    '<g+GO*=NK86sj;L$(|Qe{nJuc@OMY+QP9{C@Qrq3DOZ6=E9cL|h8/R.f9;9&82t2' );
define( 'NONCE_KEY',        'V}@:+JRqQU?UQ>pB]}[?p||,gC%ZGxelx@Msdlr3VeF#<@Kk1wIn.u<2}5*WvhdU' );
define( 'AUTH_SALT',        'eEc?fbbN8`UK:3nONDlTd#8<F%N>LJ+ 3DXzJvr$$[Jq*SmfS1e8Cak]LLchUYeL' );
define( 'SECURE_AUTH_SALT', 'LQC-Z3&RtK.VxRr(k@$$r|<}^.[$L%E8Za ?ZHPF6CZE,(SE;()*hA@X8J,o]^MB' );
define( 'LOGGED_IN_SALT',   'Mf-D.2m@0!g&6_01%yh5Y3 -z@C,uRA)Sw/!s3th;L2@y}GG<@gldg9EVYGMtznZ' );
define( 'NONCE_SALT',       ')fvpGzI% *d}*WRu8+F#<<`O,/Gn}P~6$H2p(G3gjbowT<]G43^gnoz{nd C]q;V' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
