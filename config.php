<?php 
    const host = 'localhost';
    const dbname = 'ajax';
    const user = 'root';
    const senha = '';

    $autoLoad = function($class){
        include('classes/'.$class.'.php');
    };
    spl_autoload_register($autoLoad);


    define('INCLUDE_PATH', 'http://localhost/Projetos/upload-ajax/');
    define('BASE_DIR_PAINEL', __DIR__.'/painel');
?>