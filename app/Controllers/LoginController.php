<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;

class LoginController extends Controller{
    public $loginModel;
    public function __Construct(){
        helper("form");
        $this->loginModel = new LoginModel();
    }

    public function login(){
        $indata = [
            'email'=>$this->request->getVar('email',FILTER_SANITIZE_STRING),
            'pass'=>$this->request->getVar('pass',FILTER_SANITIZE_STRING),
        ];
    }

}

?>