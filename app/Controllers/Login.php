<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Controllers\BaseController;


class Login extends BaseController
{

    public function index(){

        $error = new LoginModel();
        $data = [
            'title' => 'Авторизация',
            'error_message' =>$error->get_id_in_login(),
        ];
        echo view ('admin/pages/login', $data);

    }

} 
