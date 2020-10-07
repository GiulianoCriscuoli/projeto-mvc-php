<?php

class Check {

    public static function checkName($name) {
        if(is_numeric($name) || !preg_match('/^[a-zA-Z\u00C0-\u017F´]+\s+[a-zA-Z\u00C0-\u017F´]{0,}$/', $name)) {
            $datas['error_name'] = 'Não é permitido números ou caracteres neste campo. Preencha novamente!';

            return true;
        } else {
            return false;
        }
    }

    public static function checkEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) || is_numeric($email)) {
            $datas['error_email'] = 'O email não foi informado corretamente ou possui somente números. Preencha novamente!';

            return true;
        } else {
            return false;
        }
    }
}