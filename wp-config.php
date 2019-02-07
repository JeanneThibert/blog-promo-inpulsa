<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'blogdepromo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'online@2017');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '_tV$JkbvvIv84= uPgikGm%bii5@gByDibjY&.IAaqVcFvy1|Cg;~7)_FqM;r7=>');
define('SECURE_AUTH_KEY',  'C*[M:Xxd:[un|@phS #&[W|*wgxKH0WhrDGguVCU6bBUbPQhG$nwSi%ikUg#LC$~');
define('LOGGED_IN_KEY',    '>OGpCXeX!du~*U>.ioTpDSpRKLLoEkQNsA{SmKmg2b(@r7N3VnC8@J{ pNkj|!;.');
define('NONCE_KEY',        'T>hPEUwr>_eQ,z=wTG2n~jaS$SG6Ezt(Z+)?H<=E[m~{4&2m!iU-BAT O,G%GUdb');
define('AUTH_SALT',        '+`n:~CrQ2Wq!t@9:Uq=(5lQDF*|HJ~bRn8o|*J]o)K 6uMBsAzd),nGhA41=V7WG');
define('SECURE_AUTH_SALT', 'p>twM@oBG<*hAHs7mJsX/Lwv/e{9{o=$8@z&R.$$F]Hw-k$b5ol*j`<=@Hk6X3r#');
define('LOGGED_IN_SALT',   '=$5}Wr{-_+&Uo@k~E=}`kLU`l>+%J1!R+G+keD4Ysk-TaP;yD;pBQ-o1Ak{6tUBa');
define('NONCE_SALT',       'EyH)[uX?bc$y9RyZp|Gvl*j?q^DnC6[[6>+iDU) pX8-5)[ 3zus,x;3n,87a?Q>');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');