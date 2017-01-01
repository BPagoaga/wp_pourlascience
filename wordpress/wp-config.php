<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'pourlascience');

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
define('AUTH_KEY',         '$LE-DX~ii$|2o$q&j?1|CJ)hMo6laD-0>-V_Lw|%4oEH7_{VrdQgaD|8W)@5[6f(');
define('SECURE_AUTH_KEY',  'VC-J*S]LA>~+5.:TX`46[X$u-|ey;xR!. `8X+-|]F(|3.`9$5w! kvtL&/Ft.HK');
define('LOGGED_IN_KEY',    'FT||rm`#]9yR-xfq4Ohmpq Aye6y|SN=!5m1(e+]h$gkeA.;|0GnGO W{;Ua:0a<');
define('NONCE_KEY',        'VVu;8gx0VVL&8{;@Y`ZoC}`uIrva2&QTO:wwF)obQVJ-e4Y!zHI6g=)3w0KIGC_g');
define('AUTH_SALT',        'i$)-(;ZDQ>Q}( rVEeVp8kyWhGWy#6*aDLT+%G6Eq0A:g>f}t-p&2vAk78k`/dg2');
define('SECURE_AUTH_SALT', '<3)EA7L|jny:dhUe>|V>-!$%D5Aah^, O3@g1WtmM6zq;&gQ+%+KIiW(@PfC7%4R');
define('LOGGED_IN_SALT',   'yL_kPR4zocNQ}%^J`aU+H|Gn<1J+Ld8vf}|KvOAC4w#{7CQ(nO,1/*z-;GWPaRaN');
define('NONCE_SALT',       '[:R*p{|r/]@<t|~n{.c--0~X|+Q);xLs8#- of:r1Os&e=&qrvZqq-`:&nwd];o^');
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