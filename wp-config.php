<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'dr_movil' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'sCpmG@>`c~ W [Z2l9?yAv8y3j0 JkbkP_LwxF2KMpAd}7mO?sD};-g|OSv1vt{V' );
define( 'SECURE_AUTH_KEY', 'V7Wqj; N4NPkTQ^Q}U-J:sk6P#[v9pJKh?BFVxDn&-3d)v[KLq{$ut:Yu^GrEs=p' );
define( 'LOGGED_IN_KEY', '/kb@i&T;N^Gz&r`&^xGAO6x|W>dbY=M W~.kY3xU>(naH([-Z#Aj(zvmFP5P _RW' );
define( 'NONCE_KEY', 'Z.6kSol*9yPo6.ysw:~+uhvY7A~a*10ofwaa{0&V?xGZUoNb7@: twoI85}[yik%' );
define( 'AUTH_SALT', 'm`>yq5h@B-]I]<g_3QtFDAm|[r_l{!l/Rzm});nwy.wUu54P[!`8uf-e|JvSG=08' );
define( 'SECURE_AUTH_SALT', 'F[9?L}k~J+vf?fuuQALV)=W3<ep|cNL&cne*2;<v!WI/!u:9rt.ZwX&QBwM5Bqys' );
define( 'LOGGED_IN_SALT', '~4>4NW~}!nG{R{5!E@$ZuPuC+3vXk5I>&BtB&5fr]6kXhZ(K6_@jLdJ0v`=zv!{E' );
define( 'NONCE_SALT', '|or+:-$+ve[^2WLIlpW?xPxAW~uK.d+ Xh;t.+[hDP>F=B-ygr(>K(XWJOdw+hz9' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

