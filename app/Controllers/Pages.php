<?php
class Pages extends Controller {

    public function index() {
        $datas = [
            'title' => 'Página inicial',
            'description' => 'Curso de PHP'
        ];

        $this->view('pages/home', $datas);
    }

    public function about() {
        $datas = [ 
            'pageTitle' => 'Sobre o projeto',
            'description' => 'Sobre nossos serviços'
        ];

        $this->view('pages/about', $datas);
    }
   
}