<?php

class Users extends Controller {

    public function signup() {
      
        $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($form)) {
            $datas = [
                'name' => trim(ucwords($form['name'])),
                'email' => trim(strtolower($form['email'])),
                'password' => trim($form['password']),
                'confirm' => trim($form['confirm'])

            ];

            if(empty($datas['name'])) {
                $datas['error_name'] = 'Campo vazio. Preencha o nome corretamente!';
            } elseif(strlen($datas['name']) < 3) {
                $datas['error_name'] = 'O campo nome tem que ter no mínimo 3 caracteres';
            } elseif(Check::checkName($datas['name'])) {
                $datas['error_name'] = 'O campo nome não pode ter números ou caracteres. Preencha novamente!';
            }
            
            if(empty($datas['email'])) {
                $datas['error_email'] = 'Campo vazio. Preencha o email corretamente!';
            } elseif(Check::checkEmail($datas['email'])) {
                $datas['error_email'] = 'O campo email não pode ter números ou caracteres. Preencha novamente!';
            }

            if(empty($datas['password'])) {
                $datas['error_password'] = 'Campo vazio. Preencha a senha corretamente!';

            } elseif(strlen($datas['password']) < 6) {
                $datas['error_password'] = 'A senha precisa ter no mínimo 6 caracteres';

           }

            if(empty($datas['confirm'])) {
                $datas['error_confirm'] = 'Campo vazio. Preencha a confrimação de senha corretamente!';
            } elseif($datas['password'] !== $datas['confirm']) {
                $datas['error_confirm'] = 'As senhas são diferentes!';
            }

            else {
                $datas['password'] = password_hash($datas['password'], PASSWORD_DEFAULT);
                echo'Cadastro realizado';
            }


        } else {
            $datas = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm' => ''
            ];
        }

        $this->view('users/signup', $datas);
    }
}