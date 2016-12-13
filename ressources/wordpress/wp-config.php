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
define('DB_NAME', 'WordPress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'RjH?utE7MjrCD|3<P:.1JYIb#&W+u)>IZLJ1m{4h*%H&Vs*330!RoA>he)C(-U2T');
define('SECURE_AUTH_KEY',  '*9g3R+/G$]3x+a-u%gYz6B,2.*J$HAJkf.`]ke3-U9)S([F+X}T!^bU:hMJ>Tv{p');
define('LOGGED_IN_KEY',    'w+y}<Ho0CS_fAfGshwk@-~ZN`oKZfla._<$;kkinQ]b6;onAzts~L4QLi+bz3?5l');
define('NONCE_KEY',        'ReelzW&k~$m1+s)2w{-5Qg{@jyAa[Mm.8[X%Oo?@|TB.j{]|#J!n|>oI{[>R^VHo');
define('AUTH_SALT',        'J,-[%rqc]EUW01CZ_dG2_*9yPZUmKR}UdrA&!>U+_c?Yo@rh+j+BVcz..(p+zdwi');
define('SECURE_AUTH_SALT', 'e}6c;nlCVZV`>i0^/$K_@UE89|:,/B+uV<S-a;;Zd$1zh++G68}+_<}sxc|uSVLh');
define('LOGGED_IN_SALT',   '>z,Iz]4*}60qh0P%RiVWy|f(LvL#cOUbKc>v7IV`GE[M^xM5pDx0<xOd*;?pTG|k');
define('NONCE_SALT',       'UR|9;/r+-2mDR0v!-H%>>+4&gP3xw5%B6moe8G5&YVIZ8U>o>E)|Y.>&.SS9.J)H');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
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