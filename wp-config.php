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
define('DB_NAME', 'muralizandord');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'vz8R{&tB&$%EC,-Y$DLNiiL|GQpe,NLZweyqkN<L%9{G][!nDT&3ZFKB+l$n]C<z');
define('SECURE_AUTH_KEY', 'c7TJy5&#}v0MHA~`-*|G,0CxcG8$rZ)LBt}jkzEBiv$urAfvr%`v)Ryl=`|X3}Ya');
define('LOGGED_IN_KEY', 'fgFs~We}4zL>}oED//jvU:G-^j+%4NH}^U@|/MLQFF&8 tc>5Kt@LAao/-+n%uL7');
define('NONCE_KEY', 'p|5-GsV?TmabI ITkS2tWe].R3<Ak, ?l@V@ECFZIr}XF4OdIaL[<|vw~ISQ Foz');
define('AUTH_SALT', 'VwhK6K>R1Z}uzVQNr^s.mLW%7TW+/63IEaUJdwx<!(nhro^ivLnigR4SBDU&Q4Ux');
define('SECURE_AUTH_SALT', '_HN5JSJMB?Yvi}g4w0,55g+W&=KoKv&4iL<ZCIAvtWVlVq^.YgqAtL>;V6-/<}9.');
define('LOGGED_IN_SALT', 'W&GxdYPOEo7sXJrG*^s85o;`>jf1C/AWZ`Q(~PgQ)Inp=K2`wVtMFd_e-p|74!gG');
define('NONCE_SALT', 'rj-BzsD- =S>{{Kj%{^9:)Z^tk!).mho0FnV_IYox3/b;9RkMD%1chn.e2F?MUt9');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

