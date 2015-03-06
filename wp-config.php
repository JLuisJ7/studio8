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
define('DB_NAME', 'studio8');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'W9!Z|U.(U]presfZr)91ME2MIlM#0Wg2tWbC-vN{V]dY|LPGJgp;A7Un^VF!:wY5');
define('SECURE_AUTH_KEY', 'dm|2<(8jl+%[Gj<9]q[L[0dUrZ9SJZ-<n0IuI{rK1Z+serqc0$7f..3|~CW&6$5F');
define('LOGGED_IN_KEY', 't|0TDL`;g<UW_2a<_ej+GNX#8X/lCtc)s]by|%|QMI4F|&j%JiG9#(fKs_}F4$@*');
define('NONCE_KEY', '1sWavq6CDZDoQD@9mij$$9JgDX>DL+pB;9:v&+2xX+M[|]/lm~&}_U<nD.e$EPxd');
define('AUTH_SALT', 'rlFLs,92[$K`~9w.gXmx%/fkQ+`[ygFM7C TYHE%r%;zr{TH3Ff~BQMGQj!jzJV%');
define('SECURE_AUTH_SALT', ']v)$#d;IJ-|p#56D1eVx-n,u1OEAOM>/TVXvL=?1d8QUabsdw9a+I]j--e m]p,.');
define('LOGGED_IN_SALT', 'sEGi:+xyfoB?U]K]X&r5T`JLUeuf1 N3?<{0,e/4 v,_>l(I=7mn.+&|*Eb+=NV3');
define('NONCE_SALT', 'J+3Pij7r.OQ-56fyh]caI$!zum0on~0[dH158-7KS?]ko!>`2A5nv;=sc4+O}rW+');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'sp_';


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

