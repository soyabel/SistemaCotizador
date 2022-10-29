<?php
    session_start(); //para poder hacer uso de las varibles de session
    //para saber si estamos en un servidor local
    define('IS_LOCAL',in_array($_SERVER['REMOTE_ADDR'],['127.0.0.1','::1'])); //$_SERVER['REMOTE_ADDR'] para encontrar la dirección IP del usuario en PHP
    $web_url = IS_LOCAL ? 'http://127.0.0.1:8848/PROYECTOWEB/COTIZADOR/' : 'LA URL DE SERVIDOR EN PRODUCCION';
    define('URL',$web_url);

    // ruta para carpetas
    define('DS'          , DIRECTORY_SEPARATOR); // DIRECTORY_SEPARATOR =/
    define('ROOT'        , getcwd().DS);
    define('APP'         , ROOT.'app'.DS);
    define('ASSETS'      , ROOT.'assets'.DS);
    define('TEMPLATES'   , ROOT.'templates'.DS);
    define('INCLUDES'    , TEMPLATES.'includes'.DS);
    define('MODULES'     , TEMPLATES. 'modules'.DS);
    define('VIEWS'       , TEMPLATES.'views'.DS);
    define('UPLOADS'     , ROOT.'uploads'.DS);
    
    //PARA ARCHIVOS QUE VAYAMOS A INCLUIR EN HEADER
    define('CSS'         , URL.'assets/css/');
    define('IMG'         , URL.'assets/img/');
    define('JS'         , URL.'assets/js/');

    //CREAR TODAS LAS FUNCIONES
    require_once APP.'functions.php';
?>