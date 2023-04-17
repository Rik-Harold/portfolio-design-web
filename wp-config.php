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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
// define( 'DB_NAME', 'portfolio' );
define( 'DB_NAME', 'cedrik-dodde_portfolio_wordpress' );

/** Utilisateur de la base de données MySQL. */
// define( 'DB_USER', 'root' );
define( 'DB_USER', '260583' );

/** Mot de passe de la base de données MySQL. */
// define( 'DB_PASSWORD', '' );
define( 'DB_PASSWORD', 'GrlAtau7' );

/** Adresse de l’hébergement MySQL. */
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'mysql-cedrik-dodde.alwaysdata.net' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{`&uO)2Xi<xL&#ePsN]b%CwnOo5k/G_Qc^FrXFmkIUX.GXRs[UW]X=4zA>J{nOF1' );
define( 'SECURE_AUTH_KEY',  '(L3Rn#a&Jp?#0b&/4$2>(nW,yw<tEZeXT]Gqa%Aa`t4lcDZ6=yN,T,Nr5-R@[2n3' );
define( 'LOGGED_IN_KEY',    'p? <OZ`d2XG,N/K2_5Le</fKGrA]i10f44yKl`=.>U%yr_A[1!3)NSysz%qqYTB}' );
define( 'NONCE_KEY',        '|h%F$q9nPq%VnGduN:NDATC;<w|T9g,I`XcUP(-)z+tVpz:lT_l&8RqC)Toegi?c' );
define( 'AUTH_SALT',        ' cVxJ0Jnb!0<>Z~xd{E0;:,Lz&+c_o$bu(4Qy :X#Oyhz.WaVr>rl~+eJ+0S7R<v' );
define( 'SECURE_AUTH_SALT', 'AK_+3|PI;7g co77Hs.}q3`v}?YgqC`MU74QQ_y?xG)v):v|ML{`> Jlw>FgyF4X' );
define( 'LOGGED_IN_SALT',   'E4 CqIjHqj^l_(C2}H%_gdG Xn^F>MW7G3zjYwj1bbYa@KABJtQt4^4.reG[6V>S' );
define( 'NONCE_SALT',       'QYjdbC~>87fc V6>)wd}r4{mBX0I}k}D<Eut5OYo`0Ei~mb=w3)KIW,;?aB09dAN' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
