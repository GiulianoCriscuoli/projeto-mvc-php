<?php

class Router {

    /*  
        Classe Router
        Cria as URL, carrega os controladores, métodos e parâmetros
        FORMATO URL: controllers/method/params
    */

    // atributos da classe
    private $controller ='Pages';
    private $method = 'index';
    private $params = [];

    public function __construct() 
    {
        // se a url existir, joga a função url na variável $url
        $url = $this->url() ? $this->url() : [0];

        //checa se o arquivo controller existe
        //ucwords converterá para maiúscula a primeira letra de cada palavra
        if(file_exists('../app/Controllers/'.ucwords($url[0]).'.php')){
            $this->controller = ucwords($url[0]);
            //quebra a variável que não será mais útil
            unset($url[0]);

        }
        // requere o controlador
        require_once '../app/Controllers/'.$this->controller.'.php';
        // cria o novo controlador que foi escrito na url
        $this->controller = new $this->controller;

        // checa se foi settado algum método
        if(isset($url[1])) {
            //method_exists - Checa se o método da classe existe dentro de $this->controller
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);

            }

        }

        // se existir um array com os valores retorna o array, se não, retorna vazio
        $this->params = $url ? array_values($url) : [];
        //call_user_func_array chama uma função de usuário com um array de parâmetros
        call_user_func_array([$this->controller, $this->method], $this->params);

        var_dump($this);

    }

    private function url() {
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

        if(isset($url)) {

            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);

            return $url;

        }

    }
}
