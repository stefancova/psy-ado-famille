<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'psyadofazlwp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9FmNbXi@Nx|G;|]Yx`#Y |ye-epo%vD2c}8dqkuwuTxia OV&}q(M&4)ik[gDA+v');
define('SECURE_AUTH_KEY',  'DO^BBF4Tx0Mq]=UG~K&{c=*Xav&W?dRlG{t|!oEFL<@}mO{>3+5&_9[q;zl(?* w');
define('LOGGED_IN_KEY',    'Hydq$<Y{?pWY/hp`ej(Uz*P<a<7HnzK:#e6#o].9-q[rVX`8L#5#;ZPS]>w&tCc_');
define('NONCE_KEY',        'o>1eqjvWP3y=1)JR_OmdFv,$oK7*nF#27$s@Adq<H+%_Q%ze?QpLS=+q$b38S3A#');
define('AUTH_SALT',        '3{nvF^G~LijJBnSHFn3vB-Fh0AJxVY_KAW~,17VcTRAA~[KH,WXU&J^0@`=x+kHK');
define('SECURE_AUTH_SALT', 'l~4H&{We) ovz_7}@6J+FLH1wMJ3p^^2.C31J>IMOJ~vJ ~I7_a!W*[?cU)nu4H%');
define('LOGGED_IN_SALT',   '8Abk!E2q4d+~Ebn5R?TF{tdm^tWVV<dYM6{.xIddjfNCR.HhET(k0Ay@N5|7KcbS');
define('NONCE_SALT',       'bCUYdTUZW9B5Y|u;&c33lgU7M!vy%~Rpo33vXT;_oP@9icI2{@-rg+P6GT^DDO&/');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wor5842_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');