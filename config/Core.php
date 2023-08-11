<?php 

require_once "Env.php";

// Nombre de la aplicación
const APP_NAME = "Desafio Los Reartes";

// Timezone aplicacion
const TIMEZONE = "America/Cordoba";

if(ENVIROMENT === "development"){

    // Carpeta de la aplicacion
    define('APP_FOLDER', '/carrera/');

    define('URL_NAME', 'http://localhost');

}else{

    // Carpeta de la aplicacion
    define('APP_FOLDER', '/');

    define('URL_NAME', 'http://desafiolosreartes.com.ar');

}

const URL = URL_NAME . APP_FOLDER;
const IMG = URL_NAME . APP_FOLDER . 'public/images/';