<?php
class Pages extends Controller {

    public function index() {
        $datas = [
            'title' => 'Página inicial',
            'description' => 'Curso de PHP'
        ];

        $this->view('pages/home', $datas);
    }

    public function sobre() {
        $datas = [ 
            'pageTitle' => 'Sobre',
            'description' => 'Sobre nossos serviços'
        ];

        $this->view('pages/sobre', $datas);
    }
   
}