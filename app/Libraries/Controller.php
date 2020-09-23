<?php

class Controller {

    // função que carrega o model
   public function model($model) {
    require_once '../app/Models/'.$model.'.php';
       // instancia o novo model
       return new $model;
   } 

   // função que carrega as views
   public function view($view, $datas = []) {
    $file = ('../app/Views/'.$view.'.php');
    // verifica se a view existe
       if(file_exists($file)) {
           require_once $file;
           
       } else {
           die('O arquivo é inexistente');
       }
   }
}