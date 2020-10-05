<?php

class Users extends Controller {

    public function signup() {
      
        $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($form)) {
            echo 'olá';
        }

        $this->view('users/signup');
    }
}