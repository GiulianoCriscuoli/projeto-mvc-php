<?php

// função que cria um autoload
// spl_autoload_register recebe uma função como parâmetro e essa função recebe uma classe
spl_autoload_register(function($class) {
// array com os diretórios 
    $directories = [
        'Libraries',
        'Helpers'
    ];

    // verifica cada item do array
    foreach($directories as $dir) {
        // cria uma variável com o diretório e a classe
        $files = (__DIR__.DIRECTORY_SEPARATOR.$dir.DIRECTORY_SEPARATOR.$class.'.php');
        // se existir esse diretório com esse arquivo
        if(file_exists($files)) {
            // requere o arquivo
            require_once $files;
        }
    }


});