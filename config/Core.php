<?php 

// Nombre de la aplicación
define('APP_NAME', 'Desafio Los Reartes');

// Carpeta de la aplicacion
/* En caso de que la aplicación esté en la carpeta raíz del servidor dejar vacio */ 
define('APP_FOLDER', '/carrera/');

// Estado de aplicacion
define('ENVIROMENT', 'dev');

// Timezone aplicacion
define('TIMEZONE', 'America/Cordoba');

// Base de datos produccion
define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');

// Base de datos desarrollo
define('DB_HOST_DEV', 'localhost');
define('DB_NAME_DEV', '');
define('DB_USER_DEV', '');
define('DB_PASSWORD_DEV', '');

// URLS
define('URL_NAME', 'http://localhost');
define('URL', URL_NAME . APP_FOLDER);
define('IMG', URL_NAME . APP_FOLDER . 'public/images/');

// Datos para envio correo
define('MAIL_SECURE', '');
define('MAIL_HOST', '');
define('MAIL_USER', '');
define('MAIL_PASSWORD', '');
define('MAIL_PORT', 465);

// App expresiones regulares
define('REX_EMAIL', '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/');
define('REX_WORDS', '/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\'\s]+$/');
define('REX_NUMBERS', '/^[0-9]+$/');

// App key for encriptions
define('SECRETIV', 'maxframwerok');
define('SECRETKEY', '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');